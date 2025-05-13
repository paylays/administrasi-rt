@extends('layouts.vertical', ['title' => 'Invoice', 'subTitle' => 'Pages', 'pageTitle' => 'Invoice' ])

@section('content')

<div class="card">
    <div class="p-6">

        <div class="mb-10">
            <div class="flex justify-between items-center">

                <div>
                    <img src="/images/logo-dark.png" alt="logo-dark" class="h-6">
                </div> <!-- logo-dark end -->

                <div>
                    <h4 class="text-lg">Invoice</h4>
                </div>

            </div> <!-- flex-end -->
        </div>

        <div class="mb-14">
            <div class="grid sm:grid-cols-2 gap-6">

                <div class="col-span-1">
                    <p class="font-medium mb-4"><b>Hello, Tosha Minner</b></p>
                    <p class="text-xs">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                </div> <!-- col-end -->

                <div class="col-span-1">
                    <div class="flex sm:justify-end space-y-2">

                        <div class="grid gap-3">

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-2 font-semibold text-gray-500 dark:text-gray-200">Order Date:</h6>
                                <p class="col-span-2 sm:text-end text-gray-400">Jan 17, 2023</p>
                            </div> <!-- grid-end -->

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-2 font-semibold text-gray-500 dark:text-gray-200">Order Status:</h6>
                                <p class="col-span-2 sm:text-end text-gray-400">
                                    <span class="inline-flex items-center px-1 rounded-full text-xs font-medium bg-success text-white">Paid</span>
                                </p>
                            </div> <!-- grid-end -->

                            <div class="grid grid-cols-4 gap-x-3">
                                <h6 class="col-span-2 font-semibold text-gray-500 dark:text-gray-200">Order ID:</h6>
                                <p class="col-span-2 sm:text-end text-gray-400">#123456</p>
                            </div> <!-- grid-end -->

                        </div> <!-- grid-end -->

                    </div> <!-- flex-end -->
                </div> <!-- col-end -->

            </div> <!-- grid-end -->
        </div>

        <div class="mb-10">
            <div class="grid sm:grid-cols-3 gap-6">

                <div class="col-span-1">
                    <h6 class="text-xs mb-3">Billing Address</h6>
                    <address class="not-italic">Lynne K. Higby <br> 795 Folsom Ave, Suite 600 <br> San Francisco, CA 94107 <br> P: (123) 456-7890 </address>
                </div> <!-- col-end -->

                <div class="col-span-1">
                    <h6 class="text-xs mb-3">Shipping Address</h6>
                    <address class="not-italic">Tosha Minner <br> 795 Folsom Ave, Suite 600 <br> San Francisco, CA 94107 <br> P: (123) 456-7890 </address>
                </div> <!-- col-end -->

                <div class="col-span-1">
                    <img src="/images/barcode.png" alt="barcode" class="sm:ms-auto">
                </div> <!-- col-end -->

            </div> <!-- grid-end -->
        </div>

        <div class="mb-5">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">

                            <table class="min-w-full">

                                <thead class="border-t border-b py-3 bg-gray-100 border-gray-200 dark:border-gray-600">
                                    <tr>
                                        <th scope="col" class="px-6 py-2 whitespace-nowrap text-left font-semibold text-gray-500">#</th>
                                        <th scope="col" class="px-6 py-2 whitespace-nowrap text-left font-semibold text-gray-500">Item</th>
                                        <th scope="col" class="px-6 py-2 whitespace-nowrap text-left font-semibold text-gray-500">Quantity</th>
                                        <th scope="col" class="px-6 py-2 whitespace-nowrap text-left font-semibold text-gray-500">Unit Cost</th>
                                        <th scope="col" class="px-6 py-2 whitespace-nowrap text-right font-semibold text-gray-500">Total</th>
                                    </tr> <!-- tr-end -->
                                </thead> <!-- thead-end -->

                                <tbody>

                                    <tr class="text-gray-500 transition-all duration-300 hover:bg-gray-100 dark:text-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap font-medium">1</td>
                                        <td class="px-6 py-2 whitespace-nowrap"><b>Laptop</b> <br> Brand Model VGN-TXN27N/B 11.1" Notebook PC </td>
                                        <td class="px-6 py-2 whitespace-nowrap"></td>
                                        <td class="px-6 py-2 whitespace-nowrap">$1799.00</td>
                                        <td class="px-6 py-2 whitespace-nowrap text-right">$1799.00</td>
                                    </tr> <!-- tr-end -->

                                    <tr class="text-gray-500 transition-all duration-300 hover:bg-gray-100 dark:text-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap font-medium">2</td>
                                        <td class="px-6 py-2 whitespace-nowrap"><b>Warranty</b> <br> Two Year Extended Warranty - Parts and Labor </td>
                                        <td class="px-6 py-2 whitespace-nowrap">3</td>
                                        <td class="px-6 py-2 whitespace-nowrap">$499.00</td>
                                        <td class="px-6 py-2 whitespace-nowrap text-right">$1497.00</td>
                                    </tr> <!-- tr-end -->

                                    <tr class="text-gray-500 transition-all duration-300 hover:bg-gray-100 dark:text-gray-200">
                                        <td class="px-6 py-2 whitespace-nowrap font-medium">1</td>
                                        <td class="px-6 py-2 whitespace-nowrap"><b>LED</b> <br> 80cm (32) HD Ready LED TV</td>
                                        <td class="px-6 py-2 whitespace-nowrap">2</td>
                                        <td class="px-6 py-2 whitespace-nowrap"> $412.00</td>
                                        <td class="px-6 py-2 whitespace-nowrap text-right">$824.00</td>
                                    </tr> <!-- tr-end -->

                                </tbody> <!-- tbody-end -->

                            </table> <!-- table-end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid sm:grid-cols-2 gap-6">

            <div class="col-span-1">
                <p class="font-medium text-xs mb-2">Notes:</p>
                <p class="text-xs">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</p>
            </div> <!-- col-end -->

            <div class="col-span-1">
                <div class="flex sm:justify-end space-y-2">

                    <div class="grid gap-3">

                        <div class="grid grid-cols-4 gap-x-3">
                            <h6 class="col-span-2 font-semibold text-gray-500 dark:text-gray-200">Sub-total:</h6>
                            <p class="col-span-2 sm:text-end text-gray-400">$4120.00</p>
                        </div> <!-- grid-end -->

                        <div class="grid grid-cols-4 gap-x-3">
                            <h6 class="col-span-2 font-semibold text-gray-500 dark:text-gray-200">VAT (12.5):</h6>
                            <p class="col-span-2 sm:text-end text-gray-400">$515.00</p>
                        </div> <!-- grid-end -->

                        <div class="grid grid-cols-4 gap-x-3">
                            <h6 class="col-span-5 sm:text-xl text-lg font-medium text-gray-500 dark:text-gray-200">$4635.00 USD</h6>
                        </div> <!-- grid-end -->

                    </div> <!-- grid-end -->

                </div> <!-- flex-end -->
            </div> <!-- col-end -->

        </div> <!-- grid-end -->

        <div class="mt-10">
            <div class="flex sm:justify-end gap-2 items-center print:hidden">
                <a href="javascript:window.print()" class="btn bg-primary text-white"><i class="ri-printer-line text-lg me-1"></i> Print</a>
                <button type="button" class="btn bg-primary text-white">Submit</button>
            </div> <!-- flex-end -->
        </div>

    </div>
</div> <!-- card-end -->

@endsection