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
    // $(".toggleBtn").click(function(){
    //   $('#nav').toggleClass("isOpen");
    // });
    // Toggle the menu when nav li a is clicked
    $('#nav a').on('click', function(){
      $('.toggleBtn').click();
    });
    // If #nav isOpen, fix the bg
    // if ($('nav').hasClass("isOpen")) {
    //   $('body,html').css({"overflow":"hidden","height":"100%"});
    // }
    // if (!$('nav').hasClass("isOpen")) {
    //   $('body,html').css({"overflow":"visible","height":"auto"});
    // }
  } else {
    /* How many pixels did the nav move? */
    if ($(window).scrollTop() >= 600) {
      /* Action */
      $("#nav").addClass('navScroll');
    } else if($(window).scrollTop() <= 600) {
      /* Normal state */
      $("#nav").removeClass('navScroll');
    }
  }
});

// Overlay
$(function() {
  $("#modalTarget1").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});

$(function() {
  $("#modalTarget2").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});

$(function() {
  $("#modalTarget3").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});

$(function() {
  $("#modalTarget4").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});

$(function() {
  $("#modalTarget5").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});

$(function() {
  $("#modalTarget6").click(function() {
    $("#modalItem1").fadeIn();
    $('body').css('overflow','hidden');
  });
  $(".modalCloseBtnArea, .modalCloseBtnBottom").click(function() {
    $("#modalItem1").fadeOut();
    $('body').css('overflow','visible');
  });
});
