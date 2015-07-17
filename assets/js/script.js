$(document).ready(function(){
    $(".fa-bars").hover(function(event){

    	$(this).stop().animate({'left':'5px'}, 200)
    }, function(){
    	$(this).stop().animate({'left':'-7px'}, 200)
    });

   $('.registration').fadeIn(2000);
   
   $('.fa-bars').click(function(){
      $(this).toggleClass('menu-open');
   		$('.mapp').toggleClass('menu-open');
   		$('.sidebar').toggleClass('sidebar-open');
   });


   $('.registration').click(function(){
      $(this).toggleClass('reg-open');
      $('.mapp').toggleClass('reg-open');
      $('.sidebar-right').toggleClass('sidebar-right-open');
   });


});//end body