@extends('layouts.vertical', ['title' => 'Profile' , 'subTitle' => 'Pages', 'pageTitle' => 'Profile'])

@section("content")

    <div class="grid xl:grid-cols-12 lg:grid-cols-12 grid-cols-1 gap-6">
        <div class="xl:col-span-4 lg:col-span-5">
            <div class="card text-center p-6 mb-6">
                <img src="/images/users/avatar-1.jpg" alt=""
                     class="w-24 rounded-full p-1 border border-gray-200 bg-gray-100 dark:bg-gray-700 dark:border-gray-600 mx-auto">
                <h4 class="mb-1 mt-3 text-lg">Tosha Minner</h4>
                <p class="text-gray-400 mb-4">Founder</p>

                <button type="button" class="btn bg-success btn-sm !text-sm text-white mb-3">Follow</button>
                <button type="button" class="btn bg-danger btn-sm !text-sm text-white mb-3">Message</button>

                <div class="text-start mt-6">
                    <h4 class="text-sm uppercase mb-2.5">About Me :</h4>
                    <p class="text-gray-400 mb-6">
                        Hi I'm Tosha Minner,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>
                    <p class="text-zinc-400 mb-3"><strong>Full Name :</strong> <span class="ms-2">Tosha K. Minner</span>
                    </p>

                    <p class="text-zinc-400 mb-3"><strong>Mobile :</strong><span class="ms-2">(123) 123 1234</span></p>

                    <p class="text-zinc-400 mb-3"><strong>Email :</strong> <span class="ms-2 ">user@email.domain</span>
                    </p>

                    <p class="text-zinc-400 mb-1.5"><strong>Location :</strong> <span class="ms-2">USA</span></p>
                </div>

                <ul class="social-list list-inline mt-6 ">
                    <li class="me-2 inline-block">
                        <a href="javascript: void(0);"
                           class="h-8 w-8 leading-7 block border-2 rounded-full border-primary text-primary"><i
                                class="ri-facebook-circle-fill"></i></a>
                    </li>
                    <li class="me-2 inline-block">
                        <a href="javascript: void(0);"
                           class="h-8 w-8 leading-7 block border-2 rounded-full border-danger text-danger"><i
                                class="ri-google-fill"></i></a>
                    </li>
                    <li class="me-2 inline-block">
                        <a href="javascript: void(0);"
                           class="h-8 w-8 leading-7 block border-2 rounded-full border-info text-info"><i
                                class="ri-twitter-fill"></i></a>
                    </li>
                    <li class="me-2 inline-block">
                        <a href="javascript: void(0);"
                           class="h-8 w-8 leading-7 block border-2 rounded-full border-secondary text-secondary"><i
                                class="ri-github-fill"></i></a>
                    </li>
                </ul>
            </div> <!-- end card -->

            <!-- Messages-->
            <div class="card p-6">
                <div class="flex justify-between items-center mb-3">
                    <h4 class="text-base mb-2">Messages</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-fc-type="dropdown"
                           data-fc-placement="bottom-end" type="button">
                            <i class="ri-more-2-fill"></i>
                        </a>
                        <div
                            class="fc-dropdown fc-dropdown-open:opacity-100 opacity-0 min-w-40 z-50 transition-all duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-600 rounded-md py-1 hidden">
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                               href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="flex items-center py-1.5 px-5 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                               href="javascript:void(0)">
                                Action
                            </a>
                        </div>
                    </div>
                </div>

                <div class="divide-y dark:divide-gray-700">
                    <div class="overflow-hidden py-2.5 relative">
                        <div class="block float-left me-3.5 w-10"><img src="/images/users/avatar-2.jpg"
                                                                       class="rounded-full" alt=""></div>
                        <p class="text-gray-700 block mb-0.5 dark:text-gray-400">Tomaslau</p>
                        <p class="text-gray-400">I've finished it! See you so...</p>
                        <p class="absolute end-1 top-3">
                            <a href="javascript:void(0)" class="btn btn-sm text-info !text-sm"> Reply </a>
                        </p>
                    </div>
                    <div class="overflow-hidden py-2.5 relative">
                        <div class="block float-left me-3.5 w-10"><img src="/images/users/avatar-3.jpg"
                                                                       class="rounded-full" alt=""></div>
                        <p class="text-gray-700 block mb-0.5 dark:text-gray-400">Stillnotdavid</p>
                        <p class="text-gray-400">This theme is awesome!</p>
                        <p class="absolute end-1 top-3">
                            <a href="javascript:void(0)" class="btn btn-sm text-info !text-sm"> Reply </a>
                        </p>
                    </div>
                    <div class="overflow-hidden py-2.5 relative">
                        <div class="block float-left me-3.5 w-10"><img src="/images/users/avatar-4.jpg"
                                                                       class="rounded-full" alt=""></div>
                        <p class="text-gray-700 block mb-0.5 dark:text-gray-400">Kurafire</p>
                        <p class="text-gray-400">Nice to meet you</p>
                        <p class="absolute end-1 top-3">
                            <a href="javascript:void(0)" class="btn btn-sm text-info !text-sm"> Reply </a>
                        </p>
                    </div>

                    <div class="overflow-hidden py-2.5 relative">
                        <div class="block float-left me-3.5 w-10"><img src="/images/users/avatar-5.jpg"
                                                                       class="rounded-full" alt=""></div>
                        <p class="text-gray-700 block mb-0.5 dark:text-gray-400">Shahedk</p>
                        <p class="text-gray-400">Hey! there I'm available...</p>
                        <p class="absolute end-1 top-3">
                            <a href="javascript:void(0)" class="btn btn-sm text-info !text-sm"> Reply </a>
                        </p>
                    </div>
                    <div class="overflow-hidden pt-2.5 relative">
                        <div class="block float-left me-3.5 w-10"><img src="/images/users/avatar-6.jpg"
                                                                       class="rounded-full" alt=""></div>
                        <p class="text-gray-700 block mb-0.5 dark:text-gray-400">Adhamdannaway</p>
                        <p class="text-gray-400">This theme is awesome!</p>
                        <p class="absolute end-1 top-3">
                            <a href="javascript:void(0)" class="btn btn-sm text-info !text-sm"> Reply </a>
                        </p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end card-->
        </div>

        <div class="xl:col-span-8 lg:col-span-7">
            <!-- Chart-->
            <div class="card p-6 mb-6">
                <h4 class="text-base mb-6">Orders &amp; Revenue</h4>
                <div dir="ltr">
                    <div style="height: 260px;" class="chartjs-chart">
                        <canvas id="high-performing-product"></canvas>
                    </div>
                </div>
            </div>
            <!-- End Chart-->

            <div class="card p-6">
                <div data-fc-type="tab">
                    <nav class="flex flex-wrap space-x-2 bg-light dark:bg-gray-700/60 mb-6" aria-label="Tabs"
                         role="tablist">
                        <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md active"
                                data-fc-target="#fill-and-justify-1" aria-controls="fill-and-justify-1" role="tab">
                            Abbout
                        </button>
                        <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md"
                                data-fc-target="#fill-and-justify-2" aria-controls="fill-and-justify-2" role="tab">
                            Timeline
                        </button>
                        <button type="button"
                                class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md"
                                data-fc-target="#fill-and-justify-3" aria-controls="fill-and-justify-3" role="tab">
                            Settings
                        </button>
                    </nav>

                    <div class="mt-3">
                        <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
                            <h5 class="text-base uppercase mb-6">
                                <i class="ri-briefcase-line me-1"></i> Projects
                            </h5>
                            <div class="overflow-x-auto">
                                <div class="align-middle inline-block min-w-full">
                                    <div class="shadow overflow-hidden">
                                        <table class="min-w-full text-sm ">
                                            <thead
                                                class="font-medium border-y bg-light/30 dark:bg-gray-700/30 dark:border-gray-600">
                                            <tr>
                                                <th class="p-2 text-base text-left">#</th>
                                                <th class="p-2 text-left min-w-48">Clients</th>
                                                <th class="p-2 text-left">Project Name</th>
                                                <th class="p-2 text-left">Start Date</th>
                                                <th class="p-2 text-left">Due Date</th>
                                                <th class="p-2 text-left">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody class="">

                                            <tr class="">
                                                <td class="p-2">1</td>
                                                <td class="flex p-2 whitespace-nowrap">
                                                    <img class="h-6 rounded-full" src="/images/users/avatar-2.jpg"
                                                         alt="">
                                                    <span class="ms-2 font-medium">Halette Boivin</span>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">App design and development</td>
                                                <td class="p-2 whitespace-nowrap">01/01/2022</td>
                                                <td class="p-2 whitespace-nowrap">10/12/2023</td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <span class="bg-info/20 text-info py-0.5 px-1 rounded text-xs">Work in Progress</span>
                                                </td>
                                            </tr>

                                            <tr class="">
                                                <td class="p-2">2</td>
                                                <td class="flex p-2 whitespace-nowrap">
                                                    <img class="h-6 rounded-full" src="/images/users/avatar-3.jpg"
                                                         alt="">
                                                    <span class="ms-2 font-medium">Durandana Jolicoeur</span>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">Coffee detail page - Main Page</td>
                                                <td class="p-2 whitespace-nowrap">21/07/2023</td>
                                                <td class="p-2 whitespace-nowrap">12/05/2024</td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <span class="bg-danger/20 text-danger py-0.5 px-1 rounded text-xs">Progress</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="p-2">3</td>
                                                <td class="flex p-2 whitespace-nowrap">
                                                    <img class="h-6 rounded-full" src="/images/users/avatar-4.jpg"
                                                         alt="">
                                                    <span class="ms-2 font-medium">Lucas Sabourin</span>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">Poster illustation design</td>
                                                <td class="p-2 whitespace-nowrap">18/03/2023</td>
                                                <td class="p-2 whitespace-nowrap">28/09/2023</td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <span
                                                        class="bg-success/20 text-success py-0.5 px-1 rounded text-xs">Done</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="p-2">4</td>
                                                <td class="flex p-2 whitespace-nowrap">
                                                    <img class="h-6 rounded-full" src="/images/users/avatar-6.jpg"
                                                         alt="">
                                                    <span class="ms-2 font-medium">Donatien Brunelle</span>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">Drinking bottle graphics</td>
                                                <td class="p-2 whitespace-nowrap">02/10/2022</td>
                                                <td class="p-2 whitespace-nowrap">07/05/2023</td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <span class="bg-info/20 text-info py-0.5 px-1 rounded text-xs">Work in Progress</span>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td class="p-2">4</td>
                                                <td class="flex p-2 whitespace-nowrap">
                                                    <img class="h-6 rounded-full" src="/images/users/avatar-5.jpg"
                                                         alt="">
                                                    <span class="ms-2 font-medium">Karel Auberjo</span>
                                                </td>
                                                <td class="p-2 whitespace-nowrap">Landing page design - Home</td>
                                                <td class="p-2 whitespace-nowrap">17/01/2022</td>
                                                <td class="p-2 whitespace-nowrap">25/05/2023</td>
                                                <td class="p-2 whitespace-nowrap">
                                                    <span
                                                        class="bg-warning/10 text-warning py-0.5 px-1 rounded text-xs">Coming soon</span>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Component End  -->


                            <h5 class="text-base uppercase mt-9 mb-2.5"><i class="ri-macbook-line me-1.5"></i>Experience
                            </h5>

                            <div class="py-5 relative">
                                <div class="relative">
                                    <div
                                        class="absolute bg-light bottom-0 left-[9px] top-5 w-0.5 z-0 dark:bg-gray-700"></div>
                                    <i class="ri-record-circle-line float-left h-5 w-5 rounded-full border-2 border-transparent text-xs text-center leading-4 bg-info text-white"></i>
                                    <div class="ms-8">
                                        <h5 class="text-base/none mb-1.5">Lead designer / Developer</h5>
                                        <p class="text-sm">websitename.com <span
                                                class="ms-3 text-xs">Year: 2015 - 18</span></p>
                                        <p class="text-gray-500 mt-3 pb-6">Everyone realizes why a new common language
                                            would be desirable: one could refuse to pay expensive translators.
                                            To achieve this, it would be necessary to have uniform grammar,
                                            pronunciation and more common words.
                                        </p>
                                    </div>
                                </div>
                                <!-- timeline Designer/Devloper -->

                                <div class="relative">
                                    <div
                                        class="absolute bg-light bottom-0 left-[9px] top-5 w-0.5 z-0 dark:bg-gray-700"></div>
                                    <i class="ri-record-circle-line float-left h-5 w-5 rounded-full border-2 border-transparent text-xs text-center leading-4 bg-primary text-white"></i>
                                    <div class="ms-8">
                                        <h5 class="text-base/none mb-1.5">Senior Graphic Designer</h5>
                                        <p class="text-sm">Software Inc. <span
                                                class="ms-3 text-xs">Year: 2012 - 15</span></p>
                                        <p class="text-gray-500 mt-3 pb-6">Everyone realizes why a new common language
                                            would be desirable: one could refuse to pay expensive translators.
                                            To achieve this, it would be necessary to have uniform grammar,
                                            pronunciation and more common words.
                                        </p>
                                    </div>
                                </div>
                                <!-- timeline Senior graphic Designer -->

                                <div class="relative">
                                    <i class="ri-record-circle-line float-left h-5 w-5 rounded-full border-2 border-transparent text-xs text-center leading-4 bg-info text-white"></i>
                                    <div class="ms-8">
                                        <h5 class="text-base/none mb-1.5">Graphic Designer</h5>
                                        <p class="text-sm">Coderthemes Design LLP <span class="ms-3 text-xs">Year: 2010 - 12</span>
                                        </p>
                                        <p class="text-gray-500 mt-3 pb-6">Everyone realizes why a new common language
                                            would be desirable: one could refuse to pay expensive translators.
                                            To achieve this, it would be necessary to have uniform grammar,
                                            pronunciation and more common words.
                                        </p>
                                    </div>
                                </div>
                                <!-- timeline Senior graphic Designer -->
                            </div>
                            <!-- end timeline -->
                        </div><!-- End About Tab -->

                        <div id="fill-and-justify-2" class="hidden" role="tabpanel"
                             aria-labelledby="fill-and-justify-item-2">
                            <div class="border rounded mt-3 mb-6 dark:border-gray-600">
                                <form action="#" class="comment-area-box">
                                    <textarea rows="3" class="form-input border-0 resize-none"
                                              placeholder="Write something...."></textarea>
                                    <div class="p-2 bg-light flex justify-between items-center dark:bg-gray-700">
                                        <div>
                                            <a href="#"
                                               class="btn btn-sm px-2 !text-base text-gray-900 bg-light hover:bg-dark/20 dark:text-light dark:hover:bg-light/20 dark:bg-gray-700"><i
                                                    class="ri-contacts-book-2-line"></i></a>
                                            <a href="#"
                                               class="btn btn-sm px-2 !text-base text-gray-900 bg-light hover:bg-dark/20 dark:text-light dark:hover:bg-light/20 dark:bg-gray-700"><i
                                                    class="ri-map-pin-line"></i></a>
                                            <a href="#"
                                               class="btn btn-sm px-2 !text-base text-gray-900 bg-light hover:bg-dark/20 dark:text-light dark:hover:bg-light/20 dark:bg-gray-700"><i
                                                    class="ri-camera-3-line"></i></a>
                                            <a href="#"
                                               class="btn btn-sm px-2 !text-base text-gray-900 bg-light hover:bg-dark/20 dark:text-light dark:hover:bg-light/20 dark:bg-gray-700"><i
                                                    class="ri-emoji-sticker-line"></i></a>
                                        </div>
                                        <button type="submit"
                                                class="btn btn-sm bg-dark text-white !text-base dark:bg-gray-600">Post
                                        </button>
                                    </div>
                                </form>
                            </div><!-- End Post Box -->

                            <div class="border rounded p-3 mb-3 dark:border-gray-600">
                                <div class="flex">
                                    <img class="me-3 rounded-full h-8" src="/images/users/avatar-4.jpg"
                                         alt="Generic placeholder image">
                                    <div>
                                        <h5 class="text-base/none">Thelma Fridley</h5>
                                        <p class="text-gray-500 mb-4"><small>about 1 hour ago</small></p>
                                    </div>
                                </div>
                                <div class="text-base text-center italic text-dark dark:text-light">
                                    <i class="ri-double-quotes-l fs-20"></i> Cras sit amet nibh libero, in
                                    gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                    purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                    sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                    porta. Mauris massa.
                                </div>

                                <div class="-mx-3 p-3 mt-6 bg-light dark:bg-gray-700">
                                    <div class="flex">
                                        <img class="me-3 rounded-full h-8" src="/images/users/avatar-3.jpg"
                                             alt="Generic placeholder image">
                                        <div>
                                            <h5 class="text-base mb-1">Jeremy Tomlinson <small
                                                    class="text-sm text-gray-500">about 2 minuts ago</small></h5>
                                            Nice work, makes me think of The Money Pit.

                                            <br>
                                            <a href="javascript: void(0);"
                                               class="text-gray-500 text-sm inline-block mt-3"><i
                                                    class="ri-reply-line"></i> Reply</a>

                                            <div class="flex mt-6">
                                                <a class="pe-3" href="#">
                                                    <img src="/images/users/avatar-4.jpg"
                                                         class="text-sm text-gray-500 h-8 rounded-full"
                                                         alt="Generic placeholder image">
                                                </a>
                                                <div>
                                                    <h5 class="text-base mb-1">Thelma Fridley <small
                                                            class="text-gray-500">5 hours ago</small></h5>
                                                    i'm in the middle of a timelapse animation myself! (Very different
                                                    though.) Awesome stuff.
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex mt-3">
                                        <a class="pe-3" href="#">
                                            <img src="/images/users/avatar-1.jpg" class="rounded-full h-8"
                                                 alt="Generic placeholder image">
                                        </a>
                                        <div class="w-full">
                                            <input type="text" id="simpleinput"
                                                   class="form-input bg-white border-0 rounded-md py-1.5 px-3 dark:bg-gray-800"
                                                   placeholder="Add comment">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <a href="javascript: void(0);" class="btn btn-sm !text-sm text-danger items-center"><i
                                            class="ri-heart-line me-1"></i><span>Like (28)</span></a>
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm !text-sm text-muted items-center"><i
                                            class="ri-share-line me-1"></i><span>Share</span></a>
                                </div>
                            </div><!-- End Comment Box -->

                            <div class="border rounded p-3 mb-6 dark:border-gray-600">
                                <div class="flex">
                                    <img class="me-3 rounded-full h-8" src="/images/users/avatar-3.jpg"
                                         alt="Generic placeholder image">
                                    <div>
                                        <h5 class="text-base">Jeremy Tomlinson</h5>
                                        <p class="text-gray-500 mb-4"><small>3 hours ago</small></p>
                                    </div>
                                </div>
                                <p class="mb-4">Story based around the idea of time lapse, animation to post soon!</p>

                                <div class="flex gap-1.5 items-center">
                                    <img src="/images/small/small-1.jpg" alt="post-img" class="rounded-md h-16">
                                    <img src="/images/small/small-2.jpg" alt="post-img" class="rounded-md h-16">
                                    <img src="/images/small/small-3.jpg" alt="post-img" class="rounded-md h-16">
                                </div>

                                <div class="mt-2">
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm !text-sm text-gray-500 items-center"><i
                                            class="ri-reply-line me-1"></i> Reply</a>
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm !text-sm text-gray-500 items-center"><i
                                            class="ri-heart-line me-1"></i> Like</a>
                                    <a href="javascript: void(0);"
                                       class="btn btn-sm !text-sm text-gray-500 items-center"><i
                                            class="ri-share-line me-1"></i> Share</a>
                                </div>
                            </div><!-- End Story Box -->

                            <div class="border rounded p-3 mb-6 dark:border-gray-600">
                                <div class="flex">
                                    <img class="me-3 rounded-full h-8" src="/images/users/avatar-6.jpg"
                                         alt="Generic placeholder image">
                                    <div>
                                        <h5 class="text-base">Martin Williamson</h5>
                                        <p class="text-gray-500 mb-4"><small>15 hours ago</small></p>
                                    </div>
                                </div>
                                <p class="text-sm mb-4">The parallax is a little odd but O.o that house build is
                                    awesome!!</p>

                                <iframe src="https://player.vimeo.com/video/87993762" class="h-80"></iframe>
                            </div><!-- End Video Box -->

                            <div class="text-center">
                                <a href="javascript:void(0);" class="text-danger"><i class="ri-loader-fill me-1.5"></i>
                                    Load more </a>
                            </div><!-- End Loader -->
                        </div><!-- End Timeline Tab -->

                        <div id="fill-and-justify-3" class="hidden" role="tabpanel"
                             aria-labelledby="fill-and-justify-item-3">
                            <form>
                                <h5 class="mb-9 uppercase text-base"><i class="ri-contacts-book-2-line me-1.5"></i>
                                    Personal Info</h5>
                                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-2.5">
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="firstname" class="font-semibold text-sm text-gray-500">First
                                                Name</label>
                                            <input type="text" class="form-input" id="firstname"
                                                   placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="lastname" class="font-semibold text-sm text-gray-500">Last
                                                Name</label>
                                            <input type="text" class="form-input" id="lastname"
                                                   placeholder="Enter last name">
                                        </div>
                                    </div>

                                    <div class="md:col-span-2">
                                        <div class="mb-6 space-y-2">
                                            <label for="userbio" class="font-semibold text-sm text-gray-500">Bio</label>
                                            <textarea class="form-input" id="userbio" rows="4"
                                                      placeholder="Write something..."></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-2.5">
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="useremail" class="font-semibold text-sm text-gray-500">Email
                                                Address</label>
                                            <input type="email" class="form-input" id="useremail"
                                                   placeholder="Enter email">
                                            <span class="text-gray-500"><small>If you want to change email please <a
                                                        href="javascript: void(0);" class="text-primary">click</a> here.</small></span>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="userpassword" class="font-semibold text-sm text-gray-500">Password</label>
                                            <input type="password" class="form-input" id="userpassword"
                                                   placeholder="Enter password">
                                            <span class="text-gray-500"><small>If you want to change password please <a
                                                        href="javascript: void(0);" class="text-primary">click</a> here.</small></span>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-base mb-6 uppercase bg-light p-2 dark:bg-gray-700"><i
                                        class="ri-building-line me-1.5"></i> Company Info</h5>
                                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-2.5">
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="companyname" class="font-semibold text-sm text-gray-500">Company
                                                Name</label>
                                            <input type="text" class="form-input" id="companyname"
                                                   placeholder="Enter company name">
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="cwebsite"
                                                   class="font-semibold text-sm text-gray-500">Website</label>
                                            <input type="text" class="form-input" id="cwebsite"
                                                   placeholder="Enter website url">
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-base mb-6 uppercase bg-light p-2 dark:bg-gray-700"><i
                                        class="ri-global-line me-1.5"></i> Social</h5>
                                <div class="grid md:grid-cols-2 grid-cols-1 gap-x-2.5">
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-fb"
                                                   class="font-semibold text-sm text-gray-500">Facebook</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-facebook-fill"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-fb"
                                                       placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-tw"
                                                   class="font-semibold text-sm text-gray-500">Twitter</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-twitter-line"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-tw"
                                                       placeholder="Username">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-insta" class="font-semibold text-sm text-gray-500">Instagram</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-instagram-line"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-insta"
                                                       placeholder="Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-lin"
                                                   class="font-semibold text-sm text-gray-500">Linkedin</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-linkedin-fill"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-lin"
                                                       placeholder="Url">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-sky"
                                                   class="font-semibold text-sm text-gray-500">Skype</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-skype-line"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-sky"
                                                       placeholder="@username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mb-6 space-y-2">
                                            <label for="social-gh"
                                                   class="font-semibold text-sm text-gray-500">Github</label>
                                            <div class="flex">
                                                <span
                                                    class="inline-flex items-center px-4 rounded-s border border-e-0 border-gray-200 bg-gray-50 text-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400"><i
                                                        class="ri-github-line"></i></span>
                                                <input type="text" class="form-input rounded-s-none" id="social-gh"
                                                       placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn bg-success text-white mt-3"><i
                                            class="ri-save-line me-1"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div>
    </div>

@endsection

@section('script')
    @vite('resources/js/pages/pages-profile.js')
@endsection
