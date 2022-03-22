/*---- expender menu ----*/ 
const showMenu = (toggleId, navId)=>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)
  
    if(toggle && nav){
      toggle.addEventListener('click', ()=>{
        nav.classList.toggle('show')
        toggle.classList.toggle('bx-x')
      })
    }
  }
  showMenu('header-toggle','nav-menu')

/*---- active and remove menu ----*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
  /*Active link*/          
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
}
navLink.forEach(n => n.addEventListener('click', linkAction));

$(document).ready(function(){
  $('.get-starated-video').venobox({
    framewidth: '400px',       
    frameheight: '300px',      
    border: '10px',             
    bgcolor: '#5dff5e',        
    titleattr: 'data-title',    
    numeratio: true,           
    infinigall: true 
  });
});


// slider js 

$(".slider-items-active").slick({
  infinite: true,
  autoplay:true,
  autoplaySpeed:3000,
  nav:true,
  dots:false,
  fade:true,
  infinite: true,
  prevArrow:"<button class='prev-arrow'> <i class='bx bx-chevrons-left'></i> </button>",
  nextArrow:"<button class='next-arrow'> <i class='bx bx-chevrons-right'></i> </button>",
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      infinite: true
    }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: "unslick"

    }]
});


// job filter


$().ready(function() {

  $("#job-apply-now").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      contactNumber:"required",
      inputAddress: "required",
      inputCity: "required",
      inputState: "required",
      positionTitle: "required",
      University: "required",
      major: "required",
      Degree: "required",
      Location: "required",
      Location: "required",
      Company: "required",
      Position: "required",
      uploadCV: "required",
      
      topic: {
        required: "#newsletter:checked",
        minlength: 2
      },
      agree: "required"
    },
  });

});




$().ready(function() {

  $("#contact-now").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      contactNumber:"required",
      Company: "required",
      
      topic: {
        required: "#newsletter:checked",
        minlength: 2
      },
      agree: "required"
    },
  });

});


$('.supply-chain-slider-active').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: false,
  navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})

$(document).ready(function () {
  $(".pagination").rPage();
});


$('.team-slider').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots: false,
  navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:4
      }
  }
})


// slider js 

$(".quality-slider-active").slick({
  infinite: true,
  autoplay:true,
  autoplaySpeed:3000,
  nav:false,
  arrows:false,
  dots:true,
  infinite: true,
  prevArrow:"<button class='prev-arrow'> <i class='bx bx-chevrons-left'></i> </button>",
  nextArrow:"<button class='next-arrow'> <i class='bx bx-chevrons-right'></i> </button>",
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      infinite: true
    }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        dots: true
      }

    }, {

      breakpoint: 300,
      settings: "unslick"

    }]
});



$('select').change(function() {
  console.log($('option').val())
    if ($(this).val() == 'Clear my checklist') {
      $('.showcontent').show();
    } else {
      $('.showcontent').hide();
    }
});