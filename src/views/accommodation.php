<?php

use PurpleProdigy\Accommodation\Template;

?>
<div class="accommodation" itemscope itemtype="http://schema.org/Accommodation">
    <div class="thumbnail one-fourth" itemprop="photo">
		<?php Template\render_accommodation_image( $accommodation_id ); ?>
    </div>
    <div class="description two-fourths">
        <h3 itemprop="name"><?php esc_html_e( $accommodation_name ); ?></h3>
        <p itemprop="description">
			<?php esc_html_e( $description ); ?>
        </p>
		<?php require __DIR__ . '/summary.php'; ?>
</div><!-- //.accommodation -->
