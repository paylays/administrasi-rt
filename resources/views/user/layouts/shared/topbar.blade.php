<!-- Topbar Start -->
<header class="app-header flex items-center px-4 gap-3.5">

    <a href="#" class="logo-box">
        <!-- Light Logo -->
        <div class="logo-light">
            <img src="/images/logo.png" class="logo-lg h-[22px]" alt="Light logo">
            <img src="/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>

        <!-- Dark Logo -->
        <div class="logo-dark">
            <img src="/images/logo-dark.png" class="logo-lg h-[22px]" alt="Dark logo">
            <img src="/images/logo-sm.png" class="logo-sm h-[22px]" alt="Small logo">
        </div>
    </a>

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="nav-link p-2">
        <span class="sr-only">Menu Toggle Button</span>
        <span class="flex items-center justify-center">
            <i class="ri-menu-2-fill text-2xl"></i>
        </span>
    </button>

    <!-- Topbar Search Input -->
    <div class="relative hidden lg:block">

        <form data-fc-type="dropdown" type="button">
            <input type="search" class="form-input bg-black/5 border-none ps-8 relative" placeholder="Search...">
            <span class="ri-search-line text-base z-10 absolute start-2 top-1/2 -translate-y-1/2"></span>
        </form>

        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-80 z-50 mt-3.5 transition-all duration-300 bg-white shadow-lg border rounded-lg py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">

            <!-- item-->
            <h5 class="flex items-center py-2 px-3 text-sm text-gray-800 dark:text-gray-400 uppercase">Found <b class="text-decoration-underline">08</b> results</h5>

            <!-- item-->
            <a href="javascript:void(0);" class="flex items-center py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-file-chart-line text-base me-1"></i>
                <span>Analytics Report</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="flex items-center py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-lifebuoy-line text-base me-1"></i>
                <span>How can I help you?</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="flex items-center py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-user-settings-line text-base me-1"></i>
                <span>User profile settings</span>
            </a>

            <!-- item-->
            <h6 class="flex items-center py-2 px-3 text-sm text-gray-800 dark:text-gray-400 uppercase">Users</h6>

            <!-- item-->
            <a href="javascript:void(0);" class="flex items-center py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <img class="me-2 rounded-full h-8" src="/images/users/avatar-2.jpg" alt="Generic placeholder image">
                <div class="flex-grow">
                    <h5 class="m-0 fs-14">Erwin Brown</h5>
                    <span class="fs-12 ">UI Designer</span>
                </div>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="flex items-center py-2 px-3 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <img class="me-2 rounded-full h-8" src="/images/users/avatar-5.jpg" alt="Generic placeholder image">
                <div class="flex-grow">
                    <h5 class="m-0 fs-14">Jacob Deo</h5>
                    <span class="fs-12 ">Developer</span>
                </div>
            </a>
        </div>
    </div>

    <!-- Theme Setting Button -->
    <div class="relative ms-auto">
        <button data-fc-type="offcanvas" data-fc-target="theme-customization" type="button" class="nav-link p-2">
            <span class="sr-only">Customization</span>
            <span class="flex items-center justify-center">
                <i class="ri-settings-3-line text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Light/Dark Toggle Button -->
    <div class="lg:flex">
        <button id="light-dark-mode" type="button" class="nav-link p-2">
            <span class="sr-only">Light/Dark Mode</span>
            <span class="flex items-center justify-center">
                <i class="ri-moon-line text-2xl block dark:hidden"></i>
                <i class="ri-sun-line text-2xl hidden dark:block"></i>
            </span>
        </button>
    </div>

    <!-- Fullscreen Toggle Button -->
    <div class="md:flex hidden">
        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
            <span class="sr-only">Fullscreen Mode</span>
            <span class="flex items-center justify-center">
                <i class="ri-fullscreen-line text-2xl"></i>
            </span>
        </button>
    </div>

    <!-- Profile Dropdown Button -->
    <div class="relative">
        @php
            $user = Auth::user();
            $userInitial = strtoupper(Str::substr($user->name, 0, 1));
        @endphp
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link flex items-center gap-2.5 px-3 bg-black/5 border-x border-black/10">
            <div class="relative inline-flex">
                <div class="w-8 h-8 justify-center items-center flex bg-primary rounded-full">
                    <span class="text-white">{{ $userInitial }}</span>
                </div>
            </div>
            <span class="md:flex flex-col gap-0.5 text-start hidden">
                <h5 class="text-sm">{{ $user->name }}</h5>
            </span>
        </button>

        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
            <!-- item-->
            <h6 class="flex items-center py-2 px-3 text-xs text-gray-800 dark:text-gray-400">Welcome !</h6>

            <!-- item-->
            <a href="{{ route('user.profile') }}" class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-account-circle-line text-lg align-middle"></i>
                <span>My Account</span>
            </a>

            <!-- item-->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>

            <!-- Link yang memicu form logout -->
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="flex items-center gap-2 py-1.5 px-4 text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                <i class="ri-logout-box-line text-lg align-middle"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>
</header>
<!-- Topbar End -->
