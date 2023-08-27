<x-modal.card max-width="6xl" title="Search Product" align="center" blur wire:model="itemCheckerModal">
    
    <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Search for a Product:</label>
        <x-input icon="search" wire:model="itemCheckerSearch" placeholder="Enter Product Name or ID"   autofocus />
    </div>

    <div class="mt-4 ">
        <p class="text-gray-500 mb-2 text-sm">The displayed results are limited to (20) items , but you can search for any product by typing the actual id number or name.</p>

        <div class="pos-checker-table overflow-y-auto shadow-inner">

            <table class="min-w-full divide-y divide-gray-300 ">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Item</th>
                    <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Id Number</th>
                    <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Price</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($products as $item)

                
                <tr>
                   
                    <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->name }}</td>
                    <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->id_number }}</td>
                    <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->price }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-3 text-gray-500"> <p class="text-gray-600 text-lg">No results found.</p></td>
                </tr>
                @endforelse
            </tbody>
        </table>
            </div>
        
          
                        
        
        
    </div>
    
    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">
          
 
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button primary label="Confirm" wire:click="checkItem" />
            </div>
        </div>
    </x-slot>
</x-modal.card>