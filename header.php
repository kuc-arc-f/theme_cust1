<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- wp_head_start -->
<?php wp_deregister_script('jquery'); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
<?php wp_head(); ?>
	<!-- wp_head_end -->
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/main.css?A7"     rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css?A7"    rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/main-sp.css?20180524A2" rel="stylesheet" media="screen and (max-width: 480px)">
	<link href="<?php echo get_template_directory_uri(); ?>/css/top_scroll.css?20180419A1" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<style>
div#div_head {
    padding : 0px;
/* padding : 10px; */
    /* height: 80px; */
	color: #fff;
	margin: 0 0 0px;
	width: 100%;
	/* background :  #1976D2; */
	background :  #2196F3;
}
div#div_img_main2 {
	height: 300px;
	/* color: #1976D2; */
	color: #FFF;
	margin: 0 0 0px;
	width: 100%;
	background:#ddd url(<?php echo get_template_directory_uri(); ?>/img/bill-2.jpg ) no-repeat center center;
	background-size: cover;
	text-align: center;
}

</style></head>

<body <?php body_class(); ?> style="background-color: #EEE;">
	  <!-- T -->
  	<a href="#" class="page-top" style="color: #fff;"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_5.png" /></a>
	<div id="div_head" class="cover">
	  <div class="container">
	  <div class="row">
	    <div class="col-sm-4">
		  <a href="<?php bloginfo('url'); ?>"><p>企業サンプル</p></a>
	    </div>
	    <div class="col-sm-8" style="text-align: right;">
		<!-- nav -->	  
 			<?php
				wp_nav_menu(
				array(
				'menu_class'      => 'menu text-border',
				'menu_id'         => 'gnav-ul',
				'container'       => 'div',
				'container_id'    => 'gnav-container',
				'container_class' => 'menubar'
				)
			);?>

	    </div>
	  </div>
	  
	  </div>
	</div><!-- end_div_head -->
	  <?php get_template_part('home-sp');	?>
		  
<div id="page" class="site">
<!--
	<div class="site-content-contain">
 -->

		<!--
		<div id="content" class="site-content">
		 -->

