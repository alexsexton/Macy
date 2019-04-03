/* global jQuery */

// if (jQuery) {
//   console.log('jQuery loaded')
// } else {
//   console.log('no jQuery')
// }

jQuery(document).ready(function ($) {
  $('html').addClass('js');

  // Nav Trigger
  var $hamburger = $('.site-nav-trigger');
  $hamburger.on('click', function (e) {
    e.preventDefault();
    $hamburger.toggleClass('is-active');
    $('body').toggleClass('site-nav-is-open');
  });
  // eol
});