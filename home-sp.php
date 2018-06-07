
<!-- mobile-nav -->
<div id="nav-mobile" style="width:100%;">
	<a class="toggle">
	 <span class="glyphicon glyphicon-menu-hamburger" style="font-size: 34px; color: #FFF"></span>
	</a>
 			<?php
			wp_nav_menu(
			array(
			'menu_class'      => 'ul_mobile-child',
			'menu_id'         => 'gnav-ul',
			'link_before'     => '<li class="mobile-menu-item">',
			'link_after'      => '</li>',
			'container'       => 'div',
			'container_id'    => 'gnav-container',
			'container_class' => 'mobile-child'
			)
		);?>
<!--
	<div class="mobile-child">
		<div class="mobile-menu-item" style=""><a href="#id_row_service">サービス概要</a></div>
		<div class="mobile-menu-item" style=""><a href="#demo01" style="margin-left:20px;">MENU-1</a></div>
		<div class="mobile-menu-item" style=""><a href="#id_row_sample">導入事例</a></div>
		<div class="mobile-menu-item" style=""><a href="#id_row_info"  >お知らせ</a></div>
		<div class="mobile-menu-item" style=""><a href="#id_row_price"  >価格</a></div>
		<div class="mobile-menu-item" style=""><a href="#id_row_company"  >会社概要</a></div>
	</div>
 -->
</div>
