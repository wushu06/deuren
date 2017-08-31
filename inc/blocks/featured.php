
<section class="home-featured">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 columns">
            <h2><?php echo theme('title'); ?></h2>
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