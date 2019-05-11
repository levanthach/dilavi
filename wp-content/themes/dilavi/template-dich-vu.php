<?php 
/*
Template name: dich-vu
Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<div class="container">
	<div class="services_img text-center pt-4 mb-4">
		<h3>
			<strong>DỊCH VỤ</strong>
			<img src="<?php bloginfo('template_directory');?>/img/logo_text.png" alt="">
		</h3>
	</div>
	<div class="services_content">
		<div class="row p-2 mb-5">
			<div class="col-xs-12 col-md-5">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/dv_chothuevanphong.png"></img>
			</div>
			<div class="col-xs-12 col-md-7">
				<h3 class="heading-sect">
					<strong>
						<a href="">Cho thuê văn phòng</a>
					</strong>
				</h3>
				<h3 class="heading-opac">DILAVI</h3>
				<div class="content">
					Hoạt động trong lĩnh vực cho thuê căn hộ dịch vụ và văn phòng. Chính thức đi vào hoạt động vào tháng 12/2018, DILAVI hứa hẹn sẽ mang đến cho bạn một không gian lưu trú độc đáo, tiện nghi cũng như văn phòng làm việc thật thoải mái.
				</div>
			</div>
		</div>
		<div class="w-100 p-4" style="border-top: 1px dashed #a5a5a5;"></div>
		<div class="row p-3 mb-5">
			<div class="col-xs-12 col-md-7">
				<h3 class="heading-sect">
					<strong>
						<a href="">Căn hộ dịch vụ</a>
					</strong>
				</h3>
				<h3 class="heading-opac">DILAVI</h3>
				<div class="content">
					Hoạt động trong lĩnh vực cho thuê căn hộ dịch vụ và văn phòng. Chính thức đi vào hoạt động vào tháng 12/2018, DILAVI hứa hẹn sẽ mang đến cho bạn một không gian lưu trú độc đáo, tiện nghi cũng như văn phòng làm việc thật thoải mái.
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<img class="img-responsive" src="<?php bloginfo('template_directory');?>/img/dv_chothuekhachsan.png"></img>
			</div>
		</div>
	</div>
</div>
<!-- doitac owl-carousel -->
<?php get_template_part('doi-tac'); ?>

<?php
	get_footer();
 ?>
