<div>Hello <?php echo $first_name . " " . $last_name ?>,<br><br>There has been an error processing payment for your autoship order. Please review the payment methods set for autoship orders <a href="<?php echo wc_get_account_endpoint_url( 'autoship-schedules' ); ?>" >here</a>.</div><?php echo wc_get_account_endpoint_url( 'autoship-schedules' ); ?>