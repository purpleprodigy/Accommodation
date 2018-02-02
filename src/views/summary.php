<p>
    <a class="button" href="<?php echo esc_url( get_post_meta( $accommodation_id, 'booking_system_url', true ) ); ?>">BOOK
        NOW</a>
</p>
<?php
if ( ! is_tax() ) {
	?> </div>
<?php } ?>
<ul class="summary" itemprop="amenityFeature">
	<?php
	if ( get_post_meta( $accommodation_id, 'sleeps', false ) ) { ?>
        <li><i class="fa fa-male"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'sleeps', true ) ); ?></li>
	<?php }
	if ( get_post_meta( $accommodation_id, 'beds', false ) ) { ?>
        <li><i class="fa fa-bed"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'beds', true ) ); ?></li>
	<?php }
	if ( get_post_meta( $accommodation_id, 'price', false ) ) { ?>
        <li><i class="fa fa-usd"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'price', true ) ); ?></li>
	<?php } ?>
</ul>
