<!-- any colors block -->
<?php if(theme('use_any_colors_block')){ ?>
<section class="home-any colour full-height bg-animate sa-visible">
	<div class="row">
		<div class="section-wrap">
			<div class="small-12 large-10 large-offset-1 columns">
				<h2 class="scroll-animate"><?php echo theme('any_colors_title'); ?></h2>
					<p class="scroll-animate"><?php echo theme('any_colors_body'); ?></p>
					<p class="scroll-animate">
					<a class="button" onclick="ga('send', 'event', &lsquo;home', &lsquo;any_colour', 'find_out_more');" href="<?php echo theme('any_colors_button_url'); ?>">
					<?php echo theme('any_colors_button'); ?></a>
					</p>            
			</div>

		</div>

	</div>
</section>
<?php } ?>