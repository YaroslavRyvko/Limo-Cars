export function initGallerySection() {
    var swiperScroll = new Swiper(".SwiperGallery", {
        draggable: true,
        spaceBetween: 21,
        slidesPerView: 'auto',
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

}