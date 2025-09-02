$({ property: 0 }).animate(
  { property: 100 },
  {
    duration: 1200,
    step: function () {
      var _percent = Math.round(this.property);
      $(".loader__logo span").css("max-height", _percent + "%");
    },
    complete: function () {
      setTimeout(function () {
        $("body").addClass("loading");
      }, 50);
    },
  }
);

gsap.registerPlugin(ScrollTrigger);

const pageContainer = document.querySelector(".smooth-scroll");

/* SMOOTH SCROLL */

const scroller = new LocomotiveScroll({
  el: pageContainer,
  smooth: true,
  reloadOnContextChange: true,
  smartphone: {
    breakpoint: 0,
    smooth: false,
  },
  tablet: {
    breakpoint: 0,
    smooth: false,
  },
});

scroller.on("scroll", function () {
  var current_pull = parseInt(
    $(".c-scrollbar_thumb").css("transform").split(",")[5]
  );

  if (current_pull > 5) {
    $(".header").addClass("is-active-header");
  } else {
    $(".header").removeClass("is-active-header");
  }
});

scroller.on("scroll", ScrollTrigger.update);

ScrollTrigger.addEventListener("refresh", () => scroller.update());

ScrollTrigger.refresh();

ScrollTrigger.scrollerProxy(pageContainer, {
  scrollTop(value) {
    return arguments.length
      ? scroller.scrollTo(value, 0, 0)
      : scroller.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      left: 0,
      top: 0,
      width: window.innerWidth,
      height: window.innerHeight,
    };
  },
  pinType: pageContainer.style.transform ? "transform" : "fixed",
});

$(".client-list .img-box").tilt({
  maxTilt: -20,
  perspective: 1000,
  easing: "cubic-bezier(.3,.98,.52,.99)",
  speed: 400,
  glare: false,
  maxGlare: 0.2,
  scale: 1.1,
});

$(".solutions .content-box ul li .card").tilt({
  maxTilt: -20,
  perspective: 800,
  easing: "cubic-bezier(.3,.98,.52,.99)",
  speed: 1500,
  glare: true,
  maxGlare: 0.2,
  scale: 1.05,
});

// CURSOR JS

var cursor = document.querySelector(".cursor");

var a = document.querySelectorAll("a");

document.addEventListener("mousemove", function (e) {
  var x = e.clientX;

  var y = e.clientY;

  cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
});

document.addEventListener("mousedown", function () {
  cursor.classList.add("click");
});

document.addEventListener("mouseup", function () {
  cursor.classList.remove("click");
});

a.forEach((item) => {
  item.addEventListener("mouseover", () => {
    cursor.classList.add("hover");
  });

  item.addEventListener("mouseleave", () => {
    cursor.classList.remove("hover");
  });
});

$(".hamburger").on("click", () => {
  $("body").addClass("no-scroll");

  $(".fullscreen").toggleClass("active").removeClass("reverse_anim");
});

$(".close").on("click", () => {
  $("body").removeClass("no-scroll");

  $(".fullscreen").toggleClass("active").toggleClass("reverse_anim");
});

$(document).ready(function () {
  $(".main-trigger").on("click", function (e) {
    $(this).toggleClass("active");
    $(".menu-trigger").removeClass("active");
    $(".sub-menu").slideUp();
    $(this).next(".main-menu").slideToggle();
    $(this).next("ul").slideToggle();
  });

  $(".menu-trigger").on("click", function () {
    $(".sub-menu").not($(this).next()).slideUp();
    $(".menu-trigger").not(this).removeClass("active");
    $(this).toggleClass("active");
    $(this).next(".main-menu").slideToggle();
    $(this).next("ul").slideToggle();
  });
});

if ($(window).width() < 1199) {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 60) {
      $(".header").addClass("is-active-header");
    } else {
      $(".header").removeClass("is-active-header");
    }
  });
}
// PRODUCT SLIDER
var bannerSlider = new Swiper(".banner .slider", {
  slidesPerView: 1,
  speed: 1500,
  parallax: true,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  effect: "fade",
  pagination: {
    el: ".banner .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".banner .swiper-button-next",
    prevEl: ".banner .swiper-button-prev",
  },
});

var aboutSlider = new Swiper(".about-us .slider", {
  slidesPerView: 1,
  speed: 1200,
  parallax: true,
  loop: true,
  effect: "fade",
  pagination: {
    el: ".about-us .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".about-us .swiper-button-next",
    prevEl: ".about-us .swiper-button-prev",
  },
});

var testimonialsSlider = new Swiper(".testimonials .slider", {
  slidesPerView: 1,
  speed: 1200,
  parallax: true,
  loop: true,
  effect: "fade",
  pagination: {
    el: ".testimonials .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".testimonials .swiper-button-next",
    prevEl: ".testimonials .swiper-button-prev",
  },
});

var clientSlider = new Swiper(".our-client .slider", {
  loop: true,
  autoplay: {
    delay: 0,
  },
  slidesPerView: "auto",
  speed: 8000,
});