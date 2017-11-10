<!-- simple block block -->
<section class="<?php if( theme('animated_background') ): ?>home-any colour full-height bg-animate<?php else: ?> home-workshop full-height <?php endif; ?>">
	<div class="row">
		<div class="section-wrap">
			<div class="small-12 large-10 large-offset-1 columns">
				<h2 class="scroll-animate"><?php echo theme('title'); ?></h2>
					<p class="scroll-animate"><?php echo theme('body'); ?></p>
					<p class="scroll-animate">
					<a class="button"  href="<?php echo theme('button_link'); ?>">
					<?php echo theme('button_text'); ?></a>
					</p>            
			</div>

		</div>

	</div>
</section>