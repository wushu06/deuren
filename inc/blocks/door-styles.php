<section class="door_styles">
	<div class="container">
		<h1 class="text-center main-title">
			<?php echo theme('title');  ?>
		</h1>
		<?php
		$tax_name ='';
//(is_page('styles') ? $tax_name = 'styles' : $tax_name = 'woods' );
if(strpos($_SERVER['REQUEST_URI'], "internal") !== false && is_page('styles')){
	$tax_name = 'styles' ;
	$small_title = 'INTERNAL DOOR';
}
if(strpos($_SERVER['REQUEST_URI'], "internal") !== false && is_page('woods')){
	$tax_name = 'woods' ;
	$small_title = 'INTERNAL DOOR';
}
if(strpos($_SERVER['REQUEST_URI'], "front") !== false && is_page('styles')){
	$tax_name = 'style_front_door' ;
	$small_title = 'FRONT DOOR';
}
if(strpos($_SERVER['REQUEST_URI'], "front") !== false && is_page('woods')){
	$tax_name = 'woods_front_doors' ;
	$small_title = 'FRONT DOOR';
}
//(strpos($_SERVER['REQUEST_URI'], "internal") !== false && is_page('styles') ) ? $tax_name = 'styles'  : $tax_name = 'style_front_door'  );
//((strpos($_SERVER['REQUEST_URI'], "internal") !== false && is_page('woods') ) ? $tax_name = 'woods'  : $tax_name = 'woods_front_doors'  );
//echo $tax_namev;
$terms = get_the_terms( get_the_ID(), $tax_name);
if(!empty($terms)){  $i = 0; ?>

<?php 

	 foreach( $terms as $term ){
	
		$custom_field = get_field('overview_page_image', $term );
		//var_dump($custom_field );
		 $image = $custom_field['url'];
		 if($i % 2 == 0){ 
		
		?>
		<div class="container-right">
			<div class="row">
				<div class="small-6 large-6 columns">
					<div class="style-img <?php echo $tax_name ?>">
						<a href="<?php echo get_term_link( $term )  ?>">
							<img src="<?php echo $image; ?>">
						</a>

					</div>
				</div>
				<div class="small-6 large-6 columns">
				<div class="container-text">
						<a href="<?php echo get_term_link( $term ) ?>">
							<p class="small-title"><?php echo $small_title; ?></p>
							<h1 class="right-title">
								<?php echo $term->name;  ?>
							</h1>
						</a>
						<div class="style-content">
							<?php echo $term->description; ?>
						</div>
						<a class="explore-btn" href="<?php echo get_term_link( $term )  ?>">EXPLORE THIS DESIGN</a>
						<?php
						
						?>
						</div>
				</div>
			</div>
		 </div>
			<?php }else{ ?>
				<div class="container-left">
			<div class="row">

				<div class="small-6 large-6 columns">
				
					<div class="container-text">
						<a href="<?php echo get_term_link( $term ); ?>">
							<p class="small-title"><?php echo $small_title; ?></p>
							<h1 class="left-title">
								<?php echo $term->name; ?>
							</h1>
						</a>
						<div class="style-content">
							<?php echo $term->description; ?>
						</div>
						<a class="explore-btn" href="<?php echo get_term_link( $term )  ?>">EXPLORE THIS DESIGN</a>
						</div>
				</div>
				<div class="small-6 large-6 columns">
					<div class="style-img <?php echo $tax_name ?>">
						<a href="<?php echo get_term_link( $term ) ?>">
							<img src="<?php echo $image; ?>">
						</a>

					</div>
				</div>
			</div>
			</div>
			<?php  } $i++;  } }?>
	</div></section>