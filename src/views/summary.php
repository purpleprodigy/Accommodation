<p>
    <a class="button" href="<?php echo esc_url( get_post_meta( $post_id, 'booking_system_url', true ) ); ?>">BOOK NOW</a>
</p>

<ul class="summary" itemprop="amenityFeature">
	<li><i class="fa fa-male"></i><?php esc_html_e( get_post_meta( $post_id, 'sleeps', true ) ); ?></li>
	<li><i class="fa fa-bed"></i><?php esc_html_e( get_post_meta( $post_id, 'beds', true ) ); ?></li>
	<li><i class="fa fa-usd"></i><?php esc_html_e( get_post_meta( $post_id, 'price', true ) ); ?></li>
</ul>