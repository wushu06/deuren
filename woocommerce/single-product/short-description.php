<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $post;

if ( ! $post->post_excerpt ) {
    return;
}

?>

	<div class="woocommerce-product-details__short-description">
		<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
		<div class="quoteBlock">
			<?php 


			            if( have_rows('product_prices') ):

			             // loop through the rows of data
			            while ( have_rows('product_prices') ) : the_row();

			                if( get_row_layout() == 'price_table' ){?>
			<h3><?php the_sub_field('price_title'); ?></h3>
			<div class="content">
				<table id="price_panel">
					<tbody>
						<?php }

						                if( have_rows('table') ):

						                    // loop through the rows of data
						                    while ( have_rows('table') ) : the_row();?>
						<tr>
							<td class="pp_title"><?php the_sub_field('text_row'); ?></td>
							<td>From</td>
							<td class="pp_price"><?php the_sub_field('price_row'); ?></td>
						</tr><?php endwhile;

						                else :

						                    // no rows found

						                endif;
						               

						            endwhile;

						        else :

						            echo' no layouts found';

						        endif;


						             ?>
					</tbody>
				</table>
			</div>
			<script>
			     var $j = jQuery.noConflict();
			     $j(document).ready(function() {                          
			       $j(".price").fancybox({
			         'width': 400,
			         'height': 400,
			         'hideOnContentClick': true,
			         'type': 'ajax'
			         
			       });                         
			     });
			</script>
			<p class="priceGuide"><a class="price" href="http://192.168.1.10:8888/Deuren/full-price/">View full price</a></p>
		</div>
	</div>
	<div style="margin-top:20px;">
		<a href="/download-a-brochure">
		<div class="brochureBlock" style="margin-top: 40px; width: 91%;">
			<div class="left">
				<h3>Download a Brochure</h3>
				<p>Are you aiming to improve your home with a new front, garage or internal door? Want fantastic handcrafted design combined with technical knowledge?</p>
				<p class="brochuresLink">View our range of brochures...</p>
			</div>
			<div class="right"><img alt="" src="http://www.deuren.co.uk/media/wysiwyg/Brochure_Placeholders/deuren-brochures.jpg"></div>
		</div></a>
	</div>
	<div style="margin-top:20px;">
		<a class="slickFancybox fancybox.iframe" href="https://www.youtube.com/embed/pu_TIXoCnlU">
		<div class="brochureBlock" style="width: 91%;">
			<div class="left">
				<h3>Installation video</h3>
				<p>Are you aiming to improve your home with a new front, garage or internal door? Want fantastic handcrafted design combined with technical knowledge?</p>
				<p class="brochuresLink">View our installation video...</p>
			</div>
			<div class="right"><img alt="" src="http://www.deuren.co.uk/media/wysiwyg//video_thumbnails/Video_screenshot.jpg"></div>
		</div></a>
	</div>
