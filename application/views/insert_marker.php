<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php echo $map['js']; ?>
	<title>Document</title>
</head>
<body>
<?php echo $map['html']; ?>

<form action="<?php echo site_url('map/insert_mark'); ?>">
	<input type="text" name="user_id" placeholder="user id">
	<input type="text" name="category_id" placeholder="category id">
	<input type="text" name="pic_name" placeholder="surati">
	<input type="text" name="title" placeholder="title">
	<input type="text" name="longitude" placeholder="long">
	<input type="text" name="latitude" placeholder="latitude">
	<button type="submit">შენახვა</button>

</form>
</body>
</html>