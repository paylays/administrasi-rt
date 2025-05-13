@extends('layouts.vertical', ['title' => 'Pricing', 'subTitle' => 'Pages', 'pageTitle' => 'Pricing'])

@section('content')

<div class="2xl:px-32 mx-auto ">

    <div class="max-w-lg mx-auto text-center">
        <h2 class="text-2xl font-medium dark:text-white mb-2">Our <span class="font-bold">Plans</span></h2>
        <p class="text-gray-600 dark:text-gray-400">We have plans and prices that fit your business perfectly. Make your client site a success with our products.</p>
    </div> <!-- Title end -->

    <div class="mt-10">
        <div class="grid lg:grid-cols-3 gap-6">

            <div class="card">
                <div class="text-center p-6">
                    <h6 class="uppercase">Professional Pack</h6>
                    <div class="bg-primary/20 text-primary border border-primary/50 rounded-full text-2xl flex items-center justify-center w-16 h-16 mx-auto my-6">
                        <i class="ri-group-line"></i>
                    </div>
                    <h2 class="text-3xl mb-6">$19 <span class="text-sm uppercase font-medium text-gray-400">/ Month</span></h2>

                    <ul class="flex flex-col gap-6">
                        <li>10 GB Storage</li>
                        <li>500 GB Bandwidth</li>
                        <li>No Domain</li>
                        <li>1 User</li>
                        <li>Email Support</li>
                        <li>24x7 Support</li>
                    </ul> <!-- ul end -->

                    <div class="mt-14">
                        <button type="button" class="btn bg-primary text-white w-full">Change Plan</button>
                    </div> <!-- button end -->
                </div>
            </div> <!-- card end -->

            <div class="card">
                <div class="text-center p-6">
                    <h6 class="uppercase">Business Pack</h6>
                    <div class="bg-danger/20 text-danger border border-danger/50 rounded-full text-2xl flex items-center justify-center w-16 h-16 mx-auto my-6">
                        <i class="ri-briefcase-2-line"></i>
                    </div>
                    <h2 class="text-3xl mb-6">$29 <span class="text-sm uppercase font-medium text-gray-400">/ Month</span></h2>

                    <ul class="flex flex-col gap-6">
                        <li>50 GB Storage</li>
                        <li>900 GB Bandwidth</li>
                        <li>2 Domain</li>
                        <li>10 User</li>
                        <li>Email Support</li>
                        <li>24x7 Support</li>
                    </ul> <!-- ul end -->

                    <div class="mt-14">
                        <button type="button" class="btn bg-danger/70 text-white w-full">Current Plan</button>
                    </div> <!-- button end -->
                </div>
            </div> <!-- card end -->

            <div class="card">
                <div class="text-center p-6">
                    <h6 class="uppercase">Enterprise Pack</h6>
                    <div class="bg-primary/20 text-primary border border-primary/50 rounded-full text-2xl flex items-center justify-center w-16 h-16 mx-auto my-6">
                        <i class="ri-community-line"></i>
                    </div>
                    <h2 class="text-3xl mb-6">$39 <span class="text-sm uppercase font-medium text-gray-400">/ Month</span></h2>

                    <ul class="flex flex-col gap-6">
                        <li>100 GB Storage</li>
                        <li>Unlimited Bandwidth</li>
                        <li>10 Domain</li>
                        <li>Unlimited User</li>
                        <li>Email Support</li>
                        <li>24x7 Support</li>
                    </ul> <!-- ul end -->

                    <div class="mt-14">
                        <button type="button" class="btn bg-primary text-white w-full">Change Plan</button>
                    </div> <!-- button end -->
                </div>
            </div> <!-- card end -->

        </div> <!-- grid end -->
    </div>

</div> <!-- main-div end -->

@endsection