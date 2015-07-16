$(document).ready(function(){
    $(".fa-bars").hover(function(event){

    	$(this).stop().animate({'left':'5px'}, 200)
    }, function(){
    	$(this).stop().animate({'left':'-7px'}, 200)
    });
});