<?php 
	//print an excerpt by specifying a maximium number of characters
	if(!function_exists ('tvlgiao_wpdance_the_excerpt_max_charlength')){
		function tvlgiao_wpdance_the_excerpt_max_charlength($charlength,$post = '',$echo = true) {
			if($post){
				$excerpt = wp_strip_all_tags(get_the_excerpt_here($post->ID));
			}
			else
				$excerpt = get_the_excerpt();
			$charlength++;
			
			if(strlen($excerpt)>$charlength) {
			   $subex = substr($excerpt,0,$charlength-5);
			   $exwords = explode(" ",$subex);
			   $excut = -(strlen($exwords[count($exwords)-1]));
			   if($excut<0) {
					$result =  substr($subex,0,$excut);
			   } else {
					$result = $subex;
			   }
				$result .= "...";
		   } else {
			   $result =  $excerpt;
		   }
			if($echo)
				echo esc_html($result);
			return $result;
		}
	}

	if(!function_exists ('tvlgiao_wpdance_string_limit_words')){
		function tvlgiao_wpdance_string_limit_words($string, $word_limit){
		  $words = explode(' ', $string, ($word_limit + 1));
		  if(count($words) > $word_limit)
		  array_pop($words);
		  return implode(' ', $words);
		}
	}

	if(!function_exists ('tvlgiao_wpdance_the_excerpt_max_words')){
		function tvlgiao_wpdance_the_excerpt_max_words($word_limit,$post = '',$echo = true, $strip_tags = true) {
			if( $post ){
				$excerpt = tvlgiao_wpdance_get_the_excerpt_here($post->ID);
			}
			else{
				$excerpt = get_the_excerpt();
			}
				
			if( $strip_tags ){
				$excerpt = wp_strip_all_tags($excerpt);
				$excerpt = strip_shortcodes($excerpt);
			}
				
			if( $word_limit != -1 )
				$result = tvlgiao_wpdance_string_limit_words($excerpt,$word_limit);
			else
				$result = $excerpt;
				
			if($echo)
				echo esc_html( $result );
			return $result;
		}
	}

	if(!function_exists ('tvlgiao_wpdance_get_the_excerpt_here')){
		function tvlgiao_wpdance_get_the_excerpt_here($post_id)
		{
			global $wpdb;
			$query = $wpdb->prepare("SELECT post_excerpt,post_content FROM {$wpdb->posts} WHERE ID = %d LIMIT 1", $post_id );
			
			$result = $wpdb->get_results($query, ARRAY_A);
			if($result[0]['post_excerpt'])
				return $result[0]['post_excerpt'];
			else
				return $result[0]['post_content'];
		}
	}
?>