@extends('layouts.vertical', ['title' => 'Analytics', "subTitle" => "Menu","pageTitle" => "Analytics"])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')

<div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 gap-6 mb-6">
    <div class="card cta-box overflow-hidden">
        <div class="p-6">
            <div class="flex items-center">
                <div>
                    <h3 class="text-xl/7 font-normal mb-6">Enhance your <strong>Campaign</strong> for better outreach</h3>
                    <a href="#" class="text-success font-bold">Go Premium <i class="ri-arrow-right-line"></i></a>
                </div>
                <img class="ms-3" src="/images/svg/email-campaign.svg" width="92" alt="Generic placeholder image">
            </div>
        </div>
        <!-- end p-6 -->
    </div>

    <div class="card">
        <div class="p-6">
            <div class="flex items-center">
                <div class="w-1/2">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Active Users">Active Users</h5>
                    <h2 class="text-3xl my-3 py-0.5" id="active-users-count">825</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-success me-3"><i class="ri-arrow-up-line"></i> 3.27%</span>
                        <span class="whitespace-nowrap">Since previous week</span>
                    </p>
                </div>
                <div class="w-1/2">
                    <div class="text-end">
                        <div id="campaign-sent-chart" data-colors="#16a7e9"></div>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end p-6 -->
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <div class="flex items-center">
                <div class="w-1/2">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Views per minute">Views per minute</h5>
                    <h2 class="text-3xl my-3 py-0.5" id="active-views-count">589</h2>
                    <p class="mb-0 text-muted text-truncate">
                        <span class="text-danger me-3"><i class="ri-arrow-down-line"></i> 2.66%</span>
                        <span class="whitespace-nowrap">Since previous week</span>
                    </p>
                </div>
                <div class="w-1/2">
                    <div class="text-end">
                        <div id="new-leads-chart" data-colors="#47ad77"></div>
                    </div>
                </div>
            </div> <!-- end row-->
        </div> <!-- end p-6 -->
    </div> <!-- end card -->

    <div class="card">
        <div class="card-header !border-0 flex justify-between items-center">
            <h4 class="card-title">Sessions by Browser</h4>
            <div>
                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                    <i class="ri-more-2-fill text-xl"></i>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Refresh Report</a>
                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Export Report</a>
                </div>
            </div>
        </div>

        <div class="p-6 pt-0">
            <div id="sessions-browser" class="apex-charts" data-colors="#16a7e9"></div>

            <div class="mt-1 text-center">
                <ul class="flex items-center justify-around">
                    <li class="flex items-center"><img class="ms-3 pe-1 h-5" src="/images/browsers/chrome.png" alt="chrome"><span class="align-middle">45.87%</span></li>
                    <li class="flex items-center"><img class="ms-3 pe-1 h-5" src="/images/browsers/firefox.png" alt="chrome"><span class="align-middle">3.25%</span></li>
                    <li class="flex items-center"><img class="ms-3 pe-1 h-5" src="/images/browsers/safari.png" alt="chrome"><span class="align-middle">9.68%</span></li>
                    <li class="flex items-center"><img class="ms-3 pe-1 h-5" src="/images/browsers/web.png" alt="chrome"><span class="align-middle">36.87%</span></li>
                </ul>
            </div>
        </div> <!-- end p-6-->
    </div> <!-- end card-->

    <div class="card">
        <div class="card-header flex justify-between items-center !border-0">
            <h4 class="card-title">Sessions by Operating System</h4>
            <div>
                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="bottom-end" type="button">
                    <i class="ri-more-2-fill text-xl"></i>
                </button>
                <div class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-[10rem] z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-md py-1 hidden">
                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Refresh Report</a>
                    <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-slate-100 hover:text-slate-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript: void(0);">Export Report</a>
                </div>
            </div>
        </div>

        <div class="p-6 pt-0">
            <div id="sessions-os" class="apex-charts mt-2" data-colors="#16a7e9,#47ad77,#ffc35a,#f15776"></div>

            <div class="flex text-center mt-2">
                <div class="w-1/2">
                    <h4 class="text-lg font-normal mb-2.5">
                        <span>8,285</span>
                    </h4>
                    <p class="text-muted mb-0">Online System</p>
                </div>
                <div class="w-1/2">
                    <h4 class="text-lg font-normal mb-2.5">
                        <span>3,534</span>
                    </h4>
                    <p class="text-muted mb-0">Offline System</p>
                </div>
            </div>

        </div> <!-- end p-6-->
    </div> <!-- end card-->

    <div class="card">
        <div class="card-header flex justify-between items-center">
            <h4 class="card-title">Views Per Minute</h4>
            <div>
                <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                    <i class="ri-more-2-fill text-xl"></i>
                </button>

                <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                        Sales Report
                    </a>
                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                        Export Report
                    </a>
                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                        Profit
                    </a>
                    <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300" href="javascript:void(0)">
                        Action
                    </a>
                </div>
            </div>
        </div>

        <div class="p-6 pt-0">
            <div id="views-min" class="apex-charts" data-colors="#16a7e9"></div>

            <div class="overflow-x-auto mt-6">
                <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr>
                            <th class="p-2 text-start">Page</th>
                            <th class="p-2 text-start">Views</th>
                            <th class="p-2 text-start">Bounce Rate</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="p-2">
                                <a href="javascript:void(0);" class="text-muted">/adminto/dashboard-analytics</a>
                            </td>
                            <td class="p-2">25</td>
                            <td class="p-2">87.5%</td>
                        </tr>
                        <tr>
                            <td class="p-2">
                                <a href="javascript:void(0);" class="text-muted">/attex/dashboard-crm</a>
                            </td>
                            <td class="p-2">15</td>
                            <td class="p-2">21.48%</td>
                        </tr>
                        <tr>
                            <td class="p-2">
                                <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                            </td>
                            <td class="p-2">10</td>
                            <td class="p-2">63.59%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> <!-- end p-6-->
    </div> <!-- end card-->
</div>


<div class="grid 2xl:grid-cols-2 gap-6 mb-6">
    <div class="card">
        <div class="card-header flex justify-between items-center">
            <h4 class="card-title">Sessions Overview</h4>
            <ul class="hidden lg:flex">
                <li class="px-4 py-2">
                    <a class="block text-sm text-gray-400" href="#">Today</a>
                </li>
                <li class="px-4 py-2">
                    <a class="block text-sm text-gray-400" href="#">7d</a>
                </li>
                <li class="px-4 py-2">
                    <a class="block text-sm text-primary" href="#">15d</a>
                </li>
                <li class="px-4 py-2">
                    <a class="block text-sm text-gray-400" href="#">1m</a>
                </li>
                <li class="px-4 py-2">
                    <a class="block text-sm text-gray-400" href="#">1y</a>
                </li>
            </ul>
        </div>
        <div class="p-6">
            <div class="bg-light-subtle border-top border-bottom border-light">
                <div class="flex flex-wrap items-center text-center">
                    <div class="lg:w-1/4 w-1/2">
                        <p class="text-gray-400 mt-6 mb-4 text-base"><i class="ri-donut-chart-fill"></i> Direct</p>
                        <h3 class="font-normal text-2xl text-gray-500 mb-6">
                            <span>170k</span>
                        </h3>
                    </div>
                    <div class="lg:w-1/4 w-1/2">
                        <p class="text-gray-400 mt-6 mb-4 text-base"><i class="ri-donut-chart-fill"></i> Organic Search</p>
                        <h3 class="font-normal text-2xl text-gray-500 mb-6">
                            <span>12M <i class="ri-corner-right-up-fill text-success"></i></span>
                        </h3>
                    </div>
                    <div class="lg:w-1/4 w-1/2">
                        <p class="text-gray-400 mt-6 mb-4 text-base"><i class="ri-donut-chart-fill"></i> Refferal</p>
                        <h3 class="font-normal text-2xl text-gray-500 mb-6">
                            <span>8.27%</span>
                        </h3>
                    </div>
                    <div class="lg:w-1/4 w-1/2">
                        <p class="text-gray-400 mt-6 mb-4 text-base"><i class="ri-donut-chart-fill"></i> Social</p>
                        <h3 class="font-normal text-2xl text-gray-500 mb-6">
                            <span>69k <i class="ri-corner-right-down-line text-danger"></i></span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6">
            <div dir="ltr">
                <div id="sessions-overview" class="apex-charts" data-colors="#47ad77"></div>
            </div>
        </div> <!-- end p-6-->
    </div> <!-- end card-->

    <div class="card">
        <div class="flex card-header justify-between items-center !border-0">
            <h4 class="card-title">Sessions by country</h4>
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
                    <div id="world-map-markers" class="my-3"></div>
                </div>
                <div dir="ltr">
                    <div id="country-chart" class="apex-charts" data-colors="#16a7e9"></div>
                </div>
            </div>
        </div>
    </div> <!-- end card-->
</div>

<div class="grid xl:grid-cols-3 lg:grid-cols-2 gap-6">
    <div class="card">
        <div class="card-header flex justify-between items-center">
            <h4 class="card-title">Channels</h4>
            <a href="javascript:void(0);" class="btn btn-sm bg-light !text-sm text-gray-800 dark:bg-light/20 dark:text-white">Export <i class="ri-download-line ms-1.5"></i></a>
        </div>

        <div class="">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-light/40 border-b border-gray-100 dark:bg-light/5 dark:border-b-gray-700">
                        <tr>
                            <th class="p-2 text-start">Channel</th>
                            <th class="p-2 text-start">Visits</th>
                            <th class="p-2 text-start w-2/5">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2">Direct</td>
                            <td class="p-2">2,050</td>
                            <td class="p-2">
                                <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2">Organic Search</td>
                            <td class="p-2">1,405</td>
                            <td class="p-2">
                                <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-info" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2">Refferal</td>
                            <td class="p-2">750</td>
                            <td class="p-2">
                                <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2">Social</td>
                            <td class="p-2">540</td>
                            <td class="p-2">
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-2">Other</td>
                            <td class="p-2">8,965</td>
                            <td class="p-2">
                                <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                    <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- end table-responsive-->
        </div> <!-- end p-6-->
    </div> <!-- end card-->

    <div class="card">
        <div class="card-header flex justify-between items-center">
            <h4 class="card-title">Social Media Traffic</h4>
            <a href="javascript:void(0);" class="btn btn-sm bg-light !text-sm text-gray-800 dark:bg-light/20 dark:text-white">Export <i class="ri-download-line ms-1.5"></i></a>
        </div>

        <div class="">

            <table class="w-full">
                <thead class="bg-light/40 border-b border-gray-100 dark:bg-light/5 dark:border-b-gray-700">
                    <tr>
                        <th class="p-2 text-start">Network</th>
                        <th class="p-2 text-start">Visits</th>
                        <th class="p-2 text-start w-2/5">Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">Facebook</td>
                        <td class="p-2">2,050</td>
                        <td class="p-2">
                            <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">Instagram</td>
                        <td class="p-2">1,501</td>
                        <td class="p-2">
                            <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">Twitter</td>
                        <td class="p-2">750</td>
                        <td class="p-2">
                            <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">LinkedIn</td>
                        <td class="p-2">540</td>
                        <td class="p-2">
                            <div class="progress" style="height: 3px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">Other</td>
                        <td class="p-2">13,851</td>
                        <td class="p-2">
                            <div class="flex w-full h-[3px] bg-light rounded-full overflow-hidden dark:bg-gray-700">
                                <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div> <!-- end p-6-->
    </div> <!-- end card-->

    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header flex justify-between items-center">
                <h4 class="card-title">Engagement Overview</h4>
                <a href="javascript:void(0);" class="btn btn-sm bg-light !text-sm text-gray-800 dark:bg-light/20 dark:text-white">Export <i class="ri-download-line ms-1.5"></i></a>
            </div>

            <div class="">

                <table class="w-full">
                    <thead class="bg-light/40 border-b border-gray-100 dark:bg-light/5 dark:border-b-gray-700">
                        <tr>
                            <th class="p-2 text-start w-1/3">Duration (Secs)</th>
                            <th class="p-2 text-start w-1/3">Sessions</th>
                            <th class="p-2 text-start w-1/3">Views</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-2">0-30</td>
                            <td class="p-2">2,250</td>
                            <td class="p-2">4,250</td>
                        </tr>
                        <tr>
                            <td class="p-2">31-60</td>
                            <td class="p-2">1,501</td>
                            <td class="p-2">2,050</td>
                        </tr>
                        <tr>
                            <td class="p-2">61-120</td>
                            <td class="p-2">750</td>
                            <td class="p-2">1,600</td>
                        </tr>
                        <tr>
                            <td class="p-2">121-240</td>
                            <td class="p-2">540</td>
                            <td class="p-2">1,040</td>
                        </tr>
                        <tr>
                            <td class="p-2">141-420 </td>
                            <td class="p-2">56</td>
                            <td class="p-2">886</td>
                        </tr>
                    </tbody>
                </table>
            </div> <!-- end p-6-->
        </div> <!-- end card-->
    </div> <!-- end col-->

</div>
<!-- end row -->

@endsection

@section('script-bottom')
@vite(['resources/js/pages/dashboard-analytics.js'])
@endsection