<?php
/**
*
* @package Wordpress
*
**/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'wpdance' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="wd-tag-post">
		<span><?php esc_html_e('Tags: ','wpdance'); ?></span>
		<?php the_tags(esc_html__('', 'wpdance'),esc_html__(', ', 'wpdance')); ?>
	</div>
	<div class="wd-share_list">
		<span><?php esc_html_e('Share ','wpdance'); ?></span>
		<div class="addthis_sharing_toolbox"></div>
	</div>
</article><!-- End Article -->