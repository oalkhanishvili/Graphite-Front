<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<?php echo $map['js']; ?>
	<title>Document</title>
</head>
<body>
<?php echo $map['html']; ?>
<script>
// assumes you're using jQuery
$(document).ready(function() {
$('.confirm-div').hide();
<?php if($this->session->flashdata('success')){ ?>
$('.confirm-div').css({
	'border':'1px solid black',
	'width':'300px',
	'color':'white',
	'background':'green',
	'padding':'10px'
}).html('<?php echo $this->session->flashdata('success'); ?>').show();
});
<?php } ?>
</script>
<div class="confirm-div"></div>
<?php echo form_open_multipart('map/insert_mark');?>
	<p><select name="category_id">
	<?php foreach ( $category as $item ): ?>
		<option><?php echo $item['name']; ?></option>
	<?php endforeach; ?>
	</select></p>
	<p><input type="text" name="user_id" placeholder="user id" value="2"></p>
	<p><input type="text" name="title" placeholder="title"></p>
	<p><textarea name="description"></textarea></p>
	<p><input id="lat_id" type="text" name="latitude" placeholder="long" value></p>
	<p><input id="lng_id" type="text" name="longitude" placeholder="latitude" value></p>
	<p><input type="file" name="userfile" ></p>
	<button type="submit">შენახვა</button>

</form>
</body>
</html>