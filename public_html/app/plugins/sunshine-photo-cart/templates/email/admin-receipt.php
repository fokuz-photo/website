<h2><?php echo sprintf( '%s &mdash; %s', $order->get_name(), $order->get_date() ); ?></h2>

<p id="order-status"><?php echo $order->get_status_name(); ?>: <?php echo $order->get_status_description(); ?></p>

<?php
if ( ! empty( $message ) ) {
	echo '<div id="custom-message">' . wpautop( $message ) . '</div>';
}
?>

<div id="order-actions">
	<a href="<?php echo admin_url( 'post.php?action=edit&post=' . $order->get_id() ); ?>" class="button"><?php _e( 'View Order', 'sunshine-photo-cart' ); ?></a></a>
	<a href="<?php echo admin_url( 'post.php?sunshine_invoice=1&post=' . $order->get_id() ); ?>" class="button"><?php _e( 'View Invoice', 'sunshine-photo-cart' ); ?></a></a>
</div>

<div id="order-cart">
	<h3><?php _e( 'Order Summary', 'sunshine-photo-cart' ); ?></h3>
	<?php $cart = $order->get_cart(); ?>
	<table>
		<tbody>
		<?php foreach ( $cart as $cart_item ) { ?>
			<tr class="order-item <?php echo $cart_item->classes(); ?>">
				<td class="order-item--image">
					<?php echo $cart_item->get_image_html(); ?>
				</td>
				<td class="order-item--data">
					<div class="order-item--name"><?php echo $cart_item->get_name(); ?> x <?php echo $cart_item->get_qty(); ?></div>
					<div class="order-item--product-options"><?php echo $cart_item->get_options_formatted(); ?></div>
					<div class="order-item--gallery"><?php echo $cart_item->get_gallery_hierarchy(); ?></div>
					<div class="order-item--image-name"><?php echo $cart_item->get_image_name( 'filename' ); ?></div>
					<div class="order-item--comments"><?php echo $cart_item->get_comments(); ?></div>
					<div class="order-item--extra"><?php echo $cart_item->get_extra(); ?></div>
				</td>
				<td class="order-item--total">
					<?php echo $cart_item->get_total_formatted(); ?>
				</td>
			</tr>
		<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">
					<table>
						<tr id="order-subtotal">
							<th><?php _e( 'Subtotal', 'sunshine-photo-cart' ); ?></th>
							<td><?php echo $order->get_subtotal_formatted(); ?></td>
						</tr>
						<?php if ( $order->has_shipping_address() ) { ?>
						<tr id="order-shipping">
							<th><?php echo sprintf( __( 'Shipping via %s', 'sunshine-photo-cart' ), $order->get_shipping_method_name() ); ?></th>
							<td><?php echo $order->get_shipping_formatted(); ?></td>
						</tr>
						<?php } ?>
						<?php if ( ! empty( $order->has_discount() ) ) { ?>
						<tr id="order-discount">
							<th>
								<?php _e( 'Discounts', 'sunshine-photo-cart' ); ?>
								<?php
								$discounts = $order->get_discounts();
								if ( ! empty( $discounts ) ) {
									echo '(' . join( ', ', $order->get_discounts() ) . ')';
								}
								?>
							</th>
							<td><?php echo $order->get_discount_formatted(); ?></td>
						</tr>
						<?php } ?>
						<?php if ( $order->get_tax() && $order->get_meta_value( 'display_price' ) !== 'with_tax' ) { ?>
						<tr id="order-tax">
							<th><?php _e( 'Tax', 'sunshine-photo-cart' ); ?></th>
							<td><?php echo $order->get_tax_formatted(); ?></td>
						</tr>
						<?php } ?>
						<?php if ( $order->get_credits() > 0 ) { ?>
						<tr id="order-credits">
							<th><?php _e( 'Credits Applied', 'sunshine-photo-cart' ); ?></th>
							<td><?php echo $order->get_credits_formatted(); ?></td>
						</tr>
						<?php } ?>
						<?php if ( $order->get_refunds() ) { ?>
						<tr class="order-refunds">
							<th><?php _e( 'Refunds', 'sunshine-photo-cart' ); ?></th>
							<td><?php echo $order->get_refund_total_formatted(); ?></td>
						</tr>
						<?php } ?>
						<tr id="order-total">
							<th><?php _e( 'Order Total', 'sunshine-photo-cart' ); ?></th>
							<td>
								<?php echo $order->get_total_formatted(); ?>
								<?php if ( $order->get_tax() && $order->get_meta_value( 'display_price' ) == 'with_tax' ) { ?>
									<span class="sunshine--cart--total--tax--explain">(<?php echo sprintf( __( 'includes %s tax', 'sunshine-photo-cart' ), $order->get_tax_formatted() ); ?>)</span>
								<?php } ?>
							</td>
						</tr>
						<tr id="order-payment-method">
							<th><?php _e( 'Payment Method', 'sunshine-photo-cart' ); ?></th>
							<td><?php echo $order->get_payment_method_name(); ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<?php if ( $order->get_customer_notes() ) { ?>
	<div id="order-notes">
		<h3><?php _e( 'Notes', 'sunshine-photo-cart' ); ?></h3>
		<?php echo wp_kses_post( $order->get_customer_notes() ); ?>
	</div>
<?php } ?>

<?php
$items       = $order->get_items();
$file_names = array();
foreach ( $items as $item ) {
	$file_names = array_merge( $file_names, $item->get_file_names() );
}
if ( ! empty( $file_names ) ) { ?>
<div id="order-files">
	<h3><?php _e( 'Files', 'sunshine-photo-cart' ); ?></h3>
	<?php
	$file_names = array_unique( $file_names );
	asort( $file_names );
	echo join( ', ', $file_names );
	?>
</div>
<?php } ?>

<div id="order-customer">
	<h3><?php _e( 'Customer Information', 'sunshine-photo-cart' ); ?></h3>
	<p><?php echo $order->get_customer_name(); ?></p>
	<p><a href="mailto:<?php echo $order->get_email(); ?>"><?php echo $order->get_email(); ?></a></p>
	<?php
	if ( $order->get_phone() ) {
		echo '<p>' . $order->get_phone() . '</p>';
	}
	?>
	<table>
	<tr>
		<?php if ( $order->has_shipping_address() ) { ?>
		<td id="order-shipping" valign="top">
			<h4><?php _e( 'Shipping', 'sunshine-photo-cart' ); ?></h4>
			<p><?php echo $order->get_shipping_address_formatted(); ?></p>
			<?php do_action( 'sunshine_email_receipt_after_order_shipping', $order ); ?>
		</td>
		<?php } ?>
		<?php if ( $order->has_billing_address() ) { ?>
		<td id="order-billing" valign="top">
			<h4><?php _e( 'Billing', 'sunshine-photo-cart' ); ?></h4>
			<p><?php echo $order->get_billing_address_formatted(); ?></p>
		</td>
		<?php } ?>
	</tr>
	<?php if ( $order->get_vat() ) { ?>
		<tr>
			<td colspan="2">
				<h4><?php echo ( SPC()->get_option( 'vat_label' ) ) ? SPC()->get_option( 'vat_label' ) : __( 'EU VAT Number', 'sunshine-photo-cart' ); ?></h4>
				<p><?php echo $order->get_vat(); ?></p>
			</td>
		</tr>
	<?php } ?>
	</table>
</div>
