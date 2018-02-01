<p>
    <label for="sleeps"><?php _e( 'Sleeps', 'metabox' ); ?></label>
    <input class="large-text" type="text" name="<?php echo $meta_box_id; ?>[sleeps]" value="<?php esc_attr_e( $custom_fields['sleeps'] ); ?>">
    <span class="description"><?php _e( 'Enter how many it sleeps.', 'metabox' ); ?></span>
</p>

<p>
    <label for="beds"><?php _e( 'Beds', 'metabox' ); ?></label>
    <input class="large-text" type="text" name="<?php echo $meta_box_id; ?>[beds]" value="<?php esc_attr_e( $custom_fields['beds'] ); ?>">
    <span class="description"><?php _e( 'Enter the number of beds.', 'metabox' ); ?></span>
</p>

<p>
    <label for="price"><?php _e( 'Price', 'metabox' ); ?></label>
    <input class="large-text" type="text" name="<?php echo $meta_box_id; ?>[price]" value="<?php esc_attr_e( $custom_fields['price'] ); ?>">
    <span class="description"><?php _e( 'Enter the price.', 'metabox' ); ?></span>
</p>

<p>
    <label for="booking_system_url"><?php _e( 'URL', 'metabox' ); ?></label>
    <input class="large-text" type="url" name="<?php echo $meta_box_id; ?>[booking_system_url]" value="<?php echo $custom_fields['booking_system_url'] ? esc_url( $custom_fields['booking_system_url'] ) : ''; ?>">
    <span class="description"><?php _e( 'Enter the url of the booking system.', 'metabox' ); ?></span>
</p>
