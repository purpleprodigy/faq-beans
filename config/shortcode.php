<?php
/**
 * FAQ Shortcode runtime configuration parameters.
 *
 * @package     PurpleProdigy\FAQ_Beans
 * @since       2.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\FAQ_Beans\Shortcode;

return array(

	/**============================================
	 * Shortcode name [faq]
	 *============================================*/
	'shortcode_name'              => 'faq',

	/**============================================
	 * Specify if you want do_shortcode() to run
	 * on the content between the shortcode opening
	 * and closing brackets. Defaults to true.
	 *============================================*/
	'do_shortcode_within_content' => false,

	/**============================================
	 * Specify the processing function when you
	 * want your code to handle the output buffer,
	 * view, and processing.
	 *============================================*/
	'processing_function'         => __NAMESPACE__ . '\process_the_faq_shortcode',

	/**============================================
	 * Paths to the view files
	 *============================================*/
	'view'                        => array(
		'container_single' => FAQ_DIR . '/src/views/container.php',
		'container_topic'  => FAQ_DIR . '/src/views/container.php',
		'faq'              => FAQ_DIR . '/src/views/faq.php',
	),

	/**============================================
	 * Defined shortcode default attributes.
	 * Each can be overridable by the author.
	 *============================================*/
	'defaults'                    => array(
		'show_icon'               => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon'               => 'dashicons dashicons-arrow-up-alt2',
		'post_id'                 => 0,
		'topic'                   => '',
		'number_of_faqs'          => - 1,
		'show_none_found_message' => 1,
		'none_found_by_topic'     => __( 'Sorry, no FAQs were found for that topic.', FAQ_TEXT_DOMAIN ),
		'none_found_single'       => __( 'Sorry, no FAQ found.', FAQ_TEXT_DOMAIN ),
	),
);
