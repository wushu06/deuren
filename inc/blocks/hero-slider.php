
<section class="hero-section full-height">

    <div class="home-slider">
	
	<?php 

		$images = theme('slider_images');

		if( $images ): ?>
		
		        <?php foreach( $images as $image ): ?>
		           <div style="background:url(<?php  echo $image['url'] ?>) no-repeat center center; background-size:cover;"></div>
       
		             
		                     
		               
		                
		        
		        <?php endforeach; ?>
		
		<?php endif; ?>



    </div>

</section>
