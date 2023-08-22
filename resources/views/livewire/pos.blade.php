{{-- 
<div class="flex min-h-screen bg-gray-200">
    <main class="pos-container min-h-full w-full ">
        <section class="bg-[#279EFF] item1  flex items-center justify-center text-white">
            <a href="#" class="inline-block px-6 transition-all hover:bg-blue-400 py-6"> Admin</a>
            <a href="#" class="inline-block px-6 transition-all hover:bg-blue-400 py-6"> Reports</a>
            <a href="#" class="inline-block px-6 transition-all hover:bg-blue-400 py-6"> Sales</a>
            <a href="#" class="inline-block px-6 transition-all hover:bg-blue-400 py-6"> Help</a>
        </section>
        <section class="bg-[#279EFF] item2  p-6">
            <div class="flex items-center justify-between h-full flex-col">
            <div class="grid grid-cols-3 content-start gap-4"> 
               <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white"> Button 1 </button>
            </div>
            <div class="w-full">
                <button class="block p-6 transition-all hover:bg-blue-500 text-white rounded border border-white w-full text-center mt-6"> Button 1 </button>

            </div>
    </div>
        </section>
        <section class="bg-[#279EFF] item3 p-6 min-h-full">
          
            <x-input icon="search"  placeholder="Search"  class="mb-6"/>

            <div class="overflow-auto">
                <table class="min-w-full divide-y divide-gray-300  ">
                    <thead class="">
                  <tr class="">
                    <th scope="col" class="py-1.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-3">Item Name</th>
                    <th scope="col" class="px-3 py-1.5 text-left text-sm font-semibold text-white">Price</th>
                    <th scope="col" class="px-3 py-1.5 text-left text-sm font-semibold text-white">Id Number</th>
                    <th scope="col" class="px-3 py-1.5 text-left text-sm font-semibold text-white">Barcode</th>
                    <th scope="col" class="relative py-1.5 pl-3 pr-4 sm:pr-3">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="">

                    @forelse($samples as $sample)
                    <tr class="">
                        <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm font-medium text-white sm:pl-3">WBMX SPEKKER</td>
                        <td class="whitespace-nowrap px-3 py-2 text-sm text-white">₱ 500 </td>
                        <td class="whitespace-nowrap px-3 py-2 text-sm text-white">122233612312</td>
                        <td class="whitespace-nowrap px-3 py-2 text-sm text-white">axhh272bab7123sadsdfgbgh12ashjdgwsrsdfsd</td>
                        <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-3 text-white">
                           <button class="flex items-center justify-center">

                               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                            
                            Remove
                        </button>
                              
                        </td>
                      </tr>
                    @empty
                    @endforelse
                 
    
                </tbody>
              </table>
            </div>


        </section>
        <section class="bg-[#279EFF] item4 p-6 text-white">
            <div class="flex item-center h-full w-full justify-between">
                <p> Total</p>
                <p>₱ 100,000,00</p>
            </div>
        </div>
    </main>
</div> --}}


<div class="flex min-h-screen bg-gray-200">
    <main class="pos-container min-h-full w-full ">
        <section class="bg-[#040D12] item1 flex items-center justify-between text-white px-6">
            <div class="text-center px-4">
                <p class="text-lg text-center">
                    J7 TECH

                </p>
            </div>
            <div class="flex items-center justify-center ">

                <a href="#" class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-6"> 
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mb-1">
                        <path fill-rule="evenodd" d="M15.75 1.5a6.75 6.75 0 00-6.651 7.906c.067.39-.032.717-.221.906l-6.5 6.499a3 3 0 00-.878 2.121v2.818c0 .414.336.75.75.75H6a.75.75 0 00.75-.75v-1.5h1.5A.75.75 0 009 19.5V18h1.5a.75.75 0 00.53-.22l2.658-2.658c.19-.189.517-.288.906-.22A6.75 6.75 0 1015.75 1.5zm0 3a.75.75 0 000 1.5A2.25 2.25 0 0118 8.25a.75.75 0 001.5 0 3.75 3.75 0 00-3.75-3.75z" clip-rule="evenodd" />
                      </svg>
                      
                  
                Admin</a>
            <a href="#" class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-6"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mb-1">
                    <path fill-rule="evenodd" d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z" clip-rule="evenodd" />
                    <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                  </svg>
                  
                Reports</a>
            <a href="#" class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-6"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mb-1">
                    <path fill-rule="evenodd" d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z" clip-rule="evenodd" />
                  </svg>
                  
                Sales</a>
            <a href="#" class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mb-1">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                  </svg>
                  
                Help</a>
            <a href="#" class="flex items-center flex-col justify-center px-6 transition-all hover:bg-orange-400 rounded py-6">
                <i class="fa-solid fa-right-from-bracket mb-1 text-lg "></i>
                Logout</a>
            </div>
            <div class="text-center px-4">
                <p>{{now()->format('d, M Y ')}}</p>
                <p>{{now()->format('l h:i:s-A')}}</p>
            </div>
        </section>
        <section class=" item2 p-6">
            
            <div class="flex items-center justify-between h-full flex-col">
                
                <div class="grid grid-cols-3 content-start gap-4">
                    <div class="bg-white p-6 col-span-3 flex items-center justify-center ">
                        <p class="text-sm text-center text-gray-400">Pos System J7 It Solutionm</p>
                    </div>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Check Item </button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Calculator </button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Remove Item </button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 3</button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 4</button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 5 </button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 6</button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 7</button>
                    <button class="block p-6 bg-black transition-all hover:bg-blue-500 text-white leading-5  "> Feature 8 </button>
                </div>
                <div class="w-full">
                    <div class="w-full p-4  bg-gray-300">
                        <div class="flex items-center justify-between">
                            <p class=" font-semibold text-gray-700 text-md">Subtotal</p>
                            <p class="  font-semibold text-gray-700 text-md">$1,000,000</p>
        
                        </div>
                        <div class="flex items-center justify-between">
                            <p class=" font-semibold text-red-600 text-sm">Discount</p>
                            <p class=" font-semibold text-red-600 text-sm">$1,000,000</p>
        
                        </div>
                        <div class="border-2 my-4 border-dashed  bg-gray-600"></div>
                        <div class="flex items-center justify-between mt-6">
                            <p class="text-lg font-bold text-gray-800">Total</p>
                            <p class="text-lg font-bold text-gray-800 ">$1,000,000</p>
        
                        </div>
                    </div>
                    <div class="w-full">
                        <button class=" p-6 bg-green-600 transition-all hover:bg-blue-500 text-white   w-full flex items-center justify-center text-center mt-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 mr-2 ">
                                <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z" clip-rule="evenodd" />
                          </svg>
                          
                          Confirm </button>
                        </div>
                    </div>
            </div>
        </section>
        <section class="bg-white item3 p-6 ">
            <div class=" p-6">

           
                <h1 class="text-2xl font-bold">Sales Order</h1>
            <div class="grid grid-cols-4">
                <div></div>
                <div></div>
                <div></div>

                <x-input icon="search" placeholder="Search" class="mb-6" />

            </div>
            <div class="overflow-auto  t-container">
                <table class="min-w-full divide-y divide-gray-200 ">
                    <thead>
                        <tr>
                            <th class="py-1.5 pl-4 pr-3 text-left text-sm  text-gray-500 sm:pl-3">Item Name</th>
                            <th class="px-3 py-1.5 text-left text-sm font-semibold text-gray-500">Price</th>
                            <th class="px-3 py-1.5 text-left text-sm font-semibold text-gray-500">Id Number</th>
                            <th class="px-3 py-1.5 text-left text-sm font-semibold text-gray-500">Barcode</th>
                            <th class="relative py-1.5 pl-3 pr-4 sm:pr-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 ">
                        @forelse($samples as $sample)
                        <tr>
                            <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm font-medium text-gray-500 sm:pl-3">Product 1</td>
                            <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">$100</td>
                            <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">123456</td>
                            <td class="whitespace-nowrap px-3 py-2 text-sm text-gray-500">ABC123</td>
                            <td class="relative whitespace-nowrap py-2 pl-3 pr-4 text-right text-sm font-medium sm:pr-3 text-gray-800">
                                <button class="flex items-center justify-center bg-red-700 text-white  p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6  ">
                                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                        <!-- Repeat rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
        </section>
        <section class="bg-white item4 p-6  ">
            {{-- <div class="bg-gray-300 p-6 text-center">
                <p>Please COnfirm that the balanmce is 500 perss</p>
            </div> --}}
            <div class="grid grid-cols-4 gap-4">
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
                <div class="p-4 flex items-center h-24 justify-center text-center text-white  bg-black "> Feature </div>
            </div>
           
        </section>
    </main>
</div>