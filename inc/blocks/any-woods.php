
<?php if(theme('use_any_woods_block')){ ?>
<section class="home-any wood full-height">
    <div class="wood-slider full-height">

		<?php 

		$images = theme('any_woods_background');

		if( $images ): 
		$i = 1;
		 ?>     
		   <?php foreach( $images as $image ): ?>
		           
       			 <div class="wood-block" id="wood-<?php echo $i; ?>">
		            <img src="<?php echo $image['sizes']['thumbnail'] ?>" />
		        </div>
				             
		                     
		               
		                
		        
		        <?php $i++; endforeach; ?>
		<?php else: ?>
		 <div class="wood-block" id="wood-1">
            <img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/woods/Deuren-Home-Page-Wood-Slide-1.jpg" />
        </div>
        <div class="wood-block" id="wood-2">
            <img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/woods/Deuren-Home-Page-Wood-Slide-2.jpg" />
        </div>
        <div class="wood-block" id="wood-3">
            <img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/woods/Deuren-Home-Page-Wood-Slide-3.jpg" />
        </div>
        <div class="wood-block" id="wood-4">
            <img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/woods/Deuren-Home-Page-Wood-Slide-4.jpg" />
        </div>
        <div class="wood-block" id="wood-5">
            <img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/woods/Deuren-Home-Page-Wood-Slide-5.jpg" />
        </div>
		<?php endif; ?>

    </div>
    <div class="row">
        <div class="section-wrap">
            <div class="small-12 large-10 large-offset-1 columns">
                <h2 class="scroll-animate"><?php if(theme('any_woods_title')) { echo theme('any_woods_title');} else { echo ' Any Wood ';} ?></h2>
<p class="scroll-animate"><?php if(theme('any_woods_body')) { echo theme('any_woods_body');} else { echo ' When choosing your dream door the type of wood can make all the difference. From luxurious deep rosewoods to modern, minimalist white ash, the wood you use has to represent you and your home’s style. It also has to be the best quality. We use the finest materials in order to create perfectly hand crafted doors that won’t bend, warp or let you down. ';}   ?></p>
<p class="scroll-animate"><a class="button" href="http://www.deuren.co.uk/internal-doors/woods" onclick="ga('send', 'event', ‘home', ‘any_wood', 'find_out_more');"><?php if(theme('any_woods_button')){ echo theme('any_woods_button');}else { echo "Find out more";} ?></a></p>            </div>
        </div>
    </div>
</section>
<?php } ?>
