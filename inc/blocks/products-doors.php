<section class="home-featured">
    <div class="row">
        <div class="small-12 large-10 large-offset-1 columns">
            <article>
<header class="page-title category-title">
        <h1> <h2><?php echo theme('products_doors_title'); ?></h2>
    </h1>
</header>




    <p><?php echo theme('products_doors_text'); ?></p>

<p>

 <?php
 if(is_page('internal-doors') ){
    $page = 'internal-doors';
 }
  if(is_page('front-doors') ) {
     $page = 'front-doors';
 }

if(is_page('garage-doors') ) {
     $page = 'garage-doors';
 }
            $args = array( 
                'post_type' => 'product',
                 'posts_per_page' => 9,
                 'tax_query' => array(
            // Only select projects
                        array(
                            'taxonomy' => 'product_cat', // slug for custom post product category of woocommerce is product_cat
                            'field'    => 'slug',
                            'terms'    => array( $page ),  //specify which category 
                        ),
                    ), 
                 ); 

            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product; ?>
              <?php //var_dump($loop); ?>

          <div class="fs-slide small-12 medium-4 columns">
            <a href="<?php echo get_permalink(); ?>">
                <div class="fss-wrapper">
                    <div class="fs-image">
                        <?php echo woocommerce_get_product_thumbnail();

                       /* $term_list = wp_get_post_terms( get_the_id() , 'product_cat' );
    print_r($term_list);
    foreach ($term_list as $term) {
      echo $term->name;
      echo $term->name;
    }*/

                        ?>
                    </div>
                    <div class="image-overlay">
                        <div class="image-overlay-wrapper">
                            <div class="image-overlay-center">
                                <p class="middle-text"><?php echo get_the_title(); ?></p>
                                <?php 
         $term = get_queried_object();
$list = wp_list_categories( array(
    'orderby'  => 'name',

    'taxonomy' => 'product_cat',
    'parent'   => 30,
    'title_li' => '',
    'depth'    => 1,
    'echo'     => false,
));

if ( $list ) {
    echo "<ul><li>$list</li></ul>";
} else {
    // Nothing, do something else!
} 
$term_id = 30;
echo $ancestors = get_ancestors( $term_id, 'product_cat' );

 ?>

                                
                                <p class="link-text">Find Out More</p>


                            </div>
                        </div>
                    </div>

                </div>
            </a>
        </div>


<?php

  

            endwhile; 

       
            wp_reset_query(); 
?>
    
    

<?php 


 ?>
        
    
</p>

   <?php
     $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
                global $product; 
   $product_terms = wp_get_object_terms( get_the_id(),  'product_cat' );
  
if ( ! empty( $product_terms ) ) {
  if ( ! is_wp_error( $product_terms ) ) {
  
      foreach( $product_terms as $term ) {
        if($term->parent == 0){
         
         
        echo '<p class="center" style="display:block;clear:both;padding-top:40px;"><a class="button" href="' . get_term_link( $term->slug, 'product_cat' ) . '"> SEE ALL ' . esc_html( $term->name ) . '</a></p>'; 
      }
      }
    
  }
}
endwhile; 
 ?>


</article>
        </div>
    </div>
</section>