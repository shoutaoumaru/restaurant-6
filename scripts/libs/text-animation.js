class TextAnimation {
  constructor(el) {
    this.DOM = {};
    this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
  }
  animate() {
    this.DOM.el.classList.toggle('reveal');
  }
}
class BgAnimation {
  constructor(el) {
    this.DOM = {};
    this.DOM.el = el instanceof HTMLElement ? el : document.querySelector(el);
  }
  animate() {
    this.DOM.el.classList.toggle('reveal');
  }
}
// ページロード時のテキストアニメーション
document.addEventListener('DOMContentLoaded', function () {
  setTimeout(() => {
    const loadAnimation = document.querySelectorAll('.clip-js1');
    loadAnimation.forEach(function (element) {
      element.classList.add("reveal");
    }, 1500)
  });
});