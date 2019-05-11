<?php 
/*
Template name: gioi-thieu
Template Post Type: post, page
*/
?>

<?php 
	get_header();
 ?>
	<div class="box-about-gt">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 box-about-gt__photo">
					<img src="<?php bloginfo('template_directory') ?>/img/img_tranggioithieu.png" alt="" class="img-responsive">
				</div>
				<div class="col-xs-12 col-md-6 box-about-gt__content">
					<div class="slogan-about pb-6">Chúng tôi là ai ?</div>
					<h3><strong>VỀ<img src="<?php bloginfo('template_directory') ?>/img/logo_text.png" alt="" class="img-responsive"></strong></h3>
					<p class="text">
						DILAVI là tên viết tắt của Diamond Land Viet Nam. Chúng tôi mong muốn tất cả dịch vụ mình mang lại như những viên kim cương quý, có tính cách riêng, vẻ đẹp riêng và sự hấp dẫn riêng. "Diamond" là vĩnh cửu, giúp tôn vinh đẳng cấp, thể hiện sự quyền lực. Chúng tôi đưa “Diamond” vào một phần của giá trị thương hiệu để thể hiện sứ mệnh mang đến Quý khách hàng những điều tuyệt vời nhất. ...
					</p>
				</div>
			</div>
		</div>
	</div> <!-- end box-about -->
	<div class="w-100"></div>
	<div class="box-about-gt2">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-push-1 box-about-gt__content2">
					<img src="<?php bloginfo('template_directory') ?>/img/logo_text.png" alt="" class="img-responsive" style="margin-bottom: 10px;margin-left: -10px;"><br>
					<h4><strong>CHÚNG TÔI LÀM LĨNH VỰC GÌ ?</strong></h4>
					<p class="text">
						Hoạt động trong lĩnh vực cho thuê căn hộ dịch vụ và văn phòng. Chính thức đi vào hoạt động vào tháng 12/2018, DILAVI hứa hẹn sẽ mang đến cho bạn một không gian lưu trú độc đáo, tiện nghi cũng như văn phòng làm việc thật thoải mái.
					</p>
				</div>
				<div class="col-xs-12 col-md-6 box-about-gt__photo2">
					<img src="<?php bloginfo('template_directory') ?>/img/img_video_tranggioithieu.png" alt="" class="img-responsive">
				</div>
				
			</div>
		</div>
	</div> <!-- end box-about -->


<div class="container">
	<h3 class="text-center title-team p-4">Đội ngũ của chúng tôi</h3>
	<div class="row team ">
		<div class="col-xs-6 col-md-3 text-center">
			<img class="img-circle" src="<?php bloginfo('template_directory') ?>/img/nhansu1.png"></img>
			<div class="name p-2">Nguyễn Văn An</div>
			<div class="position p-2">CEO</div>
			<div class="info mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ante iaculis, accumsan tellus a, cursus magna. Proin interdum mi sem, dignissim </div>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<img class="img-circle" src="<?php bloginfo('template_directory') ?>/img/nhansu2.png"></img>
			<div class="name p-2">Trần Tường Vy</div>
			<div class="position p-2">Giáo Đốc Nhân Sự</div>
			<div class="info mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ante iaculis, accumsan tellus a, cursus magna. Proin interdum mi sem, dignissim </div>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<img class="img-circle" src="<?php bloginfo('template_directory') ?>/img/nhansu3.png"></img>
			<div class="name p-2">Lê Thành Nam</div>
			<div class="position p-2">Kiến Trúc Sư</div>
			<div class="info mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ante iaculis, accumsan tellus a, cursus magna. Proin interdum mi sem, dignissim </div>
		</div>
		<div class="col-xs-6 col-md-3 text-center">
			<img class="img-circle" src="<?php bloginfo('template_directory') ?>/img/nhansu4.png"></img>
			<div class="name p-2">Đỗ Văn Kiệt</div>
			<div class="position p-2">Kiến Trúc Sư</div>
			<div class="info mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et ante iaculis, accumsan tellus a, cursus magna. Proin interdum mi sem, dignissim </div>
		</div>
	</div> <!-- end row team -->
</div>
<!-- doitac owl-carousel -->
<?php get_template_part('doi-tac'); ?>

 <?php get_footer(); ?>