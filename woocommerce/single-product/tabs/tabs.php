<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<div class="product-collateral">
	<div class="grid_12 alpha">
	    <div class="tabsLeft">
	      <ul class="meigee-tabs">
	  		

			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li id="product_tabs_description" class=" active first">
					<h2><a href="#">Product Specificatin</a></h2>
					
				</li>

			<?php endforeach; ?>
		</ul>
		<div class="title-divider">
						<span> </span>
					</div>
		<?php foreach ( $tabs as $key => $tab ) : ?>
			
				<?php call_user_func( $tab['callback'] ); ?>
			
		<?php endforeach; ?>
	</div>
</div>
</div>
<?php endif; ?>
