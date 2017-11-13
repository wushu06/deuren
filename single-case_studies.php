<?php get_header(); ?>

<div class="breadcrumbs-wrapper">
    <div class="container_12">
        <div class="grid_12">
            <nav class="breadcrumbs">
                <ul>
                    <li class="home">
                        <a href="http://www.deuren.co.uk/" title="Go to Home Page">Home</a>
                        <span>&#124;</span>
                    </li>
                    <li class="cms_page">
                        <strong>
                            <?php echo theme('title'); ?>
                        </strong>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="clear"></div>

    </div>
</div>
<div class="content-wrapper">
    <div class="container_12">
        <div class="main-container col1-layout">
            <div class="grid_12 col-main">
                <div class="std">
                    <div class="cms-page-portfolio-detail" id="cms-page-portfolio-detail">
                        <div class="slide-portfolio">
                            <?php

                            $images = theme('gallery_slider');

                            if ($images): ?>
                                <?php foreach ($images as $image): ?>
                                <div>
                                    <img src="<?php echo $image['url']; ?>">
                                </div>
                                <?php endforeach;?>
                                <?php endif;?>
                        </div>
                        <div class="portfolio-detail-content">
                            <div class="row">
                                <div class="page-title small-12 medium-8 columns">
                                    <h1 class="title">
                                        <?php echo theme('title'); ?>
                                    </h1>
                                </div>
                                <div class="portfolio-left small-12 medium-8 columns">
                                    <p class="portfolio-subcribe">
                                        <?php echo theme('body'); ?>
                                    </p>
                                    <a class="button" href="/case-studies">
                                        <?php echo theme('button'); ?>
                                    </a>
                                </div>
                                <div class="portfolio-right small-12 medium-4 columns">
                                    <div class="box-info">
                                        <ul>
                                            <?php

                                            if (have_rows('widget')):
                                                $i = 1;
                                                // loop through the rows of data
                                                while (have_rows('widget')): the_row();?>
                                                <li>
                                                    <span class="sub-title">
                                                        <?php echo theme('widget_title'); ?>
                                                    </span>
                                                    <span class="sub-info">
                                                        <?php if(theme("url")){ ?>
                                                        <a href='<?php echo site_url().theme("url");?>'>
                                                            <?php echo theme('widget_text'); ?>
                                                        </a>
                                                        <?php }else { ?>
                                                        <?php echo theme('widget_text'); ?>
                                                        <?php } ?>
                                                    </span>
                                                </li>
                                                <?php $i++;endwhile;endif;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-center">Read more case studies</h2>
                        <div class="small-12 columns">
                            <?php 
                                    $args = array(
                                    // Only get published posts..
                                    'post_type'              => array( 'case_studies' ),
                                    'post_status'            => array( 'publish' ),
                                    
                                    'posts_per_page'         => '3',
                                   
                                    // Get the latest results
                                    'order'                  => 'DESC',
                                    'orderby'                => 'rand',
                                   );; 
                                $posts = new WP_Query($args); 
                                if($posts->have_posts()) {
                                    while ($posts->have_posts()) { $posts->the_post();   ?>
                            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="hover">
                                <div class="small-6 medium-4 columns fs-slide">
                                    <div class="fss-wrapper">
                                        <div class="fs-image">
                                            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" />
                                        </div>
                                        <div class="image-overlay">
                                            <div class="image-overlay-wrapper">
                                                <div class="image-overlay-center">
                                                    <p class="middle-text">
                                                        <?php the_title();?>
                                                        <p class="link-text">Read the case study</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <?php } 
                                    }

                              ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>
<?php get_footer();?>