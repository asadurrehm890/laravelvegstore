
$(document).ready(function(){

$('.owl890').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:true,
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
});

$('.owl8902').owlCarousel({
    loop:true,
    margin:20,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:true,
        },
        1000:{
            items:2,
            nav:true,
            loop:false
        }
    }
});

$('.owl-nav .owl-prev span').css('display', 'none');
$('.owl-nav .owl-next span').css('display', 'none');


$('.detail-product .wh50').click(function(){
  let clim=$(this).attr('src');
  $('.detail-product .g1').fadeOut();
  $('.detail-product .g1').attr('src', clim);
  $('.detail-product .g1').fadeIn();
});

$('.single-prod-form .qont::after').click(function(){
   let x=$(this).find('input').val();
   x++;
   $(this).find('input').val(x);
});




});




//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



particlesJS.load('particles-js', 'assets/particles/demo/particles.json', function() {
  console.log('callback - particles.js config loaded');
});


var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene);
