<?php

use PurpleProdigy\FAQ_Beans\Shortcode;
use PurpleProdigy\FAQ_Beans\Template;

$is_use_term_container_true = ( isset ( $use_term_container ) && $use_term_container );

?>
<?php
if ( $is_use_term_container_true ) : ?>
<div class="term-container faq faq-topic--<?php esc_attr_e( $term_slug ); ?>">
	<?php endif; ?>

	<?php if ( isset( $show_term_name ) && $show_term_name ) : ?>
        <h2><?php esc_html_e( $record['term_name'] ); ?></h2>
	<?php endif; ?>

    <dl class="container faq">
		<?php
		if ( $is_calling_source === 'template' ) {

			Template\loop_and_render_faqs( $record['posts'] );

		} elseif ( $is_calling_source === 'shortcode-by-topic' ) {
			Shortcode\loop_and_render_faqs_by_topic( $query, $attributes, $config );

		} else {
			include __DIR__ . '/faq.php';
		}
		?>
    </dl>

	<?php if ( $is_use_term_container_true ) : ?>
</div>
<?php endif; ?>
