@extends('layouts.vertical', ['title' => 'Timeline', 'subTitle' => 'Pages', 'pageTitle' => 'Timeline'])

@section('content')

<div class="relative space-y-12 pb-6">
    <!-- Center Border Line -->
    <div class="absolute border-s-2 border border-gray-300 h-full top-0 start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -z-10 dark:border-white/10"></div>

    <div class="md:text-center">
        <h5 class="py-2 px-4 bg-light inline rounded dark:bg-gray-700">
            Today
        </h5>
    </div>

    <!--  -->
    <div class="md:text-end text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-danger/30 text-danger">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-span-1 col-span-2">
                <div class="relative md:me-10 md:ms-0 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">Completed UX design project for our client</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>22 July, 2019</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">👍 17</a>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">❤️ 89</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 md:-end-2 md:start-auto -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-info/30 text-info">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-start-2 col-span-2">
                <div class="relative md:ms-10 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">Yay! We are celebrating our first admin release.</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>22 July, 2019</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Consectetur adipisicing elit. Iusto, optio, dolorum <a href="#" class="text-primary">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">🎉 148</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:text-center">
        <h5 class="py-2 px-4 bg-light inline rounded dark:bg-gray-700">
            Yesterday
        </h5>
    </div>

    <div class="md:text-end text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-warning/30 text-warning">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-span-1 col-span-2">
                <div class="relative md:me-10 md:ms-0 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">We released new version of our theme Ubold.</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>22 July, 2019</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">3 new photo Uploaded on facebook fan page</p>
                        <div class="mb-6 flex items-center md:justify-end gap-2">
                            <a href="javascript: void(0);">
                                <img class="h-9 rounded" alt="" src="/images/small/small-1.jpg">
                            </a>
                            <a href="javascript: void(0);">
                                <img class="h-9 rounded" alt="" src="/images/small/small-2.jpg">
                            </a>
                            <a href="javascript: void(0);">
                                <img class="h-9 rounded" alt="" src="/images/small/small-3.jpg">
                            </a>
                        </div>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">🏆 94</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 md:-end-2 md:start-auto -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-success/30 text-success">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-start-2 col-span-2">
                <div class="relative md:ms-10 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">We have archieved 25k sales in our themes.</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>22 July, 2019</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">👍 1.4k</a>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">🎉 2k</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:text-end text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-primary/30 text-primary">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-span-1 col-span-2">
                <div class="relative md:me-10 md:ms-0 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">Conference call with UX team</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>22 July, 2019</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Jonatha Smith added new milestone <span><a class="text-primary" href="#">Pathek</a></span> Lorem ipsum dolor sit amet consiquest dio</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">❤️ 89</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 md:-end-2 md:start-auto -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:text-center">
        <h5 class="py-2 px-4 bg-light inline rounded dark:bg-gray-700">
            2018
        </h5>
    </div>

    <div class="text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-danger/30 text-danger">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-start-2 col-span-2">
                <div class="relative md:ms-10 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">Join new team member Alex Smith</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>10 December, 2018</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Alex Smith is a Senior Software (Full Stack) engineer with a deep passion for building usable, functional & pretty web applications.</p>
                        <div class="flex items-center">
                            <img src="/images/users/avatar-3.jpg" alt="Arya S" class="rounded-full me-3 h-6">
                            <div>
                                <h5 class="mt-1.5 text-sm">
                                    Alex Smith <small>- Senior Software (Full Stack)</small>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="md:text-end text-start">
        <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
            <div class="w-6 h-6 flex justify-center items-center rounded-full bg-info/30 text-info">
                <i class="ri-record-circle-fill text-sm"></i>
            </div>
        </div>
        <div class="grid grid-cols-2">
            <div class="md:col-span-1 col-span-2">
                <div class="relative md:me-10 md:ms-0 ms-20">
                    <div class="card p-5">
                        <h4 class="mb-1.5 text-base">First release of Attex admin dashboard template</h4>
                        <p class="mb-4 text-gray-500 dark:text-gray-200"><small>05 May, 2023</small></p>
                        <p class="mb-4 text-gray-500 dark:text-gray-200">Outdoor visit at California State Route 85 with John Boltana & Harry Piterson regarding to setup a new show room.</p>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">🎉 10k</a>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">👍 3.2k</a>
                        <a href="javascript: void(0);" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">❤️ 7.1k</a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 md:-end-2 md:start-auto -start-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection