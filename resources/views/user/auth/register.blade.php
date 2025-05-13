<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.shared/title-meta', ['title' => 'Sign Up'])

    @include('user.layouts.shared/head-css')

</head>

<body class="relative flex flex-col">

    <!-- Svg Background -->
    <div class="absolute inset-0 h-screen w-screen">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 1920 1028">
            <g mask="url(&quot;#SvgjsMask1166&quot;)" fill="none">
                <use xlink:href="#SvgjsSymbol1173" x="0" y="0"></use>
                <use xlink:href="#SvgjsSymbol1173" x="0" y="720"></use>
                <use xlink:href="#SvgjsSymbol1173" x="720" y="0"></use>
                <use xlink:href="#SvgjsSymbol1173" x="720" y="720"></use>
                <use xlink:href="#SvgjsSymbol1173" x="1440" y="0"></use>
                <use xlink:href="#SvgjsSymbol1173" x="1440" y="720"></use>
            </g>
            <defs>
                <mask id="SvgjsMask1166">
                    <rect width="1920" height="1028" fill="#ffffff"></rect>
                </mask>
                <path d="M-1 0 a1 1 0 1 0 2 0 a1 1 0 1 0 -2 0z" id="SvgjsPath1171"></path>
                <path d="M-3 0 a3 3 0 1 0 6 0 a3 3 0 1 0 -6 0z" id="SvgjsPath1170"></path>
                <path d="M-5 0 a5 5 0 1 0 10 0 a5 5 0 1 0 -10 0z" id="SvgjsPath1169"></path>
                <path d="M2 -2 L-2 2z" id="SvgjsPath1168"></path>
                <path d="M6 -6 L-6 6z" id="SvgjsPath1167"></path>
                <path d="M30 -30 L-30 30z" id="SvgjsPath1172"></path>
            </defs>
            <symbol id="SvgjsSymbol1173">
                <use xlink:href="#SvgjsPath1167" x="30" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="30" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="30" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="30" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="30" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="30" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="30" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="30" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="30" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="30" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="30" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="30" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="90" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="90" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="90" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="90" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="90" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="90" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="90" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="90" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="90" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="90" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="90" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="90" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="150" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="150" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="150" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="150" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="150" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="150" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="150" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="150" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="150" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="150" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="150" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="150" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="210" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="210" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="210" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="210" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="210" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="270" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="270" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="270" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="270" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="270" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="270" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="270" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="270" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="270" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="270" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1172" x="270" y="630" class="stroke-primary/20" stroke-width="3"></use>
                <use xlink:href="#SvgjsPath1171" x="270" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="330" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="330" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="330" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="330" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="330" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="330" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="330" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="330" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="330" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="330" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="330" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="330" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="390" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="390" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="390" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="390" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="390" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="390" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="390" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="390" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="390" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="390" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="390" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="390" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="450" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="450" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="450" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="450" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="450" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="450" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="450" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="450" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="450" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="450" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1172" x="450" y="630" class="stroke-primary/20" stroke-width="3"></use>
                <use xlink:href="#SvgjsPath1168" x="450" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="510" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="510" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1172" x="510" y="150" class="stroke-primary/20" stroke-width="3"></use>
                <use xlink:href="#SvgjsPath1171" x="510" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="510" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="510" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="510" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="510" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="510" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="510" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="570" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="570" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="570" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="570" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="570" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="570" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="570" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="570" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="570" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="570" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="570" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="570" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="630" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="630" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="630" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="630" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="630" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="630" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="630" y="690" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="690" y="30" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="90" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1170" x="690" y="150" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="210" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="270" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="330" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="390" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1167" x="690" y="450" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="690" y="510" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1169" x="690" y="570" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1168" x="690" y="630" class="stroke-primary/20"></use>
                <use xlink:href="#SvgjsPath1171" x="690" y="690" class="stroke-primary/20"></use>
            </symbol>
        </svg>
    </div>

    <!-- Login Card -->
    <div class="relative flex flex-col items-center justify-center h-screen">
        <div class="flex justify-center">
            <div class="max-w-md px-4 mx-auto">
                <div class="card overflow-hidden">

                    <!-- Logo -->
                    <div class="p-9 bg-primary">
                        <a href="#" class="flex justify-center">
                            <img src="/images/logo.png" alt="logo" class="h-6">
                        </a>
                    </div>

                    <div class="p-9">
                        <div class="text-center mx-auto w-3/4">
                            <h4 class="text-dark/70 text-center text-lg font-bold dark:text-light/80 mb-2">Free Sign Up</h4>
                            <p class="text-gray-400 mb-9">Don't have an account? Create your account, it takes less than a minute.</p>
                        </div>

                        @if(session('success'))
                            <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center mb-3">
                                <p>
                                    <span class="font-bold">Success!</span> - 
                                    {{ session('success') }}
                                    <a href="{{ route('login') }}" class="underline font-semibold ml-2">Klik di sini untuk login</a>
                                </p>
                                <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-success" type="button">
                                    <i class="ri-close-line text-xl"></i>
                                </button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-3 rounded bg-red-100 border border-red-400 text-red-700 px-4 py-3" role="alert">
                                <strong class="font-bold">Error!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif


                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="mb-6 space-y-2">
                                <label for="name" class="font-semibold text-gray-500">Full Name</label>
                                <input class="form-input" type="text" id="name" name="name" placeholder="Enter your name">
                            </div>

                            <div class="mb-6 space-y-2">
                                <label for="email" class="font-semibold text-gray-500">Email address</label>
                                <input class="form-input" type="email" id="email" name="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-6 space-y-2">
                                <label for="password" class="font-semibold text-gray-500">Password</label>
                                <div class="flex items-center">
                                    <input type="password" id="password" name="password" class="form-input rounded-e-none" placeholder="Enter your password">
                                    <span class="px-3.5 py-1 bg-light/30 dark:bg-slate-700/60 border rounded-e -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                                </div>
                            </div>

                            <div class="mb-6 space-y-2">
                                <label for="password_confirmation" class="font-semibold text-gray-500">Password</label>
                                <div class="flex items-center">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-input rounded-e-none" placeholder="Confirm password">
                                    <span class="px-3.5 py-1 bg-light/30 dark:bg-slate-700/60 border rounded-e -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                                </div>
                            </div>

                            <div class="text-center mb-6">
                                <button class="btn bg-primary text-white" type="submit"> Sign Up </button>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- end card -->

                <div class="text-center my-4">
                    <p class="text-muted">Already have account? <a href="{{ route('login')}}" class="text-muted ms-1 link-offset-3 underline underline-offset-4"><b>Log In</b></a></p>
                </div>
            </div>
        </div>
    </div>

    <footer class="absolute bottom-0 inset-x-0">
        <p class="font-medium text-center p-6">
            <script>
                document.write(new Date().getFullYear())
            </script> © Attex - Coderthemes.com
        </p>
    </footer>

    @include('user.layouts.shared/footer-scripts')

</body>

</html>