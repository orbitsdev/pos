<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Transaction;
use App\Traits\DialogTrait;

use App\Models\ItemTransaction;
use Illuminate\Support\Facades\DB;
use Filament\Notifications\Notification; 
class Pos extends Component
{

    use DialogTrait;
    public $selectedItem;
    public $selectedItemDetails;
    public $item;
    public $items=[];
    public $removedItem;
    public $itemIdNumber;
    public $transaction;
    public $hasErrorMessage;
    public $enableManual=false;

    public $showForm=false;
    
    public $showFormForUpdate=false;
    public $selectedItemForUpdate;
    public $itemQuantityForUpdate=1;





// Item checker button

    public $itemCheckerModal=false;
    public $searchFoChartItem;
    public $itemCheckerSearch;
    public $productsResult = [];



    //adding mannually
    public $products = [];
    public $addSearch;
    public $addSearchResult = [];
    public $isLoading = false;



    
    
    //for adding
    
    public $itemBarCode;
    public $itemQuantity =1 ;


    // public $samples = [1, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 5];
    public $samples = [];


    public function checkItem(){
        if(!empty($this->itemCheckerSearch)){
            dd('tes');
        }else{
            dd('no');
        }
    }


    public function clearSelectedItem(){
        $this->selectedItem = null;
        $this->selectedItemDetails = null;
    }

    public function updateItem(){
        $this->selectedItemForUpdate->quantity = (int)$this->itemQuantityForUpdate;
         $this->selectedItemForUpdate->save();
         $this->showFormForUpdate = false;
    }

    public function showItemCheckerModal(){
        $this->itemCheckerModal = true;
    }


    public function addQuantity()
    {
       
         $this->itemQuantityForUpdate++;
    }

    public function subtractQuantity()
    {
        if ($this->itemQuantityForUpdate > 1) {
            $this->itemQuantityForUpdate--;
        }
    }

    public function increment()
    {
        $this->itemQuantity++;
    }

    public function decrement()
    {
        if ($this->itemQuantity > 1) {
            $this->itemQuantity--;
        }
    }


    public function showUpdateForm($itemid){
      
        $this->selectedItemForUpdate = ItemTransaction::find($itemid);
        
        if(!empty($this->selectedItemForUpdate)){
            
            if(!empty($this->selectedItemForUpdate->quantity)){
                $this->itemQuantityForUpdate = $this->selectedItemForUpdate->quantity;
            }

            $this->showFormForUpdate = true;
        }else{
            $this->showError(description: 'Item Not Found');
        }
    }
    public function updatedItemQuantity()
    {

    }

  
    public function clearBarCode(){
        $this->itemIdNumber = null;
    }
    public function render()
    {
        $this->transaction = Transaction::latest()->where('user_id', auth()->user()->id)->where('status', 'active')->first();


        if(!empty($this->transaction)){
            $this->items = $this->transaction->itemTransactions;
        }
        

        $this->addSearchResult = Product::when($this->addSearch, function($query){
            $query->where('id_number', $this->addSearch)->orWhere('name', 'like', '%'.$this->addSearch.'%');
        })->take(10)->get();

        $this->products =  Product::when($this->itemCheckerSearch, function($query){
            $query->where('id_number', $this->itemCheckerSearch)->orWhere('name', 'like', '%'.$this->itemCheckerSearch.'%');
        })->take(20)->get();
       
        return view('livewire.pos', [
            'items'=> $this->items,
            'products'=> $this->products,
            'addSearchResult'=> $this->addSearchResult,
        ]);
    }


    public function mount(){
                
            $this->getUnfinishTransaction();

    }

    public function updatedselectedItem(){
        $this->selectedItemDetails = Product::find($this->selectedItem);
        
    }

    public function getUnfinishTransaction(){

        $this->transaction = Transaction::latest()->where('user_id', auth()->user()->id)->where('status', 'active')->first();

        if(!empty($this->transaction)){
            $this->items = $this->transaction->itemTransactions;
        }
      
    }



    public function startTransaction(){
       
        $this->transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'total_amount' => 0,
            'status' => 'active',
            'itemQuantityForUpdate' => $this->itemQuantityForUpdate,
        ]);


    }

    public function confirmTransaction(){
        dd('confirm transaction');
    }


    public function cancelTransaction(){

        $this->transaction->delete();
        $this->transaction = null;

    }

    public function holdTransaction(){

        $this->transaction->status = 'voided';
        $this->transaction->save();
        $this->transaction = null;

    }

    public function removeItem($item){

        ItemTransaction::where('transaction_id', $this->transaction->id)->where('id', $item)->delete();
      
      

    }

    public function showAddItemForm(){
        $this->showForm = true;
    }

    public function addItem(){
        try {
            DB::beginTransaction();
            $this->item = Product::where('id',  $this->selectedItemDetails->id)->first();

        
               
        

            $transactionItem = $this->transaction->itemTransactions()->latest()->where('product_id', $this->item->id)->first();

            if(!empty($transactionItem)){
         
                $transactionItem->quantity = $transactionItem->quantity + $this->itemQuantity;
                $transactionItem->subtotal = $transactionItem->quantity * $this->item->price;
                $transactionItem->save();
            
            }else{
                $transactionItem = $this->transaction->itemTransactions()->create([
                    'product_id' => $this->item->id,
                    'quantity' => $this->itemQuantity,
                    'subtotal' => $this->item->price,
                ]);
            }
            $this->showForm = false;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $this->showError(description: $e->getMessage());
          
        
        }
        
    }




    public function updatedItemIdNumber(){
        if(!empty($this->itemIdNumber) ){

            $this->scanItem();
        }
    }

    public function refreshWindow(){
        $this->emit('refreshWindow');
    }

    public function scanItem()
    {

        try {
            DB::beginTransaction();
            $this->item = Product::where('id_number',  $this->itemIdNumber)->first();



            if (!empty($this->item)) {  
                $this->hasErrorMessage = null;
                // check if the trsanctionItem Exist First
                $transactionItem = $this->transaction->itemTransactions()->latest()->where('product_id', $this->item->id)->first();

                if(!empty($transactionItem)){
             
                    $transactionItem->quantity = $transactionItem->quantity + 1;
                    $transactionItem->subtotal = $transactionItem->quantity * $this->item->price;
                    $transactionItem->save();
                
                }else{
                    $transactionItem = $this->transaction->itemTransactions()->create([
                        'product_id' => $this->item->id,
                        'quantity' => 1,
                        'subtotal' => $this->item->price,
                    ]);
                }
                
            
            }else{
 
                //  $this->showError(description: 'Item Not Found');
            }

            $this->itemIdNumber = null;
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $this->showError(description: $e->getMessage());
          
        
        }
    }


    
}
