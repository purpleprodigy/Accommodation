<?php

use function PurpleProdigy\Accommodation\loop_and_render_accommodations_by_type;
use function PurpleProdigy\Accommodation\Template\loop_and_render_accommodations;

if ( isset( $use_term_container ) && $use_term_container ) : ?>
<div class="accommodation-container" data-type="<?php echo esc_attr( $term_slug ); ?>">
<?php endif; ?>

	<?php if ( isset( $show_term_name ) && $show_term_name ) : ?>
        <h2><?php esc_html_e( ucfirst($term_slug) ); ?></h2>
	<?php endif; ?>
    <div class="accommodation--section">
		<?php
		if ( 'template' === $is_calling_source  ) {
			loop_and_render_accommodations( $record['posts'] );
		}
        elseif ( 'shortcode-by-type' === $is_calling_source ) {
	       loop_and_render_accommodations_by_type( $query, $attributes, $config );
		}
		?>
    </div>

<?php if ( isset( $use_term_container ) && $use_term_container ) : ?>
</div>
<?php endif; ?>
