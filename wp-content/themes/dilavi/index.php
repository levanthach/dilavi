<?php get_header(); ?>
<div class="container">
	<div class="row services pb-3">
		<div class="col-md-4">
			<div class="slogan mt-5 mb-2">Chúng tôi làm gì ?</div>
			<h3>CÁC DỊCH VỤ <br>
			<strong>CHÍNH CỦA</strong><img src="<?php bloginfo('template_directory') ?>/img/logo_text.png" alt="" class="img-responsive"></h3>
			<p class="text pb-3">
				Hoạt động trong lĩnh vực cho thuê căn hộ dịch vụ và văn phòng. Chính thức đi vào hoạt động vào tháng 12/2018, DILAVI hứa hẹn sẽ mang đến cho bạn một không gian lưu trú độc đáo, tiện nghi cũng như văn ...
			</p>
			<div class="detail">
				<a class="text" href="">CHI TIẾT<i class="fas fa-arrow-right ml-2"></i></a>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="box-dv box-item">
						<div class="-photo"><img src="<?php bloginfo('template_directory') ?>/img/img_2.png" alt="" class="img-responsive"></div>
						<div class="-title p-3">CĂN HỘ DỊCH VỤ</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="box-dv box-item">
						<div class="-photo"><img src="<?php bloginfo('template_directory') ?>/img/img_1.png" alt="" class="img-responsive"></div>
						<div class="-title p-3">VĂN PHÒNG</div>
					</div>
				</div>
			</div>
		</div> 
	</div> <!-- end row -->
</div>
<div class="row box-about">
	<div class="col-xs-12 col-md-9 box-about__photo">
		<img src="<?php bloginfo('template_directory') ?>/img/img_tranggioithieu.png" alt="" class="img-responsive">
	</div>
	<div class="col-xs-12 col-md-3 box-about__content">
		<div class="slogan-about pb-2">Chúng tôi là ai ?</div>
		<h3><strong>VỀ<img src="<?php bloginfo('template_directory') ?>/img/logo_text.png" alt="" class="img-responsive"></strong></h3>
		<p class="text">
			DILAVI là tên viết tắt của Diamond Land Viet Nam. Chúng tôi mong muốn tất cả dịch vụ mình mang lại như những viên kim cương quý, có tính cách riêng, vẻ đẹp riêng và sự hấp dẫn riêng. "Diamond" là vĩnh cửu, giúp tôn vinh đẳng cấp, thể hiện sự quyền lực. Chúng tôi đưa “Diamond” vào một phần của giá trị thương hiệu để thể hiện sứ mệnh mang đến Quý khách hàng những điều tuyệt vời nhất. ...
		</p>
	</div>
</div> <!-- end box-about -->

<div class="container">
	<div class="row images_video mt-3">
		<div class="col-xs-12 col-md-2 title">Hình ảnh <br><strong>& Videos</strong></div>
		<div class="col-xs-12 col-md-5 video pd-2">
			<img src="<?php bloginfo('template_directory')?>/img/video1.png" alt="" class="img-responsive">
			<a class="full-box-video" >
				<div class="play-video youtube-link" youtubeid="OdtowZdmqzQ">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon_play.png" alt="" class="img-responsive"><br>Play Video
				</div>
			</a> <!-- end playvideo -->
		</div>
		<div class="col-xs-12 col-md-5 video pb-2 ">
			<img src="<?php bloginfo('template_directory')?>/img/video2.png" alt="" class="img-responsive">
			<a class="full-box-video">
				<div class="play-video youtube-link" youtubeid="b-bD9gRq3hE">
					<img src="<?php bloginfo('template_directory'); ?>/img/icon_play.png" alt="" class="img-responsive"><br>Play Video
				</div>
			</a> <!-- end playvideo -->
		</div>
		<div class="row lighgallery">
			<div class="col-12 col-lg-4 box-photo" data-src="<?php bloginfo('template_directory')?>/img/img_1.png">
					<img src="<?php bloginfo('template_directory')?>/img/img_1.png" alt="" class="img-responsive">
				<div class="layor-opacity"><i class="fas fa-search"></i></div>
			</div>
			<div class="col-12 col-lg-4 box-photo" data-src="<?php bloginfo('template_directory')?>/img/img_2.png">
					<img src="<?php bloginfo('template_directory')?>/img/img_2.png" alt="" class="img-responsive">
				<div class="layor-opacity"><i class="fas fa-search"></i></div>
			</div>
			<div class="col-12 col-lg-4 box-photo" data-src="<?php bloginfo('template_directory')?>/img/img_3.png">
					<img src="<?php bloginfo('template_directory')?>/img/img_3.png" alt="" class="img-responsive">	
				<div class="layor-opacity"><i class="fas fa-search"></i></div>
			</div>
		</div>
	</div>
</div> <!-- end container -->
<!-- get hot-news -->
<?php get_template_part('hot-news'); ?>
<!-- end hot-news -->
<!-- doitac owl-carousel -->
<?php get_template_part('doi-tac'); ?>

<?php get_footer(); ?>



	