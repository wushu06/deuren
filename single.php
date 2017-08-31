<?php get_header();?>


<div class="top-trigger" style="height:0;"></div><div class="breadcrumbs-wrapper">
    <div class="container_12">
        <div class="grid_12">
            <nav class="breadcrumbs">
                <ul>
                                            <li class="home">
                                                    <a href="<?php echo site_url(); ?>" title="Go to Home Page">Home</a>
                                                                            <span>&#124;</span>
                                                </li>
                                            <li class="news">
                                                    <a href="http://www.deuren.co.uk/latest-news/" title="Return to News">Latest News</a>
                                                                            <span>&#124;</span>
                                                </li>
                                            <li class="item">
                                                    <strong>2017 Home Decor Trends</strong>
                                                                        </li>
                                    </ul>
            </nav>  
        </div>
        <div class="clear"></div>   
    </div>
</div>
<div class="content-wrapper">
    <div class="container_12">    
        <div class="main-container col2-right-layout">
            <div class="grid_9 col-main">
                                <div id="newsWrapper">
    
<div class="page-title">
    <div class="titleSection">
     <h1 class="caseStudyTitle"><?php the_title(); ?></h1>

            <span class="date"><?php the_date(); ?></span>
    </div>
</div>    
      
    
    <div class="news">
        <p><?php the_content(); ?></p> 
         </div>
   
    
        
    <div class="news-item-comment">
        </div>
    <a href="http://www.deuren.co.uk/latest-news/" class="back">&laquo; Back</a>
</div>
</div>
            <aside class="grid_3 sidebar sidebar-right">
                                <section>
    <header>
        <p class="sideNavCat">Latest News</p>
    </header>
    <div class="block-content">
        <div class="menu-categories">
            <ul>
                                
                 
                      <?php // The Loop 
                $i = 0;
                if (have_posts()) {
                ?>
                <?php
                while (have_posts()) {
                the_post();?> 
                   <li>  
                        <div class="caseMenuLeft">
                            <a href="http://www.deuren.co.uk/latest-news/skyscrapers-dominating-the-world/" ><?php the_title(); ?> </a>
                        </div>
                        <div class="caseMenuRight">
                                                            <span class="date"><?php the_date(); ?></span>
                                                    </div>
                    </li>

                  <?php } } wp_reset_postdata(); ?>                                  
                   
                                                </ul>
            <a href="http://www.deuren.co.uk/latest-news/" class="see-all">See all projects &amp; news</a>
        </div>
    </div>
</section>

<p><a href="/pre-hung-door-sets"><img title="Internal Door Set" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-internal-door-set.jpg" alt="Internal Door Set" /></a></p><p><a href="/bespoke-doors">
<img title="Bespoke Doors" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-bespoke.jpg" alt="Bespoke Doors" /></a>
</p>
<p><img src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/Deuren-Installation.gif" alt="" />
</p>                           
 </aside>
            <div class="clear"></div>
        </div>    
    </div>
</div>



<?php get_footer();?>






