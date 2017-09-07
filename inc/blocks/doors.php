
<div class="main-doors">
      <?php

                    // check if the repeater field has rows of data
                    if( have_rows('door') ):

                        // loop through the rows of data
                        while ( have_rows('door') ) : the_row();
                        $image = theme('door_image');

                    ?>

    <section class="home-doors">
        <div class="row">
            <div class="section-wrap">
                <div class="hd-row scroll-animate" style="background-image: url(<?php echo $image['url']; ?>">
                    <div class="small-12 medium-6 large-4 large-offset-1 hd-columns slide-text">
        

                       <h1 class="animate-left"><?php echo theme('title');  ?></h1>
                            <p class="animate-left"><?php echo theme('text');  ?></p>
                            <p class="animate-left">
                            <a class="button" href="http://www.deuren.co.uk/internal-doors" onclick="ga('send', 'event', ‘home', ‘lux_internal', 'find_out_more');">
                            <?php echo theme('button');  ?></a>
                            </p>


                    </div>
                </div>
            </div>
        </div>
    </section>

          <?php endwhile;

                    else :

                        // no rows found

                    endif;
?>

