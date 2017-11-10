<?php get_header(); ?>

<?php 

 $terms_s = get_terms( 'woods', array( 'hide_empty' => true, 'orderby' => 'slug', 'order' => 'ASC' ));
 $terms_w = get_terms( 'styles', array( 'hide_empty' => true, 'orderby' => 'slug', 'order' => 'ASC' ));

$terms_styles = wp_get_post_terms($post->ID, 'styles', array("fields" => "all"));

foreach ($terms_styles as $term_style) {  $term_style_name = $term_style->name;}

$terms_woods = wp_get_post_terms($post->ID, 'woods', array("fields" => "all"));
if($terms_woods){
    foreach ($terms_woods as $term_wood) {  $term_wood_name = $term_wood->name;}
}else {
    $term_wood_name = "";
}

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
            <div class="internal-wrapper ">
                <div class="row">
                    <div class="container-wrapper">
                        <div class="small-12 large-6  columns">
                            <img src="<?php echo theme('background')['url']?>" class="img-responsive" alt="">
                        </div>
                        <div class="small-12 large-6  columns">
                            <p class="small-title">INTERNAL Door</p>
                            <h1>
                                <?php echo $term_style_name.'<br> '.$term_wood_name;  ?>
                            </h1>
                            <div class="parag">
                                <!-- ==== woods === -->
                                <div class="cat-wrapper" id="wood-wrapper">

                                    <div class="cat-circles">

                                        <p class="term_name_s">CHOOSE YOUR WOOD OR COLOUR:
                                            <strong>
                                                <?php echo $term_wood_name; ?>
                                            </strong>
                                        </p>
                                        <?php

                // get all the posts filtered by terms EXCLUDING the current term
                    if(!empty($term_wood_name )){
                            $args = array(
                                    'post_type' => 'internal_doors',
                                    'posts_per_page'=> -1,   
                                    'orderby'  => array( 
                                            'ID' => 'DESC' ,
                                        ),
                                        'tax_query' => array(
                                        
                                         'relation' => 'AND',
                                            array(
                                                'taxonomy' => 'styles',
                                                'field'    => 'slug',
                                                'terms'    => array( $term_style_name ),
                                                
                                            ),
                                         array(
                                                'taxonomy' => 'woods',
                                                'field'    => 'slug',
                                                'terms'    => array( $term_wood_name ),
                                                'operator' => 'NOT IN',
                                                
                                            ),
                                        ),
                                    
                                );
                                 // get all the posts filtered by terms INCLUDING the current term
                                $args_v2 = array(
                                    'post_type' => 'internal_doors',
                                    'posts_per_page'=> -1,   
                                    'orderby'  => array( 
                                            'ID' => 'DESC' ,
                                        ),
                                        'tax_query' => array(
                                        
                                         'relation' => 'AND',
                                            array(
                                                'taxonomy' => 'styles',
                                                'field'    => 'slug',
                                                'terms'    => array( $term_style_name ),
                                                
                                            ),
                                         array(
                                                'taxonomy' => 'woods',
                                                'field'    => 'slug',
                                                'terms'    => array( $term_wood_name ),
                                                //'operator' => 'NOT IN',
                                                
                                            ),
                                        ),
                                    
                                );
                                
                                $query = new WP_Query( $args );
                                
                                //var_dump( $query);
                                
                                while ( $query->have_posts() ) {
                                    $query->the_post();  
                                    $terms_styles = wp_get_post_terms($post->ID, 'styles', array("fields" => "all"));
                                    
                                    foreach ($terms_styles as $term_style) {  echo '<div class="circle styles"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("woods_title").' "> ';
                                    // echo  theme("woods_title").' | <br>';
                                        $image = theme('styles_image'); 
                                        echo "<img src='".($image ? $image['url'] : 'http://via.placeholder.com/50x50')."' width='50' height='50'>";
                                        echo '</a></div>';
                                        
                                    }
                                  
                                    ?>

                                            <?php } 
                                
                                    $query_v2 = new WP_Query( $args_v2 );
                                    while ( $query_v2->have_posts() ) {
                                        $query_v2->the_post();  
                                    
                                        $terms_styles_v2 = wp_get_post_terms($post->ID, 'styles', array("fields" => "all"));
                                        
                                        foreach ($terms_styles_v2 as $term_style_v2) {  echo '<div class="circle styles active-term"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("woods_title").' "> ';
                                        // echo  theme("woods_title").' | <br>';
                                        $image = theme('styles_image'); 
                                        echo "<img src='".($image ? $image['url'] : 'http://via.placeholder.com/50x50')."' width='50' height='50'>";
                                            echo '</a></div>';
                                            
                                        }
                                      
                                        ?>

                                            <?php } 
                                    
                                    wp_reset_query();
                                        }else {
                                            echo ' No other Woods available';
                                        }
                                      
                                ?>

                                    </div>
                                </div>

                                <!-- ==== styles === -->
                                <div class="cat-wrapper styles " id="style-wrapper">
                                    <div class="cat-circles">
                                        <p class="term_name_w">CHOOSE YOUR STYLE:
                                            <strong>
                                                <?php echo $term_style_name;  ?>
                                            </strong>
                                        </p>
                                        <?php 
                        if(!empty($term_wood_name )){
                            $args = array(
                                'post_type' => 'internal_doors',
                                'posts_per_page'=> -1,   
                                'orderby'  => array( 
                                        'ID' => 'DESC' ,
                                    ),
                                    'tax_query' => array(
                                    'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'woods',
                                            'field'    => 'slug',
                                            'terms'    => array( $term_wood_name ),
                                        ),
                                        
                                       array(
                                            'taxonomy' => 'styles',
                                            'field'    => 'slug',
                                            'terms'    => array( $term_style_name ),
                                            'operator' => 'NOT IN',
                                            
                                        ),
                                    ),
                                
                            );
                              // get all the posts filtered by terms INCLUDING the current term
                              $args_v2 = array(
                                'post_type' => 'internal_doors',
                                'posts_per_page'=> -1,   
                                'orderby'  => array( 
                                        'ID' => 'DESC' ,
                                    ),
                                    'tax_query' => array(
                                    
                                     'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'woods',
                                            'field'    => 'slug',
                                            'terms'    => array( $term_wood_name  ),
                                            
                                        ),
                                     array(
                                            'taxonomy' => 'styles',
                                            'field'    => 'slug',
                                            'terms'    => array( $term_style_name  ),
                                            //'operator' => 'NOT IN',
                                            
                                        ),
                                    ),
                                
                            );
                            
                            $query = new WP_Query( $args );
                            //var_dump( $query);
                            $query_contents=Array();
                            while ( $query->have_posts() ) {
                                $query->the_post();  
                                
                                $terms_woods = wp_get_post_terms($post->ID, 'woods', array("fields" => "all"));
                                
                                foreach ($terms_woods as $term_wood) { 
                                    echo '<div class="circle woods"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("styles_title").' "> ';
                                    $image = theme('wood_image'); 
                                    echo "<img src='".($image ? $image['url'] : 'http://via.placeholder.com/50x50')."' width='50' height='50'>";
                                    echo '</a></div>';
                                }

                                ?>
                                        <?php } 
                            $query_v2 = new WP_Query( $args_v2 );
                            while ( $query_v2->have_posts() ) {
                                $query_v2->the_post();  
                            
                                $terms_woods_v2 = wp_get_post_terms($post->ID, 'woods', array("fields" => "all"));
                                
                                foreach ($terms_woods_v2 as $term_wood_v2) { 
                                    echo '<div class="circle woods active-term"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("styles_title").' "> ';
                                    $image = theme('wood_image'); 
                                    echo "<img src='".($image ? $image['url'] : 'http://via.placeholder.com/50x50')."' width='50' height='50'>";
                                    echo '</a></div>';
                                }
                                }
                                    }else {
                                        echo 'No Styles available';
                                    }
                                wp_reset_query();
                                        ?>

                                    </div>
                                </div>

                            </div>
                            <div class="price ">
                                    <?php if(theme('price') !==''){ ?>
                                        <?php echo theme('price') ?>
                                        <p><a href="#content-price" class="fancybox-price explore-btn">SEE THE FULL PRICE TABLE </a></p>
                                    <?php } ?>    

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="toggle text-center ">
                <h1>
                    <?php the_title() ?>
                </h1>
                <div class="thinLine"></div>
                <?php echo theme('content'); ?>

            </div>

        </div>

    </div>
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
            <div class="prehung-vid_content">
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
            <h1 class="text-center">
                <?php echo $term_style_name;  ?> SPECIFICATION</h1>
            <div class="thinLine"></div>
        </div>
        <div>
            <?php echo theme('specification_table') ?>
        </div>

    </div>

</div>

<nav class="dot-nav">
    <ul>
        <li class="animate">
            <a href="#slide-1" class="slide-1-nav active">Slide 1</a>
        </li>
        <li class="animate">
            <a href="#slide-2" class="slide-2-nav">Slide 2</a>
        </li>
        <li class="animate">
            <a href="#slide-3" class="slide-3-nav">Slide 3</a>
        </li>
        <li class="animate">
            <a href="#slide-4" class="slide-4-nav">Slide 4</a>
        </li>
        <li class="animate">
            <a href="#slide-5" class="slide-5-nav">Slide 5</a>
        </li>

    </ul>
</nav>
<div class="priceGuideContent" id="content-price" style="display: none;">
   
        <?php echo theme('price_table_header') ?>

</div>
<div class="get-quote">
    <a href="<?php echo site_url().'/request-a-quote' ?>">
        <h4>Get a Quote</h4>
    </a>
</div>
<?php get_footer(); ?>