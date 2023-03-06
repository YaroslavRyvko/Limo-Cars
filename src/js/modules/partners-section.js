export function initPartnersSection() {
    var swiperPartners = new Swiper(".swiperPartners", {
        slidesPerView: 2,
        spaceBetween: 20,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            1400: {
                slidesPerView: 'auto',
                spaceBetween: 70,
            },
            900: {
                slidesPerView: 5,
            },
            650: {
                slidesPerView: 4,
            },
            450: {
                slidesPerView: 3,
            }

        }
    });

}