<?php
/*
Template Name: Woocommerce Template
*/
get_header(); 

	/*CUSTOM DEFAULT*/
	$layout 		= get_theme_mod('tvlgiao_wpdance_default_page_layout','0-1-0');
	$sidebar_left 	= get_theme_mod('tvlgiao_wpdance_default_page_sidebar_left','sidebar');
	$sidebar_right 	= get_theme_mod('tvlgiao_wpdance_default_page_sidebar_right','sidebar');
	if( ($layout == '1-0-0') || ($layout == '0-0-1') ){
		$content_class = "col-sm-18";
	}elseif($layout == '1-0-1'){
		$content_class = "col-sm-12";
	}else{
		$content_class = "col-sm-24";
	}

?>
<?php tvlgiao_wpdance_init_breadcrumbs() ?>
<div id="main-content" class="main-content woocommerce">
	<div class="container">
		<div class="row">
		<div class="row">
			<div class="col-sm-6">
				<?php if (is_active_sidebar($sidebar_right) ) : ?>
						<?php dynamic_sidebar( $sidebar_right ); ?>
				<?php endif; ?>
			</div>
			<!-- Content Index -->
			<div class="col-sm-18">
				<div class="wd-content-blog">
					<div id="primary" class="content-area">
						<main id="main" class="site-main">
							<?php while ( have_posts() ) : the_post(); ?>
								<?php the_content(); ?>	
							<?php endwhile; ?>
						</main><!-- #main -->
					</div><!-- #primary -->
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<?php get_footer(); ?>