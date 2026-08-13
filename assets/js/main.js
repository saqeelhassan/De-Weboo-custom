/*------------------------------------------------------------------
  De-Weboo — Main JS (performance-optimised)

  Key changes vs original:
  · rafThrottle() wraps every hot path (mousemove, scroll)
  · passive:true on all scroll/pointer listeners
  · IntersectionObserver replaces scroll-poll for progress bars,
    skill bars and revealSlideTop (eliminates layout-thrash getBCR calls)
  · All Swiper inits are guard-checked (no wasted init on missing elements)
  · Event delegation replaces per-node mouseenter/mouseleave bindings
    on a/button/p/headings
  · Null-safe cursor follower
  · Fixed setInterval leak: ID stored, clearInterval(id) used correctly
  · Removed duplicate $(document).ready() nesting
  · Fixed duplicate var terElement declaration
  · gsap.registerPlugin called once, at top of GSAP block
------------------------------------------------------------------*/

(function ($) {
    "use strict";

    /* ── Utility: call fn at most once per animation frame ───────────── */
    function rafThrottle(fn) {
        var pending = false;
        return function () {
            if (pending) return;
            pending = true;
            var ctx = this, args = arguments;
            requestAnimationFrame(function () {
                fn.apply(ctx, args);
                pending = false;
            });
        };
    }

    /* ── Preloader ───────────────────────────────────────────────────── */
    $(window).on("load", function () {
        $(".preloader").addClass("loaded").delay(600).fadeOut();
    });

    /* ── .progress-area bootstrap bars (IntersectionObserver) ───────────
       Fixes original bugs:
       • setInterval id was never stored → clearInterval() was a no-op
       • Multiple intervals could stack on repeated viewport entries       */
    var progressAreaEls = document.querySelectorAll(".progress-area");
    if (progressAreaEls.length) {
        var progressAreaObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                var $target = $(entry.target);
                var $bar    = $target.find(".progress-bar");
                if (entry.isIntersecting) {
                    var width  = parseInt($bar.attr("aria-valuenow"), 10) || 0;
                    var $value = $target.find(".progress-value");
                    var count  = 0;
                    var id     = setInterval(function () {
                        if (count >= width) {
                            clearInterval(id);
                        } else {
                            count += 1;
                            $value.text(count + "%");
                        }
                    }, Math.max(1, 1000 / width));
                    $bar.css({ width: width + "%", transition: "width 1s linear" });
                    progressAreaObserver.unobserve(entry.target); // animate once
                } else {
                    $bar.css({ width: "0%", transition: "width 1s linear" });
                }
            });
        }, { threshold: 0.1 });

        progressAreaEls.forEach(function (el) { progressAreaObserver.observe(el); });
    }

    /* ── Document Ready ──────────────────────────────────────────────── */
    $(document).ready(function () {

        /* ─ Mobile Menu ──────────────────────────────────────────────── */
        var $mobileMenu = $("#mobile-menu");
        if ($mobileMenu.length) {
            $mobileMenu.meanmenu({
                meanMenuContainer: ".mobile-menu",
                meanScreenWidth:   "1199",
                meanExpand:        ['<i class="far fa-plus"></i>'],
            });
        }

        /* ─ Sidebar Toggle ───────────────────────────────────────────── */
        $(".offcanvas__close, .offcanvas__overlay").on("click", function () {
            $(".offcanvas__info").removeClass("info-open");
            $(".offcanvas__overlay").removeClass("overlay-open");
        });
        $(".sidebar__toggle").on("click", function () {
            $(".offcanvas__info").addClass("info-open");
            $(".offcanvas__overlay").addClass("overlay-open");
            $(".mobile-menu .mean-nav > ul").show();
        });

        /* ─ Body Overlay ─────────────────────────────────────────────── */
        $(".body-overlay").on("click", function () {
            $(".offcanvas__area").removeClass("offcanvas-opened");
            $(".df-search-area").removeClass("opened");
            $(".body-overlay").removeClass("opened");
        });

        /* ─ Sticky Header (passive + RAF-throttled) ──────────────────── */
        var headerEl = document.getElementById("header-sticky");
        if (headerEl) {
            window.addEventListener("scroll", rafThrottle(function () {
                headerEl.classList.toggle("sticky", window.scrollY > 250);
            }), { passive: true });
        }

        /* ─ .progress_bar skill bars (IntersectionObserver) ─────────── */
        var skillBarEls = document.querySelectorAll(".progress_bar .progress_bar_item");
        if (skillBarEls.length) {
            var skillBarObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting || entry.target.dataset.started) return;
                    entry.target.dataset.started = "true";

                    var $item     = $(entry.target);
                    var $progress = $item.find(".progress");
                    var $label    = $item.find(".item_value");
                    var target    = parseInt($progress.data("progress"), 10) || 0;
                    var i         = 0;
                    var id        = setInterval(function () {
                        if (i > target) {
                            clearInterval(id);
                        } else {
                            $progress.css("width", i + "%");
                            $label.html(i + "%");
                            i++;
                        }
                    }, 30);
                    skillBarObserver.unobserve(entry.target);
                });
            }, { threshold: 0.1 });

            skillBarEls.forEach(function (el) { skillBarObserver.observe(el); });
        }

        /* ─ FAQ Accordion ────────────────────────────────────────────── */
        var accordionItems = document.querySelectorAll(".accordion-item");
        if (accordionItems.length) {
            accordionItems.forEach(function (item) {
                item.addEventListener("click", function () {
                    accordionItems.forEach(function (other) {
                        if (other !== item) other.classList.remove("active");
                    });
                    item.classList.toggle("active");
                });
            });
        }

        /* ─ Pricing Switcher ─────────────────────────────────────────── */
        var switchEl = document.querySelector(".switch");
        if (switchEl) {
            switchEl.addEventListener("click", function () {
                switchEl.classList.toggle("active");
            });
        }

        /* ─ Hero Slider ──────────────────────────────────────────────── */
        if (document.querySelector(".hero-slider")) {
            var sliderInit1 = new Swiper(".hero-slider", {
                loop:         true,
                slidesPerView: 1,
                effect:       "fade",
                speed:        2000,
                autoplay:     { delay: 4000, disableOnInteraction: false },
                pagination:   { el: ".dot", clickable: true },
            });

            (function animated_swiper(selector, init) {
                function runAnim() {
                    $(selector + " [data-animation]").each(function () {
                        var $el      = $(this);
                        var anim     = $el.data("animation");
                        var delay    = $el.data("delay");
                        var duration = $el.data("duration");
                        $el.removeClass("anim" + anim)
                           .addClass(anim + " animated")
                           .css({
                               webkitAnimationDelay:    delay,
                               animationDelay:          delay,
                               webkitAnimationDuration: duration,
                               animationDuration:       duration,
                           })
                           .one("animationend", function () {
                               $el.removeClass(anim + " animated");
                           });
                    });
                }
                runAnim();
                init.on("slideChange", function () {
                    $(selector + " [data-animation]").removeClass("animated");
                });
                init.on("slideChange", runAnim);
            })(".hero-slider", sliderInit1);
        }

        /* ─ Magnific Popup ───────────────────────────────────────────── */
        if ($(".img-popup").length) {
            $(".img-popup").magnificPopup({
                type:    "image",
                gallery: { enabled: true },
            });
        }
        if ($(".video-popup").length) {
            $(".video-popup").magnificPopup({
                type:           "iframe",
                mainClass:      "mfp-fade",
                removalDelay:   160,
                preloader:      false,
                fixedContentPos: false,
                iframe: {
                    patterns: {
                        youtube:       { index: "youtube.com/",  id: "v=", src: "https://www.youtube.com/embed/%id%?autoplay=1" },
                        youtube_short: { index: "youtu.be/",     id: "/",  src: "https://www.youtube.com/embed/%id%?autoplay=1" },
                    },
                },
            });
        }

        /* ─ Counter Up ───────────────────────────────────────────────── */
        if ($(".count").length) {
            $(".count").counterUp({ delay: 15, time: 4000 });
        }

        /* ─ WOW Animation ────────────────────────────────────────────── */
        new WOW().init();

        /* ─ Nice Select ──────────────────────────────────────────────── */
        var $selects = $("select").not(".portfolio-discuss-select");
        if ($selects.length) {
            $selects.niceSelect();
        }

        /* ─ Swiper Sliders (guard-checked — no wasted init on missing elements) */
        if (document.querySelector(".banner-section-wrap")) {
            new Swiper(".banner-section-wrap", {
                spaceBetween: 30, speed: 1500, loop: true, effect: "fade",
                pagination:   { el: ".swiper-pagination", clickable: true },
                breakpoints:  { 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".blog-details-slides")) {
            new Swiper(".blog-details-slides", {
                spaceBetween: 30, speed: 1500, loop: true,
                navigation:   { nextEl: ".array-prev", prevEl: ".array-next" },
                breakpoints:  { 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".testimonial-slider")) {
            new Swiper(".testimonial-slider", {
                spaceBetween: 30, speed: 1500, loop: true,
                navigation:   { nextEl: ".array-prev", prevEl: ".array-next" },
                breakpoints:  { 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".testimonial-wrapper2")) {
            new Swiper(".testimonial-wrapper2", {
                spaceBetween: 20, speed: 1500, loop: true,
                autoplay:     { delay: 1000, disableOnInteraction: false },
                navigation:   { nextEl: ".array-prev", prevEl: ".array-next" },
                breakpoints:  { 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".testimonial-wrapper05")) {
            new Swiper(".testimonial-wrapper05", {
                spaceBetween:    24,   speed: 1500, loop: true, centeredSlides: true,
                autoplay:        { delay: 1000, disableOnInteraction: false },
                navigation:      { nextEl: ".array-prev", prevEl: ".array-next" },
                breakpoints:     { 1199: { slidesPerView: 3 }, 991: { slidesPerView: 3 }, 767: { slidesPerView: 2 }, 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".sponsor-text-slide")) {
            new Swiper(".sponsor-text-slide", {
                speed: 6000, loop: true, slidesPerView: "auto", centeredSlides: true,
                autoplay:    { delay: 1, disableOnInteraction: false },
                breakpoints: { 0: { spaceBetween: 12 }, 400: { spaceBetween: 12 }, 600: { spaceBetween: 12 }, 991: { spaceBetween: 12 } },
            });
        }
        if (document.querySelector(".sponsor-text-slide2")) {
            new Swiper(".sponsor-text-slide2", {
                speed: 6000, loop: true, slidesPerView: "auto", centeredSlides: true,
                autoplay:    { delay: 1, reverseDirection: true, disableOnInteraction: false },
                breakpoints: { 0: { spaceBetween: 12 }, 400: { spaceBetween: 12 }, 600: { spaceBetween: 12 }, 991: { spaceBetween: 12 } },
            });
        }
        if (document.querySelector(".gateway-wrapper")) {
            new Swiper(".gateway-wrapper", {
                spaceBetween: 24, speed: 1500, loop: true,
                navigation:   { nextEl: ".array-prev", prevEl: ".array-next" },
                breakpoints:  { 1199: { slidesPerView: 4 }, 991: { slidesPerView: 3 }, 767: { slidesPerView: 2 }, 575: { slidesPerView: 2 }, 0: { slidesPerView: 1 } },
            });
        }
        if (document.querySelector(".sponsor-wrapper")) {
            new Swiper(".sponsor-wrapper", {
                spaceBetween: 30, speed: 1500, loop: true,
                autoplay:     { delay: 1000, disableOnInteraction: false },
                breakpoints:  { 1199: { slidesPerView: 6 }, 767: { slidesPerView: 5 }, 575: { slidesPerView: 4 }, 0: { slidesPerView: 2 } },
            });
        }
        if (document.querySelector(".testimonial-slider-3")) {
            new Swiper(".testimonial-slider-3", {
                spaceBetween: 30, speed: 1500, loop: true,
                autoplay:     { delay: 1000, disableOnInteraction: false },
                navigation:   { nextEl: ".array-prev", prevEl: ".array-next" },
            });
        }

        /* ─ Search Popup ─────────────────────────────────────────────── */
        var $searchWrap  = $(".search-wrap");
        var $navSearch   = $(".nav-search");
        var $searchClose = $("#search-close");

        function closeSearch() {
            $searchWrap.fadeOut(200);
            $navSearch.add($searchClose).removeClass("open");
        }
        $(".search-trigger").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            $navSearch.add($searchClose).addClass("open");
        });
        $(".search-close").on("click", function (e) {
            e.preventDefault();
            $searchWrap.animate({ opacity: "toggle" }, 500);
            closeSearch();
        });
        $(document.body).on("click", closeSearch);
        $(".search-trigger, .main-search-input, .search-wrap").on("click", function (e) {
            e.stopPropagation();
        });

        /* ─ VanillaTilt ──────────────────────────────────────────────── */
        var tiltEls = document.querySelectorAll(".tilt");
        if (tiltEls.length) {
            VanillaTilt.init(tiltEls, {
                reverse: true, max: 15, speed: 400, scale: 1.01,
                glare: true, reset: true, perspective: 800, transition: true,
                "max-glare": 0.45, "glare-prerender": false,
                gyroscope: true,
                gyroscopeMinAngleX: -45, gyroscopeMaxAngleX: 45,
                gyroscopeMinAngleY: -45, gyroscopeMaxAngleY: 45,
            });
        }
        var btnVivacityEls = document.querySelectorAll(".btn-vivacity");
        if (btnVivacityEls.length) {
            VanillaTilt.init(btnVivacityEls, { max: 14, speed: 2800, perspective: 500 });
        }

        /* ─ Mouse Follower (RAF-throttled, passive, null-safe) ───────── */
        var follower = document.querySelector(".mouse-follower .cursor-outline");
        var dot      = document.querySelector(".mouse-follower .cursor-dot");
        if (follower && dot) {
            var latestX = 0, latestY = 0, rafPending = false;
            window.addEventListener("mousemove", function (e) {
                latestX = e.clientX;
                latestY = e.clientY;
                if (rafPending) return;
                rafPending = true;
                requestAnimationFrame(function () {
                    follower.animate(
                        [{ opacity: 1, left: latestX + "px", top: latestY + "px", easing: "ease-in-out" }],
                        { duration: 3000, fill: "forwards" }
                    );
                    dot.animate(
                        [{ opacity: 1, left: latestX + "px", top: latestY + "px", easing: "ease-in-out" }],
                        { duration: 1500, fill: "forwards" }
                    );
                    rafPending = false;
                });
            }, { passive: true });
        }

        /* ─ Cursor class toggles — event delegation replaces
           per-node bindings on every a, button, p, and heading ───────── */
        $(document)
            .on("mouseenter", "a, button", function () {
                $(".mouse-follower").addClass("hide-cursor");
            })
            .on("mouseleave", "a, button", function () {
                $(".mouse-follower").removeClass("hide-cursor");
            })
            .on("mouseenter", "h1, h2, h3, h4, .display-one, .display-two, .display-three, .display-four, .display-five, .display-six", function () {
                $(".mouse-follower").addClass("highlight-cursor-head");
                $(this).addClass("highlight-cursor-head");
            })
            .on("mouseleave", "h1, h2, h3, h4, .display-one, .display-two, .display-three, .display-four, .display-five, .display-six", function () {
                $(".mouse-follower").removeClass("highlight-cursor-head");
                $(this).removeClass("highlight-cursor-head");
            })
            .on("mouseenter", "p", function () {
                $(".mouse-follower").addClass("highlight-cursor-para");
                $(this).addClass("highlight-cursor-para");
            })
            .on("mouseleave", "p", function () {
                $(".mouse-follower").removeClass("highlight-cursor-para");
                $(this).removeClass("highlight-cursor-para");
            });

        /* ─ Box Style Mouse Trail ────────────────────────────────────── */
        document.querySelectorAll(".box-style").forEach(function (el) {
            el.addEventListener("mousemove", function (e) {
                el.style.setProperty("--x", e.offsetX + "px");
                el.style.setProperty("--y", e.offsetY + "px");
            });
        });

        /* ─ GSAP Animations ──────────────────────────────────────────── */
        gsap.registerPlugin(ScrollTrigger);

        // Visible From Right — IntersectionObserver triggers GSAP
        var vfrEls = document.querySelectorAll(".visible-from-right");
        if (vfrEls.length) {
            var rightObserver = new IntersectionObserver(function (entries, obs) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    var split = new SplitText(entry.target, { type: "chars, words" });
                    gsap.from(split.chars, { duration: 0.4, x: 45, autoAlpha: 0, stagger: 0.15 });
                    obs.unobserve(entry.target);
                });
            }, { threshold: 0.1 });
            vfrEls.forEach(function (el) { rightObserver.observe(el); });
        }

        // Visible Slowly From Right
        var vsrEls = document.querySelectorAll(".visible-slowly-right");
        if (vsrEls.length) {
            gsap.utils.toArray(vsrEls).forEach(function (el) {
                var split = new SplitText(el, { type: "chars, words", lineThreshold: 0.5 });
                gsap.timeline({
                    scrollTrigger: {
                        trigger: el, start: "top 90%", end: "bottom 60%",
                        scrub: false, markers: false, toggleActions: "play none none none",
                    },
                }).from(split.chars, { duration: 0.8, x: 70, autoAlpha: 0, stagger: 0.03 });
            });
        }

        // Visible From Bottom
        gsap.utils.toArray(".visible-from-bottom").forEach(function (el) {
            var split = new SplitText(el, { type: "words, lines" });
            gsap.set(el, { perspective: 400 });
            split.split({ type: "lines" });
            gsap.timeline({
                scrollTrigger: { trigger: el, start: "top 90%", end: "bottom 60%", scrub: false, markers: false },
            }).from(split.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -75, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
        });

        // Visible Slowly Bottom
        var vsbEls = document.querySelectorAll(".visible-slowly-bottom");
        function visibleSlowly() {
            vsbEls.forEach(function (el) {
                if (el.anim) { el.anim.progress(1).kill(); el.split.revert(); }
                el.split = new SplitText(el, { type: "lines,words,chars", linesClass: "split-line" });
                el.anim  = gsap.from(el.split.chars, {
                    scrollTrigger: { trigger: el, toggleActions: "restart pause resume reverse", start: "top 90%" },
                    duration: 0.8, ease: "circ.out", y: 70, stagger: 0.02,
                });
            });
        }
        ScrollTrigger.addEventListener("refresh", visibleSlowly);
        if (vsbEls.length) visibleSlowly();

        // Reveal One (left/right slide)
        document.querySelectorAll(".reveal-one").forEach(function (container) {
            var image = container.querySelector(".reveal-image-one");
            if (!image) return;
            var tl = gsap.timeline({
                scrollTrigger: { trigger: container, toggleActions: "restart none none reset", start: "top 90%", end: "top 0%" },
            });
            tl.set(container, { autoAlpha: 1 })
              .from(container, 1.5, { xPercent: 100, ease: Power2.out })
              .from(image,     1.5, { xPercent: -100, scale: 1.3, delay: -1.5, ease: Power2.out });
        });

        // RevealSlideTop — IntersectionObserver replaces scroll listener + getBCR
        var rstEls = document.querySelectorAll(".revealSlideTop");
        if (rstEls.length) {
            var rstObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (e) {
                    e.target.classList.toggle("active", e.isIntersecting);
                });
            }, { rootMargin: "0px 0px -150px 0px" });
            rstEls.forEach(function (el) { rstObserver.observe(el); });
        }

        // Reveal Fourth
        document.querySelectorAll(".reveal-fourth").forEach(function (container) {
            var image = container.querySelector("img");
            if (!image) return;
            var tl = gsap.timeline({
                scrollTrigger: { trigger: container, toggleActions: "restart none none reset" },
            });
            tl.set(container, { autoAlpha: 1 })
              .from(container, 1.5, { xPercent: 100, ease: Power2.out })
              .from(image,     1.5, { xPercent: -100, scale: 1.3, delay: -1.5, ease: Power2.out });
        });

        // Reveal Left / Bottom (image reveal)
        function revealAnimation(selector, axis, percent, scale) {
            gsap.utils.toArray(selector).forEach(function (container) {
                var image = container.querySelector("img");
                if (!image) return;
                gsap.timeline({
                    scrollTrigger: { trigger: container, toggleActions: "play none none reverse" },
                })
                .set(container, { autoAlpha: 1 })
                .from(container, { duration: 1.5, [axis + "Percent"]: -percent, ease: "power2.out" })
                .from(image,     { duration: 1.5, [axis + "Percent"]:  percent, scale: scale, delay: -1.5, ease: "power2.out" });
            });
        }
        revealAnimation(".reveal-left",   "x", 100, 1.3);
        revealAnimation(".reveal-bottom", "y", 100, 1.3);

    }); // end $(document).ready

})(jQuery);
