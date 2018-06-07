<?php
get_header(); ?>
<div id="div_img_main2"  class="cover" style="" valign="bottom">
<div id="div_img_layer">
	<h1>ホームページ、LP作成<br />
	おまかせ下さい
	</h1>
</div>
</div>
<!--
<div class="container" id=""  style="">
 -->
<!-- conte-mid -->
<div class="container" id="id_main_conte">
<div class="row conte" id="id_row_service" style="margin-top:10px;">
	<div class="col-sm-12" style="text-align:center;">
	<h2 class="h4_td_title">主要サービス</h2>
	<hr class="hr_ex1"/>
	</div>
</div>
<div class="row conte" style="">
	<div class="col-sm-4">
	 <img class="img_kao" src="<?php echo get_template_directory_uri(); ?>/img/pc1.png" style="margin : 10px;">
	</div>
	<div class="col-sm-8">
	<h3>ホームページ作成</h3>
	<p>お手ごろ価格で、見た目の良いページを作成しております。<br />
	是非導入の検討をお願いします。
	</p>
	</div>
</div>
<div class="row conte" style="">
	<div class="col-sm-4">
	 <img class="img_kao" src="<?php echo get_template_directory_uri(); ?>/img/pc1.png" style="margin : 10px;">
	</div>
	<div class="col-sm-8">
	<h3>システム開発</h3>
	<p>適正価格で、安定稼動できるシステムの開発実績がございます。<br>
	是非導入の検討をお願いします。
	</p>
	</div>
</div>
<div class="row conte" style="">
	<div class="col-sm-4">
	 <img class="img_kao" src="<?php echo get_template_directory_uri(); ?>/img/pc1.png" style="margin : 10px;">
	</div>
	<div class="col-sm-8">
	<h3>AI 開発</h3>
	<p>低価格で。短納期ＡＩの開発の実績がございます。AIコンサルも可能です<br />
	是非導入の検討をお願いします。
	</p>
	</div>
</div>
<div class="row conte" style="margin-top:10px; padding : 10px;">
	<div class="col-sm-12">
		<div id="div_news">

	    <h2 class="h4_td_title">News</h2>
		<ul>
		<?php
		while ( have_posts() ):
		the_post();
		?>
		<li>
			<h3 class="entry-title">
			<!-- target="_blank" -->
			<hr class="hr_ex1" />
			<span class="glyphicon glyphicon-circle-arrow-right" style="font-size: 28px; float :left;"></span>
			&nbsp;<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h3>
			<div style="width:100%;">
 			<ul class="ul_time_box">
				<li class="li_time_box"><span class="glyphicon glyphicon glyphicon-time" style="font-size: 16px; float :left;"></span></li>
				<li class="li_time_box"><p class="p_time_box"><?php the_time('Y年m月d日'); ?></p></li>
				<li class="li_time_box"><span class="glyphicon glyphicon-folder-close" style="font-size: 16px; float :left;"></span></li>
				<li class="li_time_box"><p class="p_time_box"><?php the_category(', '); ?></p></li>
			</ul>
			</div>
			<!-- thumb -->
	        <div class="post-thumbnail">
	          <a href="<?php the_permalink(); ?>" rel="nofollow"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
	        </div>
   		    <?php the_excerpt( ); ?>
		</li>
		<?php
		endwhile;
		?>
		<br />
		<br />
		<?php if ( is_singular() || is_404() ) : ?>
		<div class="left"><a href="<?php bloginfo( 'url' ); ?>">&laquo; Home page</a></div>
		<?php endif; ?>	
		</ul>
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

		</div>
	</div>
</div>

</div><!-- .site-content-contain -->
<?php get_footer();
