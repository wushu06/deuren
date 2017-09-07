     
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
           
            <form action="" method="post" id="newsletter-validate-detail">
                
                <label for="newsletter">Sign Up to Our Newsletter</label>
                <div class="newsletter-box">
                <input type="text" name="email" id="newsletter" title="Sign up to our newsletter" class="input-text required-entry validate-email" />
                <input type="submit" title="Subscribe" value="Subscribe"></input>
                 </div>
            </form>
         
            <div class="sub-footer">
                <p><?php echo theme('footer_content') ?></p>
                <ul class="ftr-cntct-list">
                    <li>T <a href="tel:+44 (0) 800 138 6688">+44 (0) 800 138 6688</a></li>
                    <li><a href="mailto:info@deuren.co.uk">info@deuren.co.uk</a></li>
                </ul>
                <ul class="ftr-cntct-list">
                    <li><a href="http://www.deuren.co.uk/terms-and-conditions/">Ts &amp; Cs</a></li>
                    <li><a href="http://www.deuren.co.uk/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="http://www.deuren.co.uk/cookie-policy/">Cookie Policy</a></li>
                    <li><a href="http://www.deuren.co.uk/delivery-and-customer-service/">Delivery &amp; Customer Service</a></li>
                </ul>
                <p><a href="http://www.thebiggerboat.co.uk">Web Design</a> by <a href="http://www.thebiggerboat.co.uk"><strong>The Bigger Boat</strong></a></p>
            </div>
        </div>
    </div>
</section>
<div class="fixedFooter">
     <div class="footer-columns-wrapper">
        <div class="container_12">
            <div class="grid_12">
                <div class="CTAWrapper mobileHide">  
                    <div class="CTACenter">
                        <div class="CTA">
                            <p><a href="http://www.deuren.co.uk/download-a-brochure" title="download a brochure" onclick="ga('send', 'event', 'sitewide', 'cta_strip', 'download');">Download a <br>Brochure</a></p>
                        </div>
                        <div class="CTA">
                            <p><a href="http://www.deuren.co.uk/visit-the-workshop" title="visit the workshop" onclick="ga('send', 'event', 'sitewide', 'cta_strip', 'visit');">Visit the<br/>Workshop</a></p>
                        </div>
                        <div class="CTA">
                            <p class="noLink">SPEAK TO THE TEAM<br/><span class="number">0800 138 6688</span></p>
                        </div>
                    </div>
                </div>
                <div class="CTAWrapper screenHide">
                    <div class="CTACenter">  
                        <div class="CTA">
                            <p><a href="http://www.deuren.co.uk/download-a-brochure" title="download a brochure" onclick="ga('send', 'event', 'sitewide', 'cta_strip', 'download');">DOWNLOAD A<br/>BROCHURE</a></p>
                        </div>
                        <div class="phone">
                            <p class="noLink">SPEAK TO THE TEAM<br/><span class="number">0800 138 6688</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</a>
</section>
</body>
</html>