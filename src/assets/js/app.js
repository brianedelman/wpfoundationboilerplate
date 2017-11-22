import $ from 'jquery';
import whatInput from 'what-input';
import './lib/slick.min.js';
import { TweenLite } from 'gsap';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import * as parallax from './modules/parallax.js';
import * as slick from './modules/slick.js';

$(document).foundation();

function init() {
  parallax.init();
  slick.init();
}

$(document).ready(function() {
  init();
});
