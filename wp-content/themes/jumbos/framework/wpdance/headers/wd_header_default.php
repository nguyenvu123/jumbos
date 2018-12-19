<?php
	$default_logo 	= TVLGIAO_WPDANCE_THEME_IMAGES.'/wpdance_logo.png';
	$logo_url	  	= get_theme_mod('tvlgiao_wpdance_header_logo_url', $default_logo); 
	$sticky_menu 	= get_theme_mod('tvlgiao_wpdance_header_sticky_menu'); 
?>
<div class="wd-header-top">
	<div class="container">
		<div class="row">
			<?php if ( is_active_sidebar( 'header_info' ) ) : ?>
				<div class="wd-header-info">
					<?php dynamic_sidebar( 'header_info' ); ?>
				</div>
			<?php endif; ?>
			<div class="wd-menu-header-top">
				<?php wp_nav_menu( array('theme_location' => 'menu_header', 'container' => false, 'menu_class' => 'nav navbar-nav responsive-nav main-nav-list')); ?>
			</div>
		</div>
	</div>
</div>
<div class="wd-header-middle">
	<div class="container">
		<div class="row">	
			<div class="wd-header-logo">
				<a href="<?php  echo home_url();?>">
					<img src='<?php echo esc_url($logo_url); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
				</a>
			</div>
			<div class="wrap-cart">
			<?php if(tvlgiao_wpdance_is_woocommerce()): ?>
				<?php echo tvlgiao_wpdance_tini_cart('')?>
			<?php endif; ?>
			</div>
			<div class="wrap-form-sreach">
				<div class="wd-width-search">
					<?php if ( is_active_sidebar( 'header_middle' ) ) : ?>
						<?php dynamic_sidebar( 'header_middle' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="wd-header-bottom">
	<div class="container">
		<div class="row">
			<div class="wd-header-menu">
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav responsive-nav main-nav-list')); ?>
			</div>
		</div>
	</div>
</div>