</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/javascript.fullPage.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.custom-scrollbar.js'); ?>"></script>
<script type="text/javascript">
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<script id='fbop8ca'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=puneet.kay&button=compact&url=http%3A%2F%2Fpuneetk.com%2Ffacebook-php-codeigniter%2F';f.title='Flattr';f.height=20;f.width=110;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('fbop8ca');</script>

<script type="text/javascript">
	fullpage.initialize('#fullpage', {
	anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
	menu: '#menu',
	css3:true,
	scrollingSpeed: 1000,
	easing: 'easeInOutCubic',
});
//
$(document).on('click','[data-class="modal"]',function(e){
	e.preventDefault();  // stops the jump when an anchor clicked.
	var title = $(this).attr('data-id'); // anchors do have text not values.
	$.ajax({
	url: 'map/detail_page',
	data: {'title': title}, // change this to send js object
	type: "post",
		success: function(data){
		var response = jQuery.parseJSON(data);
		console.log(response);
		$('#myModalLabel').text(response.title);
		$('.button_like').val(response.like);
		$('.modal-description').text(response.description)
		var img = $('#img').attr('src');
		var numerInString = img.match(/\d+/);
		var newname ='';
		if (numerInString !=null){
			newname = img.substr(0,img.lastIndexOf('/')+1)+response.pic_name;
		}else{
			newname = img+'/'+response.pic_name;
		}
		$('#img').attr('src', newname);
		}
	});
});
$(document).on('click', '.button_like', function(e){
	e.preventDefault();
	var like = parseInt($('.button_like').val(),10);
	var id = $('[data-class="modal"]').attr('data-id');
	console.log(id);
	like=like+1;
	$.post('map/add_like', {'like':like,'user_id':id} ,function(resp){
		if (resp == 'ok'){
		$('.button_like').attr('value',like);
		}
	});
});
</script>
<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript">
$(window).load(function () {
$(".demo").customScrollbar();
$("#fixed-thumb-size-demo").customScrollbar({fixedThumbHeight: 50, fixedThumbWidth: 60});
});
</script>
</script>
</html>
