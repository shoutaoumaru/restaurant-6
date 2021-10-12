class HeroSlider {
  constructor(el) {
    this.el = el;
    this.swiper = this._initSwiper();
  }

  _initSwiper() {
    return new Swiper(this.el, {
      loop: true,
      grabCursor: false,
      effect: 'fade',
      slidesPerView: 1,
      speed: 3000,
    });
  }

  start(options = {}) {
    options = Object.assign({
        delay: 4000,
        disableOnInteraction: false,
      },
      options
    );

    this.swiper.params.autoplay = options;
    this.swiper.autoplay.start();
  }
  stop() {
    this.swiper.autoplay.stop();
  }
}
class HeroSlider2 {
  constructor(el) {
    this.el = el;
    this.swiper = this._initSwiper();
  }

  _initSwiper() {
    return new Swiper(this.el, {
      loop: true,
      grabCursor: false,
      effect: 'fade',
      slidesPerView: 1,
      speed: 1000,
      // centeredSlides: true,
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }
}