<section class=" item3 p-6 ">
           

           
    @if(!empty($transaction))
    <div class="flex flex-col justify-between items-center w-full">
        <div class="w-full">
            <div class="">

                <x-input icon="qrcode" placeholder="Bar Code " class="mb-6 self-center" wire:model.debounce.500ms="itemIdNumber" autofocus />
                {{-- <x-toggle wire:model="enableManual" /> --}}
           
            </div>
            <div class="mb-2">
                <p class="font-bold text-xl">
                    Items ({{count($transaction->itemTransactions)}})

                </p>
              
            </div>
          
            
        <div class="bg-[#E2E2E2] overflow-y-auto t-container">

            <table class="w-full">
                <thead class="">
                    <tr class="shadow sticky top-0 bg-[#E2E2E2]">

                        <td class="uppercase py-2  px-2  text-left leading-5">Item Description</td>
                        <td class="uppercase py-2  px-2  text-left">ID NUMBER</td>
                        <td class="uppercase py-2  px-2  text-left">Price</td>
                        <td class="uppercase py-2  px-2  text-center">QTY</td>
                      
                        <td class="uppercase py-2  px-2  text-center">Subtotal</td>
                        <td class="uppercase py-2  px-2  text-center"></td>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-[#D5D5D7]">
                    
                    @forelse($transaction->itemTransactions as $item)
                        <tr class="even:bg-[#DBDADD] @if ($loop->first)   @endif ">
                            <td class="capitalize text-sm  font-normal  px-2 text-left max-w-[200px]"> {{ optional($item->product)->name }}
                            </td>
                            <td class="capitalize text-sm  font-normal  px-2 text-left">{{optional($item->product)->id_number}}</td>
                            <td class="capitalize text-sm  font-normal  px-2 text-left">  @formattedNumber(optional($item->product)->price) </td>
                            <td class="capitalize text-sm  font-normal  px-2 text-center">{{optional($item)->quantity}}</td>
                          
                            <td class="capitalize text-sm  font-normal  px-2 text-center"> {{number_format($item->quantity * $item->product->price)}} </td>
                            <td class="capitalize text-sm  font-normal  px-2 text-center">
                                <div class="flex items-center">

                                    <button
                                    
                                wire:click="showUpdateForm({{ $item->id }})"
                                    class="mr-2 flex items-center justify-center    p-0.5 hover:bg-gray-600 transition-all text-gray-400 hover:text-gray-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>
                                      
                                </button>
                                <button
                                icon="edit"
                                wire:click="removeItem({{ $item->id }})"
                                    class="flex items-center justify-center  text-red-600  p-0.5 hover:bg-red-600 transition-all hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor" class="w-6 h-6  ">
                                        <path fill-rule="evenodd"
                                            d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                {{-- <x-button right-icon="x"  wire:click="removeItem({{$item->id}})" class="pos-x-button" /> --}}
                            </div>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

      




    </div>
</section>