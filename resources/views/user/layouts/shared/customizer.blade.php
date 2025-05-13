<!-- Theme Settings Offcanvas -->
<div>
    <div id="theme-customization" class="fc-offcanvas-open:translate-x-0 hidden translate-x-full rtl:-translate-x-full fixed inset-y-0 end-0 transition-all duration-300 transform max-w-72 w-full z-50 bg-white dark:bg-gray-800" tabindex="-1">
        <div class="h-16 flex items-center text-white bg-primary px-6 gap-3">
            <h5 class="text-base flex-grow">Theme Settings</h5>
            <button type="button" data-fc-dismiss><i class="ri-close-line text-xl"></i></button>
        </div>

        <div class="h-[calc(100vh-128px)]" data-simplebar>
            <div class="p-6">
                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Theme</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-mode" id="layout-color-light" value="light">
                            <label class="ms-1.5" for="layout-color-light"> Light </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-mode" id="layout-color-dark" value="dark">
                            <label class="ms-1.5" for="layout-color-dark"> Dark </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Direction</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="dir" id="direction-ltr" value="ltr">
                            <label class="ms-1.5" for="direction-ltr"> LTR </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="dir" id="direction-rtl" value="rtl">
                            <label class="ms-1.5" for="direction-rtl"> RTL </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6 2xl:block hidden">
                    <h5 class="font-semibold text-sm mb-3">Content Width</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-layout-width" id="layout-mode-default" value="default">
                            <label class="ms-1.5" for="layout-mode-default"> Fluid </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-layout-width" id="layout-mode-boxed" value="boxed">
                            <label class="ms-1.5" for="layout-mode-boxed"> Boxed </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Sidenav View</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-default" value="default">
                            </label>
                            <label class="ms-1.5" for="sidenav-view-default"> Default </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-sm" value="sm">
                            <label class="ms-1.5" for="sidenav-view-sm"> Small </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-md" value="md">
                            <label class="ms-1.5" for="sidenav-view-md"> Compact </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-mobile" value="mobile">
                            <label class="ms-1.5" for="sidenav-view-mobile"> Mobile </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-hidden" value="hidden">
                            <label class="ms-1.5" for="sidenav-view-hidden"> Hidden </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-hover" value="hover">
                            <label class="ms-1.5" for="sidenav-view-hover"> Hover </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-sidenav-view" id="sidenav-view-hover-active" value="hover-active">
                            <label class="ms-1.5" for="sidenav-view-hover-active"> Hover Active </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Menu Color</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-menu-color" id="menu-color-light" value="light">
                            <label class="ms-1.5" for="menu-color-light"> Light </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-menu-color" id="menu-color-dark" value="dark">
                            <label class="ms-1.5" for="menu-color-dark"> Dark </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-menu-color" id="menu-color-brand" value="brand">
                            <label class="ms-1.5" for="menu-color-brand"> Brand </label>
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <h5 class="font-semibold text-sm mb-3">Topbar Color</h5>
                    <div class="flex flex-col gap-2">
                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-topbar-color" id="topbar-color-light" value="light">
                            <label class="ms-1.5" for="topbar-color-light"> Light </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-topbar-color" id="topbar-color-dark" value="dark">
                            <label class="ms-1.5" for="topbar-color-dark"> Dark </label>
                        </div>

                        <div class="flex items-center">
                            <input class="form-switch form-switch-sm" type="checkbox" name="data-topbar-color" id="topbar-color-brand" value="brand">
                            <label class="ms-1.5" for="topbar-color-brand"> Brand </label>
                        </div>
                    </div>
                </div>

                <div>
                    <h5 class="font-semibold text-sm mb-3">Layout Position</h5>

                    <div class="flex btn-radio">
                        <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-fixed" value="fixed">
                        <label class="btn rounded-e-none bg-gray-100 dark:bg-gray-700" for="layout-position-fixed">Fixed</label>
                        <input type="radio" class="form-radio hidden" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                        <label class="btn rounded-s-none bg-gray-100 dark:bg-gray-700" for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-16 p-4 flex items-center gap-4 border-t border-gray-300 dark:border-gray-600 px-6">
            <button type="button" class="btn bg-primary text-white w-1/2" id="reset-layout">Reset</button>
            <button type="button" class="btn bg-light text-dark dark:text-light dark:bg-opacity-10 w-1/2">Buy Now</button>
        </div>
    </div>
</div>
