<?php

use PurpleProdigy\Accommodation;
use PurpleProdigy\Accommodation\Template;

if ( isset ( $use_term_container ) && $use_term_container ) : ?>

<div class="accommodation-container">
	<?php endif; ?>

	<?php if ( isset( $show_term_name ) && $show_term_name ) : ?>
        <h2><?php esc_html_e( $record['term_name'] ); ?></h2>
	<?php endif; ?>
    <div class="accommodation--section">
		<?php
		if ( $is_calling_source === 'template' ) {
			Template\loop_and_render_accommodations( $record['posts'] );

		}
		elseif ( $is_calling_source === 'shortcode-by-type' ) {
			Accommodation\loop_and_render_accommodations_by_type( $query, $attributes, $config );

		} else {
			ddd( 'loading accommodation.php' );
			include __DIR__ . '/accommodation.php';
		}
		?>
    </div>

	<?php if ( isset ( $use_term_container ) && $use_term_container ) : ?>
</div>
<?php endif; ?>

