<div class="accommodation" itemscope itemtype="http://schema.org/Accommodation">
    <div class="thumbnail one-fourth" itemprop="photo">
        <img class="alignnone" src="<?php esc_html_e( $post_thumbnail_url ) ?>"
             alt="<?php esc_html_e( $post_thumbnail_title ); ?>" width="250" height="140"/>
    </div>
    <div class="description two-fourths">
        <h3 itemprop="name"><?php esc_html_e( $post_title ); ?></h3>
        <p itemprop="description">
			<?php esc_html_e( $post_content ); ?>
            <br>
			<a class="button"
               href="<?php echo esc_url( get_post_meta( $accommodation_id, 'booking_system_url', true ) ); ?>">BOOK
                NOW</a>

        <ul class="summary" itemprop="amenityFeature">
            <li><i class="fa fa-male"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'sleeps', true ) ); ?>
            </li>
            <li><i class="fa fa-bed"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'beds', true ) ); ?></li>
            <li><i class="fa fa-usd"></i><?php esc_html_e( get_post_meta( $accommodation_id, 'price', true ) ); ?></li>
        </ul>
</div>

