'use strict';
const controlMenu = document.querySelector('#control-menu');
const menu = document.querySelector('#menu');
const overlay = document.querySelector('.overlay');

controlMenu.addEventListener('click', () => {
  menu.classList.add('nav__menu-is-active');
  overlay.classList.add('overlay__is-active');
  document.body.classList.add('stop-scrolling');
});

overlay.addEventListener('click', () => {
  menu.classList.remove('nav__menu-is-active');
  overlay.classList.remove('overlay__is-active');
  document.body.classList.remove('stop-scrolling');
})
