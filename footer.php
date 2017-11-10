	
	<?php wp_footer();?>
   <section class="new-footer">
	<div class="row">
		<div class="small-12 medium-8 medium-offset-2 large-6 large-offset-3 columns">
			<ul class="socmed">
			  <?php $theme = theme('social');
				foreach ($theme as $n) {
					 
					 echo "<li><a href='". $n['account_url']."'><i class='fa fa-".$n['s_m_name']."'></i></a></li>";
				 } 

				?>
		   
			</ul>
		   
	
		 
			<div class="sub-footer">
				<p><?php echo theme('footer_content') ?></p>
				<ul class="ftr-cntct-list">
					<li>T <a href="tel:+44 (0) 800 138 6688">+44 (0) 800 138 6688</a></li>
					<li><a href="mailto:info@deuren.co.uk">info@deuren.co.uk</a></li>
				</ul>
				<ul class="ftr-cntct-list">
					<li><a href="<?php echo site_url() ?>/terms-and-conditions/">Ts &amp; Cs</a></li>
					<li><a href="<?php echo site_url() ?>/privacy-policy/">Privacy Policy</a></li>
					<li><a href="<?php echo site_url() ?>/cookie-policy/">Cookie Policy</a></li>
					<li><a href="<?php echo site_url() ?>/delivery-and-customer-service/">Delivery &amp; Customer Service</a></li>
				</ul>
				<p><a href="http://www.thebiggerboat.co.uk">Web Design</a> by <a href="http://www.thebiggerboat.co.uk"><strong>The Bigger Boat</strong></a></p>
			</div>
		</div>
	</div>
</section>

<a class="back-to-top">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</a>
</section>
</body>
</html>