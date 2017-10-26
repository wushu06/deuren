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
                          'order'       => 'DESC',
                          'orderby'     => 'rand',
                          'posts_per_page' => 6
                        );

                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();
                         ?>
            <?php //var_dump($loop); ?>
        </p>
        <div class="fs-slide small-12 medium-4 columns">
          <a href="<?php echo site_url()?>/styles/">
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










<?php //else : ?>













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
      <h2 class="center">
        <?php echo theme('products_doors_title'); ?>
      </h2>
      <p></p>

      <?php 
        $args = array( 
                        'post_type' => 'product',
                         'posts_per_page' => 9,
                         'tax_query' => array(
                    // Only select projects
                                array(
                                    'taxonomy' => 'product_cat', // slug for custom post product category of woocommerce is product_cat
                                    'field'    => 'slug',
                                    'terms'    => array( 'internal-doors' ),  //specify which category 
                                ),
                            ), 
                         ); 

                    $loop = new WP_Query( $args );  
      while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>

      <div class="fs-slide small-12 medium-4 columns">
        <a href="http://www.deuren.co.uk/internal-doors/styles/deuren-trem-h-internal-door-etimoe">
          <div class="fss-wrapper">
            <div class="fs-image">
              <?php echo woocommerce_get_product_thumbnail();?>
            </div>
            <div class="image-overlay">
              <div class="image-overlay-wrapper">
                <div class="image-overlay-center">
                  <p class="middle-text">
                    <?php echo get_the_title(); ?>
                  </p>
                  <p class="link-text">Find Out More</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php endwhile; ?>
      <div class="clear"></div>
      <p></p>
      <p class="center">
        <a class="button" href="http://www.deuren.co.uk/internal-doors/all">
          <?php echo theme('products_doors_button'); ?>
        </a>
      </p>
    </div>
  </div>
</section>
<?php // endif; ?>