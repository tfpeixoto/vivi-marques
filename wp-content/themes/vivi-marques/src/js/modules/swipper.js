import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';

const swiper = new Swiper('.swiper', {
  modules: [Navigation, Autoplay],

  autoHeight: true,
  centeredSlides: true,
  spaceBetween: 16,
  loop: true,
  slidesPerView: 1.2,

  breakpoints: {
    768: {
      centeredSlides: false,
      slidesPerView: 2.2,
      autoHeight: true,
    },
    1280: {
      centeredSlides: false,
      slidesPerView: 3,
      autoHeight: true,
    }
  },

  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
    pauseOnMouseEnter: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});