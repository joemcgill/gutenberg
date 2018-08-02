<?php
/**
 * Server-side rendering of the `core/image` block.
 *
 * @package gutenberg
 */

/**
 * Renders the `core/image` block on server.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the rendered image markup.
 */
function render_block_core_image( $attributes, $content ) {
	// // For testing only.
	// var_dump( [
	// 	'attributes' => $attributes,
	// 	'content' => $content,
	// ] );

	/*
	 * We could construct the markup here to add `srcset` and `sizes` and remove the need
	 * for the `the_content` filter on images broadly and then return the passed content as
	 * a fallback or make use of the current filters in WordPress that themes expect.
	 * the issue being that we only have access too attributes saved in the block delimiter.
	 */
	return $content;
}

/**
 * Registers the `core/image` block on server.
 */
function register_block_core_image() {
	register_block_type( 'core/image', array(
		'attributes'      => array(
			'url'             => array(
				'type' => 'string',
			),
			'alt'             => array(
				'type'    => 'string',
				'default' => '',
			),
			'caption'         => array(
				'type' => 'array',
			),
			'href'            => array(
				'type' => 'string',
			),
			'id'              => array(
				'type' => 'int',
			),
			'align'           => array(
				'type' => 'string',
			),
			'width'           => array(
				'type' => 'number',
			),
			'height'          => array(
				'type' => 'number',
			),
			'linkDestination' => array(
				'type' => 'string',
			),
		),
		'render_callback' => 'render_block_core_image',
	) );
}

add_action( 'init', 'register_block_core_image' );
