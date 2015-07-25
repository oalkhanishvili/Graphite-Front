$(document).ready(function(){
  var wScroll = $(this).scrollTop();

  $('button').click(function(){
    $(this).css({'outline': 'none'});
  });



    /* bar slide on hover*/
    $(".fa-bars").hover(function(event){
    	$(this).stop().animate({'left':'5px'}, 200)
    }, function(){
    	$(this).stop().animate({'left':'-7px'}, 200)
    });

    /* rif=ght sidebar animation*/
  
    $('.sign-in').click(function(){
      $('.registration').toggleClass('reg-slide');
      $('.sidebar-right').toggleClass('sidebar-right-open');

      if($('.sidebar').hasClass('sidebar-open') && $('.mapp').hasClass('menu-open')){
        $('.sidebar, .mapp, .fa-bars').removeClass('sidebar-open menu-open');
      }
   });

    $('.sign-close').on('click', function(){
      $('.sidebar-right, .registration').removeClass('sidebar-right-open reg-slide');
    });

    /*sign in button*/
   $(".click-load").click(function() {
    var $btn = $(this);
    $btn.button('loading');
      setTimeout(function () {
        $('.mapp, .fa-bars').toggleClass('menu-open');
        $('.sidebar').toggleClass('sidebar-open');
        $('.sidebar-right, .registration').removeClass('sidebar-right-open reg-slide');
    }, 3000);
      // Then whatever you actually want to do i.e. submit form
      

    // After that has finished, reset the button state using
    setTimeout(function () {
        $btn.button('reset');
    }, 3000);
});
   
   /*burger sidebar left*/
   $('.fa-bars').click(function(){
      $(this).toggleClass('menu-open');
   		$('.mapp').toggleClass('menu-open');
   		$('.sidebar').toggleClass('sidebar-open');
   });

 
/* end dont works */
     
 /*sidebar*/

  //nav


//nav border slice
$('.nav-tabs li').click( function() { 
    var left = $(this).offset().left;
    $('#nav-marker').stop().animate( {  left: left  }, 800 );
    
});

$('.fa-thumbs-o-up').click(function(){
    $(this).toggleClass('fa-thumbs-up');
  });

$('.fa-thumbs-up').click(function(){
    $(this).toggleClass('fa-thumbs-o-up');
  });
	
//	$( '.fb-comment' ).click(function () {
//  if ( $( ".comments" ).is( ":hidden" ) ) {
//    $( "this" ).slideDown( "slow" );
//  } else {
//    $( "this" ).slideUp('fast');
//  }
//});


//	$('.fb-comment').click(function(){
//		$('.fa-angle-up').toggleClass('fa-angle-down');
//		$('.comments').append();
//	});

        


});//end body

