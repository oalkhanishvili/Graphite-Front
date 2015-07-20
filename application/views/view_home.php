<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/javascript.fullPage.css'); ?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/fonts.css'); ?>">
		<?php echo $map['js']; ?>
		<title>Document</title>
	</head>
	<body>
		<div class="container header-logo">
			<div class="sidebar-right">
				<form action="" method="" role="form">
					<legend class="pull-right"><i class='fa fa-close fa-md pull-right sign-close'></i></legend>									
					<div class="form-group sign-in-inputs">
						<label for=""></label>
						<input type="text" class="form-control" id="" placeholder="Username">
						<label for=""></label>
						<input type="text" class="form-control" id="" placeholder="Password">
					</div>
					<button id="submitaction" class="btn btn-sm btn-warning click-load" data-loading-text="&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-cog fa-spin'></i>&nbsp;&nbsp;&nbsp;&nbsp;" type="">Sign in</button>
					
				</form>
			</div>
			<img src="<?php echo base_url('img/icons/logo.png'); ?>"  class="img-responsive pull-left" alt="Image">

			<div class="pull-right registration">				
				<button type="button" class="btn btn-sm btn-warning sign-up pull-right">Sign Up</button>
				<span class="registartion-border pull-right ">&nbsp;</span>
				<p class="pull-right sign-in" >Sign In</p>
			</div>

		</div>

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        <img src="<?php echo base_url('assets/img/4.jpg'); ?>" alt="">
		      </div>
		      
		    </div>
		  </div>
		</div>
		<div id="fullpage">	
			<div class="section" id="section0">
				<div class="slide" id="slide1"></div>
				<div class="slide" id="slide2"></div>
				<div class="slide" id="slide3"></div>
				<div class="slide" id="slide4"></div>
				

				<!-- <div class="content">
						<img src="<?php //echo base_url('assets/img/img.jpg'); ?>" alt="">
					</div>
				</div> -->
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
						
							
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>
								
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

							
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

								<!-- <div class="bottom-line"></div> -->
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

										<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

										<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

										<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

										<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

										<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/1.jpg'); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
										<a href="" class="cap-link">
										<h4>გიორგი ბერიძე</h4>
										<p>საბურთალო, კოსტავას #24</p>
										</a>
										<div class="star-rating">
									      <div class="star-rating__wrap">
									        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
									        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
									        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
									      </div>
									    </div>		
									</figcaption>
								</figure>

								
					
				
						<!-- star rating 
									 -->			
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
		css3:true,
		scrollingSpeed: 1000,
		easing: 'easeInOutCubic',


	});

	</script>


	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>

</html>