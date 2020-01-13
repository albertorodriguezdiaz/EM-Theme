

$(document).ready(function(){

  $("#owl-example").owlCarousel({
    items:1,
    loop:true,
    margin:0,
    nav:true,
    rtl:true,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    afterMove: moved

  });

  $('#servicios-inicio').owlCarousel({
    items:1,
    loop:true,
    margin:25,
    nav:true,
    rtl:true,
    autoplay:true,
    autoplayTimeout:4000,
    afterMove: moved,
    responsive:{
          0:{
              items:1,
              loop:true,
              nav:true
          },
          400:{
              items:1,
              loop:true
          },
          600:{
              items:1,
              loop:true
          },
          800:{
              items:2,
              loop:true
          },
          1000:{
              items:2,
              loop:true,
              nav:true
          }
      }

  });


  $('#nuestros-servicios').owlCarousel({
    items:1,
    loop:true,
    margin:25,
    nav:true,
    rtl:true,
    autoplay:true,
    autoplayTimeout:4000,
    afterMove: moved,
    responsive:{
          0:{
              items:1,
              loop:true
          },
          400:{
              items:1,
              loop:true
          },
          600:{
              items:1,
              loop:true
          },
          800:{
              items:1,
              loop:true
          },
          1000:{
              items:1,
              loop:true
          }
      }

  });


  function moved() {
    var owl = $("#owl-example").data('owlCarousel');
    var $buttons = $('.custom-control button');
    $buttons.removeClass('active').removeAttr('disabled');
    $('.custom-control').find('[data-slide="'+owl.currentItem +'"]').addClass('active').attr('disabled', 'disabled');
  }



$(".selectLG").mouseover(function() {
  $("#flags").css("display", "block");
});


$("#flags").mouseout(function() {
  $("#flags").css("display", "none");
});


});
