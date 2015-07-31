<?php echo $map['js']; ?>
<title>Document</title>
</head>
<body>
<div class="container header-logo">
			<div class="sidebar-right">
			<?php if (@$user_profile):?>
				<img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;">
                <h2><?=$user_profile['name']?></h2>
				<a href="<?= $logout_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Logout</a>
				<?php else: ?>
				<h2 class="form-signin-heading">Login with Facebook</h2>
                <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
				<?php endif; ?>
			</div>
			<img src="<?php echo base_url('img/icons/logo.png'); ?>"  class="img-responsive pull-left" alt="Image">
			<div class="pull-right registration">
			<?php if (@$user_profile):?>
				<a href="<?php echo site_url('map/insert_mark'); ?>"><button type="button" class="btn btn-sm btn-warning sign-up pull-right">ნახატის დამატება</button></a>
				<p class="pull-right sign-in" ><img class="img-thumbnail" data-src="holder.js/30x30" alt="40x40" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 30px; height: 30px;"></p>
				<?php else: ?>
				<button type="button" class="btn btn-sm btn-warning sign-up pull-right">Sign Up</button>
				<span class="registartion-border pull-right ">&nbsp;</span>
				<p class="pull-right sign-in" >Sign In</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"></h4>
					</div>
					<div class="modal-body">
						<img id="img" src="<?php echo base_url('assets/img/'); ?>" alt="">
						<div class="modal-description"></div>
						<input type="button" class="button_like" id="linkeBtn" ></input>
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
				<?php if (@$user_profile):?>
					<i class="fa fa-bars fa-2x"></i>
				<?php endif; ?>
					<div class="mapp">
						<?php echo $map['html']; ?>
					</div>
				</div>
				<div class="sidebar default-skin demo" id="vertical-horizontal-scrollbar-demo">
					<div class="dinamic-tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#my_graphs">My graphs</a></li>
							<li><a data-toggle="tab" href="#i_like_it">I like it</a></li>
							<div id="nav-marker"></div>
						</ul>
						<div class="tab-content">
							<div id="my_graphs" class="tab-pane fade in active">
							<?php foreach ( $result as $item ):?>
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/'.$item['pic_name']); ?>" class="img-responsive"  alt="">
									<figcaption class="caption">
									<a href="" class="cap-link">
										<h4></i><?php echo $item['title']; ?></h4>
										<!-- <a href='#' data-id='<?php echo $item['id'];?>' class='marker_id'>fsaf</a> -->
									</a>
									<p>saburtalo, კოსტავას #24</p>
									<div class='comment-icons'>
										<i class="fa fa-comment">15</i>
										<i class="fa fa-eye">123</i>										
									</div>
									
									<div ><i class="fa fa-thumbs-o-up"></i></div>
									</figcaption>
								</figure>
							<?php endforeach; ?>
							</div>
							<div id="i_like_it" class="tab-pane fade">
							<?php foreach ( $wishlist as $like ):?>
								<figure class=" col-md-12 team pull-left">
									<img src="<?php echo base_url('assets/img/'.$like['pic_name']); ?>" class="img-responsive" alt="">
									<figcaption class="caption">
									<a href="" class="cap-link">
										<h4></i><?php echo $like['title']; ?></h4>
									</a>
									<p>saburtalo, კოსტავას #24</p>
									<div class='comment-icons'>
										<i class="fa fa-comment">15</i>
										<i class="fa fa-eye">123</i>
									</div>					
									<i class="fa fa-thumbs-up"></i>
									</figcaption>
								</figure>
							<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
