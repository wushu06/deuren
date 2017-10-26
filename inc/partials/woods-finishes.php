<div class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 columns woods-finishes">
<?php
$i = 1;
					$images = theme('gallery');

					if( $images ): ?>

    <?php foreach( $images as $image ): ?>
    <div class="fs-slide small-12 medium-3 columns">
        <div class="fss-wrapper">
         <a class="fancybox-awac" href="#content<?php echo $i;?>" rel="finishes">
            <div class="fs-image">

                <img alt="" src="<?php echo $image['sizes']['thumbnail']; ?>">
                <div class="title-overlay">
                    <h4 class="white">
                        <strong><?php echo $image['description']; ?></strong>
                    </h4>
                </div>

            </div>
            </a>
        </div>
    </div>

    <?php $i++; endforeach; ?>
    <?php endif; ?>
    </div>