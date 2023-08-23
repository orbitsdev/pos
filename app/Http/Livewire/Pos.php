<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Traits\DialogTrait;

class Pos extends Component
{

    use DialogTrait;
    public $selectedItem;
    public $item;
    public $items=[];
    public $removedItem;
    public $itemIdNumber;


    // public $samples = [1, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 51, 2, 4, 5];
    public $samples = [];

    public function render()
    {
        return view('livewire.pos');
    }

    public function updatedItemIdNumber(){
        if(!empty($this->itemIdNumber)){

            $this->scanItem();
        }
    }

    public function scanItem()
    {

        try {
            DB::beginTransaction();
            $this->item = Product::where('id_number',  $this->itemIdNumber)->first();



            if (!empty($this->item)) {
                $this->item->quantity = 1;
                array_push($this->items, $this->item);
                collect($this->items);
                
                
               $this->showSuccess();
            }else{
                $this->showError(description: 'Item Not Found');
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $this->showError(description: $e->getMessage());
          
        
        }
    }


    
}
