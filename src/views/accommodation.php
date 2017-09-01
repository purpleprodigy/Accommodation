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
            <a class="button" href="https://bookings2.rms.com.au/obookings3/Search/Index/9295/1/?Rd=1">BOOK NOW</a>
        </p>
    </div>
    <ul class="summary" itemprop="amenityFeature">
        <li><i class="fa fa-male"></i> 4</li>
        <li><i class="fa fa-bed"></i> 2</li>
        <li><i class="fa fa-usd"></i> from $100</li>
    </ul>
</div>
