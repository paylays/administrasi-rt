class CustomTag {
  init() {
    class AppMenu extends HTMLElement {
      connectedCallback() {
        this.outerHTML = `<div class="h-screen bg-white w-64 min-w-64 sticky top-0 z-40 transition-all border-e flex flex-col">
        <a href="index.html" class="shrink h-16 flex items-center justify-center border-b border-dashed border-gray-200">
          <div class="logo-dark flex items-center gap-1">
          <p class="text-lg font-medium">Documentation</p>
          </div>
        </a>
        <div class="grow">
          <ul class="flex flex-col gap-2 pt-2 menu">
            <li class="text-gray-600 text-sm px-6 py-2">Navigation</li>
            <li class="px-4">
              <a href="index.html" class="flex items-center gap-2.5 p-2.5 rounded-lg transition-all text-default-600 hover:text-default-800 hover:bg-default-100 [&.active]:text-blue-500 [&.active]:bg-blue-500/10 menu-link">
                <span class="shrink w-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text"> <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" /> <path d="M14 2v4a2 2 0 0 0 2 2h4" /> <path d="M10 9H8" /> <path d="M16 13H8" /> <path d="M16 17H8" /> </svg></span>
                <span class="grow"> Introduction </span>
              </a>
            </li>
            <li class="px-4">
              <a href="installation.html" class="flex items-center gap-2.5 p-2.5 rounded-lg transition-all text-default-600 hover:text-default-800 hover:bg-default-100 [&.active]:text-blue-500 [&.active]:bg-blue-500/10 menu-link">
                <span class="shrink w-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hard-drive-download"><path d="M12 2v8"/><path d="m16 6-4 4-4-4"/><rect width="20" height="8" x="2" y="14" rx="2"/><path d="M6 18h.01"/><path d="M10 18h.01"/></svg></span>
                <span class="grow"> Installation </span>
              </a>
            </li>
            <li class="px-4">
              <a href="changelog.html" class="flex items-center gap-2.5 p-2.5 rounded-lg transition-all text-default-600 hover:text-default-800 hover:bg-default-100 [&.active]:text-blue-500 [&.active]:bg-blue-500/10 menu-link">
                <span class="shrink w-5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat"> <path d="m17 2 4 4-4 4" /> <path d="M3 11v-1a4 4 0 0 1 4-4h14" /> <path d="m7 22-4-4 4-4" /> <path d="M21 13v1a4 4 0 0 1-4 4H3" /> </svg></span> 
                <span class="grow"> Changelog </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="shrink text-center px-2 py-10">
          <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-500 text-white">v1.0</span>
        </div>
      </div>`
      }
    }

    class AppFooter extends HTMLElement {
      connectedCallback() {
        this.outerHTML = `<footer class="h-16 flex items-center px-6 bg-white border-t border-gray-200">
        <div class="flex md:justify-between justify-center w-full gap-4">
          <div>
            ${new Date().getFullYear()} © Template - <a href="https://coderthemes.com/" target="_blank">Coderthemes</a>
          </div>
          <div class="md:flex hidden gap-4 item-center md:justify-end">
            <a href="https://coderthemes.com/#aboutus" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900" target="_blank">About</a>
            <span class="border-e border-gray-300 "></span>
            <a href="mailto:support@coderthemes.com" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900" target="_blank">Support</a>
            <span class="border-e border-gray-300 "></span>
            <a href="https://coderthemes.com/#contact" class="text-sm leading-5 text-zinc-600 transition hover:text-zinc-900" target="_blank">Contact Us</a>
          </div>
        </div>
      </footer>`
      }
    }

    function menuItemActive() {
      setTimeout(()=>{
        const pageUrl = window.location.href.split(/[?#]/)[0];
        document.querySelectorAll('ul.menu a.menu-link').forEach((element) => {
          if (element.href === pageUrl) {
            element.classList.add('active');
          }
        })
      },100)
    }

    customElements.define("app-menu", AppMenu);
    customElements.define("app-footer", AppFooter);
    menuItemActive()
  }
}


new CustomTag().init();
