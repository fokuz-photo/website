<?php
if ( ! empty( $message ) ) {
	echo '<div id="custom-message">' . wpautop( apply_filters( 'the_content', $message ) ) . '</div>';
}
?>

<?php
if ( ! empty( $note ) ) {
	echo '<div id="custom-note">';
	echo '<p><strong>' . __( 'A custom note from the sender:', 'sunshine-photo-cart' ) . '</strong></p>';
	echo wpautop( $note );
	echo '</div>';
}
?>

<table id="photo-list">
	<tr>
		<?php
		$i = 0;
		foreach ( $favorites as $image ) {
			$i++;
			?>
			<td>
				<a href="<?php echo $image->get_permalink(); ?>"><img src="<?php echo $image->get_image_url(); ?>" alt="<?php echo esc_attr( $image->get_name() ); ?>" /></a>
				<span class="image-name"><?php echo $image->get_file_name(); ?></span>
			</td>
			<?php
			if ( $i == 6 ) {
				break; }
			?>
			<?php if ( $i % 3 == 0 ) { ?>
				</tr><tr>
			<?php } ?>
		<?php } ?>
	</tr>
</table>

<p align="center">
	<a href="<?php echo $favorites_url; ?>" class="button">
		<?php _e( 'View all favorites', 'sunshine-photo-cart' ); ?>
	</a>
</p>
