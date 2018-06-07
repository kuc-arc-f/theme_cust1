  <div id="side_123" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
    <div class="side-inner">
      <div class="side-widget-area">
        
      <?php 
        if( is_active_sidebar('sidebar-2') ):
          dynamic_sidebar();
        else:
        	         //検索
             $url =get_bloginfo("url");
         	 $tag ='<div >';
         	 $tag =$tag . '<form role="search" method="get" id="searchform" class="searchform" action="' . $url .'">';
         	 $tag =$tag . '<div class="form-group">';
         	 $tag =$tag . '  <input type="text" value="" name="s" id="s" class="form-control" placeholder="キーワードを入力">';
         	 $tag =$tag . '</div>';
         	 $tag =$tag . '';
         	 $tag =$tag . '<div class="input-group mb-3">';
         	 $tag =$tag . '<button type="submit" id="searchsubmit" class="btn btn-default">検索</button>';
         	 $tag =$tag . '</div>';
         	 $tag =$tag . '</form></div><br />';
         	 echo($tag  );
         //最近のpost
          $args = array(
            'post_type' => 'post',
            'post_count' => 10
          );
          $the_query = new WP_Query( $args );
          echo '<ul class="ul_side_box">';
          echo '	<li class="li_side_box_act"><p class="p_side_box">最近の投稿</p></li>';
          echo '';
          while ( $the_query->have_posts() ) : $the_query->the_post();
          	echo '<a href="'.get_post_permalink().'" class="list-group-item">'.get_the_title().'</a>';
          endwhile;
          echo '</ul>';
	          //カテゴリ
			echo '<ul class="ul_side_box">';
			echo '	<li class="li_side_box_act"><p class="p_side_box">カテゴリ１</p></li>';
			echo '';
			$categories = get_categories(); // 取得カテゴリを調節するときはこのパラメータを変更
			foreach( $categories as $category ){
				$str = '<a href='. get_category_link( $category->term_id ) .' class="list-group-item">'. $category->cat_name .'</a>';
				echo( $str );
			}
			echo '</ul>';

        endif;
        wp_reset_postdata();
      ?>
      </div><!-- //side-widget-area -->
      
    </div>
  </div><!-- /side -->