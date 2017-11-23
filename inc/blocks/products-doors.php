<!-- products doors block -->
<?php 

/*
  * this is a shared block bwteen the page 'unique features' and the doors pages (internal/front/garage)
*/


if(is_page('Unique Features')):?>


<section class="page-content home-featured white attribute-wrap">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
        <?php echo theme('products_doors_text'); ?>
		</div>
	</div>
</section>


<section class="page-content home-featured white attribute-wrap">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<h2 class="center">Our Internal Door Styles</h2>
    
      
                  <?php
    
                    
                         $args = array(
                          // Only get published posts..
                          'post_type'   => array('internal_doors'),
                          'post_status' => array('publish'),
                         
                          'order'       => 'ASC',
                        
                          'posts_per_page' => 6
                        );

                          $loop = new WP_Query( $args );
                        
                          
                          while ( $loop->have_posts() ) : $loop->the_post();
                         ?>
        
                        <div class="fs-slide small-12 medium-4 columns">
                          <a href="<?php echo site_url().'/internal-doors/styles' ?>">
                            <div class="fss-wrapper">
                              <div class="fs-image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                              </div>
                               <div class="image-overlay">
                                <div class="image-overlay-wrapper">
                                  <div class="image-overlay-center">
                                    <p class="middle-text">
                                      <?php the_title(); ?>
                                    </p>
                                    <p class="link-text">Find Out More</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>

                      <?php

                                  endwhile; 

                                  wp_reset_query(); 
                      ?>
      

			<p class="center"><a class="button" href="<?php echo site_url() ?>/internal-doors">See all Internal Doors</a></p>
		</div>
	</div>
</section>



                                <?php else:  ?>





<section class="home-featured">
  <div class="row">
    <div class="small-12 large-10 large-offset-1 columns">
      <article>
        <header class="page-title category-title">
         
          <h2 class="text-center">
            <?php echo theme('products_doors_title'); ?>
          </h2>
        </header>
        <p>
          <?php echo theme('products_doors_text'); ?>
        </p>
        <p>
          <?php
        if(is_page('internal-doors')   ){
            $page = 'internal_doors';
            $url =  site_url().'/internal-doors/styles'; 
         }
          if(is_page('front-doors') ) {
             $page = 'front_doors';
             $url =  site_url().'/front-doors/styles'; 
         }

        if(is_page('garage-doors') ) {
             $page = 'garage_doors';
            
         }
                    
                         $args = array(
                          // Only get published posts..
                          'post_type'   => array($page),
                          'post_status' => array('publish'),
                          /*'tax_query' => array(
                            // Only select projects
                            'taxonomy' => 'styles',
                            'field' => 'slug',
                            'terms' => array( 'term' )
                          ),*/
                          // Get the latest results
                          'order'       => 'ASC',
                         // 'orderby'     => 'rand',
                          'posts_per_page' => 6
                        );

                    $loop = new WP_Query( $args );
                   
                    
                    while ( $loop->have_posts() ) : $loop->the_post();
                         ?>
            <?php  if(is_page('garage-doors') ) {  $url = get_permalink();   } ?>
        </p>
        <div class="fs-slide small-12 medium-4 columns">
          <a href="<?php echo $url; ?>">
            <div class="fss-wrapper">
              <div class="fs-image">
                <img src="<?php echo theme('background')['url']?>">

              </div>
              <div class="image-overlay">
                <div class="image-overlay-wrapper">
                  <div class="image-overlay-center">
                    <p class="middle-text">
                      <?php the_title(); ?>
                    </p>
                    <p class="link-text">Find Out More</p>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>

        <?php

                    endwhile; 

                    wp_reset_query(); 
        ?>
          <?php 

         ?>
          <p></p>

      </article>
    </div>
  </div>
</section>

                  <?php endif; ?>





