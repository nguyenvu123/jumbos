<?php
/*
Template Name: Home Template
*/
get_header(); 
$sidebar_right 	= get_theme_mod('tvlgiao_wpdance_default_page_sidebar_right','sidebar');
?>
<div id="main-content" class="main-content woocommerce home-page-template">
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
					<div class="wd-content-home">
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