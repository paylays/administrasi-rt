import { Swiper } from "swiper";
import { Autoplay, EffectFade, Mousewheel, Navigation, Pagination, Scrollbar, EffectCoverflow, EffectFlip, EffectCreative } from "swiper/modules";

 new Swiper(".default-swiper", { modules: [ Autoplay ], loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 } }),

     new Swiper(".navigation-swiper", { modules: [ Autoplay, Navigation, Pagination ],
        loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }, pagination: { clickable: !0, el: ".swiper-pagination" }
    }),

     new Swiper(".pagination-dynamic-swiper", { modules: [ Autoplay, Pagination,  ],
        loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 },
        pagination: { clickable: !0, el: ".swiper-pagination", dynamicBullets: !0 }
    }),

     new Swiper(".pagination-fraction-swiper",
        {
            modules: [ Autoplay, Pagination, Navigation ], loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { clickable: !0, el: ".swiper-pagination", type: 'fraction' },
            navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
        }),
        
     new Swiper(".pagination-custom-swiper", {
        modules: [ Autoplay, Pagination,  ], loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: {
            clickable: !0, el: ".swiper-pagination",
            renderBullet: function (e, i) { return '<span class="' + i + '">' + (e + 1) + "</span>" }
        }
    }),
    
     new Swiper(".pagination-progress-swiper", {
        modules: [ Autoplay, Pagination, Navigation ], loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 },
        pagination: { el: ".swiper-pagination", type: "progressbar" }, navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    }),

     new Swiper(".pagination-scrollbar-swiper", {
        modules: [ Autoplay, Scrollbar, Navigation ], loop: !0, autoplay: { delay: 2500, disableOnInteraction: !1 },
        scrollbar: { el: ".swiper-scrollbar", hide: !0 }, navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }
    }),

     new Swiper(".vertical-swiper", { modules: [ Autoplay, Pagination ], loop: !0, direction: "vertical", autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0 } }),

     new Swiper(".mousewheel-control-swiper", {  modules: [ Mousewheel ,Autoplay, Pagination ], loop: !0, direction: "vertical", mousewheel: !0, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0 } }),
     new Swiper(".effect-fade-swiper", { modules: [ Autoplay, Pagination, EffectFade ], loop: !0, effect: 'fade' , autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0 } }),
     new Swiper(".effect-coverflow-swiper", { modules: [ EffectCoverflow ,Autoplay, Pagination ], loop: !0, effect: 'coverflow', grabCursor: !0, centeredSlides: !0, slidesPerView: "4", coverflowEffect: { rotate: 50, stretch: 0, depth: 100, modifier: 1, slideShadows: !0 }, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0, dynamicBullets: !0 } }),
     new Swiper(".effect-flip-swiper", { modules: [ Autoplay, EffectFlip, Pagination ], loop: !0, effect: 'flip', grabCursor: !0, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0 } }),
     new Swiper(".effect-creative-swiper", { modules: [ Autoplay, Pagination, EffectCreative ], loop: !0, grabCursor: !0, effect: 'creative', creativeEffect: { prev: { shadow: !0, translate: [0, 0, -400] }, next: { translate: ["100%", 0, 0] } }, autoplay: { delay: 2500, disableOnInteraction: !1 }, pagination: { el: ".swiper-pagination", clickable: !0 } }),
     new Swiper(".responsive-swiper", { modules: [ Pagination ], loop: !0, slidesPerView: 1, spaceBetween: 10, pagination: { el: ".swiper-pagination", clickable: !0 }, breakpoints: { 640: { slidesPerView: 2, spaceBetween: 20 }, 768: { slidesPerView: 3, spaceBetween: 40 }, 1200: { slidesPerView: 4, spaceBetween: 50 } } });  