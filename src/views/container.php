<?php

use PurpleProdigy\Accommodation\Template as Template;

if ( isset ( $use_term_container ) && $use_term_container ) : ?>
    <div class="accommodation-container">
    <h3>Accommodation</h3>
<?php endif; ?>

    <div class="accommodation--section">
		<?php
		if ( $is_calling_source === 'template' ) {
			Template\loop_and_render_accommodations( $record['posts'] );

		} else {
			include __DIR__ . '/accommodation.php';
		}
		?>
    </div>

<?php if ( isset ( $use_term_container ) && $use_term_container ) : ?>
    </div>
<?php endif; ?>