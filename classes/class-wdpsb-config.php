<?php
/**
 * Configuration class
 *
 * @package section-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Configuration class
 */
class WDPSB_Config {

	/**
	 * Return default configuration
	 */
	public static function get_all() {

		return array(
			'padding'                  => array(
				'name'  => __( 'Padding', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_padding', 30 ),
				'type'  => 'range',
				'min'   => 0,
				'max'   => 120,
				'step'  => 1,
			),
			'overlay-background-color' => array(
				'name'  => __( 'Overlay background color', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_overlay_background_color', '#fff' ),
				'type'  => 'color',
			),
			'overlay-opacity'          => array(
				'name'  => __( 'Overlay opacity', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_overlay_opacity', 0.5 ),
				'type'  => 'range',
				'min'   => 0,
				'max'   => 1,
				'step'  => 0.01,
			),
			'border-width'             => array(
				'name'  => __( 'Border width', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_border_width', 1 ),
				'type'  => 'range',
				'min'   => 0,
				'max'   => 30,
			),
			'border-style'             => array(
				'name'   => __( 'Border style', 'section-block' ),
				'value'  => apply_filters( 'wdpsb_default_border_style', 'solid' ),
				'type'   => 'select',
				'values' => array(
					'solid'  => __( 'Solid', 'section-block' ),
					'dashed' => __( 'Dashed', 'section-block' ),
					'dotted' => __( 'Dotted', 'section-block' ),
				),
			),
			'border-color'             => array(
				'name'  => __( 'Border color', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_border_color', '#ddd' ),
				'type'  => 'color',
			),
			'box-shadow-x-offset'      => array(
				'name'  => __( 'Box shadow X offset', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_x_offset', 0 ),
				'type'  => 'range',
				'min'   => -100,
				'max'   => 100,
				'step'  => 1,
			),
			'box-shadow-y-offset'      => array(
				'name'  => __( 'Box shadow Y offset', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_y_offset', 0 ),
				'type'  => 'range',
				'min'   => -100,
				'max'   => 100,
				'step'  => 1,
			),
			'box-shadow-blur-radius'   => array(
				'name'  => __( 'Box shadow blur radius', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_blur_radius', 35 ),
				'type'  => 'range',
				'min'   => 0,
				'max'   => 100,
				'step'  => 1,
			),
			'box-shadow-spread-radius' => array(
				'name'  => __( 'Box shadow spread radius', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_spread_radius', 0 ),
				'type'  => 'range',
				'min'   => -100,
				'max'   => 100,
				'step'  => 1,
			),
			'box-shadow-color'         => array(
				'name'  => __( 'Box shadow color', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_color', '#000' ),
				'type'  => 'color',
			),
			'box-shadow-opacity'       => array(
				'name'  => __( 'Box shadow opacity', 'section-block' ),
				'value' => apply_filters( 'wdpsb_default_box_shadow_opacity', 0.2 ),
				'type'  => 'range',
				'min'   => 0,
				'max'   => 1,
				'step'  => 0.01,
			),
		);
	}

	/**
	 * Get key-value of default config
	 */
	public static function get_simplified() {

		$result = array();

		foreach ( self::get_all() as $key => $data ) {
			$result[ $key ] = $data['value'];
		}

		return $result;
	}
}
