<?php get_header();?>
 <header>
    <div class="header-wrapper">
        <div class="container_12">
            <div class="grid_12">
                            </div>
            <div class="clear"></div>
        </div>
    </div>


            <div class="fullWidthStrip">
        <div class="container_12 top-container">
          <div class="grid_12">
            <p>all internal doors available in pocket, hinged or sliding configurations. any finish. Any colour.</p>          </div>
        </div>
      </div>


</header>
<div class="top-trigger" style="height:0;">

</div>
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
                                                    <strong>Versare Natural Oak Front &amp; Garage Doors </strong>
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
                                <div class="std"><div class="cms-page-portfolio-detail" id="cms-page-portfolio-detail">
<div class="slide-portfolio">
		<?php

$images = theme('gallery_slider');

if ($images): ?>

		        <?php foreach ($images as $image): ?>
		           <div><img src="<?php echo $image['url']; ?>" /></div>






		        <?php endforeach;?>

		<?php endif;?>





</div>
<div class="portfolio-detail-content">
<div class="row">
<div class="page-title small-12 medium-8 columns">
<h1 class="title"><?php echo theme('title'); ?> </h1>
</div>
<div class="portfolio-left small-12 medium-8 columns">

<p class="portfolio-subcribe"><?php echo theme('body'); ?></p>



<a class="button" href="/case-studies"><?php echo theme('button'); ?></a></div>
<div class="portfolio-right small-12 medium-4 columns">
<div class="box-info">
<ul>
<?php

if (have_rows('widget')):
    $i = 1;
    // loop through the rows of data
    while (have_rows('widget')): the_row();?>

		 <li><span class="sub-title"><?php echo theme('widget_title'); ?></span><span class="sub-info">
		 <a href='<?php echo theme('url'); ?>'><?php echo theme('widget_text'); ?> </a>
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
<div class="small-6 medium-4 columns fs-slide">
<div class="fss-wrapper">
<div class="fs-image"><img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/cs-images/CaseStudyThumbnail-Peppler.jpg" /></div>
<div class="image-overlay">
<div class="image-overlay-wrapper">
<div class="image-overlay-center">
<p class="middle-text">Stansfield<br />Case Study</p>
<p class="link-text">Read the case study</p>
</div>
</div>
</div>
</div>
</div>
<div class="small-6 medium-4 columns fs-slide">
<div class="fss-wrapper">
<div class="fs-image"><img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/cs-images/CaseStudyThumbnail-Potter.jpg" /></div>
<div class="image-overlay">
<div class="image-overlay-wrapper">
<div class="image-overlay-center">
<p class="middle-text">Kilner<br />Case Study</p>
<p class="link-text">Read the case study</p>
</div>
</div>
</div>
</div>
</div>
<div class="small-6 medium-4 columns fs-slide">
<div class="fss-wrapper">
<div class="fs-image"><img src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/cs-images/CaseStudyThumbnail-Soab.jpg" /></div>
<div class="image-overlay">
<div class="image-overlay-wrapper">
<div class="image-overlay-center">
<p class="middle-text">Clough<br />Case Study</p>
<p class="link-text">Read the case study</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php get_footer();?>