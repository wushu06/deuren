<?php get_header(); ?>




<div class="content-wrapper">
    <div class="container_12">    
        <div class="main-container col2-right-layout">
            <div class="grid_9 col-main">
                                <div id="newsWrapper">
<div class="page-title">
<h1 class="caseStudieTitle">Latest News</h1>
</div>
<?php // The Loop 
$i = 0;
if (have_posts()) {
?>
<?php
while (have_posts()) {
the_post();?>
<div class="news-item">
                    <div class="news_image"><img src="<?php echo get_the_post_thumbnail_url(); ?>"  class='img-responsive'></div>
    
    <div class="titleSection">
        <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a></h2>
                <!--<span class="date">24/05/2017</span>-->
    </div>
        <div class="title-divider">
            <span> </span>
        </div>
    
    
    <div class="description">
        <?php the_excerpt(); ?>
        <div class="bottomInfo">

                            <a href="<?php the_permalink(); ?>" class="more">
                <button class="button" type="submit">
                    <span>
                        <span>Read More</span> 

                    </span>
                </button>
            </a>
                        </div>
    </div>

    

    <div>
            </div>
</div>
<div class="clearing"></div>
<?php } } wp_reset_postdata(); ?>


<div class="pager">
    <p class="page">
       <?php numbering_pagination(); ?>
        </p>
</div>
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
                            <a href="<?php the_permalink(); ?>" ><?php the_title(); ?> </a>
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

<p><a href="/pre-hung-door-sets"><img title="Internal Door Set" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-internal-door-set.jpg" alt="Internal Door Set" /></a></p><p><a href="/bespoke-doors"><img title="Bespoke Doors" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-bespoke.jpg" alt="Bespoke Doors" /></a></p><p><img src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/Deuren-Installation.gif" alt="" /></p>                            </aside>
            <div class="clear"></div>
        </div>    
    </div>
</div>









<?php get_footer(); ?>