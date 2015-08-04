<?php echo $map[ 'js']; ?>
	<title>Document</title>

	</head>

	<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=801390733309537";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
			<img src="<?php echo base_url('img/icons/logo.png'); ?>" class="img-responsive pull-left" alt="Image">
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

			<ul id="menu">

				<li data-menuanchor="firstPage"><a href="#firstPage" title="map"><i class="fa fa-angle-up fa-2x"></i></a>
				</li>
				<li data-menuanchor="secondPage"><a href="#secondPage" title="first page"><i class="fa fa-angle-down fa-2x"></i></a>
				</li>
			</ul>
		</div>
		<div id="gridSystemModal" class="modal fade"  role="dialog" aria-labelledby="gridModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">	<img id="img" src="<?php echo base_url('assets/img/'); ?>" class="img-responsive pull-left" alt="Image"></div>
            <div class="col-md-4 description">
							<button type="button" id="button_like" name="button" class="btn btn-success"></button>
						<br><br>
							<h4  id="myModalLabel"></h4>
							<p >
								<span class="glyphicon glyphicon-comment">27</span>
								<span class="glyphicon glyphicon-eye-open">578</span>

							</p>
							
								<div class="fb-comments" data-width="200" data-href=""  data-numposts="5"></div>
							
			</div>
          </div>

        </div>
      </div>
      <!-- <div class="modal-footer">
				<div class="row">
					<div class="col-sm-12">
						<span class="glyphicon glyphicon-chevron-up"  data-toggle="tooltip" data-placement="left" title="Comments"></span>
						<div class="comments">
							<p>
							<div class="fb-comments" data-numposts="4"></div>
							</p>
							


						</div>
					</div>
				</div>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		<div id="fullpage">
			<div class="section" id="section0">
				<div class="slide" id="slide1">
					<div class="content">
						<h1>Normal scrolling</h1>
						<p>With a linked menu</p>
					</div>
				</div>

				<div class="slide" id="slide2">
					<div class="content">
						<h1>Normal scrolling</h1>
						<p>With a linked menu</p>
					</div>
				</div>
				<div class="slide" id="slide2">
					<div class="content">
						<h1>Normal scrolling</h1>
						<p>With a linked menu</p>
					</div>
				</div>
			</div>
			<div class="section" id="section1">
				<div class="content">
					<div class="map_container">
						<?php if (@$user_profile):?>
							<i class="fa fa-bars fa-2x"></i>
							<?php endif; ?>
								<div class="mapp">
									<?php echo $map[ 'html']; ?>
								</div>
					</div>
					<div class="sidebar default-skin demo" id="vertical-horizontal-scrollbar-demo">
						<div class="dinamic-tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#my_graphs">My graphs</a>
								</li>
								<li><a data-toggle="tab" href="#i_like_it">I like it</a>
								</li>
								<div id="nav-marker"></div>
							</ul>
							<div class="tab-content">
								<div id="my_graphs" class="tab-pane fade in active">
									<?php foreach ( $result as $item ):?>
										<figure class=" col-md-12 team pull-left">
											<img src="<?php echo base_url('assets/img/'.$item['pic_name']); ?>" class="img-responsive" alt="">
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

												<div><i class="fa fa-thumbs-o-up"></i>
												</div>
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
