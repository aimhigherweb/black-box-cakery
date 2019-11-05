<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

	<?php
		echo '<style type="text/css">';

		$flavours = get_field('flavours', 108);
		if($flavours):
			while ( have_rows('flavours', 108) ) : the_row();
		
				echo 'form .radio-group.flavour input[value=' . get_sub_field('flavour') . '] + label .wcpa_check {
					background-image: url(' . get_sub_field('image') . ');
				}';
			
			endwhile;
		endif;

		$themes = get_field('themes', 108);
		if($themes):
			while ( have_rows('themes', 108) ) : the_row();
		
			echo 'form .radio-group.theme input[value=' . get_sub_field('theme') . '] + label .wcpa_check {
				background-image: url(' . get_sub_field('image') . ');
			}';
			
		endwhile;
		endif;
	
		echo '</style>';
		
	?>

		<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' );

echo "<script>document.addEventListener('DOMContentLoaded', function() {
	let container = document.createElement('div')
	container.classList.add('flavour', 'description')
	container.innerHTML = '";

		$flavours = get_field('flavours', 108);
		if($flavours):
			while ( have_rows('flavours', 108) ) : the_row();

			echo '<div data-flavour="' . get_sub_field('flavour') . '"><h3>' . get_sub_field_object('flavour')['choices'][get_sub_field('flavour')] . '</h3><p>' . get_sub_field('description') . '</p></div>';
			
			endwhile;
		endif;

	echo "'
	document.querySelector('.product .woocommerce-product-details__short-description').appendChild(container);
})</script>";

?>

