<section class="item4 bg-gradient-to-r from-[#1E2145] to-[#252957] flex items-end justify-between ">

    <div class="flex h-full w-full">
          <x-button class="  pos-big-cancel  " spinner="cancelTransaction" wire:click="cancelTransaction"> Cancel </x-button>
          <x-button class="  pos-big-cancel  " spinner="" wire:click="clearCart"> Clear Chart </x-button>
           <x-button class=" pos-big-void" spinner="showTransactionModal" wire:click="showTransactionModal" >Hold </x-button>
       </div>
       <div class="flex-2  flex items-center justify-between w-full h-full ">
           <p class="text-4xl text-gray-100 m-0 p-0  font-bold  flex-1"> Total</p>
           <p class="text-4xl text-[#AFBE5E] m-0 p-0 font-bold flex-1">
               {{ number_format($transaction->itemTransactions->sum(function ($item) {
                   return $item->quantity * $item->product->price;
               })) }}
           </p>
       </div>
   
@else

@endif
</section>