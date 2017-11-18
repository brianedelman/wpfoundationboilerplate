import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import './lib/demosite';

$(document).foundation();

function setUpParallax() {
    var parallaxElements = $('.parallax-banner'),
    parallaxQuantity = parallaxElements.length;

    $(window).on('scroll', function () {

      window.requestAnimationFrame(function () {

        for (var i = 0; i < parallaxQuantity; i++) {
          var currentElement = parallaxElements.eq(i);
          var scrolled = $(window).scrollTop();

          currentElement.css({
            'transform': 'translate3d(0,' + scrolled * -0.3 + 'px, 0)'
          });
        }
      });

    });
  }

  function init() {
    setUpParallax();
  }

  $(document).ready(function() {
    init();
  });
