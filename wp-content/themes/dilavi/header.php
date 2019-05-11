<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name')?></title>
<link rel="icon" href="<?php bloginfo('template_directory') ?>/img/blog-logo.png">
<?php 
    wp_head();
?>
</head>
<body>
  	<header>
      <!-- Begin menu fixed -->
      <div class="menu-fixed">
        <div class="container">
          <div class="row">
            <div class="col-md-3 logo">
              <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_directory') ?>/img/logo-dilavi.png" alt="" class="img-responsive">
              </a>
            </div>
            <div class="col-md-9">
              <div class="list-menu">
                <ul class="pull-right mt-2 p-3">
                  <a href="<?php bloginfo('url'); ?>"><li>Trang Chủ</li></a>
                  <a href="http://localhost:8888/dilavi/gioi-thieu/"><li>Giới Thiệu</li></a>
                  <a href="http://localhost:8888/dilavi/dich-vu/"><li>Dịch Vụ</li></a>
                  <a href="#"><li>Hình Ảnh và Video</li></a>
                  <a href="#"><li>Blog</li></a>
                  <a href="#"><li>Booking</li></a>
                  <a href="#"><li>Liên Hệ</li></a> 
                </ul>
              </div>
            </div>
          </div> <!--end row -->
        </div> 
      </div>
       <!--  Begin slide_show -->
        <div class="slide_show">
          <div class="container">
            <div class="row">
              <div class="col-5 book_room">
                <div>
                  
                </div>
              </div>
            </div>
          </div>
        </div> <!--  end slide_show -->
  		</div>
  	</header> <!-- end header -->
