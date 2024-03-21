
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    centeredSlides: true,
    autoplay: {
       delay: 1500,
       disableOnInteraction: false,
    },
    pagination: {
       el: ".swiper-pagination",
       clickable: true,
    },
    breakpoints: {
       "@0.00": {
          slidesPerView: 1,
          spaceBetween: 10,
       },
       "@0.75": {
          slidesPerView: 2,
          spaceBetween: 20,
       },
       "@1.00": {
          slidesPerView: 2,
          spaceBetween: 40,
       },
       "@1.50": {
          slidesPerView: 3,
          spaceBetween: 50,
       },
    },
 });