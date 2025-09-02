jQuery(document).ready(function($) { // This line starts the jQuery wrapper
    // Loader animation - Keep this at the very top as it controls initial loading state
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

    // Initialize Swiper sliders first, as their content affects page height
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
    console.log("Swiper bannerSlider initialized.");


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
    console.log("Swiper aboutSlider initialized.");

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
    console.log("Swiper testimonialsSlider initialized.");

    var clientSlider = new Swiper(".our-client .slider", {
        loop: true,
        autoplay: {
            delay: 0,
        },
        slidesPerView: "auto",
        speed: 8000,
    });
    console.log("Swiper clientSlider initialized.");


    // Now, register GSAP and ScrollTrigger and initialize Locomotive Scroll
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        console.log("GSAP and ScrollTrigger registered.");
    } else {
        console.error("GSAP is not loaded. ScrollTrigger will not work.");
        return; // Exit if GSAP isn't available
    }

    const pageContainer = document.querySelector(".smooth-scroll");
    let scroller;

    // Initialize Locomotive Scroll ONLY if pageContainer exists
    if (pageContainer) {
        scroller = new LocomotiveScroll({
            el: pageContainer,
            smooth: true,
            reloadOnContextChange: true, // Important for dynamic content
            smartphone: {
                breakpoint: 0,
                smooth: false,
            },
            tablet: {
                breakpoint: 0,
                smooth: false,
            },
        });
        console.log("Locomotive Scroll initialized.");
    } else {
        console.warn("'.smooth-scroll' element not found. Locomotive Scroll will not be initialized.");
    }

    if (scroller) { // Only proceed with scroll-related logic if scroller is initialized
        // Update header class on scroll
        scroller.on("scroll", function (instance) {
            const current_pull = instance.scroll.y;

            if (current_pull > 5) {
                $(".header").addClass("is-active-header");
            } else {
                $(".header").removeClass("is-active-header");
            }
        });

        // Link Locomotive Scroll with ScrollTrigger
        scroller.on("scroll", ScrollTrigger.update);
        console.log("Locomotive Scroll linked to ScrollTrigger.");

        // Refresh ScrollTrigger when Locomotive Scroll is refreshed
        ScrollTrigger.addEventListener("refresh", () => {
            scroller.update();
            console.log("ScrollTrigger refresh event triggered Locomotive Scroll update.");
        });

        // Set up the ScrollTrigger scroller proxy
        ScrollTrigger.scrollerProxy(pageContainer, {
            scrollTop(value) {
                return arguments.length
                    ? scroller.scrollTo(value, {duration: 0, disableLerp: true})
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

        // Initial refresh for ScrollTrigger after proxy setup
        ScrollTrigger.refresh();
        console.log("Initial ScrollTrigger refresh triggered after proxy.");

        // Additional refresh after a short delay to account for any last-minute rendering
        setTimeout(() => {
            scroller.update();
            ScrollTrigger.refresh();
            console.log("Delayed ScrollTrigger/Locomotive Scroll refresh triggered.");
        }, 300); // Small delay, adjust if needed
    }

    // Tilt.js integrations
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

    // Custom Cursor JS
    var cursor = document.querySelector(".cursor");
    var a = document.querySelectorAll("a"); // Select all <a> elements

    document.addEventListener("mousemove", function (e) {
        if (cursor) {
            var x = e.clientX;
            var y = e.clientY;
            cursor.style.transform = `translate3d(calc(${x}px - 50%), calc(${y}px - 50%), 0)`;
        }
    });

    document.addEventListener("mousedown", function () {
        if (cursor) {
            cursor.classList.add("click");
        }
    });

    document.addEventListener("mouseup", function () {
        if (cursor) {
            cursor.classList.remove("click");
        }
    });

    if (a) { // Check if 'a' (NodeList) exists
        a.forEach((item) => {
            item.addEventListener("mouseover", () => {
                if (cursor) {
                    cursor.classList.add("hover");
                }
            });
            item.addEventListener("mouseleave", () => {
                if (cursor) {
                    cursor.classList.remove("hover");
                }
            });
        });
    }

    // Hamburger menu functionality
    $(".hamburger").on("click", () => {
        $("body").addClass("no-scroll");
        $(".fullscreen").toggleClass("active").removeClass("reverse_anim");
    });

    $(".close").on("click", () => {
        $("body").removeClass("no-scroll");
        $(".fullscreen").toggleClass("active").toggleClass("reverse_anim");
    });

    // Mobile/Dropdown menu triggers
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

    // Header scroll-active class for smaller screens
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

    // This is the key change: Force ScrollTrigger and Locomotive Scroll to update
    // once all assets (like images) have fully loaded.
    window.onload = function() {
        if (scroller) {
            scroller.update();
            console.log("Locomotive Scroll updated on window.onload (final check).");
        }
        if (typeof ScrollTrigger !== 'undefined') {
            ScrollTrigger.refresh();
            console.log("ScrollTrigger refreshed on window.onload (final check).");
        }
    };

}); // This line closes the jQuery wrapper
