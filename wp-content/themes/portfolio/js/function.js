/*
======================================================================
Project Name    : My Portfolio
File Name       : function-jquery-ver.js
Encoding        : UTF-8

Copyright © 2018 Kenta Kodashima. All rights reserved.

This source code or any portion thereof must not be
reproduced or used in any manner whatsoever.
======================================================================
*/
var bodyElement = document.body;
var htmlElement = document.getElementsByTagName("html")[0];
var navElement = document.getElementById('nav');
var windowHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

var elementsToAnimate = getElements('.animation');
var sections = getElements('section.section');

/**
 * Get HTML elements using querySelectorAll().
 * @param {string} element - String which specifies HTML element
 * */
function getElements(element) {
  var elements = document.querySelectorAll(element);
  if (elements.length === 0) {
    return false;
  }
  else {
    return elements;
  }
}

/**
 * Calculate the difference between the element's position and window's top.
 * @param {Element} element - Element object
 * @return {number}
 * */
function getOffsetTopDifference(element) {
  var rectTop = element.getBoundingClientRect().top;
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var offsetTop = rectTop + scrollTop;

  return offsetTop;
}

/**
 * A helper function to fix the background on smart phone devices if the nav is opened.
 * */
function isNavOpen() {
  if (document.getElementById('nav').classList.contains('isOpen')) {
    bodyElement.classList.add('fixBackground');
  } else {
    if (bodyElement.classList.contains('fixBackground')) {
      bodyElement.classList.remove('fixBackground');
    }
  }
}

/**
 * A helper function to detect mobile devices.
 * @return {boolean} - Mobile: true, else: false
 * */
function isMobile() {
  var ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 ||
      ua.indexOf('iPod') > 0 ||
      ua.indexOf('iPad') > 0 ||
      ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
    return true;
  }
}

/**
 * A helper function to highlight the menu to indicate which section the user is at.
 * @param {number} sectionNum - A section index
 * */
function changeSection(sectionNum) {
  var navWorks = document.getElementsByClassName('nav-works')[0];
  var navBlog = document.getElementsByClassName('nav-blog')[0];
  var navSkills = document.getElementsByClassName('nav-skills')[0];
  var navResources = document.getElementsByClassName('nav-resources')[0];
  var navProfile = document.getElementsByClassName('nav-profile')[0];
  var navContact = document.getElementsByClassName('nav-contact')[0];
  var currentSec = -1;

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

/**
 * A function to process smooth scrolling animation.
 * */
function smoothScrolling() {
  var headerHeight = 40;
  var interval = 10;
  var divisor = 8;
  var range = (divisor / 2) + 1;
  var linksInsidePage = document.querySelectorAll('a[href^="#"]');

  // Loop through links inside the same page
  linksInsidePage.forEach(function(anchor) {
    anchor.addEventListener('click', function(event) {
      event.preventDefault();

      var move;
      var currentPosition = window.pageYOffset || document.documentElement.scrollTop;
      var href = anchor.getAttribute('href');
      var target = document.querySelector(href == "#" || href == "" ? 'html' : href);
      var targetPosition = target.getBoundingClientRect().top + currentPosition - headerHeight;

      (function doScroll() {
        move = currentPosition + Math.round((targetPosition - currentPosition) / divisor);
        window.scrollTo(0, move);
        currentPosition = move;

        if (move >= targetPosition + range || move <= targetPosition - range) {
          // Scroll to the range
          window.setTimeout(doScroll, interval);
        } else {
          // Move to the exact position inside of the range
          window.scrollTo(0, targetPosition);
          history.pushState(null, null, href);
        }
      })();
    })
  });
}
smoothScrolling();

if (isMobile()) {
  var hamburgerButton = document.getElementsByClassName('navbar-toggler')[0];
  hamburgerButton.addEventListener('click', function() {
    navElement.classList.toggle('isOpen');
    isNavOpen();
  });

  var navLinks = getElements('a.nav-link');
  var navbarToggler = getElements('button.navbar-toggler')[0];
  var navbarCollapse = getElements('div.navbar-collapse')[0];
  navLinks.forEach(element => {
    element.addEventListener('click', () => {
      navbarToggler.classList.add('collapsed');
      navbarCollapse.classList.remove('show');
      navElement.classList.remove('isOpen');
      isNavOpen();
    });
  });
}

window.addEventListener('scroll', function() {
  /* How many pixels did the nav move? */
  var mainTopElement = document.getElementsByClassName('mainTop')[0];
  var headerBottom = getOffsetTopDifference(mainTopElement);
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (!isMobile()) {
    if (scrollTop >= headerBottom) {
      navElement.classList.add('navScroll');
    } else if (scrollTop <= headerBottom) {
      navElement.classList.remove('navScroll');
      var navWorks = document.getElementsByClassName('nav-works')[0];
      if (navWorks.classList.contains('active')) {
        navWorks.classList.remove('active');
      }
    }

    // Highlights menu
    var pageURL = location.href;
    if (!pageURL.includes('/work/')) {
      sections.forEach(function(val, index) {
        if (scrollTop > (getOffsetTopDifference(val) - 90)) {
          changeSection(index);
        }
      });
    }
  }

  // Keyframe animations
  elementsToAnimate.forEach(function(val) {
    var position = getOffsetTopDifference(val); // The distance from the top to the element
    if (scrollTop > position - windowHeight) { // The scroll position passed the element
      val.classList.add('active'); // Add the 'active' class
    }
  });
});