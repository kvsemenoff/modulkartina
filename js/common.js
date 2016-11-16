

$(document).ready(function(){

    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });



  $('.group a').click(function(evt){   

    evt.preventDefault();

    var imgPatch = $(this).attr('href');

    var oldImage = $('.df-img-card img');

    var newImage = $('<img src="' + imgPatch +'">');

    newImage.hide();

    $('.df-img-card').prepend(newImage);

    newImage.slideDown(300);

    oldImage.slideUp(500, function(){

      $(this).remove();
      
    });

  });
  $('.group a').click(function(e) {
        e.preventDefault();
        $('a').removeClass('active');
        $(this).addClass('active');          
    });


   $(".owl-carousel-card").owlCarousel({
  loop: false,
  autoplay: false,
  items: 1,
  slideSpeed: 1500,
  nav: true,
  mouseDrag: false,  
  itemElement:'img',
  autoplayHoverPause: true,
  navText:['<div class="owl-prev"></div>','<div class="owl-next "></div>'],  
  animateOut: 'slideOutUp',
  animateIn: 'slideInUp'
});

  var owl = $(".pop-slider");
  owl.owlCarousel({
    loop:true,//Зацикливаем слайдер
    nav:true, //Навигация включена
    autoplay:false,//автозапуск
    smartSpeed:1000,//Время движения
    margin:0,
    navText:['<span class="prev-ars1"></span>','<span class="next-ars1"></span>'],
    responsive:{
        0:{
          items:1
        },
        380:{
          items:2
        },
        600:{
          items:3
        },
        1000:{
          items:4
        },
         1200:{
          items:4
        }
    } 
 
 });



  

 });


