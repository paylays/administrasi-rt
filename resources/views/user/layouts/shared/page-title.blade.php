<!-- Page Title Start -->
<div class="flex justify-between items-center mb-6">
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">{{ $pageTitle }}</h4>

    <div class="md:flex hidden items-center gap-2.5 font-semibold">
        <div class="flex items-center gap-2">
            <a href="{{ route('user.dashboard') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400">SI-RT</a>
        </div>

        <div class="flex items-center gap-2">
            <i class="ri-arrow-right-s-line text-base text-slate-400 rtl:rotate-180"></i>
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">{{ $subTitle }}</a>
        </div>

        <div class="flex items-center gap-2">
            <i class="ri-arrow-right-s-line text-base text-slate-400 rtl:rotate-180"></i>
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">{{ $pageTitle }}</a>
        </div>
    </div>
</div>
<!-- Page Title End -->
