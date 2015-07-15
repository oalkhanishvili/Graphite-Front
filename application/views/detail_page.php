<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
	<?php echo $map['js']; ?>
	<title>Detail Page</title>
</head>
<body>
<div class="container">
<div class="detail-page">
	<p><?php echo $detail_page['title'] ?></p>
	<p><?php echo $detail_page['description'] ?></p>
	<p><a href="javascript:window.history.go(-1);">უკან დაბრუნებ</a></p>
</div>
<?php echo $map['html']; ?>
</div>
</body>
</body>
</html>