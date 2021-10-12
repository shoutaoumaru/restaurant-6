document.addEventListener('DOMContentLoaded', function () {
  setTimeout(() => {
    const hero = new HeroSlider('.swiper-container');
    const hero2 = new HeroSlider2('.swiper-container2');
    hero.start();
    // hero2.start();
  }, 1000);
  // <!-------- /HeroSlider-animation -------->
  const cb = function (el, inview) {
    if (inview) {
      const ta = new TextAnimation(el);
      ta.animate();
    }
  };
  const so = new ScrollObserver('.clip-js', cb, {
    rootMargin: '-50px 0px',
  });
  // <!-------- /text-animation -------->
  const so2 = new ScrollObserver(
    '.appear',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-50px 0px',
    }
  );
  // <!-------- /inview-animation -------->
  const so3 = new ScrollObserver(
    '.cover-slide',
    (el, inview) => {
      if (inview) {
        el.classList.add('inview');
      } else {
        el.classList.remove('inview');
      }
    }, {
      rootMargin: '-50px 0px',
    }
  );
  // <!-------- /imgSlide-animation -------->
});