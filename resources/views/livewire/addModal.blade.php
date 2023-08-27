<x-modal.card max-width="5xl" title="Add Item Manually" align="center" blur wire:model="showAddForm">
    <div class="grid grid-cols-1  gap-4">
        <div>
            @if(empty($selectedItemDetails))
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Search for a Product:</label>
                <x-input icon="search" wire:model="addSearch" placeholder="Enter Product Name or ID" />
            </div>
        @else
        <div class="mb-4 flex items-center justify-center transition-opacity duration-300">
            <button wire:click="clearSelectedItem" class="border border-blue-600 text-blue-600 hover:border-blue-800 hover:text-blue-800 px-3 py-1 rounded-lg flex items-center">
                <svg class="h-4 w-4 mr-1 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Clear Item to Search Again
            </button>
        </div>
        
        
        @endif
        
        
                
            <div class="mt-4 ">
                {{-- <p class="text-gray-500 mb-2 text-sm">Select Product The displayed results are limited to (20) two items , but you can search for any product by typing the actual id number or name.</p> --}}

                <div class="pos-search-table overflow-y-auto shadow-inner">

                    <table class="min-w-full divide-y divide-gray-300 ">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900"></th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Item</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Id Number</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Price</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse($products as $item)

                        
                        <tr>
                            <td class="whitespace-nowrap py-3 px-3">
                                <input type="radio" name="item" wire:model="selectedItem" value="{{ $item->id }}">
                            </td>
                            <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->name }}</td>
                            <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->id_number }}</td>
                            <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->price }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-3 text-gray-500">No results found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                    </div>
                
                    @if($selectedItem)
                    <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                        <p class="text-lg font-semibold mb-2">Selected Item</p>
                        <p class="text-gray-700">{{ $selectedItemDetails->name}}</p>
                        <p class="text-gray-500">ID Number: {{$selectedItemDetails->price }}</p>
                    </div>
                @else
                    <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                        <p class="text-lg font-semibold mb-2">No Item Selected</p>
                        <p class="text-gray-700">Please select an item from the list above.</p>
                    </div>
                @endif
                                
                
                
            </div>
         
            @if($selectedItem)
            <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                
                <div class="flex items-center space-x-4">
                    <div class="grid grid-cols-3">
                        <div>
                            <p class="text-lg font-semibold">Price</p>
                            <p class="text-gray-600">₱ {{ $selectedItemDetails->price }}</p>
                            @if($itemQuantity > 0)
                            <div class="mt-2">
                                <p class="text-lg font-semibold">Subtotal</p>
                                <p class="text-gray-600">₱ {{ number_format($itemQuantity * $selectedItemDetails->price) }}</p>
                            </div>
                            
                        @endif
                        </div>
                        <div>
                            <div class="w-full flex flex-col justify-center items-center">
                                <p class="text-lg font-semibold">Quantity</p>
                                <div class="flex items-center mt-2">
                                    <button wire:click="decrement" class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded mr-2">-</button>
                                    <input class="max-w-[124px] text-center" wire:model="itemQuantity" id="numberInput" oninput="validateNumber(this)" onkeydown="preventBackspaceDelete(event, this)">
                                    <button wire:click="increment" class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded ml-2">+</button>
                                </div>
                            </div>
                        </div>
                        @if($transaction->itemTransactions->contains('product_id', $selectedItem))
                        <div class="bg-blue-100 p-4 rounded-md flex items-start space-x-2">
                            <div>

                                {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 text-blue-600">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                                  </svg> --}}
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                  </svg>
                                  
                                  
                            </div>
                            <p class="text-sm text-blue-700 leading-4">
                                Item already in cart. Adding its quantity here will update the record. Consider using 'Update' instead of adding to avoid confusion.
                            </p>
                            
                            </div>
                            @else
                            <div></div>
                            @endif

                        
                        

                    </div>
                   
                </div>
        
              
            </div>
        @endif
         
            
            </div>
      
    </div>
 
    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">
          
 
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                @if(!empty($itemQuantity) && $itemQuantity > 0)
                <x-button primary label="Confirm" wire:click="confirmAddItem" />
                @else
                <x-button disabled label="Confirm"  />
                @endif
            </div>
        </div>
    </x-slot>
</x-modal.card>