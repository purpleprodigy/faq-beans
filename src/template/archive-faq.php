<?php
/**
 * FAQ Archive Template
 *
 * @package     PurpleProdigy\FAQ_Beans\Template
 * @since       2.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\FAQ_Beans\Template;

remove_action( 'beans_loop_template' );
add_action( 'beans_loop_template', __NAMESPACE__ . '\do_faq_archive_loop' );
/**
 * Do the FAQ Archive loop and render out the HTML.
 *
 * NOTE: The variables are set to call the right HTML
 * markup in the container.php view file.
 *
 * @since 2.0.0
 *
 * @return void
 */
function do_faq_archive_loop() {
	$records = get_posts_grouped_by_term( 'faq', 'topic' );
	if ( ! $records ) {
		_e( '<p>Sorry, there are no FAQs to display.</p>', 'faq' );

		return;
	}

	$use_term_container = true;
	$show_term_name     = true;
	$is_calling_source  = 'template';

	foreach ( $records as $record ) {
		$term_slug = $record['term_slug'];

		include FAQ_DIR . 'src/views/container.php';
	}
}

/**
 * Loop through and render out the FAQs.
 *
 * @since 2.0.0
 *
 * @param array $faqs
 *
 * @return void
 */
function loop_and_render_faqs( array $faqs ) {
	$attributes = array(
		'show_icon' => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon' => 'dashicons dashicons-arrow-up-alt2',
	);

	foreach ( $faqs as $faq ) {
		$hidden_content = do_shortcode( $faq['post_content'] );
		$post_title     = $faq['post_title'];

		include( FAQ_DIR . 'src/views/faq.php' );
	}
}

beans_load_document();
