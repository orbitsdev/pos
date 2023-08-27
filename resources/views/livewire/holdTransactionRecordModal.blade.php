<x-modal.card max-width="5xl" title="Add Item Manually" align="center" blur wire:model="holdTransactionRecordModal">

    <div class="grid grid-cols-1  gap-4">
        <div class="h-full">
            <div class="mb-2 h-14">

                @if (empty($holdTransactionSelected))
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Search for a Transaction:</label>
                        <x-input icon="search" wire:model="holdTransactionSearch"
                            placeholder="Enter Transaction Name" />
                    </div>
                @else
                    <div class="mb-4 flex items-center justify-center transition-opacity duration-300">
                        <button wire:click="clearSelectedTransaction"
                            class="border border-blue-600 text-blue-600 hover:border-blue-800 hover:text-blue-800 px-3 py-1 rounded-lg flex items-center">
                            <svg class="h-4 w-4 mr-1 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            Clear Transaction to Search Again
                        </button>
                    </div>
                @endif
            </div>



            <div class="mt-4 ">
                {{-- <p class="text-gray-500 mb-2 text-sm">Select Product The displayed results are limited to (20) two items , but you can search for any product by typing the actual id number or name.</p> --}}

                <div class="pos-search-table overflow-y-auto shadow-inner">

                    <table class="min-w-full divide-y divide-gray-300 ">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                </th>
                                <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                    Transaction</th>
                                <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                    Date</th>

                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @forelse($holdTransactionResult as $item)
                                <tr>
                                    <td class="whitespace-nowrap py-3 px-3">
                                        <input type="radio" name="item" wire:model="holdTransactionSelected"
                                            value="{{ $item->id }}">
                                    </td>
                                    <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->name }}</td>
                                    <td class="whitespace-nowrap py-1 px-3 text-gray-600">
                                        {{ $item->created_at->format('d-m-Y l h:i a') }}</td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-3 text-gray-500">No results found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- @if ($holdTransactionSelected)
                    <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                        <p class="text-lg font-semibold mb-2">Selected Item</p>
                        <p class="text-gray-700">{{ $holdTransactionSelectedDetails->name }}</p>
                        <p class="text-gray-700">{{ $holdTransactionSelectedDetails->created_at->format('Y-m-d l H:i a') }}</p>
                        
                    </div>
                @else
                    <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                        <p class="text-lg font-semibold mb-2">No Item Selected</p>
                        <p class="text-gray-700">Please select an item from the list above.</p>
                    </div>
                @endif --}}



            </div>




        </div>

    </div>


    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">


            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                @if (!empty($holdTransactionSelected))
                    <x-button primary label="Confirm" wire:click="confirmSelectedHoldTransaction" />
                @else
                    <x-button disabled wire:click="confirmSelectedHoldTransaction" primary label="Confirm" />
                @endif
            </div>
        </div>
    </x-slot>
</x-modal.card>
