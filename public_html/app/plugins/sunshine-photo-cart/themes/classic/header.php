<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="sunshine--wrapper">

	<header id="sunshine--header">

		<div id="sunshine--logo">
			<a href="<?php bloginfo( 'url' ); ?>">
			<?php
			$attachment_id = SPC()->get_option( 'logo' );
			if ( $attachment_id ) {
				echo '<img src="' . esc_url( wp_get_attachment_image_url( $attachment_id, 'medium' ) ) . '" alt="' . get_bloginfo( 'name', 'display' ) . '" />';
			} else {
				bloginfo( 'name' );
			}
			?>
			</a>
		</div>

		<?php sunshine_main_menu(); ?>

		<?php
		if ( SPC()->get_option( 'classic_search' ) ) {
			echo sunshine_search_form();
		}
		?>

		<?php
		if ( SPC()->get_option( 'classic_password' ) ) {
			echo sunshine_gallery_password_form();
		}
		?>


	</header>

	<main id="sunshine" class="<?php sunshine_classes(); ?>">
