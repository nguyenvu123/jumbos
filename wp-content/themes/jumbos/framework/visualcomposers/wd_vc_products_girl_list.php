<?php
	$product_category = array();
	$product_category[esc_html__('All Category','wpdance')] = -1;
	if( class_exists('WooCommerce') ){
		$categories = 	get_terms( 'product_cat', 
									array('hide_empty' 	=> 0)
								 );
		foreach ($categories as $category ) {
			$product_category[$category->slug] = $category->term_id;
		}
		wp_reset_postdata();
	} 
	vc_map(array(
			"name"				=> esc_html__("Special Gird/List Product",'wpdance'),
			"base"				=> 'tvlgiao_wpdance_special_gird_list_product',
			'description' 		=> esc_html__("Special Gird/List Product", 'wpdance'),
			"category"			=> esc_html__("WPDance",'wpdance'),
			"params"=>array(	
				array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Select Category', 'wpdance' )
					,'param_name' 	=> 'id_category'
					,'admin_label' 	=> true
					,'value' 		=> $product_category
					,'description' 	=> ''
				)
				,array(
					'type' 			=> 'textfield',
					'class' 		=> '',
					'heading' 		=> esc_html__("Title", 'wpdance'),
					'admin_label' 	=> true,
					'param_name' 	=> 'title',
					'value' 		=> ''
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Data Show', 'wpdance' )
					,'param_name' 	=> 'data_show'
					,'admin_label' 	=> true
					,'value' 		=> array(
							'Recent Product'		=> 'recent_product'
							,'Most View Product'	=> 'mostview_product'
							,'On Sale Product'		=> 'onsale_product'
							,'Featured Product'		=> 'featured_product'
						)
					,'description' => ''
				)
				,array(
					'type'			=> 'textfield'
					,'heading' 		=> esc_html__( 'Number of products', 'wpdance' )
					,'param_name' 	=> 'number_products'
					,'admin_label' 	=> true
					,'value' 		=> '12'
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Sort By', 'wpdance' )
					,'param_name' 	=> 'sort'
					,'admin_label' 	=> true
					,'value' 		=> array(
							'Date'		=> 'date'
							,'Name'		=> 'name'
							,'Slug'		=> 'slug'
						)
					,'description' => ''
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Order By', 'wpdance' )
					,'param_name' 	=> 'order_by'
					,'admin_label' 	=> true
					,'value' 		=> array(
							'DESC'		=> 'DESC'
							,'ASC'		=> 'ASC'
						)
					,'description' => ''
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Columns', 'wpdance' )
					,'param_name' 	=> 'columns'
					,'admin_label' 	=> true
					,'value' 		=> array(
							'2 Columns'		=> '2'
							,'3 Columns'	=> '3'
							,'4 Columns'	=> '4'
						)
					,'description' => ''
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Show Filter Product', 'wpdance' )
					,'param_name' 	=> 'filter_product'
					,'admin_label' 	=> true
					,'value' => array(
							'Yes'		=> '1'
							,'No'		=> '0'
						)
					,'description' 	=> ''
				)
				,array(
					'type' 			=> 'dropdown'
					,'heading' 		=> esc_html__( 'Show Pagination Or Load More', 'wpdance' )
					,'param_name' 	=> 'pagination_loadmore'
					,'admin_label' 	=> true
					,'value' 	=> array(
							'Pagination'	=> '1'
							,'Load More'	=> '0'
							,'No Show'		=> '2'
						)
					,'description' 	=> ''
				)
				,array(
					"type" 			=> "textfield",
					"class" 		=> "",
					"heading" 		=> esc_html__("Number Products Load More", 'wpdance'),
					"admin_label" 	=> true,
					"param_name" 	=> "number_loadmore",
					"value" 		=> '8',
					"description" 	=> "",
					'dependency'  	=> Array('element' => "pagination_loadmore", 'value' => array('0'))
				)
				,array(
					'type' 			=> 'textfield',
					'class' 		=> '',
					'heading' 		=> esc_html__("Extra class name", 'wpdance'),
					'description'	=> esc_html__("Style particular content element differently - add a class name and refer to it in custom CSS.", 'wpdance'),
					'admin_label' 	=> true,
					'param_name' 	=> 'class',
					'value' 		=> ''
				)
			)
		)
	);
?>