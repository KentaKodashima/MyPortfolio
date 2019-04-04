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

const bodyElement = document.body;
const htmlElement = document.getElementsByTagName("html")[0];
const navElement = document.getElementById('nav')
const windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

let elementsToAnimate = getElements('.animation')
let sections = getElements('section.section')

function getElements(element) {
  let elements = document.querySelectorAll(element);
  if (elements.length === 0) {
    return false;
  }
  else {
    return elements;
  }
}

function getOffsetTop(element = navElement) {
  const rect = element.getBoundingClientRect();
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const offsetTop = rect.top + scrollTop;

  return offsetTop;
}

// If #nav isOpen, fix the bg
function isNavOpen() {
  if (document.getElementById('nav').classList.contains('isOpen')) {
    bodyElement.style.overflow = 'hidden';
    bodyElement.style.height = '100%'
    htmlElement.style.overflow = 'hidden';
    htmlElement.style.height = '100%'
  } else {
    bodyElement.style.overflow = 'visible';
    bodyElement.style.height = 'auto'
    htmlElement.style.overflow = 'visible';
    htmlElement.style.height = 'auto'
  }
}

function chengeSection(sectionNum) {
  let navWorks = document.getElementsByClassName('nav-works');
  let navBlog = document.getElementsByClassName('nav-blog');
  let navSkills = document.getElementsByClassName('nav-skills');
  let navResources = document.getElementsByClassName('nav-resources');
  let navProfile = document.getElementsByClassName('nav-profile');
  let navContact = document.getElementsByClassName('nav-contact');
  let currentSec = -1;

  if (sectionNum != currentSec) {
    currentSec = sectionNum;
    if (currentSec == 0) {
      navWorks.classList.add('active');
      navBlog.classList.remove('active');
      navSkills.classList.remove('active');
      navResources.classList.remove('active');
      navProfile.classList.remove('active');
      navContact.classList.remove('active');
    } else if (currentSec == 1) {
      navBlog.classList.add('active');
      navWorks.classList.remove('active');
      navSkills.classList.remove('active');
      navResources.classList.remove('active');
      navProfile.classList.remove('active');
      navContact.classList.remove('active');
    } else if (currentSec == 2) {
      navSkills.classList.add('active');
      navWorks.classList.remove('active');
      navBlog.classList.remove('active');
      navResources.classList.remove('active');
      navProfile.classList.remove('active');
      navContact.classList.remove('active');
    } else if (currentSec == 3) {
      navResources.classList.add('active');
      navWorks.classList.remove('active');
      navBlog.classList.remove('active');
      navSkills.classList.remove('active');
      navProfile.classList.remove('active');
      navContact.classList.remove('active');
    } else if (currentSec == 4) {
      navProfile.classList.add('active');
      navWorks.classList.remove('active');
      navBlog.classList.remove('active');
      navSkills.classList.remove('active');
      navResources.classList.remove('active');
      navContact.classList.remove('active');
    } else if (currentSec == 5) {
      navContact.classList.add('active');
      navWorks.classList.remove('active');
      navBlog.classList.remove('active');
      navSkills.classList.remove('active');
      navResources.classList.remove('active');
      navProfile.classList.remove('active');
    }
  }
}

window.addEventListener('scroll', () => {
  let ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 ||
    ua.indexOf('iPod') > 0 ||
    ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {

    isNavOpen()

  } else {
    /* How many pixels did the nav move? */
    var mainTopElement = document.getElementsByClassName('mainTop');
    var headerBottom = getOffsetTop(mainTopElement)
    let sectionTopArr = new Array();

    if (scrollTop >= headerBottom) {
      navElement.classList.add('navScroll');
    } else if (scrollTop <= headerBottom) {
      navElement.classList.remove('navScroll');
      let navWorks = document.getElementsByClassName('nav-works');
      if (navWorks.classList.contains('active')) {
        navWorks.classList.remove('active');
      }
    }

    // Each section's position
    sections.forEach(function (val, i) {
      sectionTopArr[i] = getOffsetTop(val) - 14;
    });

    // Keyframe animations
    elementsToAnimate.forEach(function (val) {
      var position = getOffsetTop(val); // The distance from the top to the element
      var scroll = scrollTop; // The scroll position
      if (scroll > position - windowHeight) { // The scroll position passed the element
        val.classList.add('active'); // Add the 'active' class
      }
    });

    // Scroll events
    for (var i = sectionTopArr.length - 1; i >= 0; i--) {
      if (scrollTop > sectionTopArr[i] - 50) {
        chengeSection(i);
        break;
      }
    }
  }
})

// $(function () {
//   // Toggling isOpen class
//   $('button.navbar-toggler').click(function () {
//     $("#nav").toggleClass('isOpen');
//   });

//   $('a.nav-link').click(function () {
//     $("button.navbar-toggler").addClass('collapsed');
//     $("div.navbar-collapse").removeClass('show');
//     navElement.removeClass('isOpen');
//   });

//   // Smooth scroll
//   var headerHeight = 40; // Not the navbar to cover the section title

//   // Segue from app detail page
//   var urlHash = location.hash;
//   if (urlHash) {
//     $('body,html').stop().scrollTop(0);
//     setTimeout(function () {
//       var target = $(urlHash);
//       var position = target.offset().top - headerHeight;
//       $('body,html').stop().animate({ scrollTop: position }, 500);
//     }, 200);
//   }

//   // Links inside the same page
//   $('a[href^="#"]').click(function () {
//     var speed = 400;
//     var href = $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top - headerHeight;
//     $('body,html').animate({ scrollTop: position }, speed, 'swing');
//     return false;
//   });
// });
