<?php
/**
 * Runtime configuration for the FAQ taxonomy.
 *
 * @package     PurpleProdigy\FAQ_Beans
 * @since       2.0.0
 * @author      Purple Prodigy
 * @link        https://purpleprodigy.com
 * @licence     GNU-2.0+
 */

namespace PurpleProdigy\FAQ_Beans;

return array(
	/**=============================================================
	 * The taxonomy name.
	 *============================================================*/
	'taxonomy'   => 'topic',

	/**=============================================================
	 * The label configuration.
	 *============================================================*/
	'labels'     => array(
		'custom_type'       => 'topic',
		'singular_label'    => 'Topic',
		'plural_label'      => 'Topics',
		'in_sentence_label' => 'topic',
		'text_domain'       => FAQ_TEXT_DOMAIN,
		'specific_labels'   => array(),
	),

	/**=============================================================
	 * These are the arguments for registering the taxonomy.
	 *============================================================*/
	'args'       => array(
		'label'             => __( 'Topics', FAQ_TEXT_DOMAIN ),
		'labels'            => '', // automatically generate the labels.
		'hierarchical'      => true,
		'show_admin_column' => true,
		'public'            => false,
		'show_ui'           => true,
	),

	/**=============================================================
	 * These are the post types to bind the taxonomy to.
	 *============================================================*/
	'post_types' => array( 'faq' ),
);
