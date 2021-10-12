class MobileMenu {
  constructor() {
    this.DOM = {};
    this.DOM.body = document.querySelector('body');
    this.DOM.btn = document.querySelector('.mobile-menu__btn');
    this.DOM.container = document.querySelector('.mobile-button');
    this.DOM.nav = document.querySelector('.mobile-menu');
    this.DOM.logo = document.querySelector('.logo');

    this.eventType = this._getEventType();
    this._addEvent();
  }

  _getEventType() {
    return window.ontouchstart ? 'touchstart' : 'click';
  }
  _toggle() {
    this.DOM.body.classList.toggle('hidden');
    this.DOM.container.classList.toggle('menu-open');
    this.DOM.nav.classList.toggle('menu-open');
    this.DOM.logo.classList.toggle('menu-open');
  }

  _addEvent() {
    this.DOM.btn.addEventListener(this.eventType, this._toggle.bind(this));
  }
}
new MobileMenu();