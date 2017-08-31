


<?php


		$categories = get_terms( array(
                'taxonomy' => 'garge_door',
                'hide_empty' => false,
                'orderby' => 'slug',
				'order' => 'ASC'
            ));
		
		
		

	
		?>


<div class="block block-choose">
    <div class="container">
		
		
		 <h6 class="text-center scroll-animate"><a href="#"><?php echo theme('title'); ?></a></h6>
		 <h2 class="text-center big-title scroll-animate">Choose a garage door style </h2>
		 <div class="row">	
					                

		 			<?php $i = 0; ?>
   					<?php foreach( $categories as $category ) {
   						

   						?>
   						
   						<?php //if( $i % 2 == 0 ) { ?>
					<div class="col-md-12 col-xs-6">
		        	<div class="row block-choose-row" data-res="1060">
		        	
			            <div class="col-md-6 col-xs-6 <?php if( $i % 2 == 0 ) {echo'right';}else{echo 'left';} ?> block-choose-img text-center ">
			            	<div class="choose-wrap">
					           	<a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" >

					               <?php 
					               $image = get_field('image', $category);

									echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
					                ?>

					             </a>

					        </div>      
			            </div>
					
					<a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>" >
			            <div class="col-md-6 col-xs-6 block-choose-content">
			            	
			            	<div class="content-wrap">
			                    <h2 class="block__title h3 t-brand"> <?php echo $category->name?>  </h2> 
			                  
			                    <p><?php echo $category->description; ?></p>
			                    <div>
			                   <a class="choose-link " href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>">VIEW OUR RANGE</a>
								</div>


			                    <?php //echo $item['body']; ?>
			                </div>

			           
			           </div> </a>
			           </div>  
			    </div><!--End block choose row-->
			           <?php ++$i; ?>
			            <?php } //} ?>
		        </div>	 
		      
		         
		       
	

        </div> <!--End container-->
   
</div>
    

 
   