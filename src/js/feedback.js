'use strict';
var feedBackButton = document.querySelector('.feedback-button');
var overlay = document.querySelector('.overlay');
var popup = document.querySelector('.popup');
var popupSucccess = document.querySelector('.popup-success');
feedBackButton.addEventListener('click', function (e) {
  e.preventDefault();
  if (popup.classList.length === 1) {
    popup.classList.add('popup--open');
    overlay.classList.add('overlay--open');
  }
})
document.addEventListener('click', function (e) {
  if (e.target.classList.contains('overlay--open') || e.target.classList.contains('popup__close') || e.target.classList.contains('popup-success__close')) {
    overlay.classList.remove('overlay--open');
    popup.classList.remove('popup--open');
    popupSucccess.classList.remove('popup-success--open');
  }
})