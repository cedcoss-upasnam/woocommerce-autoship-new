<?php do_action( 'wc_autoship_before_no_autoship' ); ?>

<div class="wc-autoship-container">
	<div class="wc-autoship-no-autoship">
		<h2 class="avada-woocommerce-myaccount-heading" style="font-weight: 500; margin: 0; padding: 0;">Autoship Schedules</h2>
		<?php $message = get_option( 'wc_autoship_no_autoship_message' ); ?>
		<?php if ( $message ): ?>
			<?php echo $message; ?>
		<?php else: ?>
			<p style="font-size: 17px; width: 100%; max-width: 74%;"><strong>No Autoship orders created.</strong> The next time you checkout online any items you place on Autoship will appear here as upcoming orders that you can manage.</p>
		<?php endif; ?>
	</div>
</div>

<?php do_action( 'wc_autoship_after_no_autoship' ); ?>