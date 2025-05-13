<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenavView ?? 'default' }}">

<head>
    @include('admin.layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('admin.layouts.shared/head-css')
</head>

<body>
@yield('preloader')
<div class="flex wrapper">

    @include('admin.layouts.shared/sidenav')

    <div class="page-content">

        @include('admin.layouts.shared/topbar')

        <main class="p-6">
            @include('admin.layouts.shared/page-title')
            @yield('content')
        </main>

        @include('admin.layouts.shared/footer')

    </div>

</div>

@include('admin.layouts.shared/customizer')

@include('admin.layouts.shared/footer-scripts')

@vite(['resources/js/app.js'])

</body>

</html>
