<?php

use PurpleProdigy\Accommodation;

d( $query );
d( $attributes );
d( $config );
//d( $post_title );
//d( $show_term_name );
//d( $record );
//ddd($user_defined_attributes);

?>
<div class="accommodation-container">
<!--	--><?php //if ( isset( $show_term_name ) && $show_term_name ) : ?>
<!--       <h2>--><?php //esc_html_e( $record['term_name'] ); ?><!--</h2>-->
<!--	--><?php //endif; ?>
    <div class="accommodation--section">-->
		<?php
		Accommodation\loop_and_render_accommodations_by_type( $query, $attributes, $config );
		?>
    </div>

</div>

