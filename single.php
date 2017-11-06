<?php get_header();?>

<div class="content-wrapper">
    <div class="container_12">
        <div class="main-container col2-right-layout">
            <div class="grid_12 col-main">
                <div id="newsWrapper">

                    <div class="page-title">
                        <div class="titleSection">
                        <span class="date"><?php the_date(); ?></span>
                            <h1 class="caseStudyTitle"><?php the_title(); ?></h1>

                            
                        </div>
                    </div>


                    <div class="news">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>



                    <div class="news-item-comment">
                    </div>
                   
                </div>
            </div>
           
            <div class="clear"></div>
        </div>
        <div class="thinLine"></div>
        <div class="row news-wrapper">
           
            <div class="small-5 large-5 columns news_single">
                <?php
                    $prev_post = get_previous_post();
                  if (!empty($prev_post)): ?>



           
                        <h6 class="right prev">PREVIOUS ARTICLE</h6>
                        <a href="<?php echo $prev_post->guid ?>">
                         <h3 class="right"><?php echo $prev_post->post_title ?></h3>
                        </a>
                  
                <?php endif?>
            </div>
            <div class="small-5 large-5 columns news_single">
            <?php
            $next_post = get_next_post();
         
            if (!empty($next_post)): ?>
            
                      
                            <h6 class="next">NEXT ARTICLE</h6>
                            <a href="<?php echo $next_post->guid ?>">
                                <h3 ><?php echo $next_post->post_title ?></h3>
                            </a>
                       
                    <?php endif;?>
            </div>
        </div>
    </div>
</div>



<?php get_footer();?>