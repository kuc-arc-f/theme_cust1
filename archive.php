<?php get_header();	// header.phpを呼び出します ?>
<!-- conte-mid -->
<div class="container" style="margin-top:10px ;background-color:#FFF;">
	<div class="row conte" style="margin-top: 20px;">
	<div class="col-sm-9">
	<div id="div_news">
		<h1 style="color: teal;"><?php single_cat_title(); ?></h1>
		<ul>
		<?php
		while ( have_posts() ):
		the_post();
		?>
		<li>
			<h3 class="entry-title">
			<!-- target="_blank" -->
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<!-- <?php the_time('Y年m月d日'); ?> -->
			<p class="p_date_str"><?php the_time('Y年m月d日'); ?></p>
			<p><?php the_category(', '); ?></p>
			<!-- thumb -->
	        <div class="post-thumbnail">
	          <a href="<?php the_permalink(); ?>" rel="nofollow"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
	        </div>
	        <?php the_excerpt( ); ?>
		</li>
			<!--
		<?php the_content('続きを読む'); ?>
			 -->
		<?php
		endwhile;
		?>
		<br />
		<br />

		<?php if ( is_singular() || is_404() ) : ?>
		<div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
		<?php endif; ?>	
		<!-- pagenation -->
		<?php
		global $wp_query;
		$big = 999999999; // need an unlikely integer
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		?>
		</ul>
	</div>
	<br />
	</div><!-- end_COL_left -->
	<div class="col-sm-3">
		<?php get_sidebar(); ?>
	</div><!-- end_col3 -->
	</div>
</div><!-- end_container -->
<script src="<?php echo get_template_directory_uri(); ?>/js/top_scroll.js"></script>
<?php get_footer(); // footer.php を読み込みます ?>
