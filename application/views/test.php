<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<title>Document</title>
</head>
<body>
	<script type="text/javascript">
	$(function(){ // start of doc ready.
   $(".faq_title").click(function(e){
      e.preventDefault();  // stops the jump when an anchor clicked.
      var title = $(this).text(); // anchors do have text not values.

      $.ajax({
        url: 'ajax',
        data: {'title': title}, // change this to send js object
        type: "post",
        success: function(data){
        	// response = jQuery.parseJSON(data);
        	// 
           document.write(data);
           console.log(data);
        }
      });
   });
}); // end of doc ready
</script>
<a href="#" class="faq_title">4</a>
</body>
</html>