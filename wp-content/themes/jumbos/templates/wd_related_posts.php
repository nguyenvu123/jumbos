<?php
	$is_slider 		= false;
	$gallery_ids 	= array();
	$galleries 		= wp_get_post_terms($post->ID,'gallery');
	if(!is_array($galleries))
		$galleries 	= array();
	foreach($galleries as $gallery){
		if( $gallery->count > 0 ){
			array_push( $gallery_ids,$gallery->term_id );
		}	
	}
	if(!empty($galleries) && count($gallery_ids) > 0 )
		$args = array(
			'post_type'=>$post->post_type,
				'tax_query' => array(
				array(
					'taxonomy'	=> 'gallery',
					'field' 	=> 'id',
					'terms' 	=> $gallery_ids
				)
			),
			'post__not_in'	=> array($post->ID),
			'posts_per_page'=> 6,
		);
	else
		$args = array(
		'post_type'			=> $post->post_type,
		'post__not_in'		=> array($post->ID),
		'posts_per_page'	=> 6,
	);
	wp_reset_postdata();
	$related=new WP_Query($args);
	$count=0;
	$random_id = 'wd-related-wrapper-'.mt_rand();
?>
<div class="wd-related-post related block-wrapper">
	<div class="wd-title-wrapper">
		<div class="wd-title-bottom">
			<h4 class="entry-title"><?php esc_html_e('recent posts','wpdance'); ?></h4>
		</div>
	</div>
	<div class="wd-related-wrapper <?php echo esc_attr($random_id); ?>">
		<div class="wd-related-slider">
			<?php if($related->have_posts()) : ?>
				<?php if( $related->post_count > 1 ) $is_slider = true; ?>
				<?php while($related->have_posts()) : $related->the_post(); $count++; global $post;?>
					<div class="wd-related-item <?php if($count==1) echo " first"; if($count==$related->post_count) echo " last";?>">
						<div class="wd-thumbnail-post">
							<a class="thumbnail" href="<?php the_permalink(); ?>">
								<?php
									the_post_thumbnail('image_size_medium');
								?>
							</a>
						</div>
						<div class="wd-info-post">
							<div class="wd-title-post">
								<h2 class="wd-heading-title">
									<a href="<?php the_permalink();?>" class="wd-title-post"><?php the_title(); ?></a>
								</h2>
							</div>				
						</div>
					</div>
				<?php endwhile; // End while ?>
			<?php endif; ?>
		</div>
		<?php if( $is_slider ): ?>
			<div class="related_control slider_control">
				<a id="product_related_prev" title="<?php esc_html_e('Previous','wpdance');?>" class="prev" href="#">&lt;</a>
				<a id="product_related_next" title="<?php esc_html_e('Next','wpdance');?>" class="next" href="#">&gt;</a>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php if( $is_slider ): ?>
<script type="text/javascript">
	(function($) {
		"use strict";			
		jQuery(document).ready(function() {
			var $_this 		= jQuery('.<?php echo esc_attr($random_id) ?>');
			var slide_speed = <?php echo (wp_is_mobile())?200:800; ?>;
			var responsive_refresh_rate = <?php echo (wp_is_mobile())?400:200; ?>;
			if( navigator.platform === 'iPod' ){
				slide_speed = 0;
				responsive_refresh_rate = 1000;
			}
			var owl = $_this.find('.wd-related-slider').owlCarousel({
						loop : true
						,nav : false
						,dots : false
						,navSpeed : slide_speed
						,slideBy: 1
						,rtl:jQuery('body').hasClass('rtl')
						,margin:0
						,navRewind: false
						,autoplay: false
						,autoplayTimeout: 5000
						,autoplayHoverPause: false
						,autoplaySpeed: false
						,mouseDrag: true
						,touchDrag: true
						,responsiveBaseElement: $_this
						,responsiveRefreshRate: responsive_refresh_rate
						,responsive:{
							0:{
								items : 1
							},
							361:{
								items : 2
							},
							579:{
								items : 3
							},
							767:{
								items : 3
							},
							1100:{
								items : 3
							}
						}
						,onInitialized: function(){
							$_this.addClass('loaded').removeClass('loading');
						}
					});
					$_this.on('click', '.next', function(e){
						e.preventDefault();
						owl.trigger('next.owl.carousel');
					});

					$_this.on('click', '.prev', function(e){
						e.preventDefault();
						owl.trigger('prev.owl.carousel');
					});
		});
	})(jQuery);		
</script>	
<?php endif; ?>