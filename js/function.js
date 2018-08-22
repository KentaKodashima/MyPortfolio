/*
======================================================================
Project Name    : Final Project - My Portfolio
File Name       : function.js
Encoding        : UTF-8
Due Date        : February 15

Copyright © 2018 Kenta Kodashima. All rights reserved.

This source code or any portion thereof must not be
reproduced or used in any manner whatsoever.
======================================================================
*/

// Add and remove .scrollTop class of #nav
$(window).scroll(function () {
  var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 ||
      ua.indexOf('iPod') > 0 ||
      ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {

    // If #nav isOpen, fix the bg
    if ($('nav').hasClass("isOpen")) {
      $('body,html').css({"overflow":"hidden","height":"100%"});
    }
    if (!$('nav').hasClass("isOpen")) {
      $('body,html').css({"overflow":"visible","height":"auto"});
    }
  } else {
    /* How many pixels did the nav move? */
    var headerBottom = $('.mainTop').offset().top;
    if ($(window).scrollTop() >= headerBottom) {
      $("#nav").addClass('navScroll');
    } else if($(window).scrollTop() <= headerBottom) {
      $("#nav").removeClass('navScroll');
    }
  }
});

$(function() {
  // Toggling isOpen class
  $('button.navbar-toggler').click(function(){
    $("#nav").toggleClass('isOpen');
  });

  $('a.nav-link').click(function(){
    $("button.navbar-toggler").addClass('collapsed');
    $("div.navbar-collapse").removeClass('show');
    $("#nav").removeClass('isOpen');
  });
});
