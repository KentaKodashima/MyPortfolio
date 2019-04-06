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

const elementsToAnimate = getElements('.animation');
const sections = getElements('section.section');

/**
 * Get HTML elements using querySelectorAll().
 * @param {string} element - String which specifies HTML element
 * */
function getElements(element) {
  let elements = document.querySelectorAll(element);
  if (elements.length === 0) {
    return false;
  }
  else {
    return elements;
  }
}

/**
 * Pupulate the given array with the offsetTop properties of the given elements.
 * @param {array} elements - An array of HTML elements
 * @param {array} array - An empty array to populate
 * */
function getOffsetTops(elements, array) {
  elements.forEach(element => {
    array.push(getOffsetTopDifference(element));
    // array.push(element.offsetTop);
  });
}

/**
 * Calculate the difference between the element's position and window's top.
 * @param {Element} element - Element object
 * @return {number}
 * */
function getOffsetTopDifference(element) {
  const rectTop = element.getBoundingClientRect().top;
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const offsetTop = rectTop + scrollTop;

  return offsetTop;
}

/**
 * A helper function to fix the background on smart phone devices if the nav is opened.
 * */
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
/**
 * A helper function to highlight the menu to indicate which section the user is at.
 * @param {number} sectionNum - A section index
 * */
function changeSection(sectionNum) {
  const navWorks = document.getElementsByClassName('nav-works')[0];
  const navBlog = document.getElementsByClassName('nav-blog')[0];
  const navSkills = document.getElementsByClassName('nav-skills')[0];
  const navResources = document.getElementsByClassName('nav-resources')[0];
  const navProfile = document.getElementsByClassName('nav-profile')[0];
  const navContact = document.getElementsByClassName('nav-contact')[0];
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

function smoothScrolling() {
  const headerHeight = 40;
  const linksInsidePage = document.querySelectorAll('a[href^="#"]');
  // const urlHash = location.hash;
  // if (urlHash) {
  //   $('body,html').stop().scrollTop(0);
  //   setTimeout(function () {
  //     var target = $(urlHash);
  //     var position = target.offset().top - headerHeight;
  //     $('body,html').stop().animate({ scrollTop: position }, 500);
  //   }, 200);
  // };

  // Links inside the same page
  linksInsidePage.forEach(anchor => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
      const speed = 400;
      const href = anchor.getAttribute('href');
      const target = document.querySelector(href == "#" || href == "" ? 'html' : href);
      const position = target.getBoundingClientRect().top - headerHeight;
      bodyElement.animate({scrollTop: [position]}, speed);
      htmlElement.animate({scrollTop: [position]}, speed);
      // $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    })
  });
}

let hamburgerButton = document.getElementsByClassName('navbar-toggler')[0];
hamburgerButton.addEventListener('click', () => {
  navElement.classList.toggle('isOpen');
})

const navLinks = getElements('a.nav-link');
const navbarToggler = getElements('button.navbar-toggler')[0];
const navbarCollapse = getElements('div.navbar-collapse')[0];
navLinks.forEach(element => {
  element.addEventListener('click', () => {
    navbarToggler.classList.add('collapsed');
    navbarCollapse.classList.remove('show');
    navElement.classList.remove('isOpen');
  });
});

window.addEventListener('scroll', () => {
  const ua = navigator.userAgent;
  if (ua.indexOf('iPhone') > 0 ||
    ua.indexOf('iPod') > 0 ||
    ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {

    isNavOpen()
  }

  /* How many pixels did the nav move? */
  const mainTopElement = document.getElementsByClassName('mainTop')[0];
  const headerBottom = getOffsetTopDifference(mainTopElement);
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop >= headerBottom) {
    navElement.classList.add('navScroll');
  } else if (scrollTop <= headerBottom) {
    navElement.classList.remove('navScroll');
    const navWorks = document.getElementsByClassName('nav-works')[0];
    if (navWorks.classList.contains('active')) {
      navWorks.classList.remove('active');
    }
  }

  // Highlights menu
  sections.forEach((val, index) => {
    if (scrollTop > (getOffsetTopDifference(val) - 50)) {
      changeSection(index);
    }
  });

  // Keyframe animations
  elementsToAnimate.forEach(val => {
    const position = getOffsetTopDifference(val); // The distance from the top to the element
    if (scrollTop > position - windowHeight) { // The scroll position passed the element
      val.classList.add('active'); // Add the 'active' class
    }
  });
})

// console.log(document.querySelectorAll('a[href^="#"]'))

// $(function () {

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
//
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
