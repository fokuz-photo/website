<?php do_action( 'sunshine_after_email_content' ); ?>

				</td> <!-- CLOSE CONTENT -->
			</tr>
		</table>

		<?php
		$signature = SPC()->get_option( 'email_signature' );
		if ( $signature ) {
			?>
		<table id="signature">
			<tr>
				<td><?php echo wpautop( wp_kses_post( $signature ) ); ?></td>
			</tr>
		</table>
		<?php } ?>

	</td> <!-- CLOSE MAIN -->
</tr>
</table>

</div>
