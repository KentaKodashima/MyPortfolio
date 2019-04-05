/*
======================================================================
Project Name    : Final Project - My Portfolio
File Name       : function.js
Encoding        : UTF-8

Copyright © 2018 Kenta Kodashima. All rights reserved.

This source code or any portion thereof must not be
reproduced or used in any manner whatsoever.
======================================================================
*/

// Add and remove .scrollTop class of #nav
$(window).scroll(function () {
  var ua = navigator.userAgent;

  // Keyframe animations
  $(".animation").each(function () {
    var position = $(this).offset().top; // The distance from the top to the element
    var scroll = $(window).scrollTop(); // The scroll position
    var windowHeight = $(window).height(); // The window height
    if (scroll > position - windowHeight) { // The scroll position passed the element
      $(this).addClass('active'); // Add the 'active' class
    }
  });

  if (ua.indexOf('iPhone') > 0 ||
    ua.indexOf('iPod') > 0 ||
    ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {

    // If #nav isOpen, fix the bg
    if ($('nav').hasClass("isOpen")) {
      $('body,html').css({ "overflow": "hidden", "height": "100%" });
    }
    if (!$('nav').hasClass("isOpen")) {
      $('body,html').css({ "overflow": "visible", "height": "auto" });
    }
  } else {
    /* How many pixels did the nav move? */
    var headerBottom = $('.mainTop').offset().top;
    var sectionTopArr = new Array();
    var currentSec = -1;

    if ($(window).scrollTop() >= headerBottom) {
      $("#nav").addClass('navScroll');
    } else if ($(window).scrollTop() <= headerBottom) {
      $("#nav").removeClass('navScroll');
      if ($(".nav-works").hasClass('active')) {
        $(".nav-works").removeClass('active');
      }
    }

    // Each section's position
    $('section.section').each(function (i) {
      sectionTopArr[i] = $(this).offset().top - 14;
    });

    // // Keyframe animations
    // $(".animation").each(function () {
    //   var position = $(this).offset().top; // The distance from the top to the element
    //   var scroll = $(window).scrollTop(); // The scroll position
    //   var windowHeight = $(window).height(); // The window height
    //   if (scroll > position - windowHeight) { // The scroll position passed the element
    //     $(this).addClass('active'); // Add the 'active' class
    //   }
    // });

    // Scroll events
    for (var i = sectionTopArr.length - 1; i >= 0; i--) {
      if ($(window).scrollTop() > sectionTopArr[i] - 50) {
        chengeSection(i);
        break;
      }
    }

    function chengeSection(sectionNum) {
      if (sectionNum != currentSec) {
        currentSec = sectionNum;
        if (currentSec == 0) {
          $(".nav-works").addClass('active');
          $(".nav-blog").removeClass('active');
          $(".nav-skills").removeClass('active');
          $(".nav-resources").removeClass('active');
          $(".nav-profile").removeClass('active');
          $(".nav-contact").removeClass('active');
        } else if (currentSec == 1) {
          $(".nav-blog").addClass('active');
          $(".nav-works").removeClass('active');
          $(".nav-skills").removeClass('active');
          $(".nav-resources").removeClass('active');
          $(".nav-profile").removeClass('active');
          $(".nav-contact").removeClass('active');
        } else if (currentSec == 2) {
          $(".nav-skills").addClass('active');
          $(".nav-works").removeClass('active');
          $(".nav-blog").removeClass('active');
          $(".nav-resources").removeClass('active');
          $(".nav-profile").removeClass('active');
          $(".nav-contact").removeClass('active');
        } else if (currentSec == 3) {
          $(".nav-resources").addClass('active');
          $(".nav-works").removeClass('active');
          $(".nav-blog").removeClass('active');
          $(".nav-skills").removeClass('active');
          $(".nav-profile").removeClass('active');
          $(".nav-contact").removeClass('active');
        } else if (currentSec == 4) {
          $(".nav-profile").addClass('active');
          $(".nav-works").removeClass('active');
          $(".nav-blog").removeClass('active');
          $(".nav-skills").removeClass('active');
          $(".nav-resources").removeClass('active');
          $(".nav-contact").removeClass('active');
        } else if (currentSec == 5) {
          $(".nav-contact").addClass('active');
          $(".nav-works").removeClass('active');
          $(".nav-blog").removeClass('active');
          $(".nav-skills").removeClass('active');
          $(".nav-resources").removeClass('active');
          $(".nav-profile").removeClass('active');
        }
      }
    }

  }
});

$(function () {
  // Toggling isOpen class
  $('button.navbar-toggler').click(function () {
    $("#nav").toggleClass('isOpen');
  });

  $('a.nav-link').click(function () {
    $("button.navbar-toggler").addClass('collapsed');
    $("div.navbar-collapse").removeClass('show');
    $("#nav").removeClass('isOpen');
  });

  // Smooth scroll
  var headerHeight = 40; // Not the navbar to cover the section title

  // Segue from app detail page
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({ scrollTop: position }, 500);
    }, 200);
  }

  // Links inside the same page
  $('a[href^="#"]').click(function () {
    var speed = 400;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - headerHeight;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });
});
