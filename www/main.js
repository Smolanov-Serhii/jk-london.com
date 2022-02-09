$(document).ready(function(){
  	$('#menu').on("click", "a", function(event){
  		event.preventDefault();
          var id  = $(this).attr('href'),
              top = $(id).offset().top;
  		$('body,html').animate({scrollTop: top}, 1500);
  	});
    $("#toresp").click(function() {
        $('html, body').animate({
            scrollTop: $("#ex7").offset().top
        }, 2000);
    });
    $('.modal-info-cart button.close').click(function() {
         $('.modal-info-cart .modal-body iframe').remove() // ну типа того, но второй раз видео уже не откроется :)
        }) 
    $('#toresp').click(function() {
         $('.modal-info-cart .modal-body iframe').remove() // ну типа того, но второй раз видео уже не откроется :)
        })
    $('.scroll-link').click(function(){
      $('body,html').animate({scrollTop: 880}, 400);
    });

    $('#sertification').slick({
        infinite: true,
        slidesToShow: 4,
        variableWidth: true
    });

    $('#slider-1').slick({
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        dots: true
    });

    $('#slider-2').slick({
        infinite: true,
        slidesToShow: 3,
        variableWidth: true,
        dots: true
    });
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
  });
  $('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    arrows: false,
    responsive: [{
      breakpoint: 1280,
      settings: {
        slidesToShow: 2
      }
    },{
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    }]
  });
    $('.modal-video .close, .modal-video .cls').click(function(){
      var windowId = $(this).attr('data-current');
      var selector = '#' + windowId + ' iframe';
      var src = $(selector).attr('src');
      var stop = '404';
      $(selector).attr('src', stop);
      $(selector).attr('src', src);
    });

    // $(document).scroll(function(){
    //   var scroll = $(document).scrollTop();

    //   console.log(scroll);

    //   if ( scroll >= 5535 && scroll <= 5600 ) {
    //     $('.s-5 .left').addClass('slideInLeft animated');
    //     setTimeout("$('.s-5 .left').removeClass('slideInLeft animated');",3000);

    //     $('.s-5 .right').addClass('slideInRight animated');
    //     setTimeout("$('.s-5 .right').removeClass('slideInRight animated');",3000);
    //   }

    //   if ( scroll >= 8300 && scroll <= 8350 ) {
    //     $('.s-7 ul').addClass('fadeInDown animated');
    //     setTimeout("$('.s-7 ul').removeClass('fadeInDown animated');",3000);
    //   }

    //   if ( scroll >= 3550 && scroll <= 3600 ) {
    //     $('.s-4 ul').addClass('fadeInDown animated');
    //     setTimeout("$('.s-4 ul').removeClass('fadeInDown animated');",3000);
    //   }

    //   if( scroll >= 12150 && scroll <= 12200 ) {
    //     $('.s-11 .l').addClass('fadeInLeft animated');
    //     setTimeout("$('.s-11 .l').removeClass('fadeInLeft animated');",3000); 

    //     $('.s-11 .r').addClass('fadeInRight animated');
    //     setTimeout("$('.s-11 .r').removeClass('fadeInRight animated');",3000); 
    //   }
    // });

    $('.goods-catalog-btn-group button').click(function(){
      var goodsTab = $(this).attr('data-target');
      var nextBtn = $(goodsTab).attr('data-button-tab');

      $('.goods-catalog-btn-group button').removeClass('active');
      $(nextBtn).addClass('active');

      $('.goods-type-wr').fadeOut(300);

      $(goodsTab).fadeIn(300);
    });

    $('.opt-lab').click(function(){
      $('.roz-lab').removeClass('checked');
      var checkboxState = !($('.opt-user .opt-ipt').prop('checked'));

      if( checkboxState ) {
        $(this).toggleClass('checked');
      }

      if( !checkboxState ) {
        $(this).toggleClass('checked');
      }
    });

    $('.roz-lab').click(function(){
      $('.opt-lab').removeClass('checked');
      var checkboxState = !($('.opt-user .roz-ipt').prop('checked'));

      if( checkboxState ) {
        $(this).toggleClass('checked');
      }

      if( !checkboxState ) {
        $(this).toggleClass('checked');
      }
    });
    
      $(".spoiler-trigger").click(function() {
        $(this).parent().next().collapse('toggle');
      });
     $('.slide-cart').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.nav-cart'
    });
    $('.nav-cart').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: '.slide-cart',
      dots: true,
      centerMode: true,
      focusOnSelect: true
    });
$('.form-popup').load('mail-popup.html');
$('.form-1-1').load('form-1-1.html');
$('.form-1-2').load('form-1-2.html');
$('.form-catalog').load('form-catalog.html');
$('.form-catalog-2').load('form-catalog-2.html');
})

function parseGET(url){ 
  if(!url || url == '') url = decodeURI(document.location.search); 
  if(url.indexOf('?') < 0) return Array(); 

  url = url.split('?'); 
  url = url[1]; 

  var GET = [], 
      params = [], 
      key = []; 

  if(url.indexOf('#')!=-1){ url = url.substr(0,url.indexOf('#')); } 
  if(url.indexOf('&') > -1){ params = url.split('&');} else {params[0] = url; } 

  for (r=0; r<params.length; r++){ 
    for (z=0; z<namekey.length; z++){ 
      if(params[r].indexOf(namekey[z]+'=') > -1){ 
        if(params[r].indexOf('=') > -1) { 
          key = params[r].split('='); 
          GET[key[0]]=key[1]; 
        } 
      } 
    } 
  } 
  return (GET); 
}; 

function input(){ 

  var $_GET = parseGET(); 

  for(z=0; z<namekey.length; z++){ 
    if(!!$_GET[namekey[z]]){ 
      $(div_class).append('<input name="'+namekey[z]+'" type="'+input_hide+'" value="'+$_GET[namekey[z]]+'"><br>'); 
    } 
  } 
}

( function() {

  var youtube = document.querySelectorAll( ".youtube" );
  
  for (var i = 0; i < youtube.length; i++) {
    
    var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
    
    var image = new Image();
        image.src = source;
        image.addEventListener( "load", function() {
          youtube[ i ].appendChild( image );
        }( i ) );
    
        youtube[i].addEventListener( "click", function() {

          var iframe = document.createElement( "iframe" );

              iframe.setAttribute( "frameborder", "0" );
              iframe.setAttribute( "allowfullscreen", "" );
              iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

              this.innerHTML = "";
              this.appendChild( iframe );
        } );  
  };
  
} )();
// auto popup

// var infload = function(){
  
//   $('#modal-info').modal('show');
// }; 
// $(window).on('load',function(){
//          window.setTimeout(infload, 40000);
//     });

var infload1 = function(){
  
  $('#modal-info').modal('show');
}; 
$(window).on('load',function(){
         window.setTimeout(infload1, 40000);
    });
// var infload = function(){
  
//   $('#modal-info-1').modal('show');
// }; 
// $(window).on('load',function(){
//          window.setTimeout(infload, 5000); 
// });