<?php get_header(); ?>
<!-- single front doors -->
<?php 

 $terms_s = get_terms( 'woods_front_doors', array( 'hide_empty' => true, 'orderby' => 'slug', 'order' => 'ASC' ));
 $terms_w = get_terms( 'style_front_door', array( 'hide_empty' => true, 'orderby' => 'slug', 'order' => 'ASC' ));

$terms_styles = wp_get_post_terms($post->ID, 'style_front_door', array("fields" => "all"));

foreach ($terms_styles as $term_style) {  $term_style_name = $term_style->name;}

$terms_woods = wp_get_post_terms($post->ID, 'woods_front_doors', array("fields" => "all"));
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
                        <p class="small-title">Front Door</p>
                        <h1><?php echo $term_style_name.'<br> '.$term_wood_name; ?></h1>
                        <div class="parag">
                           <!-- ==== woods === -->    
                        <div class="cat-wrapper" id="wood-wrapper">
                        
                                            <div class="cat-circles">
                                    
                                            <p class="term_name_s">CHOOSE YOUR WOOD OR COLOUR: <strong><?php echo $term_wood_name; ?></strong></p>
                                        <?php
                        
                                        // get all the posts filtered by terms EXCLUDING the current term
                                            if(!empty($term_wood_name )){
                                                    $args = array(
                                                            'post_type' => 'front_doors',
                                                            'posts_per_page'=> -1,   
                                                            'orderby'  => array( 
                                                                    'ID' => 'DESC' ,
                                                                ),
                                                                'tax_query' => array(
                                                                
                                                                 'relation' => 'AND',
                                                                    array(
                                                                        'taxonomy' => 'style_front_door',
                                                                        'field'    => 'slug',
                                                                        'terms'    => array( $term_style_name ),
                                                                        
                                                                    ),
                                                                 array(
                                                                        'taxonomy' => 'woods_front_doors',
                                                                        'field'    => 'slug',
                                                                        'terms'    => array( $term_wood_name ),
                                                                        'operator' => 'NOT IN',
                                                                        
                                                                    ),
                                                                ),
                                                            
                                                        );
                                                         // get all the posts filtered by terms INCLUDING the current term
                                                        $args_v2 = array(
                                                            'post_type' => 'front_doors',
                                                            'posts_per_page'=> -1,   
                                                            'orderby'  => array( 
                                                                    'ID' => 'DESC' ,
                                                                ),
                                                                'tax_query' => array(
                                                                
                                                                 'relation' => 'AND',
                                                                    array(
                                                                        'taxonomy' => 'style_front_door',
                                                                        'field'    => 'slug',
                                                                        'terms'    => array( $term_style_name ),
                                                                        
                                                                    ),
                                                                 array(
                                                                        'taxonomy' => 'woods_front_doors',
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
                                                        
                                                           $terms_styles = wp_get_post_terms($post->ID, 'style_front_door', array("fields" => "all"));
                                                            
                                                            foreach ($terms_styles as $term_style) { 
                                                                $image = theme('wood_image'); 
                                                                if($image){
                                                                    echo '<div class="circle styles"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("woods_title").' "> ';
                                                                    echo "<img src='". $image['url']."' width='40' height='40'>";
                                                                    echo '</a></div>';
                                                                }
                                                                
                                                            }
                                                          
                                                            ?>
                        
                                                    <?php } 
                                                        
                                                            $query_v2 = new WP_Query( $args_v2 );
                                                            while ( $query_v2->have_posts() ) {
                                                                $query_v2->the_post();  
                                                            
                                                                $terms_styles_v2 = wp_get_post_terms($post->ID, 'style_front_door', array("fields" => "all"));
                                                                
                                                                foreach ($terms_styles_v2 as $term_style_v2) { $image = theme('wood_image'); 
                                                                    $image = theme('wood_image'); 
                                                                    if($image){
                                                                        echo '<div class="circle styles active-term"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("woods_title").' "> ';
                                                                          echo "<img src='". $image['url'] ."' width='40' height='40'>";
                                                                        echo '</a><div class="overlay-img"></div></div>';
                                                                    }
                                                                    
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
                                        <div class="cat-wrapper styles " id="style-wrapper" >
                                    <div class="cat-circles">
                                    <p class="term_name_w">CHOOSE YOUR STYLE: <strong><?php echo $term_style_name;  ?></strong></p>
                                        <?php 
                                                if(!empty($term_wood_name )){
                                                    $args = array(
                                                        'post_type' => 'front_doors',
                                                        'posts_per_page'=> -1,   
                                                        'orderby'  => array( 
                                                                'ID' => 'DESC' ,
                                                            ),
                                                            'tax_query' => array(
                                                            'relation' => 'AND',
                                                                array(
                                                                    'taxonomy' => 'woods_front_doors',
                                                                    'field'    => 'slug',
                                                                    'terms'    => array( $term_wood_name ),
                                                                ),
                                                                
                                                               array(
                                                                    'taxonomy' => 'style_front_door',
                                                                    'field'    => 'slug',
                                                                    'terms'    => array( $term_style_name ),
                                                                    'operator' => 'NOT IN',
                                                                    
                                                                ),
                                                            ),
                                                        
                                                    );
                                                      // get all the posts filtered by terms INCLUDING the current term
                                                      $args_v2 = array(
                                                        'post_type' => 'front_doors',
                                                        'posts_per_page'=> -1,   
                                                        'orderby'  => array( 
                                                                'ID' => 'DESC' ,
                                                            ),
                                                            'tax_query' => array(
                                                            
                                                             'relation' => 'AND',
                                                                array(
                                                                    'taxonomy' => 'woods_front_doors',
                                                                    'field'    => 'slug',
                                                                    'terms'    => array( $term_wood_name  ),
                                                                    
                                                                ),
                                                             array(
                                                                    'taxonomy' => 'style_front_door',
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
                                                        
                                                        $terms_woods = wp_get_post_terms($post->ID, 'woods_front_doors', array("fields" => "all"));
                                                        
                                                        foreach ($terms_woods as $term_wood) { 
                                                            $image = theme('styles_image'); 
                                                            if($image){
                                                                echo '<div class="circle woods"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("styles_title").' "> ';
                                                              
                                                                echo "<img src='". $image['url']."' width='40' height='40'>";
                                                                echo '</a></div>';
                                                            }
                                                        }
                        
                                                        ?>
                                                    <?php } 
                                                    $query_v2 = new WP_Query( $args_v2 );
                                                    while ( $query_v2->have_posts() ) {
                                                        $query_v2->the_post();  
                                                    
                                                        $terms_woods_v2 = wp_get_post_terms($post->ID, 'woods_front_doors', array("fields" => "all"));
                                                        
                                                        foreach ($terms_woods_v2 as $term_wood_v2) { 
                                                            $image = theme('styles_image'); 
                                                            if($image){
                                                                echo '<div class="circle woods active-term"><a href="'.get_permalink().'"  data-toggle="tooltip" title="'.theme("styles_title").' "> ';
                                                                echo "<img src='". $image['url'] ."' width='40' height='40'>";
                                                              echo '</a><div class="overlay-img"></div></div>';
                                                          }
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
                        <p>
                            <a href="#content-price" class="fancybox-price explore-btn">SEE THE FULL PRICE TABLE </a>
                        </p>
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
<!-- ================== 
end of doors section
===================== -->

<?php  partial( 'fixed-blocks' ); ?>

<!-- ================== 
start of table-spec section
===================== -->

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
<!-- ================== 
end of  table-spec section
===================== -->

<?php get_footer(); ?>