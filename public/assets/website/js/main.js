/**
* Template Name: Mentor - v4.3.0
* Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
  /**
   * Sticky Header Navbar
   */
    window.onscroll = function() {myFunction()};
    var header = document.getElementById("header");
    var sticky = header.offsetTop;
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky")
      } else {
        header.classList.remove("sticky");
      }
    }

  /**
   * Owl Carouse For Course and Mashtors
   */
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:4,
          nav:true,
          loop:false
      }
    }
  });




(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  /** 
   * TypeJS  Script 
  */
   var typed4 = new Typed('#searchCourse', {
    strings: [
      'Search Course : Web Design', 
      'Search Course : Web Development', 
      'Search Course : Java', 
      'Search Course : Android', 
      'Search Course : AI', 
      'Search Course : Blockchain', 
    ],
    typeSpeed: 60,
    backSpeed: 60,
    attr: 'placeholder',
    bindInputFocusEvents: true,
    loop: true
  });
  



    /** 
     * Owl Carousel For Course And Mashtors
    */
    //  $('.owl-carousel').owlCarousel({
    //   loop:true,
    //   margin:10,
    //   responsiveClass:true,
    //   responsive:{
    //     0:{
    //         items:1,
    //         nav:true
    //     },
    //     600:{
    //         items:3,
    //         nav:false
    //     },
    //     1000:{
    //         items:4,
    //         nav:true,
    //         loop:false
    //     }
    //   }
    // })

})()