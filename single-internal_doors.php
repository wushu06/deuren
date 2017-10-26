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

?>


<section class="single-internal">
    <div class="container">
        <div class="internal-wrapper" style="background: url('<?php echo theme('background')['url']?>') no-repeat;">
            <div class="row">
                <div class="small-6 small-offset-6 large-6 large-offset-6 columns">
                    <p class="small-title">INTERNAL Door</p>
                    <h1><?php echo theme('style_title') .theme('woods_title');?></h1>
                    <div class="parag">
                        <?php echo theme('content') ?>
                    </div>
                    <div class="price">
                        <?php echo theme('price') ?>

                    </div>

                </div>
            </div>
        </div>
        <div class="thinLine"></div>
        <div class="toggle text-center">
            <div class="toggle-wood"><button class="explore-btn">Woods</button></div>
            <div class="toggle-style"><button class="explore-btn">Styles</button></div>
        </div>
        <div class="cat-circles">
        
           
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
                    
                    $query = new WP_Query( $args );
                    //var_dump( $query);
                    
                    $query_contents=Array();
                    while ( $query->have_posts() ) {
                        $query->the_post();  
                       
                        $terms_styles = wp_get_post_terms($post->ID, 'styles', array("fields" => "all"));
                        
                        foreach ($terms_styles as $term_style) {  echo '<div class="circle styles"><a href="'.get_permalink().'"> ';
                            echo  theme("woods_title").' | <br>';
                            echo the_post_thumbnail( );
                            echo '</a></div>';
                            
                        }
                        ?>

                <?php } 
                    
                    wp_reset_query();
                        }else {
                            echo ' No other Woods available';
                        }
                    ?>
                <hr>
        </div>
       
        <div class="cat-circles">
           
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
                        
                        $query = new WP_Query( $args );
                        //var_dump( $query);
                        $query_contents=Array();
                        while ( $query->have_posts() ) {
                            $query->the_post();  
                            
                            $terms_woods = wp_get_post_terms($post->ID, 'woods', array("fields" => "all"));
                            
                            foreach ($terms_woods as $term_wood) { 
                                echo '<div class="circle woods"><a href="'.get_permalink().'"> ';
                                echo  theme("style_title").' | <br>';
                                echo the_post_thumbnail( );
                                echo '</a></div>';
                            }
                            ?>
            <?php } wp_reset_query();
                     }else {
                         echo 'No Styles available';
                     }
                        ?>

        </div>
        <div class="clearfix">
        <div class="thinLine"></div>
        <div class="prehung-vid">
            <h1 class="text-center">
                <?php echo theme('video_title'); ?>
            </h1>
            <div class"thinLine"></div>
            <?php echo theme('video_text'); ?>
            <div class="vid">
                <?php echo theme('video_link'); ?>
            </div>
        </div>
        <div class="config">
            <h1 class="text-center">
                <?php echo theme('configuration_title'); ?>
            </h1>
            <div class="config-content">
                <?php echo theme('configuration_text'); ?>
            </div>
            <div class="config-rep">
                <?php 
                $rows = theme('configuration_content');
                if($rows) :
                    foreach($rows as $row ):
                ?>
                <div class "config-slider">
                    <div class="row">
                        <div class="small-6 large-6 columns">
                            <div class="slider-img">
                                <img src="<?php echo $row['content_image']['url']; ?>" alt="">
                            </div>
                        </div>
                        <div class="small-6 large-6 columns">
                            <div class="slider-content">
                                <h1>
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

        <div class="handles">
            <div class="row">
                <div class="small-12 large-12 columns">
                    <h1 class="text-center">
                        <?php echo theme('handle_title'); ?>
                    </h1>
                    <div class="thinLine"></div>
                    <div class="handles-img">
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
            </div>
        </div>
    </div>

</section>
<div class="clear"></div>
<?php get_footer(); ?>