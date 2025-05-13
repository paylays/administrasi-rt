<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.shared/title-meta', ['title' => 'Error 404 Alt Page'])

    @include('admin.layouts.shared/head-css')
</head>

<body>

    <div class="flex wrapper">

        @include('admin.layouts.shared/sidenav')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('admin.layouts.shared/topbar')

            <main class="p-6">

                @include("admin.layouts.shared/page-title", ["subTitle" => "Extra Pages","pageTitle" => "404 Page"])

                <div class="flex flex-col items-center justify-center">

                        <div class="text-center max-w-xl">
                            <h1 class="text-primary text-7xl drop-shadow-xl">404</h1>
                            <h4 class="text-danger text-lg uppercase my-7">Page Not Found</h4>
                            <p>It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us. Here's a little tip that might help you get back on track.</p>
                            <a href="#" role="button" class="btn bg-info text-white mt-10"><i class="ri-home-4-line me-2"></i> Back to Home</a>
                        </div>

                </div> <!-- end flex -->

            </main>

            @include('admin.layouts.shared/footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>

    @include('admin.layouts.shared/customizer')

    @include('admin.layouts.shared/footer-scripts')

</body>

</html>