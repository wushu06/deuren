<!-- half width block -->
<section class="main-doors cat-doors" <?php if(!is_page( 'Bespoke')){?>style="background: url('
    <?php echo theme('image', 'url'); ?>') no-repeat center top; background-size:cover; height:100vh;"
    <?php }?>>
    <?php if(is_page('Bespoke')){?>
    <div class="bespoke-slider">
        <?php 
    $i = 1;
    $images = theme('gallery');

    if( $images ): ?>

        <?php foreach( $images as $image ): ?>

        <div class="wood-block" id="wood-<?php echo $i; ?>" style="background-image:url(<?php echo $image['url']; ?>);">
        </div>



        <?php $i++; endforeach; endif; ?>
    </div>
    <?php } ?>
    <section class="home-doors">
        <div class="row">
            <div class="section-wrap">
                <div class="hd-row">
                    <div class="small-12 medium-6 large-4 large-offset-1 hd-columns slide-text">
                        <div class="std">
                            <h1>
                                <?php echo theme('title'); ?>
                            </h1>
                            <p>
                                <?php echo theme('body'); ?>
                            </p>
                            <?php if(theme('button_name')) { ?>
                            <a class="button"  href="<?php echo site_ur() ?>/">VISIT THE WORKSHOP</a>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>