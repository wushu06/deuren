
<section class="home-pre-hung full-height">
    <div class="row">
        <div class="section-wrap scroll-animate">
            <div class="small-12 medium-6 large-4 large-offset-1 columns slide-text">
                <h2><?php echo theme('title'); ?></h2>
<p><?php echo theme('body'); ?></p>
<p><a class="button" href="http://www.deuren.co.uk/pre-hung-door-sets" onclick="ga('send', 'event', ‘home', ‘pre_hung', 'find_out_more');"><?php echo theme('button'); ?></a></p>            </div>
            <div class="small-12 medium-6 large-7 columns pre-hung-image-wrapper">
                <div class="ph-inner-positioner">
                
                      <?php

                    // check if the repeater field has rows of data
                    if( have_rows('popups') ):
                        $i = 1;
                        // loop through the rows of data
                        while ( have_rows('popups') ) : the_row();?>
                             <div class="trigger-wrapper trigger-wrapper-<?php echo $i; ?>">
                                <div class="triggers trigger-<?php echo $i; ?>">
                                    <div class="trigger-inner">
                                        <a href="#content<?php echo $i; ?>" class="fancybox-new" rel="features">
                                            <?php echo theme('name_popup') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        

                    <?php $i++; endwhile;  endif; ?>

                     <img src="<?php echo theme( 'background_image', 'url' ); ?>" class='img-responsive'>
                    
                    
                </div>
            </div>
        </div>
    </div>

  <?php

                    // check if the repeater field has rows of data
                    if( have_rows('popups') ):
                        $i = 1;
                        // loop through the rows of data
                        while ( have_rows('popups') ) : the_row();?>

                         <div class="fbc-wrapper" id="content<?php echo $i; ?>" style="display:none;" rel="features">
                        <div class="fb-row">
                            <div class="small-12 medium-6 fb-columns text-side">
                                <h3><?php echo theme('title_popup'); ?></h3>
                                <p><?php echo theme('body_popup') ?></p>
                                <a href="http://www.deuren.co.uk/download-a-brochure" class="button"><?php echo theme('button_popup'); ?></a>
                            </div>
                            <div class="small-12 medium-6 fb-columns image-side" style="background-image:url('<?php echo theme('background_popup', 'url'); ?>');">
                                <img src="<?php echo get_template_directory_uri();  ?>/assets/images/blank.gif" width="100%" height="100%" />
                            </div>
                        </div>
                    </div>



<?php $i++; endwhile;  endif; ?>



   







</section>