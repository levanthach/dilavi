<?php get_header(); ?>

<div class="container">
	<br>
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
		 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	} ?>

	<!-- nội dung chi tiết blog -->
	<div class="row detail-blog">
		<div class="col-xs-12 col-md-8">
			<div class="content-blog">
				<div class="blog__title p-1"><a href="http://localhost:8888/dilavi/chi_tiet/hi/"><strong>Khoác áo mới cho phòng khách đón hè</strong></a></div>
				<div class="blog__date p-1">20.11.2018</div>
				<div class="blog__text p-1 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet.</div>
			</div>
			<div class="blog__img m-2 p-3">
				<img class="img-responsive" src="<?php bloginfo('template_directory')?>/img/hinhkhachsan4.png"></img>
			</div>
			<div class="content-blog p-1">
				<div class="blog__text p-1 mr-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.Lorem ipsum dolor sit amet. 
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</div>
			</div>
			<!-- //social-plugin -->
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=278742422916908&autoLogAppEvents=1"></script>

			<div class="fb-like ml-2" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

			<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments" data-width="690" data-numposts="1"></div>

		</div> <!-- end col 12 -->
 
		
		<div class="col-xs-12 col-md-4">
			<div class="row tin-lien-quan all-blog">
				<h4><strong>BÀI VIẾT LIÊN QUAN</strong></h4>
	
				<div class="blog__img col-xs-12 col-md-12 p-0 ">
					<img class="img-responsive" src="<?php bloginfo('template_directory')?>/img/img_1.png"></img>
				</div>
				<div class="content-blog col-xs-12 col-md-12 p-0 mt-2 mb-4">
					<div class="blog__title"><a href="http://localhost:8888/dilavi/chi_tiet/hi"><strong>Trang trí nội thất với màu cam độc lạ</strong></a></div>
					<div class="blog__date">20.11.2018</div>
					<div class="blog__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.</div>
				</div>

				<div class="blog__img col-xs-12 col-md-12 p-0">
					<img class="img-responsive" src="<?php bloginfo('template_directory')?>/img/img_3.png"></img>
				</div>
				<div class="content-blog col-xs-12 col-md-12 p-0 mt-2 mb-4">
					<div class="blog__title"><a href="http://localhost:8888/dilavi/chi_tiet/hi"><strong>Trang trí nội thất với màu cam độc lạ</strong></a></div>
					<div class="blog__date">20.11.2018</div>
					<div class="blog__text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.</div>
				</div>

				<div class="blog__img col-xs-12 col-md-12 p-0">
					<img class="img-responsive" src="<?php bloginfo('template_directory')?>/img/img_2.png"></img>
				</div>
				<div class="content-blog col-xs-12 col-md-12 p-0 mt-2 mb-4">
					<div class="blog__title p-1"><a href="http://localhost:8888/dilavi/chi_tiet/hi"><strong>Trang trí nội thất với màu cam độc lạ</strong></a></div>
					<div class="blog__date">20.11.2018</div>
					<div class="blog__text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida mauris pretium.</div>
				</div>

			</div>
			
		</div>
	</div>
</div>
<br>

<?php get_template_part('doi-tac'); ?>
<?php get_footer(); ?>

