<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="variation-add-to-cart-wrap">
	<div class="woocommerce-variation-add-to-cart variations_button woocommerce-add-to-cart">
		<button type="submit" class="single_add_to_cart_button btn alt brand-bg-color brand-border-color brand-color-hover" data-product-added-text="<?php echo esc_attr( 'Product Added' ); ?>">
			<?php echo esc_html( $product->single_add_to_cart_text() ); ?>
		</button>

		<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="variation_id" class="variation_id" value="0" />
	</div>
</div>
