<section class="<?php echo is_page('Bespoke')?'page-content home-featured white attribute-wrap':'page-content home-featured white attribute-wrap';?>">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<h2 class="center">
				<?php echo theme('title'); ?>
			</h2>
			
			<?php if(is_page('Bespoke')){
				 	partial( 'bespoke' );
					}else if(is_page('Woods And Finishes')) {
						partial( 'woods-finishes' );
					}else{	?>
				<div class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 columns door-handles">
				<?php	
				$i = 1;
					$images = theme('gallery');

					if( $images ): ?>

				<?php foreach( $images as $image ): ?>
				<div class="fs-slide small-12 medium-3 columns">
					<div class="fss-wrapper">
						
						<div class="fs-image">

							<img alt="" src="<?php echo $image['sizes']['thumbnail']; ?>">
							<div class="title-overlay">
								<h4 class="white">
									<strong><?php echo $image['description']; ?></strong>
								</h4>
							</div>

						</div>
						
					</div>
				</div>
				

				<?php $i++; endforeach; ?>

				<?php endif; ?>

			</div>
			<?php }?>
			<div style="clear: both;">
				&nbsp;
			</div>
			<p class="center">
				<a class="button" href="<?php echo site_url() ?>/internal-doors/">
					<?php echo theme('button'); ?>
				</a>
			</p>
			<div style="clear: both;">&nbsp;</div>
			<?php if(is_page('handles')){
			
					$i = 1;
					$images = theme('gallery');

					if( $images ): ?>

				<?php foreach( $images as $image ): ?>

			<div id="content<?php echo $i;?>" class="awac-wrapper" style="display: none;">
				<img alt="" src="<?php echo $image['url']; ?>">
				<h4><strong><?php echo $image['description']; ?></strong></h4>
			</div>
		<?php $i++; endforeach; endif; ?>
				<?php } ?>

		</div>
	</div>
</section>