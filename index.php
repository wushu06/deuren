<?php get_header(); ?>


<div class="content-wrapper">
    <div class="container_12">
        <div class="main-container col2-right-layout">
            <div class="grid_9 col-main">
                <div id="newsWrapper">
                    <div class="page-title">
                        <h1 class="caseStudieTitle">Latest News</h1>
                    </div><?php // The Loop 
                    $i = 0;
                    if (have_posts()) {
                    ?><?php
                    while (have_posts()) {
                    the_post();?>
                    <div class="news-item">
                        <div class="news_image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="titleSection">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!--<span class="date">24/05/2017</span>-->
                        </div>
                        <div class="title-divider">
                            <span></span>
                        </div>
                        <div class="description">
                            <?php the_excerpt(); ?>
                            <div class="bottomInfo">
                                <a class="more" href="<?php the_permalink();?>"><button class="button" type="submit"><span><span>Read More</span></span></button></a>
                            </div>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div class="clearing"></div>
                    <?php } } wp_reset_postdata(); ?>
                    <div class="pager">
                        <p class="page"><?php numbering_pagination(); ?></p>
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
                                                ?><?php
                                                while (have_posts()) {
                                                the_post();?>
                                <li>
                                    <div class="caseMenuLeft">
                                        <a href="%3C?php%20the_permalink();%20?%3E"><?php the_title(); ?></a>
                                    </div>
                                    <div class="caseMenuRight">
                                        <span class="date"><?php the_date(); ?></span>
                                    </div>
                                </li><?php } } wp_reset_postdata(); ?>
                            </ul><a class="see-all" href="http://www.deuren.co.uk/latest-news/">See all projects &amp; news</a>
                        </div>
                    </div>
                </section>
                <p><a href="/pre-hung-door-sets"><img alt="Internal Door Set" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-internal-door-set.jpg" title="Internal Door Set"></a></p>
                <p><a href="/bespoke-doors"><img alt="Bespoke Doors" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/deuren-bespoke.jpg" title="Bespoke Doors"></a></p>
                <p><img alt="" src="http://www.deuren.co.uk/media/wysiwyg/Right_Banners/Deuren-Installation.gif"></p>
            </aside>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>