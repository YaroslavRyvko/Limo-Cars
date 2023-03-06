export function initVehiclesSection() {
    var swiperVehicles= new Swiper(".SwiperVehicles", {
        spaceBetween: 57,
        slidesPerView: 1,
        breakpoints: {
            900:{
                slidesPerView: 2,
            },
            1350: {
                slidesPerView: 'auto',
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}