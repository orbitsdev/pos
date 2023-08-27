<x-modal.card title="Update Item" align="center" blur wire:model="showFormForUpdate">
    @if(!empty($selectedItemForUpdate))
    <div class="lg:col-start-3 lg:row-end-1">
        <h2 class="sr-only">Item Summary</h2>
        <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5 p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="col-span-2 space-y-4">
                    <div>
                        <p class="text-lg font-semibold text-gray-900">Item Name</p>
                        <p class="text-gray-600">{{ $selectedItemForUpdate->product->name }}</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-900">ID Number</p>
                        <p class="text-gray-600">{{ $selectedItemForUpdate->product->id_number }}</p>
                    </div>
                    <div>
                        <p class="text-lg font-semibold text-gray-900">Price</p>
                        <p class="text-gray-600">₱{{ $selectedItemForUpdate->product->price }}</p>
                    </div>
                </div>
                <div class="space-y-4">
                    <p class="text-lg font-semibold text-gray-900">Subtotal</p>
                    <p class="text-blue-600">
                        @if(!empty($itemQuantityForUpdate) && is_numeric($itemQuantityForUpdate) && $itemQuantityForUpdate > 0)
                            <span class="text-sm text-gray-600">{{ $selectedItemForUpdate->product->price }} x {{ $itemQuantityForUpdate }} = </span>
                            ₱{{ number_format($itemQuantityForUpdate * $selectedItemForUpdate->product->price) }}
                        @else
                            ₱0.00
                        @endif
                    </p>
                </div>
            </div>
            <div class="flex items-center justify-center mt-6 space-x-4">
                <button wire:click="subtractQuantity" class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded">-</button>
                <input class="max-w-[124px] text-center" wire:model="itemQuantityForUpdate" id="numberInput" oninput="validateNumber(this)" onkeydown="preventBackspaceDelete(event, this)">
                <button wire:click="addQuantity" class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded">+</button>
            </div>
        </div>
    </div>
@endif


    
    

    
 
    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">
          
 
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close"   />
                @if(!empty($itemQuantityForUpdate) && $itemQuantityForUpdate > 0)
                <x-button  primary label="Update" spinner="updateItem" wire:click="updateItem" />
                @else
                <x-button disabled primary label="Update"  />
                @endif
            </div>
        </div>
    </x-slot>
</x-modal.card>