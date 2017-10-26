
<?php 
					$i = 1;
					$images = theme('gallery');

					if( $images ): ?>

<?php foreach( $images as $image ): ?>

<div class="fs-slide small-12 medium-4 columns">
    <a href="http://www.deuren.co.uk/internal-doors/styles/deuren-trem-h-internal-door-natural-oak">
        <div class="fss-wrapper">
            <div class="fs-image">
                <img alt="" src="<?php echo $image['url']; ?>"> </div>
            <div class="image-overlay">
                <div class="image-overlay-wrapper">
                    <div class="image-overlay-center">
                        <p class="middle-text">
                            <?php echo $image['description']; ?>
                        </p>
                        <p class="link-text">Find Out More</p>
                    </div>
                </div>
            </div>

        </div>
    </a>
</div>

<?php $i++; endforeach; ?>
<?php endif;?>
