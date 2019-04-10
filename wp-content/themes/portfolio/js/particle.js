/*
======================================================================
Project Name    : My Portfolio
File Name       : particle.js
Encoding        : UTF-8

This implementations is based on Rachel Smith's awesome work.
https://tympanus.net/codrops/2014/09/23/animated-background-headers/

Copyright © 2018 Kenta Kodashima. All rights reserved.

This source code or any portion thereof must not be
reproduced or used in any manner whatsoever.
======================================================================
*/

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

(function() {
  var width,
      height,
      headerElement,
      canvas,
      ctx,
      circles,
      animateHeader = true,
      ua = navigator.userAgent;

  initHeader();
  addListeners();

  // Initialize the header
  function initHeader() {
    headerElement = document.getElementById('header');
    width = window.innerWidth;

    if (isMobile()) {
      height = headerElement.offsetHeight;
    } else {
      height = window.innerHeight;
    }

    headerElement.style.height = height+'px';

    canvas = document.getElementById('particle-canvas');
    canvas.width = width;
    canvas.height = height;
    ctx = canvas.getContext('2d');

    // Create particles
    circles = [];
    for(var x = 0; x < width * 0.5; x++) {
      var c = new Particle();
      circles.push(c);
    }
    animate();
  }

  // Event handling
  function addListeners() {
    window.addEventListener('scroll', scrollCheck);
    window.addEventListener('resize', resize);
  }

  // Stop animation if the header is not on the screen
  function scrollCheck() {
    if(document.body.scrollTop > height) {
      animateHeader = false;
    } else {
      animateHeader = true;
    }
  }

  function resize() {
    width = window.innerWidth;
    height = headerElement.offsetHeight;
    headerElement.style.height = height + 'px';
    canvas.width = width;
    canvas.height = height;
  }

  function animate() {
    if(animateHeader) {
      ctx.clearRect(0, 0, width, height);
      circles.forEach(function (circle) {
        circle.draw();
      });
    }
    requestAnimationFrame(animate);
  }

  // Particle object
  function Particle() {
    var _this = this;

    // constructor
    (function() {
      _this.pos = {};
      init();
    })();

    function init() {
      _this.pos.x = Math.random() * width;
      _this.pos.y = height + Math.random() * 100;
      _this.alpha = 0.1 + Math.random() * 0.3;
      _this.scale = 0.1 + Math.random() * 0.3;
      _this.velocity = Math.random();
    }

    this.draw = function() {
      if(_this.alpha <= 0) {
        // Recreate itself when it disappears
        init();
      }

      _this.pos.y -= _this.velocity;
      _this.alpha -= 0.0003;

      // Draw a particle
      ctx.beginPath();
      ctx.arc(_this.pos.x, _this.pos.y, _this.scale * 10, 0, 2 * Math.PI, false);
      ctx.fillStyle = 'rgba(255,255,255,'+ _this.alpha + ')';
      ctx.fill();
    };
  }
})();