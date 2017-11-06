<?php get_header(); ?>

<?php
    ((strpos($_SERVER['REQUEST_URI'], "internal") !== false) ? $post_type = 'internal_doors'  : $post_type = 'front_doors'  );
     $queried_object = get_queried_object();
     // var_dump($queried_object);
      $tax_name = $queried_object->taxonomy;
      $term_name = $queried_object->name;
      $term_description = $queried_object->description;
      $term_id = $queried_object->term_id;  
    
      // load thumbnail for this taxonomy term (term object)
      $thumbnail = get_field('term_image', $queried_object);
      //$image = $thumbnail['url'];
      $thumbnail_big = get_field('term_big_image', $queried_object);
      $image_big = $thumbnail_big['url'];
      
      // load thumbnail for this taxonomy term (term string)
   //   $thumbnail = get_field('term_image', $tax_name . '_' . $term_id);

?>

<div class="taxonomy">
    <div class="container">
              
        <div class="taxonomy_background" style="background: url(
            <?php
                if( $thumbnail ) :
                    
                    foreach ( $thumbnail as $image ):
      
              
               
                echo $image['url']; 
               
             endforeach; endif; ?>) no-repeat; background-size: 565px 600px; height: 80vh; background-position: center  "
            >

        </div>

        <div class="row">
            <div class="small-12 large-12 columns">
                <div class="taxonomy_content">
                    <h1 class="text-center"> <?php echo $term_name;?></h1>
                    <div class="thinLine text-center"></div>
                </div>
                <div class="taxonomy_desc">
                    <?php echo $term_description;?>
                </div>
               
             </div>

        </div>



        <div class="cat-circles">

            <?php
            $args = array(
            'post_type' => 'internal_doors',
            'posts_per_page'=> -1,   // set the limit post to UNLIMITED (-1 is unlimited)
                'orderby'  => array( 
                    'ID' => 'DESC' ,
                ),
                'tax_query' => array(
                // Only select projects
                    array(
                    'taxonomy' => $tax_name,
                    'field'    => 'slug',
                    'terms'    => array( $term_name ),
                    ),
                ),
            );
           //echo ($tax_name !=='woods'?'show woods options':'show styles options');
            $query = new WP_Query( $args );
            $query_contents=Array();
            while ( $query->have_posts() ) {
            $query->the_post();  ?>

            <!--<div class="circle <?php //echo $tax_name ?>">
                <a href="<?php //the_permalink() ?>" ><h4><?php //echo theme('title'); ?></h4>
                
            </a>
            </div>-->
            <?php }
            wp_reset_query();
            ?>
         
        </div>
        <div class="big-image" style="background: url(<?php echo $image_big; ?> )no-repeat; background-size: cover; height: 100vh">
           <!--<img src="<?php echo $image_big; ?>" alt=""> -->
        </div>
        
</div>
</div>

<div class="best">
    <div class="container">
                
        <div class="row">
            <div class="small-12 large-12 columns">
                <div class="best_content">
                    <h1 class="text-center"><?php echo theme('why_title');?> </h1>
                   
                    
                    <div class="thinLine"></div>
                 </div>
                <div class="best_desc">
                                      
                        <?php echo theme('why_content');?>
                   
                </div>
            </div>

        </div>


<div class="best_features">                 
        <?php 
            $rows = theme('features');
            $i = 0; 
            if($rows):
                foreach($rows as $row): 
             
             if( $i % 2 == 0 ){      
                    
            ?>
            
         <div class="row">
            <div class="small-6 large-6 columns">
                <div class="best_features_img " style="text-align: right;">
                    <img src="<?php echo $row['feature_image']['url'];?>" alt="">
                </div>

            </div>
            <div class="small-6 large-6 columns">
                <div class="best_features_content ">
                    <h1 class="title-one"><?php echo $row['feature_title'];?></h1>
                    
                     <?php echo $row['feature_content'];?>
                 </div>     
            </div>
        </div>
       
        <?php }else { ?>
        <div class="row">
      
            <div class="small-6 large-6 columns">
                 <div class="best_features_content " style="text-align: right;">
                    <h1 class="title-two"><?php echo $row['feature_title'];?></h1>
                    
                    <?php echo $row['feature_content'];?>
                 </div>
            </div>
            <div class="small-6 large-6 columns">
                <div class="best_features_img ">
                 <img src="<?php echo $row['feature_image']['url'];?>" alt="">
                </div>
            </div>
        </div>
        <?php } $i++; endforeach; endif; ?>
        </div>  
    </div>
</div>
<div class="clear"></div>

<div class="see-range">
<?php
            $args = array(
            'post_type' => $post_type,
            'posts_per_page'=> '1',   // set the limit post to UNLIMITED (-1 is unlimited)
                'orderby'  => array( 
                    'ID' => 'DESC' ,
                ),
                'tax_query' => array(
                // Only select projects
                    array(
                    'taxonomy' => $tax_name,
                    'field'    => 'slug',
                    'terms'    => array( $term_name ),
                    ),
                ),
            );
           //echo ($tax_name !=='woods'?'show woods options':'show styles options');
            $query = new WP_Query( $args );
            $query_contents=Array();
            if($query):
            while ( $query->have_posts() ) {
            $query->the_post();  ?>

           
             <a href="<?php the_permalink() ?>" ><h4>SEE THE <?php echo strtoupper($term_name); ?> RANGE</h4>
                
            </a>
           
            <?php } endif; wp_reset_query();
            ?>
</div>
<?php get_footer(); ?>