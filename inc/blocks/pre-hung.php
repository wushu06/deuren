<!-- prehung block -->
<section class="home-featured prehung scroll-animate">
	<div class="prehung-inner">
		&nbsp;
	</div>
	<div class="row">
		<div class="small-10 small-offset-1 large-8 large-offset-2 columns top-text">
			<h1 class="first"><?php echo theme('second_top_text');?></h1>
			<h2 class="second"><?php echo theme('top_text');?></h2>
		</div>
	</div>
	<div class="row">
		<div class="small-8 small-offset-2 medium-12 medium-offset-0 columns animate-wrapper">
			<ul class="animate-images three">

            <?php 

                $images = theme('gallery');
				
                if( $images ): ?>
                 
                        <?php foreach( $images as $image ): ?>
                           
                            <li><img src="<?php echo $image['url'] ?>" /><br>
                                <span><strong>DOOR LINING</strong><br>
                                (&pound;80)</span></li>
                        <?php endforeach; ?>
                 
                <?php endif; ?>
			</ul>
			<ul class="animate-images four">

            <?php 

				$sec_images = theme('second_gallery');
			
                if( $sec_images ): ?>
                    
                        <?php foreach( $sec_images as $sec_image ): ?>
                           
                            <li><img src="<?php echo $sec_image['url'] ?>" /><br>
                                <span><?php echo $sec_image["description"]; ?></span></li>
                        <?php endforeach; ?>
                  
                <?php endif; ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="small-10 small-offset-1 large-8 large-offset-2 columns bottom-text">
			<p class="first"><?php echo theme('second_bottom_text');?></p>
			<h3 class="second"><?php echo theme('bottom_text');?></h3>
		</div>
	</div>
</section>