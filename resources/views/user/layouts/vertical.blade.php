<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenavView ?? 'default' }}">

<head>
    @include('user.layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('user.layouts.shared/head-css')
</head>

<body>
@yield('preloader')
<div class="flex wrapper">

    @include('user.layouts.shared/sidenav')

    <div class="page-content">

        @include('user.layouts.shared/topbar')

        <main class="p-6">
            @include('user.layouts.shared/page-title')
            @yield('content')
        </main>

        @include('user.layouts.shared/footer')

    </div>

</div>

@include('user.layouts.shared/customizer')

@include('user.layouts.shared/footer-scripts')

@vite(['resources/js/app.js'])

</body>

</html>
