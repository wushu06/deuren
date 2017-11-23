<?php if(theme('video_content')) : ?>
<section class="home-video">
    <div class="hv-inner">
       <?php echo theme('video_content'); ?>
    </div>
</section>
<?php endif; ?>
<div class="clear"></div>
<section class="page-content">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<div class="page-title quote">
				<h1 style="color: #fff;" ><?php the_title();  ?></h1>
			</div>
			<div class="std">
                 <?php echo theme('body'); ?>
			</div>
		</div>
	</div>
</section>
<section class="page-content white booking-form">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<div class="std webforms-success-text" id="webform_2_success_text" style="display:none"></div>
			<div id="webform_2_form">
				<div class="std">
                <h2><?php echo theme('title'); ?> </h2>
                    <?php echo theme('form_body'); ?>
                </div>
			</div>
		</div>
	</div>
</section>