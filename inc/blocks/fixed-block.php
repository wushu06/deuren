<?php 
		$args = array(
		// Only get published posts..
		'post_type'              => array( 'fixed_block' )
		
		
	   );; 
	$posts = new WP_Query($arg); 
	if($posts->have_posts()) {
		while ($posts->have_posts()) {
			$posts->the_post();
		
			
			 the_title();
			
		}
	}
	
  ?>