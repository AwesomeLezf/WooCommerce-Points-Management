<div class="<?php if( $points >= $cart_total ) echo 'hidden'; else  echo 'block';  ?>">
	<span class="font-bold text-xl text-white"><?php echo __('You have no enough points', 'wc-points-menagement'); ?></span>
</div>
<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn btn__default <?php if($points >= $cart_total) echo ''; else echo '!hidden'; ?>">
	<span><?php echo __( 'Go to order', 'wc-points-menagement' );?></span>
</a>
