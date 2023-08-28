<section class="bg-[#1E2145] item2 p-2 ">

    <div class="flex items-center justify-between h-full flex-col w-full">
        <div class="w-full grid grid-cols-3 gap-1">

            <button
            @if(!$transaction)
                disabled
                class="w-full py-3.5 px-1 cursor-not-allowed bg-[#237357] flex items-center justify-center transition-all hover:bg-[#1A4F41] text-white leading-5"
            @else
                wire:click="showAddItemForm"
                class="w-full py-3.5 px-1 bg-[#237357] flex items-center justify-center transition-all hover:bg-[#1A4F41] text-white leading-5"
            @endif>
            Add Item
        </button>
            
            <button
            @if(!$transaction)
            disabled
        @else
            wire:click="showcartItemModal"
        @endif
                class="w-full py-3.5 px-1 bg-[#373B69] flex  @if(!$transaction) cursor-not-allowed @endif  items-center justify-center transition-all   text-white leading-5  ">
                Check Cart Item  </button>
            <button
                class="w-full py-3.5 px-1 bg-[#237357] text-white flex  items-center justify-center transition-all    leading-5   ">
                Check Product </button>
            <button
                wire:click="showItemCheckerModal"
                class="w-full py-3.5 px-1 bg-[#226DEA] flex   items-center justify-center transition-all   text-white leading-5 ">
                Check Product</button>
            <button
                class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                Feature 7</button>
                <button
                class="w-full py-3.5 px-1 bg-[#237357] text-white flex items-center justify-center transition-all leading-5">
                Remove Item
            </button>
            
            <button
            @if($transaction)
                disabled
            @else
                wire:click="showTransactionRecordModal"
            @endif
            class="w-full py-3.5 px-1 bg-[#BD7574] @if($transaction) cursor-not-allowed hover:bg-[#9A5C5A] @endif flex items-center justify-center transition-all text-white leading-5">
            Resume Held Transactions
        </button>
        
            
            <button
                class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                Feature 6</button>
            <button
                class="w-full py-3.5 px-1 bg-[#237357] text-white flex   items-center justify-center transition-all    leading-5  ">
                Feature 8 </button>
            <button
            wire:click="refreshWindow"
                class="w-full py-3.5 px-1 bg-[#C71818] flex   items-center justify-center transition-all   text-white leading-5 ">
                Refresh </button>
            <button
                class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                Feature 10</button>
            <button
                class="w-full py-3.5 px-1 bg-[#237357]  flex   items-center justify-center transition-all   text-white leading-5  ">
                Feature 11 </button>
        </div>
      
        <div class="w-full">
         
            <div class="w-full">
            @if(empty($transaction))
                <x-button
                spinner="startTransaction" wire:click="startTransaction"
                    class="pos-main-button">
                    

                    Start Transaction </x-button>
            @else
                <x-button 
                spinner="showOverViewModal" wire:click="showOverViewModal"
                    class="pos-main-button">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"  class="w-6 h-6 mr-2 ">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                      </svg>
                      

                    Confirm  </x-button>

                    @endif
            </div>
        </div>
    </div>
</section>