<?php get_header(); ?>

<?php 

// remove words from title 
$filtered_words = array(
    'Deuren',
    'Internal',
    'Door',
    'Front',
    'Internal',
    'Contemporary'
);

 $filtered_text = str_replace($filtered_words,'',  get_the_title());

?>

<!-- start of internal -->
<div class="single-internal  section" id="slide-1" name="slide-1">
    <div class="container">
        <div class="max-container">
            <div class="internal-wrapper "  >
                <div class="row">
                     <div class="container-wrapper" >
                        <div class="small-12 large-6  columns">
                            <img src="<?php echo theme('background')['url']?>" class="img-responsive" alt="">
                        </div>
                        <div class="small-12 large-6  columns">
                            <p class="small-title">INTERNAL Door</p>
                            <h1><?php echo $filtered_text;  ?></h1>
                            <div class="parag">
                            <!-- ==== woods === -->    
                       
              
                             </div> 
                             <div class="price">
                                <?php echo theme('price') ?>

                            </div>   

                        </div>
                        
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
      
        <div class="toggle text-center ">
            <h1><?php the_title() ?></h1>
            <div class="thinLine"></div>
            <?php echo theme('content'); ?>
     
        </div>
</div>


<!-- end of single internal -->
<!-- end of single internal -->
<!-- fixed blocks -->
<div class="prehung-vid  section" id="slide-2" name="slide-2">

    <div class="row">
        <div class="small-12 large-12 columns">
            <h1 class="text-center">
                        <?php echo theme('video_title'); ?>
            </h1>
            <div class="thinLine"></div>
                    <div class="prehung-vid_content" >
                        <?php echo theme('video_text'); ?>
                    </div>

                    <div class="vid-wrapper">
                        <div class="prehung-vid_vid">
                            <?php echo theme('video_link'); ?>
                        <div class="icon">
                                <img src="<?php echo get_template_directory_uri()?>/assets/images/video.png" alt="">
                            </div>
                         </div> 
                    </div>        
        </div>
    </div>
    
        
</div>

 <div class="config  section" id="slide-3" name="slide-3">
     <div class="max-container">
            <h1 class="text-center">
                <?php echo theme('configuration_title'); ?>
            </h1>
            <div class="thinLine"></div>
            <div class="config_content text-center">
                <?php echo theme('configuration_text'); ?>
            </div>
            <div class="config_rep">
                <?php 
                $rows = theme('configuration_content');
                if($rows) :
                    foreach($rows as $row ):
                ?>
                <div class "config_slider">
                    <div class="row">
                        <div class="small-6 large-6 columns">
                            <div class="slider-img">
                                <img src="<?php echo $row['content_image']['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="small-6 large-6 columns">
                            <div class="config_slider_content">
                                <h1 class="config_slider_title">
                                    <?php echo $row['content_title'] ?>
                                </h1>
                                <?php echo $row['content_text']; ?>
                            </div>

                        </div>
                    </div>
                </div>

                <?php endforeach; endif; ?>
            </div>
            </div>
 </div>
                    

             
 <div class="handles  section" id="slide-4" name="slide-4">
           
    <h1 class="text-center">
                        <?php echo theme('handle_title'); ?>
    </h1>
        <div class="thinLine"></div>
     <div class="handles_img">
                        <?php
                                $images = theme('handle_gallery');
                                if($images):
                                    foreach($images as $image):
                                                                   
                            ?>
                            <div>
                                <img src="<?php echo $image['url']; ?>" alt="">
                            </div>
                            <?php endforeach; endif; ?>
 </div>
                                    </div>
     
<!-- end of fixed blocks -->

<div class="table-sepc  section" id="slide-5" name="slide-5" style="background: url(<?php echo get_template_directory_uri() ?>/assets/images/newAssets/Deuren-Table-Spec-Background.png">
    <div class="max-container">
        <div class="table-spec_title">
            <h1 class="text-center"><?php  ?> SPECIFICATION</h1>
            <div class="thinLine"></div>
        </div>
        <div >
            <?php echo theme('specification_table') ?>
        </div>

    </div>

</div>


<nav class="dot-nav">
    <ul>
        <li class="animate"><a href="#slide-1" class="slide-1-nav active">Slide 1</a></li>
        <li class="animate"><a href="#slide-2" class="slide-2-nav">Slide 2</a></li>
        <li class="animate"><a href="#slide-3" class="slide-3-nav">Slide 3</a></li>
        <li class="animate"><a href="#slide-4" class="slide-4-nav">Slide 4</a></li>
        <li class="animate"><a href="#slide-5" class="slide-5-nav">Slide 5</a></li>
        
    </ul>
</nav>
		
<?php get_footer(); ?>