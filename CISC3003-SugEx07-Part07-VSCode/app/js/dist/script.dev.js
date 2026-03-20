"use strict";

var btnHamburger = document.querySelector('#btnHamburger');
var body = document.querySelector('body');
var header = document.querySelector('.header');
var overlay = document.querySelector('.overlay');
var fadeElems = document.querySelectorAll('.has-fade');
btnHamburger.addEventListener('click', function () {
  console.log('click hamburger');

  if (header.classList.contains('open')) {
    body.classList.remove('noscroll');
    header.classList.remove('open');
    fadeElems.forEach(function (element) {
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });
  } else {
    body.classList.add('noscroll');
    header.classList.add('open');
    fadeElems.forEach(function (element) {
      element.classList.remove('fade-out');
      element.classList.add('fade-in');
    });
  }
});