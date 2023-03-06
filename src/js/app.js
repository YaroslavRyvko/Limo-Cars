import '../scss/styles.scss';
import { initMobileMenu } from './modules/mobile-menu';
import { initFrontSection } from './modules/front-section';
import { initSwiperSection } from './modules/swiper-section';
import { initVehiclesSection } from './modules/vehicles-section';
import { initPartnersSection } from './modules/partners-section';
import { initGallerySection } from './modules/gallery-section';

document.addEventListener('DOMContentLoaded', () => {
  initMobileMenu();
  initFrontSection();
  initSwiperSection();
  initVehiclesSection();
  initPartnersSection();
  initGallerySection();
})
