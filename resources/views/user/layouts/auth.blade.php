<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.shared/title-meta', ['title' => $title])

    @include('user.layouts.shared/head-css')

    @vite(['node_modules/swiper/swiper-bundle.min.css'])

</head>

<body>
    <div class="flex items-stretch h-screen bg-cover bg-center relative bg-no-repeat  bg-[url('/public/images/bg-auth.jpg')]">
        @yield('content')

        <div class="bg-black/30 w-full h-full relative hidden lg:block">
            <div class="absolute start-0 end-0 bottom-0 flex mt-auto justify-center text-center">
                <div class="xl:w-1/2 w-full mx-auto">
                    <div class="swiper mt-auto cursor-col-resize" id="swiper_one">
                        <div class="swiper-wrapper mb-12">
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">I love the color!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Everything you need is in this template. Love the overall look and feel. Not too flashy, and still very professional and smart.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Flexibility !</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> Pretty nice theme, hoping you guys could add more features to this. Keep up the good work.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->

                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <h2 class="text-3xl text-white mb-6">Feature Availability!</h2>
                                    <p class="text-lg text-white mb-5"><i class="ri-double-quotes-l"></i> This is a great product, helped us a lot and very quick to work with and implement.</p>
                                    <p class="text-white mx-auto">
                                        - Admin User
                                    </p>
                                </div>
                            </div>
                            <!-- swiper-slide End -->
                        </div>
                        <!-- swiper-wrapper End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/pages/auth-swiper.js'])

</body>

</html>