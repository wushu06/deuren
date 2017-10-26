<section class="vario">
    <div class="container">
       
                <div class="vario_background">
                    <?php 
                        $images = theme('animated_background');
                        if($images):
                        foreach($images as $image): ?>

                    <img src="<?php echo $image['url']; ?>" alt="" width="100%">
                    <?php endforeach; endif;
                        ?>
                </div>
                <div class="clear"></div>
                
        <div class="row">
            <div class="small-12 large-12 columns">
                <div class="vario_content">
                    <h1 class="text-center"> <?php echo theme('content_title');?></h1>
                    <div class="thinLine"></div>
                    <?php echo theme('content_body');?>
                 </div>
                <div class="vario_second_content">
                    <h1 class="text-center"> <?php echo theme('second_content_title');?></h1>
                    <div class="thinLine"></div>
                    <?php echo theme('second_content_body');?>
                </div>
            </div>

        </div>

         <div class="vario_features">                 
        <?php 
            $rows = theme('features');
            $i = 0; 
            if($rows):
                foreach($rows as $row): 
             
             if( $i % 2 == 0 ){      
                    
            ?>
            
         <div class="row">
            <div class="small-6 large-6 columns">
                <div class="vario__img ">
                    <img src="<?php echo $row['feature_image']['url'];?>" alt="">
                </div>

            </div>
            <div class="small-6 large-6 columns">
                <div class="vario__content ">
                    <h1 class="title-one"><?php echo $row['feature_title'];?></h1>
                    
                     <?php echo $row['feature_content'];?>
                 </div>     
            </div>
        </div>
       
        <?php }else { ?>
        <div class="row">
      
            <div class="small-6 large-6 columns">
                 <div class="vario__content " style="text-align: right;">
                    <h1 class="title-two"><?php echo $row['feature_title'];?></h1>
                    
                    <?php echo $row['feature_content'];?>
                 </div>
            </div>
            <div class="small-6 large-6 columns">
                <div class="vario__img ">
                 <img src="<?php echo $row['feature_image']['url'];?>" alt="">
                </div>
            </div>
        </div>
        <?php } $i++; endforeach; endif; ?>
        </div>  
    </div>
</section>