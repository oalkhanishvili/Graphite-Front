<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/javascript.fullPage.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css'); ?>">
		<?php echo $map['js']; ?>
		<title>Document</title>
	</head>
	<body>
		<div class="container header-logo">
			<div class="sidebar-right">
				
			</div>
			<img src="<?php echo base_url('img/marker11.png'); ?>"  class="img-responsive pull-left" alt="Image">

			<div class="pull-right registration">				
				<button type="button" class="btn btn-success sign-up pull-right">Sign Up</button>
				<span class="registartion-border pull-right ">&nbsp;</span>
				<p class="pull-right sign-in " >Sign In</p>
			</div>

		</div>
		<div id="fullpage">	
			

			<div class="section" id="section0">
				<div class="slide" id="slide1">
					<div class="content">
						<img src="<?php echo base_url('assets/img/img.jpg'); ?>" alt="">
					</div>
				</div>
				<div class="slide" id="slide2">
					<div class="content">
						<img src="<?php echo base_url('assets/img/img1.jpg'); ?>" alt="">
					</div>
				</div>
				<div class="slide" id="slide2">
					<div class="content">
						<img src="<?php echo base_url('assets/img/img3.jpg'); ?>" alt="">
					</div>
				</div>
			</div>
			<div class="section" id="section1">
				<div class="content">
					<div class="map_container">
						<i class="fa fa-bars fa-2x"></i>
						<div class="mapp">						
							<?php echo $map['html']; ?>
						</div>
					</div>
					<div class="sidebar">
							
						</div>
					
				</div>

			</div>

			
		</div>
		
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/javascript.fullPage.min.js'); ?>"></script>
	<script type="text/javascript">
		fullpage.initialize('#fullpage', {
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
		menu: '#menu',
		css3:true
	});
	</script>


	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</html>