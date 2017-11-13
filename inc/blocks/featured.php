<!-- featured width block -->
<section class="home-featured">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<h2>
				<?php echo theme('title'); ?>
			</h2>
			<div class="featured-slider">

				<?php     // check if the repeater field has rows of data
					if( have_rows('featured_content') ):
						$i = 1;
						// loop through the rows of data
						while ( have_rows('featured_content') ) : the_row();?>

				<div class="fs-slide small-12 medium-4 columns">

					<a href="<?php echo theme('url'); ?>">
						<div class="fss-wrapper">
							<div class="fs-image">
								<img src="<?php echo theme('image', 'url'); ?>">
							</div>
							<div class="image-overlay">
								<div class="image-overlay-wrapper">
									<div class="image-overlay-center">
										<?php echo theme('text'); ?>
									</div>
								</div>
							</div>

						</div>
					</a>
				</div>

				<?php $i++; endwhile;  endif; ?>

			</div>
		</div>
	</div>
</section>


<section class="home-projects">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<h2>Latest Case Studies</h2>
			<div class="news-slider">
			
					<?php 
						$args = array(
						// Only get published posts..
						'post_type'              => array( 'case_studies' ),
						'post_status'            => array( 'publish' ),
						
						'posts_per_page'         => '3',
					
						// Get the latest results
						'order'                  => 'DESC',
						'orderby'                => 'rand',
						);; 
						$posts = new WP_Query($args); 
						if($posts->have_posts()) {
						while ($posts->have_posts()) { $posts->the_post();   ?>
						<div class="ns-slide">
							<a href="<?php the_permalink() ?>">
								<div class="nss-inner">
									<div class="image-holder">
										<img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"/>
										<div class="text-holder">
											<h3 style="height: 66px;"><?php the_title();?></h3><span class="post-link">Read This Post</span>
										</div>
									</div>	
								</div>
							</a>
						</div>
					<?php }    }   ?>
				
			</div>
		</div>
	</div>
</section>
