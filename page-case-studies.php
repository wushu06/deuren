<?php get_header();?>




<div class="top-trigger" style="height:0;"></div><div class="breadcrumbs-wrapper">
    <div class="container_12">
        <div class="grid_12">
            <nav class="breadcrumbs">
                <ul>
                                            <li class="home">
                                                    <a href="http://www.deuren.co.uk/" title="Go to Home Page">Home</a>
                                                                            <span>&#124;</span>
                                                </li>
                                            <li class="cms_page">
                                                    <strong>Case Studies</strong>
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
                                    <div class="page-title">
        <h1>Case Studies</h1>
    </div>
<div class="std"><div class="cms-page-portfolio portfolio magicproduct" id="cms-page-portfolio">
<div class="portfolio-content tab-content">
<div class="tab-pane active" id="all">
<div class="row">

	<?php 
	$args = array(
	    // Only get published posts..
	    'post_type'   => array('case_studies'),
	    'post_status' => array('publish'),

	    // Get the latest results
	    'order'       => 'DESC',
	    'orderby'     => 'rand',
	);

	// The Query
	$case = new WP_Query($args);?>

 
	<?php // The Loop
	if ($case->have_posts()) {
	  
	while ($case->have_posts()) {
	        $case->the_post();?>






			<div class="small-6 medium-4 columns postfolio-item fs-slide">
				<a href="<?php the_permalink(); ?>">
					<div class="fss-wrapper">
						<div class="fs-image"><img src="<?php echo get_the_post_thumbnail_url(); ?>" ></div>
							<div class="image-overlay">
								<div class="image-overlay-wrapper">
									<div class="image-overlay-center">
									<p class="middle-text"><?php the_title(); ?></p>
									<p class="link-text">Read the case study</p>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>




	<?php } } ?>














</div>
</div>
</div>
</div></div>            </div>
            <div class="clear"></div>
        </div>    
    </div>
</div>
<?php get_footer();?>