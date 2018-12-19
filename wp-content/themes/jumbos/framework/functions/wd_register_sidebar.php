<?php
	if(!function_exists ('tvlgiao_wpdance_register_sidebar')){
		function tvlgiao_wpdance_register_sidebar(){
			register_sidebar(array(
		        'name' 				=> esc_html__('Sidebar', 'wpdance'),
		        'id' 				=> 'sidebar',
		        'description'   	=> esc_html__( 'Main sidebar that appears on the left.', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		    register_sidebar(array(
		        'name' 				=> esc_html__('Header Information', 'wpdance'),
		        'id' 				=> 'header_info',
		        'description'   	=> esc_html__( 'Header Information', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		    register_sidebar(array(
		        'name' 				=> esc_html__('Header Information Right', 'wpdance'),
		        'id' 				=> 'header_info_right',
		        'description'   	=> esc_html__( 'Header Information Right', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		    register_sidebar(array(
		        'name' 				=> esc_html__('Header Middle', 'wpdance'),
		        'id' 				=> 'header_middle',
		        'description'   	=> esc_html__( 'Header Middle', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		    register_sidebar(array(
		        'name' 				=> esc_html__('Sidebar left your site', 'wpdance'),
		        'id' 				=> 'banner-vi-left-your-site',
		        'description'   	=> esc_html__( 'Sidebar left your site', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));	
		    register_sidebar(array(
		        'name' 				=> esc_html__('Sidebar right your site', 'wpdance'),
		        'id' 				=> 'banner-vi-right-your-site',
		        'description'   	=> esc_html__( 'Sidebar right your site', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		    register_sidebar(array(
		        'name' 				=> esc_html__('Sidebar Left Product', 'wpdance'),
		        'id' 				=> 'sidebar-left-product',
		        'description'   	=> esc_html__( 'Sidebar Left Product', 'wpdance' ),
		        'before_widget' 	=> '<aside id="%1$s" class="widget %2$s">',
		        'after_widget' 		=> '</aside>',
		        'before_title' 		=> '<h2 class="widget-title">',
		        'after_title' 		=> '</h2>',
		    ));
		}
	}
	//Register Sidebar
	add_action('widgets_init', 'tvlgiao_wpdance_register_sidebar');
?>