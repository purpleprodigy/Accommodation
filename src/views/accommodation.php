<?php

use function PurpleProdigy\Accommodation\Template\render_accommodation_image;

?>
<div class="accommodation" itemscope itemtype="http://schema.org/Accommodation">
    <div class="thumbnail one-fourth" itemprop="photo">
		<?php render_accommodation_image( $accommodation_id ); ?>
    </div>
    <div class="description two-fourths">
        <h3 itemprop="name"><?php esc_html_e( $accommodation_name ); ?></h3>
        <p itemprop="description">
			<?php esc_html_e( $description ); ?>
        </p>
		<?php require __DIR__ . '/summary.php'; ?>
</div><!-- //.accommodation -->
