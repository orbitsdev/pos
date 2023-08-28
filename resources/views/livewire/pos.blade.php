<div class="flex min-h-screen bg-gray-200">

    <main class="pos-container min-h-full w-full ">
        <section class="bg-[#1E2145] item1 flex items-center justify-between text-white ">
            <div class="text-center px-4  h-full text-white flex items-center justify-center font-bold">
                <p class="text-lg text-center">
                    J7 TECH

                </p>
            </div>
            <div class="flex-1 flex items-center justify-center ">

                <a href="/admin"
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
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                <button href="{{ route('logout') }}"
                @click.prevent="$root.submit();"
                    class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-1 text-sm">
                    <i class="fa-solid fa-right-from-bracket mb-1 text-lg "></i>
                    Logout</button>
                    </form>
            </div>
            <div class="text-center px-4">
                <p class="text-sm">{{ now()->format('d, M Y ') }}</p>
                <p class="text-sm">{{ now()->format('l h:i:s-A') }}</p>
            </div>
        </section>
        <section class="bg-[#1E2145] item2 p-2 ">

            <div class="flex items-center justify-between h-full flex-col w-full">
                <div class="w-full grid grid-cols-3 gap-1">

                    <x-button
                        wire:click="showAddItemForm"
                        spinner="showAddItemForm"
                        class="w-full py-3.5 px-1 bg-[#237357] flex items-center justify-center transition-all hover:bg-[#1A4F41] text-white leading-5" >
                        Add Item
                    </x-button>
                  

                    <x-button
                     
                    wire:click="showcartItemModal" 
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Check Cart Item </x-button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357] text-white flex  items-center justify-center transition-all    leading-5   ">
                        Check Product </button>
                    <x-button 
                    spinner="showItemCheckerModal"
                    wire:click="showItemCheckerModal"
                        class="w-full py-3.5 px-1 bg-[#226DEA] flex   items-center justify-center transition-all   text-white leading-5 ">
                        Check Product</x-button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 7</button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357] text-white flex items-center justify-center transition-all leading-5">
                        Remove Item
                    </button>
                    
                  
                    <x-button
                    wire:click="showTransactionRecordModal"
                    spinner="showTransactionRecordModal"
                     class="w-full py-3.5 px-1 bg-[#BD7574]  flex items-center justify-center transition-all text-white leading-5">

                        Resume Held Transactions
                    </x-button>
                  
                 
                    


                    <button
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 6</button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357] text-white flex   items-center justify-center transition-all    leading-5  ">
                        Feature 8 </button>
                    <x-button wire:click="refreshWindow"
                        class="w-full py-3.5 px-1 bg-[#C71818] flex   items-center justify-center transition-all   text-white leading-5 ">
                        Reload </x-button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#373B69] flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 10</button>
                    <button
                        class="w-full py-3.5 px-1 bg-[#237357]  flex   items-center justify-center transition-all   text-white leading-5  ">
                        Feature 11 </button>
                </div>

                <div class="w-full">

                    <div class="w-full">
                        @if (empty($transaction))
                        <x-button spinner="startTransaction" wire:click="startTransaction" class="pos-main-button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                              </svg>
                              
                            New Sale
                        </x-button>
                        
                        @else
                            <x-button spinner="showOverViewModal" wire:click="showOverViewModal"
                                class="pos-main-button">

                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6 mr-2 ">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>


                                Confirm </x-button>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class=" item3 p-6 ">



            @if (!empty($transaction))
                <div class="flex flex-col justify-between items-center w-full">
                    <div class="w-full">
                        <div class="">

                            <x-input icon="qrcode" placeholder="Bar Code " class="mb-6 self-center"
                                wire:model.debounce.500ms="itemIdNumber" autofocus />


                        </div>
                        <div class="mb-2">
                            <p class="font-bold text-xl">
                                Items ({{ count($transaction->itemTransactions) }})

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
                                        <tr class="even:bg-[#DBDADD] @if ($loop->first)  @endif ">
                                            <td class="capitalize text-sm  font-normal  px-2 text-left max-w-[200px]">
                                                {{ optional($item->product)->name }}
                                            </td>
                                            <td class="capitalize text-sm  font-normal  px-2 text-left">
                                                {{ optional($item->product)->id_number }}</td>
                                            <td class="capitalize text-sm  font-normal  px-2 text-left">
                                                @formattedNumber(optional($item->product)->price) </td>
                                            <td class="capitalize text-sm  font-normal  px-2 text-center">
                                                {{ optional($item)->quantity }}</td>

                                            <td class="capitalize text-sm  font-normal  px-2 text-center">
                                                {{ number_format($item->quantity * $item->product->price) }} </td>
                                            <td class="capitalize text-sm  font-normal  px-2 text-center">
                                                <div class="flex items-center">

                                                    <button wire:click="showUpdateForm({{ $item->id }})"
                                                        class="mr-2 flex items-center justify-center    p-0.5 hover:bg-gray-600 transition-all text-gray-400 hover:text-gray-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>

                                                    </button>
                                                    <button icon="edit"
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
                <x-button class="  pos-big-cancel " spinner="cancelTransaction" wire:click="cancelTransaction">
                    Cancel </x-button>
                <x-button class="pos-big-clear-cart " spinner="" wire:click="clearCart"> Clear Chart </x-button>
                <x-button class=" pos-big-void" spinner="showTransactionModal" wire:click="showTransactionModal">Hold
                </x-button>
            </div>
            <div class="flex-2  flex items-center justify-between w-full h-full ">
                <p class="text-4xl text-gray-100 m-0 p-0  font-bold  flex-1"> Total</p>
                <p class="text-4xl text-[#AFBE5E] m-0 p-0 font-bold flex-1">
                    {{ number_format(
                        $transaction->itemTransactions->sum(function ($item) {
                            return $item->quantity * $item->product->price;
                        }),
                    ) }}
                </p>
            </div>
        @else
            @endif
        </section>
    </main>




    <x-modal.card max-width="6xl" title="Search Product" align="center" blur wire:model="cartItemModal">

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Search Product fromn your cart</label>
            <x-input icon="search" wire:model="cartItemSearch" placeholder="Enter Product Name or ID" autofocus />
        </div>

        <div class="mt-4 ">
            <p class="text-gray-500 mb-2 text-sm">The displayed results are limited to (20) items , but you can search
                for any product by typing the actual id number or name.</p>

            <div class="pos-checker-table overflow-y-auto shadow-inner">

                <table class="min-w-full divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                Item</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Id
                                Number</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                Price</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                Quantity</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">

                        @forelse($cartItems as $item)
                            <tr>

                                <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->product->name }}</td>
                                <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->product->id_number }}
                                </td>
                                <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->product->price }}</td>
                                <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->quantity }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-3 text-gray-500">
                                    <p class="text-gray-600 text-lg">No results found.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>





        </div>

        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">


                <div class="flex">
                    <x-button primary label="Close" x-on:click="close" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

    
        <x-modal.card max-width="5xl" title="Add Item Manually" align="center" blur
        wire:model="holdTransactionRecordModal">

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
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M15 19l-7-7 7-7">
                                    </path>
                                </svg>
                                Clear Transaction to Search Again
                            </button>
                        </div>
                    @endif
                </div>



                <div class="mt-4 ">

                    <div class="pos-search-table overflow-y-auto shadow-inner">

                        <table class="min-w-full divide-y divide-gray-300 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                    </th>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                        Transaction</th>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
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
                                        <td colspan="4" class="text-center py-3 text-gray-500">No results found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>




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


     <x-modal.card max-width="3xl" title="Hold Transaction" align="center" blur wire:model="holdTransactionModal">


        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Create a Title That Is Easy to Recall | If No Title
                Is Provided, the Current Time Will Be Used</label> <x-input wire:model="transactionHoldTitle"
                placeholder="e.g Customer Name" autofocus />
        </div>






        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">


                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button primary label="Confirm" wire:click="holdTransaction" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

     


    <x-modal.card max-width="6xl" title="Item Checker" align="center" blur wire:model="itemCheckerModal">

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Search for a Product:</label>
            <x-input icon="search" wire:model="itemCheckerSearch" placeholder="Enter Product Name or ID"
                autofocus />
        </div>

        <div class="mt-4 ">
            <p class="text-gray-500 mb-2 text-sm">The displayed results are limited to (20) items , but you can search
                for any product by typing the actual id number or name.</p>

            <div class="pos-checker-table overflow-y-auto shadow-inner">

                <table class="min-w-full divide-y divide-gray-300 ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                Item</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Id
                                Number</th>
                            <th scope="col" class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">
                                Price</th>
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
                                <td colspan="4" class="text-center py-3 text-gray-500">
                                    <p class="text-gray-600 text-lg">No results found.</p>
                                </td>
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
     

    <x-modal.card max-width="5xl" title="Add Item Manually" align="center" blur wire:model="showAddForm">
        <div class="grid grid-cols-1  gap-4">
            <div>
                @if (empty($selectedItemDetails))
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Search for a Product:</label>
                        <x-input icon="search" wire:model="addSearch" placeholder="Enter Product Name or ID" />
                    </div>
                @else
                    <div class="mb-4 flex items-center justify-center transition-opacity duration-300">
                        <button wire:click="clearSelectedItem"
                            class="border border-blue-600 text-blue-600 hover:border-blue-800 hover:text-blue-800 px-3 py-1 rounded-lg flex items-center">
                          
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-4 w-4 mr-1 text-blue-600">
                                <path fill-rule="evenodd"
                                    d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                    clip-rule="evenodd" />
                            </svg>

                            Deselect Item
                        </button>
                    </div>
                @endif



                <div class="mt-4 ">

                    <div class="pos-search-table overflow-y-auto shadow-inner">

                        <table class="min-w-full divide-y divide-gray-300 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900"></th>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Item</th>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Id Number
                                    </th>
                                    <th scope="col"
                                        class="py-3 pl-3 pr-3 text-left text-sm font-semibold text-gray-900">Price</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @forelse($products as $item)
                                    <tr>
                                        <td class="whitespace-nowrap py-3 px-3">
                                            <input type="radio" name="item" wire:model="selectedItem"
                                                value="{{ $item->id }}">
                                        </td>
                                        <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->name }}</td>
                                        <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->id_number }}
                                        </td>
                                        <td class="whitespace-nowrap py-1 px-3 text-gray-600">{{ $item->price }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-3 text-gray-500">No results found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    @if ($selectedItem)
                        <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                            <p class="text-lg font-semibold mb-2">Selected Item</p>
                            <p class="text-gray-700">{{ $selectedItemDetails->name }}</p>
                            <p class="text-gray-500">ID Number: {{ $selectedItemDetails->price }}</p>
                        </div>
                    @else
                        <div class="mt-4 bg-gray-100 rounded-lg p-4 shadow-md">
                            <p class="text-lg font-semibold mb-2">No Item Selected</p>
                            <p class="text-gray-700">Please select an item from the list above.</p>
                        </div>
                    @endif



                </div>

                @if ($selectedItem)
                    <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">

                        <div class="flex items-center space-x-4">
                            <div class="grid grid-cols-3">
                                <div>
                                    <p class="text-lg font-semibold">Price</p>
                                    <p class="text-gray-600">₱ {{ $selectedItemDetails->price }}</p>
                                    @if ($itemQuantity > 0)
                                        <div class="mt-2">
                                            <p class="text-lg font-semibold">Subtotal</p>
                                            <p class="text-gray-600">₱
                                                {{ number_format($itemQuantity * $selectedItemDetails->price) }}</p>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <div class="w-full flex flex-col justify-center items-center">
                                        <p class="text-lg font-semibold">Quantity</p>
                                        <div class="flex items-center mt-2">
                                            <button wire:click="decrement"
                                                class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded mr-2">-</button>
                                            <input class="max-w-[124px] text-center" wire:model="itemQuantity"
                                                id="numberInput" oninput="validateNumber(this)"
                                                onkeydown="preventBackspaceDelete(event, this)">
                                            <button wire:click="increment"
                                                class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded ml-2">+</button>
                                        </div>
                                    </div>
                                </div>
                                @if (!empty($transaction))
                                    @if ($transaction->itemTransactions->contains('product_id', $selectedItem))
                                        <div class="bg-blue-100 p-4 rounded-md flex items-start space-x-2">
                                            <div>

                                         
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6 text-blue-600">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                                </svg>


                                            </div>
                                            <p class="text-sm text-blue-700 leading-4">
                                                Item already in cart. Adding its quantity here will update the record.
                                                Consider using 'Update' instead of adding to avoid confusion.
                                            </p>

                                        </div>
                                    @else
                                        <div></div>
                                    @endif

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
                    @if (!empty($itemQuantity) && $itemQuantity > 0)
                        <x-button primary label="Confirm" wire:click="confirmAddItem" />
                    @else
                        <x-button disabled label="Confirm" />
                    @endif
                </div>
            </div>
        </x-slot>
    </x-modal.card>


    <x-modal.card title="Update Item" align="center" blur wire:model="showFormForUpdate">
        @if (!empty($selectedItemForUpdate))
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
                                @if (!empty($itemQuantityForUpdate) && is_numeric($itemQuantityForUpdate) && $itemQuantityForUpdate > 0)
                                    <span class="text-sm text-gray-600">{{ $selectedItemForUpdate->product->price }} x
                                        {{ $itemQuantityForUpdate }} = </span>
                                    ₱{{ number_format($itemQuantityForUpdate * $selectedItemForUpdate->product->price) }}
                                @else
                                    ₱0.00
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center mt-6 space-x-4">
                        <button wire:click="subtractQuantity"
                            class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded">-</button>
                        <input class="max-w-[124px] text-center" wire:model="itemQuantityForUpdate" id="numberInput"
                            oninput="validateNumber(this)" onkeydown="preventBackspaceDelete(event, this)">
                        <button wire:click="addQuantity"
                            class="bg-blue-600 text-white h-[40px] text-xl w-[40px] px-2 rounded">+</button>
                    </div>
                </div>
            </div>
        @endif


        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">


                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    @if (!empty($itemQuantityForUpdate) && $itemQuantityForUpdate > 0)
                        <x-button primary label="Update" spinner="updateItem" wire:click="updateItem" />
                    @else
                        <x-button disabled primary label="Update" />
                    @endif
                </div>
            </div>
        </x-slot>
    </x-modal.card>

    <x-modal.card  align="center" blur wire:model="overViewModal">
        <div class="text-sm">

        @if($transaction)

        <section class="">
            <p class="flex items-center justify-center font-bold ">{{ env('APP_NAME') }} RECEIPT</p>
            <div class="grid grid-cols-2   py-2">

                <div class="flex items-center   w-full ">

                    <p class="mr-4 ">Reciept: </p>
                    <p> {{ $this->transaction->id }}</p>
                </div>
                <div class="flex items-center  w-full ">

                    <p class="mr-4">Date:</p>
                    <p>{{ $this->transaction->updated_at->format('d/m/y h:i A') }}</p>
                </div>

                <div class="flex items-center  w-full ">
                    <p class="mr-4">Cashier: </p>
                    <p>{{ $transaction->user->name }} </p>
                </div>
                <div class="flex items-center  w-full ">

                </div>
            </div>

        </section>

        @endif
            @if($transaction)
        <section class="border-t-2 border-dashed py-2  ">
            <div class="grid grid-cols-8 mb-1">
                <div class="col-span-4">Item</div>
                <div>QTY</div>
                <div>Price</div>
                <div>Subtotal</div>
            </div>
            @forelse($transaction->itemTransactions as $item)
                <div class="grid grid-cols-8 mb-1">
                    <div class="leading-4 uppercase col-span-4">{{ $item->product->name }}</div>
                    <div>{{ $item->quantity }}</div>
                    <div>{{ $item->product->price }}</div>
                    <div> {{ number_format($item->quantity * $item->product->price) }} </div>
                </div>
            @empty
            @endforelse
        </section>

        <section class="border-t-2 border-dashed py-2  ">
            <div class="grid grid-cols-8">
                <p class="mr-4 col-span-4">Total </p>
                <p></p>
                <p></p>
                <p> ₱ {{ number_format(
                    $transaction->itemTransactions->sum(function ($item) {
                        return $item->quantity * $item->product->price;
                    }),
                ) }}
                </p>
            </div>
            <div class="grid grid-cols-8">
                <p class="mr-4 col-span-4">Amount </p>
                <p></p>
                <p></p>
                <p>
                    @if (!empty($amount_paid))
                    ₱ {{ number_format($amount_paid) }}
                    @endif
                </p>
                

            </div>
            
           
            
        </section>
       

        <section class="border-t-2 border-dashed py-2 ">
            <label class="block text-sm font-medium text-gray-700">Amount</label>
            <x-input icon="cash" wire:model="amount_paid" placeholder="0" autofocus oninput="validateNumber(this)" onkeydown="preventBackspaceDelete(event, this)" />
        </section>
        @endif
    </div>



        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                

                <div class="flex">
                    <x-button flat label="Cancel" x-on:click="close" />
                    <x-button blue icon="check" label="Finish Transaction" spinner="confirmTransaction"
                        wire:click="confirmTransaction" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>

    <x-modal.card  align="center" blur wire:model="showChangeDialog">

        
        <div class="bg-white p-6 shadow-md rounded-md">
            <h2 class="text-2xl font-semibold text-center mb-4">Receipt</h2>
            
            <!-- Your item entries here -->
        
            @if(!empty($purchase_total))
            <div class="flex items-center justify-between border-t pt-4 mt-4">
                <span class="font-semibold text-gray-600">Total:</span>
                <span class="text-green-600 text-lg">₱ {{ number_format($purchase_total) }}</span>
            </div>
            @endif
        
            @if(!empty($amount_paid))
            <div class="flex items-center justify-between border-t pt-4 mt-4">
                <span class="font-semibold text-gray-600">Customer Cash:</span>
                <span class="text-green-600 text-lg">₱ {{ number_format($amount_paid) }}</span>
            </div>
            @endif
        
            @if(!empty($change))
            <div class="flex items-center justify-between border-t pt-4 mt-4">
                <span class="font-semibold text-gray-600">Customer Change:</span>
                <span class="text-green-600 text-lg">₱ {{ number_format($change) }}</span>
            </div>
            @endif
        </div>
        


        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                

                <div class="flex">
                    {{-- <x-button blue label="OK" x-on:click="close" /> --}}
                    <x-button blue label="DONE" spinner="closeChange"
                        wire:click="closeChange" />
                </div>
            </div>
        </x-slot>
    </x-modal.card>


    
{{-- 

    <x-modal.card max-width="2xl" spacing="p-2" align="center" blur wire:model="overViewModal">

           
            <div class="text-sm">  

                <section class="">
                    <p class="flex items-center justify-center font-bold ">{{ env('APP_NAME') }} RECEIPT</p>
                    <div class="grid grid-cols-2   py-2">

                        <div class="flex items-center   w-full ">

                            <p class="mr-4 ">Reciept: </p>
                            <p> {{ $this->transaction->id }}</p>
                        </div>
                        <div class="flex items-center  w-full ">

                            <p class="mr-4">Date:</p>
                            <p>{{ $this->transaction->updated_at->format('d/m/y h:i A') }}</p>
                        </div>

                        <div class="flex items-center  w-full ">
                            <p class="mr-4">Cashier: </p>
                            <p>{{ $transaction->user->name }} </p>
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
                            <div class="leading-4 uppercase col-span-4">{{ $item->product->name }}</div>
                            <div>{{ $item->quantity }}</div>
                            <div>{{ $item->product->price }}</div>
                            <div> {{ number_format($item->quantity * $item->product->price) }} </div>
                        </div>
                    @empty
                    @endforelse
                </section>
                <section class="border-t-2 border-dashed py-2  ">
                    <div class="grid grid-cols-8">
                        <p class="mr-4 col-span-4">Total </p>
                        <p></p>
                        <p></p>
                        <p> {{ number_format(
                            $transaction->itemTransactions->sum(function ($item) {
                                return $item->quantity * $item->product->price;
                            }),
                        ) }}
                        </p>
                    </div>
                </section>

            </div>
           
      


        <x-slot name="footer">
            <div class="flex justify-end gap-x-4">
                <div>

                    <div class="flex">
                        <x-button flat label="Cancel" x-on:click="close" />
                        <x-button blue icon="check" label="Finish Transaction" spinner="confirmTransaction"
                            wire:click="confirmTransaction" />
                    </div>
                </div>
        </x-slot>

    </x-modal.card>  --}}

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('refreshWindow', function() {
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
