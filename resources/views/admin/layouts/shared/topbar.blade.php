<!-- Topbar Start -->
<header class="app-header flex items-center px-4 gap-3.5">

    <!-- Sidenav Menu Toggle Button -->
    <button id="button-toggle-menu" class="nav-link p-2">
        <span class="sr-only">Menu Toggle Button</span>
        <span class="flex items-center justify-center">
            <i class="ri-menu-2-fill text-2xl"></i>
        </span>
    </button>

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
            $admin = Auth::guard('admin')->user();
            $adminInitial = strtoupper(Str::substr($admin->name, 0, 1));
            $bgColors = ['bg-primary', 'bg-info', 'bg-success', 'bg-warning', 'bg-danger'];
            $randomBg = $bgColors[array_rand($bgColors)];
        @endphp
        <button data-fc-type="dropdown" data-fc-placement="bottom-end" type="button" class="nav-link flex items-center gap-2.5 px-3 bg-black/5 border-x border-black/10">
            <div class="relative inline-flex">
                <div class="w-8 h-8 justify-center items-center flex {{ $randomBg }} rounded-full">
                    <span class="text-white">{{ $adminInitial }}</span>
                </div>
            </div>
            <span class="md:flex flex-col gap-0.5 text-start hidden">
                <h5 class="text-sm">{{ $admin->name }}</h5>
            </span>
        </button>

        <div class="fc-dropdown fc-dropdown-open:opacity-100 hidden opacity-0 w-44 z-50 transition-all duration-300 bg-white shadow-lg border rounded-lg py-2 border-gray-200 dark:border-gray-700 dark:bg-gray-800">
            
            <!-- item-->
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
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
