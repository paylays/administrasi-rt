<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Error 404 Alt Page'])

    @include('layouts.shared/head-css')
</head>

<body>

    <div class="flex wrapper">

        @include('layouts.shared/sidenav')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('layouts.shared/topbar')

            <main class="p-6">

                @include("layouts.shared/page-title", ["subTitle" => "Extra Pages","pageTitle" => "404 Page"])

                <div class="flex flex-col items-center justify-center">

                        <div class="text-center max-w-xl">
                            <h1 class="text-primary text-7xl drop-shadow-xl">404</h1>
                            <h4 class="text-danger text-lg uppercase my-7">Page Not Found</h4>
                            <p>It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us. Here's a little tip that might help you get back on track.</p>
                            <a href="{{route('any', 'index')}}" role="button" class="btn bg-info text-white mt-10"><i class="ri-home-4-line me-2"></i> Back to Home</a>
                        </div>

                </div> <!-- end flex -->

            </main>

            @include('layouts.shared/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    @include('layouts.shared/customizer')

    @include('layouts.shared/footer-scripts')

</body>

</html>