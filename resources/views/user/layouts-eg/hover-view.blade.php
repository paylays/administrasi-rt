@extends('user.layouts.vertical', ['title' => 'Sidebar Hover','subTitle' => 'Menu', 'pageTitle' => 'Sidebar Hover','sidenavView' => 'hover'])

@section('css')
    @vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')
    <div class="grid 2xl:grid-cols-5 lg:grid-cols-6 md:grid-cols-2 gap-6 mb-6">
        <div class="2xl:col-span-1 lg:col-span-2">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Number of Customers">Customers</h5>
                            <h3 class="text-2xl my-6">54,214</h3>
                            <p class="text-gray-400 truncate">
                                <span class="bg-success rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-arrow-up-line"></i> 2,541</span>
                                <span>Since last month</span>
                            </p>
                        </div>
                        <div class="shrink">
                            <div id="widget-customers" class="apex-charts" data-colors="#47ad77,#e3e9ee"></div>
                        </div>
                    </div>
                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

        <div class="2xl:col-span-1 lg:col-span-2">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Number of Orders">Orders</h5>
                            <h3 class="text-2xl my-6">7,543</h3>
                            <p class="text-gray-400 truncate">
                                <span class="bg-danger rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-arrow-down-line"></i> 1.08%</span>
                                <span>Since last month</span>
                            </p>
                        </div>
                        <div id="widget-orders" class="apex-charts" data-colors="#3e60d5,#e3e9ee"></div>
                    </div>
                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

        <div class="2xl:col-span-1 lg:col-span-2">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Average Revenue">Revenue</h5>
                            <h3 class="text-2xl my-6">$9,254</h3>
                            <p class="text-gray-400 truncate">
                                <span class="bg-danger rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-arrow-down-line"></i> 7.00%</span>
                                <span>Since last month</span>
                            </p>
                        </div>
                        <div id="widget-revenue" class="apex-charts" data-colors="#16a7e9,#e3e9ee"></div>
                    </div>

                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

        <div class="2xl:col-span-1 lg:col-span-3">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Growth">Growth</h5>
                            <h3 class="text-2xl my-6">+ 20.6%</h3>
                            <p class="text-gray-400 truncate">
                                <span class="bg-success rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-arrow-up-line"></i> 4.87%</span>
                                <span>Since last month</span>
                            </p>
                        </div>
                        <div id="widget-growth" class="apex-charts" data-colors="#ffc35a,#e3e9ee"></div>
                    </div>

                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

        <div class="2xl:col-span-1 lg:col-span-3 md:col-span-2">
            <div class="card">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="grow overflow-hidden">
                            <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Conversation Ration">Conversation</h5>
                            <h3 class="text-2xl my-6">9.62%</h3>
                            <p class="text-gray-400 truncate">
                                <span class="bg-success rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-arrow-up-line"></i> 3.07%</span>
                                <span>Since last month</span>
                            </p>
                        </div>
                        <div id="widget-conversation" class="apex-charts" data-colors="#f15776,#e3e9ee"></div>
                    </div>

                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>
    </div>

    <div class="grid lg:grid-cols-3 gap-6 mb-6">
        <div class="lg:col-span-2">
            <div class="card">
                <div class="flex card-header justify-between items-center">
                    <h4 class="card-title">Revenue</h4>
                    <div>
                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                            <i class="ri-more-2-fill text-xl"></i>
                        </button>
                        <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Sales Report</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Export Report</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Profit</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Action</a>
                        </div>
                    </div>
                </div>
                <div class="bg-light/40 border-b border-gray-100 dark:bg-light/5 dark:border-b-gray-700">
                    <div class="flex flex-wrap justify-around items-center text-center">
                        <div class="w-1/2 lg:w-1/4">
                            <p class="text-gray-400 mt-6 mb-4"><i class="ri-donut-chart-fill"></i> Current Week</p>
                            <h3 class="text-2xl font-normal mb-6">
                                <span>$1705.54</span>
                            </h3>
                        </div>
                        <div class="w-1/2 lg:w-1/4">
                            <p class="text-gray-400 mt-6 mb-4"><i class="ri-donut-chart-fill"></i> Previous Week</p>
                            <h3 class="text-2xl font-normal mb-6">
                                <span>$6,523.25 <i class="ri-corner-right-up-fill text-success"></i></span>
                            </h3>
                        </div>
                        <div class="w-1/2 lg:w-1/4">
                            <p class="text-gray-400 mt-6 mb-4"><i class="ri-donut-chart-fill"></i> Conversation</p>
                            <h3 class="text-2xl font-normal mb-6">
                                <span>8.27%</span>
                            </h3>
                        </div>
                        <div class="w-1/2 lg:w-1/4">
                            <p class="text-gray-400 mt-6 mb-4"><i class="ri-donut-chart-fill"></i> Customers</p>
                            <h3 class="text-2xl font-normal mb-6">
                                <span>69k <i class="ri-corner-right-down-line text-danger"></i></span>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div dir="ltr">
                        <div id="revenue-chart" class="apex-charts mt-1" data-colors="#3e60d5,#47ad77"></div>
                    </div>
                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="flex px-6 py-3 justify-between items-center">
                    <h4 class="card-title">Total Sales</h4>
                    <div>
                        <div>
                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                                <i class="ri-more-2-fill text-xl"></i>
                            </button>
                            <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Sales Report</a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Export Report</a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Profit</a>
                                <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Action</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="px-5 py-3.5 bg-warning/10 text-warning border-y border-warning/20">
                    Something went wrong. Please <strong><a href="javascript:void(0)" class="font-bold underline">refresh</a></strong> to get new data!
                </div>

                <div class="p-6 pt-0">
                    <div id="average-sales" class="apex-charts mb-3" data-colors="#3e60d5,#47ad77,#fa5c7c,#16a7e9"></div>

                    <div class="mb-1.5">
                        <h5 class="text-base font-medium mb-2.5">Brooklyn, New York</h5>
                        <div class="flex items-center gap-2">
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary w-3/4" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="font-bold">72k </span>
                        </div>
                    </div>

                    <div class="mb-1.5">
                        <h5 class="text-base font-medium mb-2.5">The Castro, San Francisco</h5>
                        <div class="flex items-center gap-2">
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary w-1/3" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="font-bold">39k</span>
                        </div>
                    </div>

                    <div class="mb-1.5">
                        <h5 class="text-base font-medium mb-2.5">Kovan, Singapore</h5>
                        <div class="flex items-center gap-2">
                            <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary w-3/5" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="font-bold">61k </span>
                        </div>
                    </div>
                </div> <!-- end p-6-->
            </div> <!-- end card-->
        </div>

    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-5 col-span-12">
            <div class="card">
                <div class="card-header flex justify-between items-center">
                    <h4 class="card-title">Top Selling Products</h4>
                    <a href="javascript:void(0);" class="btn btn-sm !text-sm bg-info text-white">Export <i class="ri-download-line ms-1"></i></a>
                </div>
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="bg-light/40 border-b border-gray-100 dark:bg-light/5 dark:border-b-gray-700">
                        <tr>
                            <th class="py-1.5 px-4">Product</th>
                            <th class="py-1.5 px-4">Price</th>
                            <th class="py-1.5 px-4">Orders</th>
                            <th class="py-1.5 px-4">Avl. Quantity</th>
                            <th class="py-1.5 px-4">Seller</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="p-4">ASOS Ridley High Waist</td>
                            <td class="p-4">$79.49</td>
                            <td class="p-4">82</td>
                            <td class="p-4">8,540</td>
                            <td class="p-4">Adidas</td>
                        </tr>
                        <tr>
                            <td class="p-4">Marco Lightweight Shirt</td>
                            <td class="p-4">$12.5</td>
                            <td class="p-4">58</td>
                            <td class="p-4">6,320</td>
                            <td class="p-4">Puma</td>
                        </tr>
                        <tr>
                            <td class="p-4">Half Sleeve Shirt</td>
                            <td class="p-4">$9.99</td>
                            <td class="p-4">254</td>
                            <td class="p-4">10,258</td>
                            <td class="p-4">Nike</td>
                        </tr>
                        <tr>
                            <td class="p-4">Lightweight Jacket</td>
                            <td class="p-4">$69.99</td>
                            <td class="p-4">560</td>
                            <td class="p-4">1,020</td>
                            <td class="p-4">Puma</td>
                        </tr>
                        <tr>
                            <td class="p-4">Marco Sport Shoes</td>
                            <td class="p-4">$119.99</td>
                            <td class="p-4">75</td>
                            <td class="p-4">357</td>
                            <td class="p-4">Adidas</td>
                        </tr>
                        <tr>
                            <td class="p-4">Custom Women's T-shirts</td>
                            <td class="p-4">$45.00</td>
                            <td class="p-4">85</td>
                            <td class="p-4">135</td>
                            <td class="p-4">Branded</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="text-center">
                    <a href="#!" class="btn text-primary underline font-bold mb-2">View All</a>
                </div>
            </div>
        </div>

        <div class="xl:col-span-7 col-span-12">
            <div class="card h-full">
                <div class="flex card-header justify-between items-center !border-0">
                    <h4 class="card-title">Revenue By Locations</h4>
                    <div>
                        <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                            <i class="ri-more-2-fill text-xl"></i>
                        </button>
                        <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Sales Report</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Export Report</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Profit</a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Action</a>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="grid lg:grid-cols-3 gap-6">
                        <div class="lg:col-span-2">
                            <div id="world-map-markers" class="my-4"></div>
                        </div>
                        <div dir="ltr">
                            <div id="country-chart" class="apex-charts" data-colors="#47ad77"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div>
    </div>
@endsection

@section('script-bottom')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
