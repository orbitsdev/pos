
<x-modal.card max-width="2xl" spacing="p-2"  align="center" blur wire:model="overViewModal">
    
    @if($transaction)
    <main class="text-sm">
        
        <section class="">
            <p class="flex items-center justify-center font-bold ">{{env('APP_NAME')}} RECEIPT</p>
            <div class="grid grid-cols-2   py-2">

            <div class="flex items-center   w-full ">
                    
                <p class="mr-4 ">Reciept: </p>
                <p> {{$this->transaction->id}}</p>
            </div>
            <div class="flex items-center  w-full ">

                <p class="mr-4">Date:</p>
                <p>{{$this->transaction->updated_at->format('d/m/y h:i A')}}</p>
            </div>

            <div class="flex items-center  w-full ">
                <p class="mr-4">Cashier: </p>
                <p>{{$transaction->user->name}} </p>
            </div>
            <div class="flex items-center  w-full ">
                
            </div>
                </div>

        </section>
        <section class="border-t-2 border-dashed py-2  ">
            <div class="grid grid-cols-8 mb-1">
                <div class="col-span-4">Item</div>
                <div>QTY</div>
                <div>Price</div>
                <div>Subtotal</div>
            </div>
            @forelse($transaction->itemTransactions as $item)
            <div class="grid grid-cols-8 mb-1">
                <div class="leading-4 uppercase col-span-4">{{$item->product->name}}</div>
                <div>{{$item->quantity}}</div>
                <div>{{$item->product->price}}</div>
                <div>  {{number_format($item->quantity * $item->product->price )}} </div>
            </div>
            @empty
            @endforelse
        </section>
        <section class="border-t-2 border-dashed py-2  ">
            <div class="grid grid-cols-8">
                <p class="mr-4 col-span-4">Total </p>
                <p></p>
                <p></p>
                <p>   {{ number_format($transaction->itemTransactions->sum(function ($item) {
                    return $item->quantity * $item->product->price;
                })) }} </p>
            </div>
        </section>
    </main>
        
    @endif

    
    <x-slot name="footer">
        <div class="flex justify-end gap-x-4">
            <div>
 
            <div class="flex">
                <x-button flat label="Cancel" x-on:click="close" />
                <x-button blue icon="printer" label="Print" wire:click="confirmTransaction" />
            </div>
        </div>
    </x-slot>

</x-modal.card>