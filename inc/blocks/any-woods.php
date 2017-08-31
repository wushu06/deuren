<section class="home-any wood full-height">
    <div class="wood-slider full-height">

		<?php 

		$images = theme('background');

		if( $images ): 
		$i = 1;
		 ?>     
		   <?php foreach( $images as $image ): ?>
		           
       			 <div class="wood-block" id="wood-<?php echo $i; ?>">
		            <img src="<?php echo $image['sizes']['thumbnail'] ?>" />
		        </div>
				             
		                     
		               
		                
		        
		        <?php $i++; endforeach; ?>
		
		<?php endif; ?>

    </div>
    <div class="row">
        <div class="section-wrap">
            <div class="small-12 large-10 large-offset-1 columns">
                <h2 class="scroll-animate"><?php echo theme('title'); ?></h2>
<p class="scroll-animate"><?php echo theme('text') ?></p>
<p class="scroll-animate"><a class="button" href="http://www.deuren.co.uk/internal-doors/woods" onclick="ga('send', 'event', ‘home', ‘any_wood', 'find_out_more');"><?php echo theme('button'); ?></a></p>            </div>
        </div>
    </div>
</section>