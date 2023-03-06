export function initSwiperSection() {
    var swiperScroll = new Swiper(".SwiperScroll", {
        scrollbar: {
            el: ".swiper-scrollbar",
        },
        draggable: true,
        spaceBetween: 15,
        breakpoints: {
            900: {
                spaceBetween: 20,
            },
        },
        slidesPerView: 'auto',
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

}