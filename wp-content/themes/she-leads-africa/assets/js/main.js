"use strict";

const isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
if(isFirefox){
    document.head.innerHTML += 
    `
    <link rel="stylesheet" href="assets/css/style.css" media="all">
    `
}   

TweenMax.to(".hero-banner-header h1", 1, {
    opacity: 1,
    y: 0,
    delay: .5,
    ease: Expo.easeInOut
}),
TweenMax.to(".hero-banner-header h2", 1.3, {
    opacity: 1,
    y: 0,
    delay: .8,
    ease: Expo.easeInOut
}),
TweenMax.to(".hero-banner-header a", 1.6, {
    opacity: 1,
    y: 0,
    delay: 1.1,
    ease: Expo.easeInOut
});

var t1 = new TimelineMax({paused: true});

    t1.staggerFrom(".mobile-content ul", 0.2, {
        x: "-100%",
        ease: Power2.easeInOut
    });

    t1.reverse();

var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
            this.classList.toggle("is-active");
            $("#nav-modal").toggleClass("show");
            t1.reversed(!t1.reversed());
        }, false);
      });
    }
