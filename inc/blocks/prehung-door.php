<!-- prehung door block -->
<?php if(theme('use_prehung_door_block')){ ?>

<section class="home-pre-hung full-height">
    <div class="row">
        <div class="section-wrap scroll-animate">
            <div class="small-12 medium-6 large-4 large-offset-1 columns slide-text">
                <h2><?php echo (is_page('unique-features'))? 'UNIQUE FEATURES' : theme('popup_title'); ?></h2>
            <p><?php echo (is_page('unique-features'))? 'We include a number of premium features as standard on our internal doors, including hidden hinges to hide unsightly metal, factory routed latch keeps for seamless closure and frames and architraves made from the same piece of timber for a perfect match.' : theme('popup_body'); ?>
                
            </p>
             <?php if(!is_page('unique-features' )): ?>
            <p>

            <a class="button" href="http://www.deuren.co.uk/pre-hung-door-sets" onclick="ga('send', 'event', ‘home', ‘pre_hung', 'find_out_more');">
            <?php  echo theme('popup_button'); ?>
                
            </a>
            </p> 
            <?php endif; ?>         
             </div>
            <div class="small-12 medium-6 large-7 columns pre-hung-image-wrapper">
                <div class="ph-inner-positioner">
                
                      <?php

                   // check if the repeater field has rows of data
                     $rows = theme('popup_bubbles');
                   
                      
                        // loop through the rows of data
                        if($rows)
                            {
                                 $i = 1;

                                foreach($rows as $row)
                                {?>
                     
                       
                             <div class="trigger-wrapper trigger-wrapper-<?php echo $i; ?>">
                                <div class="triggers trigger-<?php echo $i; ?>">
                                    <div class="trigger-inner">
                                        <a href="#content<?php echo $i; ?>" class="fancybox-new" rel="features">
                                            <?php echo $row['bubble_name']; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        

                    <?php $i++; } } ?>

                     <img src="<?php echo theme( 'popup_background', 'url' ); ?>" class='img-responsive'>
                    
                    
                </div>
            </div>
        </div>
    </div>

  <?php

                    // check if the repeater field has rows of data
                     $rows = theme('popup_bubbles');
                   
                      
                        // loop through the rows of data
                        if($rows)
                            {
                                 $i = 1;

                                foreach($rows as $row)
                                {?>

                         <div class="fbc-wrapper" id="content<?php echo $i; ?>" style="display:none;" rel="features">
                        <div class="fb-row">
                            <div class="small-12 medium-6 fb-columns text-side">
                                <h3><?php echo $row['bubble_title']; ?></h3>
                                <p><?php echo $row['bubble_body'] ?></p>
                                <a href="http://www.deuren.co.uk/download-a-brochure" class="button"><?php echo $row['bubble_button']; ?></a>
                            </div>
                            <div class="small-12 medium-6 fb-columns image-side" style="background-image:url(<?php echo($row['bubble_background']['url']); ?>)">
                            
                                <img src="<?php echo get_template_directory_uri();  ?>/assets/images/blank.gif" width="100%" height="100%" />
                            </div>
                        </div>
                    </div>



<?php $i++; }  } ?>
</section>
<?php }  ?>

