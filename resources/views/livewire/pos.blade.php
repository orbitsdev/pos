

<div class="flex min-h-screen bg-gray-200">

    <main class="pos-container min-h-full w-full ">
        <section class="bg-[#1E2145] item1 flex items-center justify-between text-white ">
            <div class="text-center px-4  h-full text-white flex items-center justify-center font-bold">
                <p class="text-lg text-center">
                    J7 TECH

                </p>
            </div>
            <div class="flex-1 flex items-center justify-center ">

                <a href="#"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mb-1">
                        <path fill-rule="evenodd"
                            d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z"
                            clip-rule="evenodd" />
                    </svg>


                    Admin</a>
                <a href="#"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 mb-1">
                        <path fill-rule="evenodd"
                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"
                            clip-rule="evenodd" />
                        <path
                            d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                    </svg>

                    Reports</a>
                <a href="#"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 mb-1">
                        <path fill-rule="evenodd"
                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                            clip-rule="evenodd" />
                    </svg>

                    Sales</a>
                <a href="#"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-6 h-6 mb-1">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                            clip-rule="evenodd" />
                    </svg>

                    Help</a>
                <a href="#"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <i class="fa-solid fa-right-from-bracket mb-1 text-lg "></i>
                    Logout</a>
            </div>
            <div class="text-center px-4">
                <p class="text-sm">{{ now()->format('d, M Y ') }}</p>
                <p class="text-sm">{{ now()->format('l h:i:s-A') }}</p>
            </div>
        </section>
        <section class="bg-[#1E2145] item2 p-2 ">

            <div class="flex items-center justify-between h-full flex-col w-full">
                <div class="w-full grid grid-cols-3 gap-1">

                    <button
                        wire:click="showAddItemForm"
                        class="w-full py-3.5 px-1 bg-[#237357] flex   items-center justify-center transition-all hover:  text-white leading-5  ">
                        Add Item </button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 4 </button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357] text-white flex  items-center justify-center transition-all    leading-5   ">
                        Check Item </button>
                    <button
                        wire:click="showItemCheckerModal"
                        class="w-full py-3.5 px-1 bg-[#226DEA] flex   items-center justify-center transition-all   text-white leading-5 ">
                        Check Product</button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 7</button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357] text-white flex   items-center justify-center transition-all    leading-5  ">
                        Remove Item </button>
                    <button
                        wire:click="clearBarCode"
                        class="w-full py-3.5 px-1 bg-[#CF821D] flex   items-center justify-center transition-all   text-white leading-5 ">
                        Clear Bar Code </button>
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
                        spinner="confirmTransaction" wire:click="confirmTransaction"
                            class="pos-main-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 mr-2 ">
                                <path fill-rule="evenodd"
                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                    clip-rule="evenodd" />
                            </svg>

                            Confirm Order </x-button>

                            @endif
                    </div>
                </div>
            </div>
        </section>
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
                        {{-- @if($this->item)
                        <div class="flex items-center ">
                            <p class="mr-2 uppercase">ID NUMBER</p>    
                            <p class="uppercase">{{$this->item->id}}</p>
                        </div>
                        <div class="flex items-center ">
                            <p class="mr-2 uppercase">ITEM</p>    
                            <p class="uppercase">{{$this->item->name}}</p>
                        </div>
                        <div class="flex items-center ">
                            <p class="mr-2 uppercase">PRICE</p>    
                            <p class="uppercase">{{$this->item->price}}</p>
                        </div>
                        @endif --}}
                    </div>
                    {{-- <div class="flex items-center  justify-end mb-6">
                        <x-input icon="search" placeholder="Search " class="self-center  min-w-[300px]  inline-block" />
                        <x-button wire:click="showAddItemForm" spinner="showAddItemForm" icon="plus" positive label="Add Manually" class="ml-4 " />

                    </div> --}}
                    
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
        <section class="item4 bg-gradient-to-r from-[#1E2145] to-[#252957] flex items-end justify-between ">

                 <div class="flex h-full w-full">
                       <x-button class="  pos-big-cancel  " spinner="cancelTransaction" wire:click="cancelTransaction"> Cancel </x-button>
                       <x-button class="  pos-big-cancel  " spinner="" wire:click="cancelTransaction"> Clear Chart </x-button>
                        <x-button class=" pos-big-void" spinner="holdTransaction" wire:click="holdTransaction" >Hold Transaction</x-button>
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
    </main>
    
   

   @include('livewire.checkItemModal')
   @include('livewire.addModal')
   @include('livewire.updateModal')

    <script>

document.addEventListener('livewire:load', function () {
        Livewire.on('refreshWindow', function () {
            window.location.reload();
        });
    });

function validateNumber(input) {
  // Remove any non-numeric characters
  input.value = input.value.replace(/[^0-9]/g, '');
}
if (input.value === "" || parseInt(input.value) < 1) {
    input.value = "1";
  }
  
//   function preventBackspaceDelete(event, input) {
//   // Check if there's only one digit left
//   if (input.value.length === 1) {
//     // Check if the pressed key is backspace or delete
//     if (event.key === "Backspace" || event.key === "Delete"  || (event.ctrlKey && event.key === "x")) {
//       event.preventDefault(); // Prevent the default action
//     }
//   }
// }
        
     
    </script>
</div>
