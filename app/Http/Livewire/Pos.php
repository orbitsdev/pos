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


    // SCANNING


    public $samples = [1,2,3,4,5,12,3123,123,123,12,312,32,23,123,12,312,32];
    public $itemIdNumber;

    public $selectedItem;
    public $selectedItemDetails;
    public $item;
    public $items = [];
    public $transaction;
    public $hasErrorMessage;
    public $enableManual = false;


    // CHECK PRODUCT BUTTON 
    public $itemCheckerModal = false;
    public $searchFoChartItem;
    public $itemCheckerSearch;
    public $productsResult = [];


    // HOLD TRANSACTION BUTTON 
    public $holdTransactionModal = false;
    public $transactionHoldTitle;

    // RESUME HELD TRANSACTION BUTTON
    public $holdTransactionRecordModal = false;
    public $holdTransactionSearch;
    public $holdTransactionResult = [];
    public $holdTransactionSelected;
    public $holdTransactionSelectedDetails;


    // CHECK CART ITEM
    public $cartItemModal =false;
    public $cartItemSearch;
    public $cartItems = [];


    // GLOBAL DATA
    public $products = [];

    //ADD ITEM BUTTON
    public $itemQuantity = 1;
    public $showAddForm = false;
    public $addSearch;
    public $addSearchResult = [];


    // UPDATE BUTTON LOCATED INSIDE CART TABLE
    public $showFormForUpdate = false;
    public $selectedItemForUpdate;
    public $itemQuantityForUpdate = 1;


    // POST CONFIRMATION BUTTON 
   public $overViewModal = false;
   public $amount_paid;
   public $purchase_total=0;
   public $change=0;

   // CHANGE DIALOG

   public $showChangeDialog = false;
   
   

    // CONFIRM BUTTON FOR RESELECT TRANSACTION FROM HOLD 
    public function confirmSelectedHoldTransaction()
    {
       
        $this->transaction = Transaction::find($this->holdTransactionSelected);
        $this->transaction->status = 'active';
        $this->transaction->save();
        $this->transaction = Transaction::find($this->holdTransactionSelected);
        $this->clearSelectedTransaction();
        $this->holdTransactionRecordModal = false;
    }

    public function clearSelectedTransaction()
    {   
        $this->holdTransactionSelected = null;
        $this->holdTransactionSelectedDetails = null;
     
        // $this->transaction= null;
    }

    public function updatedholdTransactionSelected()
    {
        $this->holdTransactionSelectedDetails = Transaction::find($this->holdTransactionSelected);
    }

    public function showTransactionRecordModal()
    {   

        if(empty($this->transaction)){

            $this->holdTransactionRecordModal = true;
        }else{
            $this->showWarning(title: 'Unfinished Transaction', description: 'Please complete the current transaction to proceed.');

        }

    }

    public function showTransactionModal()
    {

        if(!empty($this->transaction)){

            $this->holdTransactionModal = true;
        }else{
            $this->showError(title: 'No Active Transaction Found', description: 'Please initiate a new sale transaction to proceed.');
        }
      
    }


    public function holdTransaction()
    {


        if (!empty($this->transactionHoldTitle)) {
            $this->transaction->name = $this->transactionHoldTitle;
        } else {
            $this->transaction->name = $this->transaction->created_at->timezone('Asia/Manila')->format('Y-m-d l h:i a');
        }
        $this->transaction->status = 'hold';
        $this->transaction->save();
        $this->holdTransactionModal = false;
        $this->transaction = null;
    }



    public function clearSelectedItem()
    {
        $this->selectedItem = null;
        $this->selectedItemDetails = null;
    }
    

    // CONFIRMATION BUTTON OF UPDATE MODAL  
    public function updateItem()
    {
        $this->selectedItemForUpdate->quantity = (int)$this->itemQuantityForUpdate;
        $this->selectedItemForUpdate->save();
        $this->showFormForUpdate = false;
    }

    public function showItemCheckerModal()
    {
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


    public function showUpdateForm($itemid)
    {

        $this->selectedItemForUpdate = ItemTransaction::find($itemid);

        if (!empty($this->selectedItemForUpdate)) {

            if (!empty($this->selectedItemForUpdate->quantity)) {
                $this->itemQuantityForUpdate = $this->selectedItemForUpdate->quantity;
            }

            $this->showFormForUpdate = true;
        } else {
            $this->showError(description: 'Item Not Found');
        }
    }
   


    public function clearBarCode()
    {
        $this->itemIdNumber = null;
    }



    public function showOverViewModal()
    {
        $this->overViewModal = true;
        // $this->transaction->status = 'completed';
        // $this->transaction->save();
        // $this->transaction = null;
        // $this->showSuccess(title: 'Transaction Completed', description: 'Transaction has been completed successfully');

    }

    public function confirmTransaction()
    {


        if (!$this->transaction->itemTransactions->isEmpty()) {
      
            $total = $this->transaction->itemTransactions->sum(function($item){
                return $item->quantity * $item->product->price;
            });


            if($this->amount_paid < $total || empty($this->amount_paid)){

                $this->showError(title: 'Insufficient Amount', description: 'Please provide sufficient amount to proceed.');
                return;
            }   


            $this->purchase_total = $total;
            $this->change = $this->amount_paid - $total;
            $this->transaction->total_amount = $total;
            $this->transaction->status = 'completed';
            $this->transaction->total_amount = $total;
            $this->transaction->amount_paid = $this->amount_paid;
            $this->transaction->change = $this->change;
            $this->transaction->save();
            $this->overViewModal =false;
            $this->transaction = null;    
            $this->showChangeDialog = true;
            
            // $this->showSuccess(title: 'Transaction Completed', description: 'Transaction has been completed successfully');
       
        } else {
            $this->showWarning(title: 'Operation failed', description: 'No Item in the cart please add item to proceed. ');
        }

    }

    public function closeChange(){
        $this->showChangeDialog = false;
        $this->purchase_total = 0;
        $this->amount_paid;
        $this->change = 0;
    }


    public function cancelTransaction()
    {
        if(!empty($this->transaction)){

            $this->transaction->delete();
            $this->transaction = null;
        }else{
            $this->showError(title: 'No Active Transaction Found', description: 'Please initiate a new sale transaction to proceed.');
        }
    }


    public function removeItem($item)
    {

        ItemTransaction::where('id', $item)->delete();
    }

    public function showAddItemForm()
    {   
        if(!empty($this->transaction)){
        
            $this->showAddForm = true;
        }else{
            $this->showWarning(title: 'No Active Transaction Found', description: 'Please initiate a new sale transaction to add item');

        }
        
    }

    public function confirmAddItem()
    {

        try {
            DB::beginTransaction();
            $this->item = Product::where('id',  $this->selectedItemDetails->id)->first();




            $transactionItem = $this->transaction->itemTransactions()->latest()->where('product_id', $this->item->id)->first();

            if (!empty($transactionItem)) {

                $transactionItem->quantity = $transactionItem->quantity + $this->itemQuantity;
                $transactionItem->subtotal = $transactionItem->quantity * $this->item->price;
                $transactionItem->save();
            } else {
                $transactionItem = $this->transaction->itemTransactions()->create([
                    'product_id' => $this->item->id,
                    'quantity' => $this->itemQuantity,
                    'subtotal' => $this->item->price,
                ]);
            }

            $this->showAddForm = false;
            $this->itemQuantity = 1;

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $this->showError(description: $e->getMessage());
        }
    }





    public function refreshWindow()
    {
        $this->emit('refreshWindow');
    }




    public function mount()
    {

        $this->getUnfinishTransaction();
    }

    public function render()
    {


        $this->loadProduct();
        $this->loadTransactionChart();
        $this->loadHoldTransactionResult();
        $this->loadCartItem();
      


        return view('livewire.pos', [
            'transaction' => $this->transaction,
            'cartItems' =>$this->cartItems,
            'products' => $this->products,
            'addSearchResult' => $this->addSearchResult,
            'holdTransactionResult' => $this->holdTransactionResult,
            'amount_paid'=> $this->amount_paid,
        ]);
    }


    // STAR TRANSACTTION BUTTON 
    public function startTransaction()
    {

        $this->transaction = Transaction::create([
            'user_id' => auth()->user()->id,
            'total_amount' => 0,
            'status' => 'active',
        ]);
    }



    // BAR CODE READER LOGIC
    public function scanItem()
    {

        try {
            DB::beginTransaction();

            $this->item = Product::where('id_number',  $this->itemIdNumber)->first();

            if (!empty($this->item)) {
                $this->hasErrorMessage = null;
                // check if the trsanctionItem Exist First
                $transactionItem = $this->transaction->itemTransactions()->latest()->where('product_id', $this->item->id)->first();

                if (!empty($transactionItem)) {

                    $transactionItem->quantity = $transactionItem->quantity + 1;
                    $transactionItem->subtotal = $transactionItem->quantity * $this->item->price;
                    $transactionItem->save();
                } else {
                    $transactionItem = $this->transaction->itemTransactions()->create([
                        'product_id' => $this->item->id,
                        'quantity' => 1,
                        'subtotal' => $this->item->price,
                    ]);
                }
            } else {

                //  $this->showError(description: 'Item Not Found');
            }

            $this->itemIdNumber = null;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $this->showError(description: $e->getMessage());
        }
    }


    public function loadTransactionChart()
    {
        if ($this->transaction) {
            $this->transaction = Transaction::with('itemTransactions')->find($this->transaction->id);
        }
    }


    public function loadSearchResults()
    {
        $this->products = Product::when($this->addSearch, function ($query) {
            $query->where('id_number', $this->addSearch)->orWhere('name', 'like', '%' . $this->addSearch . '%');
        })->take(10)->get();
    }

    public function loadProduct()
    {
        $this->products =  Product::when($this->addSearch, function ($query) {
            $query->where('id_number', $this->addSearch)->orWhere('name', 'like', '%' . $this->addSearch . '%');
        })
            ->when($this->itemCheckerSearch, function ($query) {
                $query->where('id_number', $this->itemCheckerSearch)->orWhere('name', 'like', '%' . $this->itemCheckerSearch . '%');
            })->take(20)->get();
    }

    public function loadCartItem(){
        
        $this->cartItems = ItemTransaction::latest()->when($this->transaction, function($query){
            $query->where('transaction_id', $this->transaction->id);
        })->whereHas('transaction', function($query){
            $query->where('status', 'active');
        })->take(20)->get();

    
          
    }



    public function getUnfinishTransaction()
    {

        $this->transaction = Transaction::latest()->where('user_id', auth()->user()->id)->where('status', 'active')->first();

        if (!empty($this->transaction)) {
           $this->cartItems = $this->transaction->itemTransactions;
        }
    }


    public function loadHoldTransactionResult()
    {
        $this->holdTransactionResult = Transaction::latest()->when($this->holdTransactionSearch,  function ($query) {
            $query->where('name', 'like', '%' . $this->holdTransactionSearch . '%');
        })->whereHas('user', function ($query) {
            $query->where('id', auth()->user()->id);
        })->where('status', 'hold')->with('itemTransactions')->get();
    }



    // ADD ITEM MANUALLY BUTTON

    public function updatedselectedItem()
    {
        $this->selectedItemDetails = Product::find($this->selectedItem);
        $this->itemQuantity = 1;
    }

    // CHECK CSRT ITEM BUTTON
    public function showcartItemModal(){
        if(!empty($this->transaction)){
            $this->cartItemModal = true;

        }else{
            $this->showError(title: 'No Active Transaction Found', description: 'Please initiate a new sale transaction to proceed.');

        }
    }

    // HELPERS

    public function clearAddFormProperties()
    {
        $this->itemQuantity = 1;
        $this->selectedItem = null;
        $this->selectedItemDetails = null;
        $this->addSearch = null;
    }
    public function clearUpdateFormProperties()
    {
        $this->itemQuantityForUpdate = 1;
        $this->selectedItemForUpdate = null;
    
    }

    // LIFE CYCLE LISTENERS

    // BAR CODE INPUT FIELD
    public function updatedItemIdNumber()
    {
        if (!empty($this->itemIdNumber)) {

            $this->scanItem();
        }
    }

    public function updatedshowAddForm()
    {

        if (!$this->showAddForm) {

            $this->clearAddFormProperties();
        }
    }
    public function updatedshowFormForUpdate()
    {

        if (!$this->showFormForUpdate) {

            $this->clearUpdateFormProperties();
        }
    }

    // CLEAR CAR BUTTON

    public function clearCart()
    {
        if (!empty($this->transaction)) {

            if(count($this->transaction->itemTransactions)>0) {

                $this->transaction->itemTransactions()->delete();
            }else{

                $this->showWarning(title: 'Warning', description: 'Cart is Empty');

            }
        }else{
            $this->showError(title: 'Error', description: 'No Active Transaction Found');
        }

    }
}
