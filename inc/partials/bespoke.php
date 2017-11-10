<section class="page-content home-featured white attribute-wrap">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 columns">

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

                   
        </div>
    </div></section>