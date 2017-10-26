
<?php if(theme('use_configuration_block')){ ?>
<section class="page-content home-featured white attribute-wrap">
	<div class="row">
		<div class="small-12 large-10 large-offset-1 columns">
			<h2 class="center"><?php echo (theme('configuration_title')) ?  theme('configuration_title') : 'CONFIGURATIONS' ;  ?></h2>
			<p class="center description">
			<?php echo (theme('configuration_desc')) ?  theme('configuration_desc') : 'Our internal doors come in a number of different configurations to help give you the flexibility you need. Single and double hinged doors are also available in full-height floor to ceiling options, with stunning sliding and pocket doors offering you more space in rooms. Other configurations are available upon request, including glazed side and top panels.' ;  ?>
			</p>
			<?php 
	
			$rows = theme('configuration_loop');
	
			if($rows)
			{
				

				foreach($rows as $row)
				{
					$loop_title =	$row['configuration_loop_title'];
					$loop_url =	$row['configuration_loop_url'];
					$loop_image =	$row['configuration_loop_image'];?>
						<div class="fs-slide small-12 medium-4 columns">
							<div class="fss-wrapper">
								<div class="fs-image">
									<a class="fancybox-new" href="<?php echo $loop_url; ?>" rel="configs"><img alt="Single Right and Left Options" src="<?php echo $loop_image['url']; ?>"></a>
									<div class="title-overlay">
										<h4>
											<?php echo $loop_title; ?><br>
										
										</h4>
									</div>
								</div>
							</div>
						</div>


				<?php }

				
			} else {


			 ?>

			
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content1" rel="configs"><img alt="Single Right and Left Options" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-Right3.gif"></a>
						<div class="title-overlay">
							<h4>
								<?php echo ($loop_title) ?  $loop_title : 'SINGLE HINGED<br>
							LEFT &amp; RIGHT OPTIONS' ;  ?>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content2" rel="configs"><img alt="Top Lateral" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-top-lateral.gif"></a>
						<div class="title-overlay">
							<h4>TOP LATERAL</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content3" rel="configs"><img alt="Top Lateral" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-side-lateral.gif"></a>
						<div class="title-overlay">
							<h4>SIDE LATERAL</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content4" rel="configs"><img alt="Full height floor to ceiling" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Double-Hinged-Leaf-Door_1.gif"></a>
						<div class="title-overlay">
							<h4>DOUBLE HINGED<br>
							LEAF DOOR</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content5" rel="configs"><img alt="Double Hinged Leaf Door" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Double-Full-Height_1.gif"></a>
						<div class="title-overlay">
							<h4>FULL HEIGHT<br>
							FLOOR TO CEILING</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content6" rel="configs"><img alt="Single Left and Right Pocket Doors" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-_-Right-Pocket-Doors_1.gif"></a>
						<div class="title-overlay">
							<h4>SINGLE - LEFT &amp; RIGHT<br>
							SLIDING DOORS</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content7" rel="configs"><img alt="Single Left and Right Sliding Door" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-_-Right-Sliding-Door_1.gif"></a>
						<div class="title-overlay">
							<h4>SINGLE - LEFT &amp; RIGHT<br>
							POCKET DOORS</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content8" rel="configs"><img alt="Angled Head" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-angled-head.gif"></a>
						<div class="title-overlay">
							<h4>ANGLED HEAD</h4>
						</div>
					</div>
				</div>
			</div>
			<?php } //end if loop ?>
			<div style="clear: both;">
				&nbsp;
			</div>
			<!--
			*** strat the technical review
			 -->
			<div class="small-12 large-10 large-offset-1 columns">
				<p class="center">&nbsp;<br>
				&nbsp;</p>
				<h2 class="center">Technical Overview</h2>
			</div><img alt="Technical Overview" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/config-technical-overview.jpg" style="width:97%;">
			<div style="clear: both;">
				&nbsp;
			</div>

			<!--
			*** strat the flooring
			 -->

			<div class="small-12 large-10 large-offset-1 columns">
				<p class="center">&nbsp;<br>
				&nbsp;</p>
				<h2 class="center">Flooring</h2>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content9" rel="configs"><img alt="Single Level Flooring Hard Standing" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-hard.jpg"></a>
						<div class="title-overlay">
							<h4 style="padding-top:10px;">SINGLE LEVEL FLOORING<br>
							HARD STANDING</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content10" rel="configs"><img alt="Single Level Flooring Hard Standing" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-carpet.jpg"></a>
						<div class="title-overlay">
							<h4 style="padding-top:10px;">SINGLE LEVEL FLOORING<br>
							CARPET UNDERCUT</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="fs-slide small-12 medium-4 columns">
				<div class="fss-wrapper">
					<div class="fs-image">
						<a class="fancybox-new" href="#content11" rel="configs"><img alt="Single Level Flooring Hard Standing" src="http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-split.jpg"></a>
						<div class="title-overlay">
							<h4 style="padding-top:10px;">SPLIT LEVEL FLOORING<br>
							MIXED FLOOR FINISH</h4>
						</div>
					</div>
				</div>
			</div>
			<div style="clear: both;">
				&nbsp;
			</div>

			<p class="center">&nbsp;</p>
			<p class="center"><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a></p>

			<!--
			*** strat wrapper fancy box
			 -->

			<div class="fbc-wrapper" id="content1" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Single Hinged Left &amp; Right</h3>
						<p>Single hinged either left or right is the most commonly used internal door configuration, ideal for any room settings.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-Right3.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content2" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Top Lateral</h3>
						<p>Single hinged door with a glazed panel above to allow additional light in.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-top-lateral.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content3" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Side Lateral</h3>
						<p>Similar to the top lateral door, however the glazed panel is situated at the side of the door.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-side-lateral.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content4" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Double Hinged Leaf Door</h3>
						<p>Similar to a traditional single hinged door, but they work side-by-side on a door opening.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Double-Hinged-Leaf-Door_1.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content5" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Full Height Floor to Ceiling</h3>
						<p>Similar mechanic to the double hinged leaf configuration, but the door is fitted from floor to ceiling.<br>
						<br>
						This is a highly bespoke configuration which can be made to measure to your requirements.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Double-Full-Height_1.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content6" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Single &ndash; Left &amp; Right Sliding Doors</h3>
						<p>Similar to the pocket door configuration, but the door doesn&rsquo;t slide directly into the wall, the door will slide parallel to the interior wall.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-_-Right-Pocket-Doors_1.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content7" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Single - Left &amp; Right Pocket Doors</h3>
						<p>The single pocket configuration is installed to allow single doors to fully slide into the pocket, saving space normally required for the door to swing open.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/Configurations-Single-Left-_-Right-Sliding-Door_1.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content8" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Angled Head</h3>
						<p>A single hinged door with an angled head for those smaller and more difficult places within the house.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-angled-head.gif');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content9" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Hard Standing</h3>
						<p>Use when floor finishes on either side of the door are hard surfaces with exact same thicknesses.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-hard.jpg');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content10" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Carpet Undercut</h3>
						<p>Use when the same carpet or different carpets of the exact same thickness are to be used on either side of the door.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-carpet.jpg');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
			<div class="fbc-wrapper" id="content11" style="display: none;">
				<div class="fb-row">
					<div class="small-12 medium-6 fb-columns text-side">
						<h3>Mixed Floor Finish</h3>
						<p>Use when floor finishes on either side of the door are of different heights.</p><a class="button" href="http://www.deuren.co.uk/download-a-brochure">Request a Brochure</a>
					</div>
					<div class="small-12 medium-6 fb-columns image-side" style="background-image: url('http://www.deuren.co.uk/media/wysiwyg/config-page-images/configurations-flooring-split.jpg');"><img alt="" height="100%" src="http://www.deuren.co.uk/skin/frontend/meigeetheme/default/images/blank.gif" width="100%"></div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php } ?>

