<?php 
/*
Template name: hinhanh-video
Template Post Type: post, page
*/
?>

<?php 
	get_header();
 ?>

<!-- content -->
<div class="container">
	<div class="image-dilavi">
		<div class="row">
			<div class="services_img text-center pt-4 mb-4">
				<h3>
					<strong style="text-transform: uppercase; margin-left: 15px; font-size: 35px;">Hình Ảnh</strong>
					<img style="margin-bottom: 10px;" src="<?php bloginfo('template_directory');?>/img/logo_text.png" alt="">
				</h3>
			</div>
			<div class="w-100"></div>
		</div>
		<div class="row services-image lighgallery">
			<div class="col-xs-12 col-md-6 box-photo" data-src="<?php bloginfo('template_directory')?>/img/hinhkhachsan1.png">
				<img class="photo img-responsive" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan1.png" alt="" >
				<div class="layor-opacity-img"><i class="fas fa-search"></i></div>
			</div>
			<div class="col-xs-12 col-md-6 box-photo" data-src="<?php bloginfo('template_directory')?>/img/hinhkhachsan2.png">
				<img class="photo img-responsive"src="<?php bloginfo('template_directory')?>/img/hinhkhachsan2.png" alt="">
				<div class="layor-opacity-img"><i class="fas fa-search"></i></div>
			</div>
			<div class="col-xs-12 col-md-6 box-photo" data-src="<?php bloginfo('template_directory')?>/img/hinhkhachsan3.png">
				<img class="photo img-responsive" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan3.png" alt="">
				<div class="layor-opacity-img"><i class="fas fa-search"></i></div>
			</div>
			<div class="col-xs-12 col-md-6 box-photo" data-src="<?php bloginfo('template_directory')?>/img/hinhkhachsan4.png">
				<img class="photo img-responsive" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan4.png" alt="">
				<div class="layor-opacity-img"><i class="fas fa-search"></i></div>
			</div>
		</div>
	</div> <!-- end img dilavi -->
	<div class="row services pb-3">
		<div class="detail" style="margin: auto;
    	margin-bottom: 15px;">
			<a class="text" href="">XEM TẤT CẢ<i class="fas fa-arrow-right ml-2"></i></a>
		</div>
	</div>

	<div class="video-dilavi">
		<div class="row">
			<div class="services_img text-center pt-4 mb-4">
				<h3>
					<strong style="text-transform: uppercase; margin-left: 15px; font-size: 35px;">Video</strong>
					<img style="margin-bottom: 10px;" src="<?php bloginfo('template_directory');?>/img/logo_text.png" alt="">
				</h3>
			</div>
			<div class="w-100"></div>
		</div>
		<div class="row services-video">
			<div class="col-xs-12 col-md-6 video">
				<img class="photo img-responsive" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan4.png" alt="" >
				<a class="full-box-video">
					<div class="play-video youtube-link" youtubeid="b-bD9gRq3hE">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon_play2.png" alt="" class="img-responsive">
					</div>
				</a> <!-- end playvideo -->
			</div>
			<div class="col-xs-12 col-md-6 video">
				<img class="photo" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan3.png" alt="" class="img-responsive">
				<a class="full-box-video">
					<div class="play-video youtube-link" youtubeid="b-bD9gRq3hE">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon_play2.png" alt="" class="img-responsive">
					</div>
				</a> <!-- end playvideo -->
			</div>
			<div class="col-xs-12 col-md-6 video">
				<img class="photo" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan1.png" alt="" class="img-responsive">
				<a class="full-box-video">
					<div class="play-video youtube-link" youtubeid="b-bD9gRq3hE">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon_play2.png" alt="" class="img-responsive">
					</div>
				</a> <!-- end playvideo -->
			</div>
			<div class="col-xs-12 col-md-6 video">
				<img class="photo" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan2.png" alt="" class="img-responsive">
				<a class="full-box-video">
					<div class="play-video youtube-link" youtubeid="b-bD9gRq3hE">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon_play2.png" alt="" class="img-responsive">
					</div>
				</a> <!-- end playvideo -->
			</div>
		</div>
	</div> <!-- end video dilavi -->

	<div class="row services pb-3">
		<div class="detail" style="margin: auto;
    	margin-bottom: 15px;">
			<a class="text" href="">XEM TẤT CẢ<i class="fas fa-arrow-right ml-2"></i></a>
		</div>
	</div>
</div>
	

 <!-- doitac owl-carousel -->
<?php get_template_part('doi-tac'); ?>

<?php
	get_footer();
 ?>
