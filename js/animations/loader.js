import anime from './animejs/lib/anime.es.js';
const body = document.querySelector('body');
const html = document.documentElement;

if(document.querySelector('.c-loading') && !document.referrer.includes(window.location)){
  var tl = anime.timeline({
    begin: function() {
      body.classList.add('u-overflow-hidden');
      html.classList.add('u-overflow-hidden');
    }
  });
  
  tl.add({
    targets: '.loading__logo',
    duration: 3000,
    keyframes: [
      {
        translateY: -50
      },
      {
        translateY: 0, 
        opacity: 1
      }
    ],
    complete: function() {
      body.classList.remove('u-overflow-hidden');
      html.classList.remove('u-overflow-hidden');
    }
  }).add({
    targets: '.c-loading',
    duration: 2000,
    keyframes: [
      {
        opacity: 0
      }
    ],
    complete: function() {
      body.classList.remove('u-overflow-hidden');
      html.classList.remove('u-overflow-hidden');
      document.querySelector('.c-loading').classList.add('u-display--none')
    }
  });
}
else if(document.querySelector('.c-loading')) {
   document.querySelector('.c-loading').classList.add('u-display--none')
   body.classList.remove('u-overflow-hidden');
   html.classList.remove('u-overflow-hidden');
}
else {
  body.classList.remove('u-overflow-hidden');
  html.classList.remove('u-overflow-hidden');
}