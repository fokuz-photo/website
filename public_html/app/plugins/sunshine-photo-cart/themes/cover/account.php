<?php
defined( 'ABSPATH' ) || exit;

sunshine_get_template( 'header' );

do_action( 'sunshine_before_content' );

do_action( 'sunshine_account' );

do_action( 'sunshine_after_content' );

sunshine_get_template( 'footer' );
