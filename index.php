<?php get_header(); ?>


<div class="content-wrapper">
    <div class="container_12">
        <div class="main-container col2-right-layout">
            <div class="grid_12 col-main">
                <div id="newsWrapper">
                    <div class="page-title">
                      <!--  <h1 class="caseStudieTitle">Latest News</h1> -->
                    </div><?php // The Loop 
                    $i = 0;
                    if (have_posts()) {
                    ?><?php
                    while (have_posts()) {
                    the_post();?>
                    
                        <div class="news-item">
                        <div class="row">
                         <div class="small-4 large-4 columns">
                            <div class="news_image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                         </div>
                         <div class="small-8 large-8 columns">
                            <div class="titleSection">
                                <p class="tags"><?php $tags = wp_get_post_tags($post->ID); foreach($tags as $tag){ echo $tag->name;};  ?></p>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!--<span class="date">24/05/2017</span>-->
                            </div>
                            <div class="title-divider">
                                <span></span>
                            </div>
                            <div class="description">
                                <?php // the_excerpt(); ?>
                                
                            </div>
                           
                    </div>
                            <div>
                                
                            </div>
                        </div>
                        <div class="clearing"></div>
                    </div>
                    <?php } } wp_reset_postdata(); ?>
                    <div class="pager">
                        <p class="page"><?php numbering_pagination(); ?></p>
                    </div>
                </div>
            </div>
           
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>