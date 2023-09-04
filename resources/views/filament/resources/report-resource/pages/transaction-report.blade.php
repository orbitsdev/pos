<x-filament::page>


    <x-input label="Name" placeholder="your name" />
 
    <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-72 ">
        <h2 class="text-xl font-semibold  uppercase mb-2">Daily Sales</h2>

        <div class="border-t pt-4 py-6 filamemt-report-table bg-red-200 overflow-auto px-10">
            <table class="w-full">
                <thead class="sticky divide-y divide-gray-300 dark:divide-gray-700">
                    <tr class="">
                        <th class="text-left px-2 py-1"></th>
                        <th class="text-right px-2 py-1">Months</th>
                        <th class="text-right px-2 py-1">Sales</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300 dark:divide-gray-700">

                    @forelse ($samples as $item)
                        <tr>
                            <td class="text-left text-sm text-blue-600 ">
                                <div class="flex items-center">

                                    <p class=" ">Download</p>
                                </div>
                            </td>
                            <td class="text-right text-sm py-1">
                                Jan 2023
                            </td>
                            <td class="text-right text-sm py-1">
                                ₱ 1,200
                            </td>
                        </tr>
                    @empty
                    @endforelse


                </tbody>
            </table>

        </div>
    </section>
    <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-72 ">
        <h2 class="text-xl font-semibold  uppercase mb-2">Monthly Sales</h2>

        <div class="border-t pt-4 py-6 filamemt-report-table bg-red-200 overflow-auto px-10">
            <table class="w-full">
                <thead class="sticky divide-y divide-gray-300 dark:divide-gray-700">
                    <tr class="">
                        <th class="text-left px-2 py-1"></th>
                        <th class="text-right px-2 py-1">Months</th>
                        <th class="text-right px-2 py-1">Sales</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300 dark:divide-gray-700">

                    @forelse ($samples as $item)
                        <tr>
                            <td class="text-left text-sm text-blue-600 ">
                                <div class="flex items-center">

                                    <p class=" ">Download</p>
                                </div>
                            </td>
                            <td class="text-right text-sm py-1">
                                Jan 2023
                            </td>
                            <td class="text-right text-sm py-1">
                                ₱ 1,200
                            </td>
                        </tr>
                    @empty
                    @endforelse


                </tbody>
            </table>

        </div>
    </section>
    <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-72">
        <h2 class="text-xl font-semibold uppercase mb-4">Per Cashier Sales</h2>

        <div class="flex items-center justify-end ">

            <div class="flex py-4">
                <div class="relative mr-4">
                    <input type="search" wire:model="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                    <div class="absolute inset-y-0 left-2 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
                <input type="date" wire:model="selectedDate"
                    class="ml-4 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
            </div>



        </div>

        <div class="border-t pt-4 pb-6 filamemt-report-table">
            <table class="w-full">
                <thead class="divide-y divide-gray-300 dark:divide-gray-700">
                    <tr>
                        <th class="px-2 py-1"></th>
                        <th class="px-2 py-1">Cashier</th>
                        <th class="px-2 py-1">Months</th>
                        <th class="text-right px-2 py-1">Sales</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300 dark:divide-gray-700">
                    @forelse ($samples as $item)
                        <tr>
                            <td class="text-left text-sm text-blue-600">
                                <p class="flex items-center">Download</p>
                            </td>
                            <td class="text-left text-sm text-blue-600">
                                <p class="flex items-center">Anna Maries Kate</p>
                            </td>
                            <td class="text-left text-sm py-1">
                                Jan 2023
                            </td>
                            <td class="text-right text-sm py-1">
                                ₱ 1,200
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </section> 
   


    <!-- Light mode colors -->
    {{-- <div class="flex items-center justify-between mb-4">

                <p class="text-3xl font-bold text-blue-500 uppercase"> {{ now()->format('M-Y') }} </p>
                <p class="text-3xl font-bold text-blue-500 uppercase"> Sales </p>
            </div> --}}
    {{-- <div class="flex items-center justify-between mt-4">
                <button class="flex items-center text-blue-600 dark:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-8 w-8 mr-4" fill="#4CAF50">
                        <path fill="#4CAF50" d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z" />
                        <path fill="#FFF"
                            d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z" />
                        <path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z" />
                        <path fill="#FFF"
                            d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z" />
                    </svg>
                    <p class="text-blue-600 dark:text-blue-600 ml-4 text-xl uppercase">
                        Download
                    </p>

                </button>
                <p class="text-3xl font-bold text-blue-500">213,123</p>


            </div> --}}
    {{-- <section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-72 ">
        <h2 class="text-xl font-semibold mb-2 uppercase">Daily Sales</h2>

        <div>
            <input type="date" wire:model="selectedDate" class="bg-white dark:bg-gray-800" />
        </div>
        
        {{$this->form}}
        <div class="flex items-center justify-between mt-4">
            <button class="flex items-center text-blue-600 dark:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="h-8 w-8 mr-4" fill="#4CAF50">
                    <path fill="#4CAF50" d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z" />
                    <path fill="#FFF"
                        d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z" />
                    <path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z" />
                    <path fill="#FFF"
                        d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z" />
                </svg>
                <p class="text-blue-600 dark:text-blue-600 ml-4 text-xl uppercase">
                    Download
                </p>

            </button>
            <p class="text-3xl font-bold text-blue-500">213,123</p>


        </div>
    </section> 
    --}}


</x-filament::page>
