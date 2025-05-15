@extends('user.layouts.vertical', ['title' => 'Ajukan Surat', 'subTitle' => 'Administrasi Surat' , 'pageTitle' => 'Ajukan Surat'])

@section("content")

<div class="card">
    <div class="p-6">
        <h4 class="card-title mb-1">Pilih Jenis Surat yang Tersedia</h4>

        <div class="pt-5">
            <div data-fc-type="accordion" id="parent-accordion">

                <!-- Accordion item one -->
                <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                    <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                    <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    Surat Pernyataan Belum Menikah
                </button> <!-- button end -->

                <div class="w-full overflow-hidden transition-[height] duration-300">
                    <div data-fc-type="accordion" class="ps-6" id="child-accordion">

                        <!-- Accordion sub item one -->
                        <button data-fc-type="collapse" data-fc-parent="child-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                            <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                            <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                            Deskripsi
                            <span class="ri-information-fill text-lg"></span>
                        </button> <!-- button end -->

                        <div class="w-full overflow-hidden transition-[height] duration-300">
                            <div class="py-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Nulla debitis ad dolores vitae dolore ut omnis possimus optio 
                                    quidem nesciunt perferendis, non numquam nobis minima incidunt, 
                                    sapiente repudiandae atque. Delectus.
                                </p>
                            </div>
                        </div>

                        <!-- Accordion sub item two -->
                        <button data-fc-type="collapse" data-fc-parent="child-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                            <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                            <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                            Berkas dan Persyaratan
                            <span class="ri-file-copy-fill text-lg"></span>
                        </button> <!-- button end -->

                        <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="py-4 px-5">
                                <p class="text-gray-800 dark:text-gray-200">
                                    <em>This is the second item's accordion body.</em> It is hidden by
                                    default, until the collapse plugin adds the appropriate classes that we
                                    use to style each element. These classes control the overall appearance,
                                    as well as the showing and hiding via CSS transitions.
                                </p>
                                <div class="mt-2">
                                    <button type="button" class="btn bg-primary/25 text-primary hover:bg-primary hover:text-white">Ajukan Surat Sekarang</button>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Accordion end -->
                </div>

                <!-- Accordion item two -->
                <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                    <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                    <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    Surat Pernyataan B
                </button> <!-- button end -->

                <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="py-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                            <em>This is the second item's accordion body.</em> It is hidden by default,
                            until the collapse plugin adds the appropriate classes that we use to style each
                            element. These classes control the overall appearance, as well as the showing
                            and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

                <!-- Accordion item three -->
                <button data-fc-type="collapse" data-fc-parent="parent-accordion" class="fc-collapse-open:text-primary py-2 px-5 inline-flex items-center gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                    <span class="ri-add-line text-lg block fc-collapse-open:hidden"></span>
                    <span class="ri-subtract-line text-lg hidden fc-collapse-open:block"></span>
                    Surat Pernyataan C
                </button> <!-- button end -->

                <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="py-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                            <em>This is the first item's accordion body.</em> It is hidden by default, until
                            the collapse plugin adds the appropriate classes that we use to style each
                            element. These classes control the overall appearance, as well as the showing
                            and hiding via CSS transitions.
                        </p>
                    </div>
                </div>

            </div> <!-- Accordion end -->
        </div>

    </div> <!-- card-body end -->
</div> <!-- card end -->

<div class="my-6">
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Riwayat Pengajuan Surat</h4>
</div>

<div class="grid sm:grid-cols-3 gap-6">
    <div class="card border border-success">
        <div class="p-6">
            <h3 class="text-base font-bold text-success dark:text-white mb-2">Special title treatment</h3><!-- end card title -->
            <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to additional content.</p>
            <a class="btn bg-success text-white mt-2" href="#">Button</a><!-- Button End -->
        </div>
    </div><!-- Card End -->
    <div class="card border border-danger">
        <div class="p-6">
            <h3 class="text-base font-bold text-danger dark:text-white mb-2">Special title treatment</h3><!-- end card title -->
            <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to additional content.</p>
            <a class="btn bg-danger text-white mt-2" href="#">Button</a><!-- Button End -->
        </div>
    </div><!-- Card End -->
    <div class="card border border-success">
        <div class="p-6">
            <h3 class="text-base font-bold text-success dark:text-white mb-2">Special title treatment</h3><!-- end card title -->
            <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">With supporting text below as a natural lead-in to additional content.</p>
            <a class="btn bg-success text-white mt-2" href="#">Button</a><!-- Button End -->
        </div>
    </div><!-- Card End -->
</div><!-- Grid End -->

@endsection