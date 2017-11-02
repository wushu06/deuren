<?php //if(!is_page('unique-features')):?>
<section class="home-featured">
  <h1>Products listing for woods and styles</h1>
  <div class="row">
    <div class="small-12 large-10 large-offset-1 columns">
      <article>
        <header class="page-title category-title">
          <h1></h1>
          <h2>
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
         }
          if(is_page('front-doors') ) {
             $page = 'front_doors';
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
            <?php //var_dump($loop); ?>
        </p>
        <div class="fs-slide small-12 medium-4 columns">
          <a href="<?php echo site_url().'/'.((strpos($_SERVER['REQUEST_URI'], "internal") !== false) ? 'internal-doors/styles' : 'front-doors/styles'); ?>">
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
          <?php 

         ?>
          <p></p>

      </article>
    </div>
  </div>
</section>







