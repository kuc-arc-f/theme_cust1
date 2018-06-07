<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!--
 background-color: #FFF;
 -->
<div class="container" id=""  style="">
<div class="row conte" style="margin-top: 20px;">
	<div class="col-sm-9" style="padding:20px;">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
?>
		<div style="width:100%;">
		<ul class="ul_time_box">
			<li class="li_time_box"><span class="glyphicon glyphicon-home" style="font-size: 16px; float :left;"></span></li>
			<li class="li_time_box"><p class="p_time_box">ホーム > </p></li>
			<li class="li_time_box"><span class="glyphicon glyphicon-folder-close" style="font-size: 16px; float :left;"></span></li>
			<li class="li_time_box"><p class="p_time_box"> <?php the_category(', '); ?></p></li>
			<li class="li_time_box"><p class="p_time_box"> > <?php the_title(); ?> </p></li>
		</ul>
		</div>
		<div class="blog-header">
		<h1 class="blog-title"><?php the_title(); ?></h1>
		<div style="width:100%;">
		<ul class="ul_time_box">
			<li class="li_time_box"><span class="glyphicon glyphicon glyphicon-time" style="font-size: 16px; float :left;"></span></li>
			<li class="li_time_box"><p class="p_time_box"><?php the_time('Y年m月d日'); ?></p></li>
		</ul>
		</div>		
		<p class="lead blog-description"><?php the_content('続きを読む'); ?></p>
		</div>

<?php
//				get_template_part( 'template-parts/post/content', get_post_format() );
			endwhile; // End of the loop.
			?>
	</div>
	<div class="col-sm-3" style="padding:20px;">
	<?php get_sidebar(); ?>

	</div>
</div>
		
</div><!-- end_container -->
<?php get_footer();
