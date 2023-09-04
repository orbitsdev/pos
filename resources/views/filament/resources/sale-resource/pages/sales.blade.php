<x-filament::page>

<style>
    .xc{
        color: black !important;
    }
</style>
 
<section class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 w-72 ">


    {{-- YYYY-MM-DD (e.g., "2023-08-29")
    YYYY-MM (e.g., "2023-08")
    YYYY/M/D (e.g., "2023/8/29")
    MM/DD/YYYY (e.g., "08/29/2023")
    DD/MM/YYYY (e.g., "29/08/2023")
    MMM DD, YYYY (e.g., "Aug 29, 2023")
    Month DD, YYYY (e.g., "August 29, 2023")
    DD Month YYYY (e.g., "29 August 2023")
    Month DD YYYY (e.g., "August 29 2023")
    DD-MMM-YYYY (e.g., "29-Aug-2023")
    MMM DD, YY (e.g., "Aug 29, 23") --}}
<div class="flex items-center justify-between mb-4">
    <h2 class="text-xl font-semibold  uppercase ">Daily Sales</h2>
    
    <x-input placeholder="e.g January 21, 2023" wire:model.debounce.1000ms="daily_sales_search" class="xc "/>
    

</div>

    <div class=" pt-4 py-6 filamemt-report-table bg-red-200 overflow-auto px-10">
        <table class="w-full">
            <thead class="sticky divide-y divide-gray-300 dark:divide-gray-700">
                <tr class="">
                    <th class="text-left  py-1"></th>
                    <th class="text-left  py-1">Date</th>
                    <th class="text-left  py-1">Sales</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-300 dark:divide-gray-700">
              
                @forelse ($daily_sales as $item)
                <tr>
                    <td class="text-left text-sm text-blue-600">
                        <button wire:click="downloadDailySales({{$item}})"  class="flex items-center">
                            <p class="">Download</p>
                        </button>
                    </td>
                    <td class="text-left text-sm py-1">
                        @if ($item->sale_date)
                        {{ $item->sale_date->format('F Y d') }}
                    @else
                        <span class="text-gray-500">N/A</span>
                    @endif
                    </td>
                    <td class="text-left text-sm py-1">
                        @if ($item->total_sales)
                        {{ $item->total_sales }}
                    @else
                        <span class="text-gray-500">N/A</span>
                    @endif
                     
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-sm py-1">
                        No Result Found
                    </td>
                </tr>
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

                {{-- @forelse ($daily_sales as $item)
                    <tr>
                        <td class="text-left text-sm text-blue-600 ">
                            <div class="flex items-center">

                                <p class=" ">Download</p>
                            </div>
                        </td>
                        <td class="text-right text-sm py-1">
                            {{$item->created_at->format('F Y')}}
                        </td>
                        <td class="text-right text-sm py-1">
                            {{$item->total}}
                        </td>
                    </tr>
                @empty
                @endforelse --}}


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
</x-filament::page>
