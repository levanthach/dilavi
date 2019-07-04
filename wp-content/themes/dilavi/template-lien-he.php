<?php 
/*
Template name: lien-he
Template Post Type: post, page
*/
?>

<?php 
	get_header();
 ?>
<div class="container">
	<div class="row contact">
		<div class="services_img text-center pt-4 mb-4" style="margin:auto;"> 
			<h3>
				<strong style="font-size: 35px;">LIÊN HỆ</strong>
				<img style="margin-bottom: 10px; " src="<?php bloginfo('template_directory');?>/img/logo_text.png" alt="">
			</h3>
			<div class="address">
				<i class="fas fa-map-marker-alt" style="font-weight:400;"> 77 Huỳnh Tịnh Của, Phường 8, Quận 3, TP.HCM</i><br>
				<i class="fa fa-phone" style="transform: rotate(90deg); font-weight:400;"></i> 0982 883 566</i><br>
				<i class="fas fa-envelope" style="font-weight:400;"> info@dilavi.vn</span></i>
			</div><!-- end address -->
		</div> <!-- end head contact-->
		<div class="w-100"></div>
		<div class="col-xs-12 col-6 contact__form">
			<h4 style="text-transform: uppercase; "><strong>Nhập thông tin liên hệ</strong></h4>
			<?php echo do_shortcode( '[contact-form-7 id="34" title="Contact"]' ) ?>
		</div>
		<div class="col-xs-12 col-md-6 contact__map">
			<!-- nhúng freame google-map -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31354.776979572856!2d106.68219950000004!3d10.7847036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1559015196131!5m2!1svi!2s" width="600" height="580" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

 <!-- doitac owl-carousel -->
<?php get_template_part('doi-tac'); ?>

<?php
	get_footer();
 ?>
