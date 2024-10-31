<?php
/**
 * Enqueue block scripts and styles
 *
 * @package section-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'enqueue_block_editor_assets', array( 'WDPSB_Enqueue', 'editor_enqueue' ) );
add_action( 'wp_enqueue_scripts', array( 'WDPSB_Enqueue', 'enqueue_block' ) );

/**
 * Enqueue class
 */
class WDPSB_Enqueue {

	/**
	 * Enqueue scripts and styles on editor
	 */
	public static function editor_enqueue() {

		wp_enqueue_script(
			'wdp/section-block',
			plugins_url( 'build/block.min.js', WDPSB_MAIN_FILE ),
			array(
				'wp-i18n',
				'wp-blocks',
				'wp-editor',
				'wp-components',
				'wp-element',
			),
			WDPSB_VERSION,
			true
		);

		wp_localize_script(
			'wdp/section-block',
			'wdpsb',
			array_merge(
				self::get_default_block_styles(),
				array(
					'themeColors' => current( (array) get_theme_support( 'editor-color-palette' ) ),
				)
			)
		);

		self::enqueue_block( true );
	}

	/**
	 * Enqueue section block styles on front-end
	 *
	 * @param bool $is_editor Are styles for editor or not.
	 */
	public static function enqueue_block( $is_editor = false ) {

		wp_enqueue_style( 'wdp/section-block', plugins_url( 'build/block' . esc_attr( true === $is_editor ? '-editor' : '' ) . '.css', WDPSB_MAIN_FILE ), array(), WDPSB_VERSION );
		wp_enqueue_script( 'wdp-section-block-background-position-events', plugins_url( 'build/background-position-events.min.js', WDPSB_MAIN_FILE ), array( 'jquery' ), WDPSB_VERSION, true );

		wp_add_inline_style(
			'wdp/section-block',
			self::generate_css()
		);
	}

	/**
	 * Get default block styles
	 */
	public static function get_default_block_styles() {

		$defaults = WDPSB_Config::get_simplified();
		$result   = array();

		foreach ( $defaults as $key => $value ) {

			$key             = explode( '-', $key );
			$key_parts_count = count( $key );

			for ( $i = 1; $i < $key_parts_count; $i++ ) {
				$key[ $i ] = ucfirst( $key[ $i ] );
			}

			$result[ implode( '', $key ) ] = $value;
		}

		return $result;
	}

	/**
	 * Generate CSS variables
	 */
	public static function generate_css() {

		$defaults = WDPSB_Config::get_simplified();
		$css      = '';
		$vars     = array(
			'--wdpsb-padding'                     => esc_attr( $defaults['padding'] ) . 'px',
			'--wdpsb-overlay-background-color'    => esc_attr( $defaults['overlay-background-color'] ),
			'--wdpsb-overlay-opacity'             => esc_attr( $defaults['overlay-opacity'] ),
			'--wdpsb-border-width'                => esc_attr( $defaults['border-width'] ) . 'px',
			'--wdpsb-border-style'                => esc_attr( $defaults['border-style'] ),
			'--wdpsb-border-color'                => esc_attr( $defaults['border-color'] ),
			'--wdpsb-box-shadow-xoffset'          => esc_attr( $defaults['box-shadow-x-offset'] ) . 'px',
			'--wdpsb-box-shadow-yoffset'          => esc_attr( $defaults['box-shadow-y-offset'] ) . 'px',
			'--wdpsb-box-shadow-blurradius'       => esc_attr( $defaults['box-shadow-blur-radius'] ) . 'px',
			'--wdpsb-box-shadow-spreadradius'     => esc_attr( $defaults['box-shadow-spread-radius'] ) . 'px',
			'--wdpsb-box-shadow-color'            => esc_attr( self::hex2rgb( $defaults['box-shadow-color'], $defaults['box-shadow-opacity'] ) ),
			'--wdpsb-background-image'            => 'none',
			'--wdpsb-background-image-position-x' => '50%',
			'--wdpsb-background-image-position-y' => '50%',
		);

		foreach ( $vars as $var => $value ) {
			$css .= $var . ':' . $value . ';';
		}

		return ':root{' . esc_attr( $css ) . '}';
	}

	/**
	 * Transform HEX to RGB
	 *
	 * @param string $hex     HEX color.
	 * @param int    $opacity Color opacity value.
	 */
	public static function hex2rgb( $hex, $opacity ) {

		( strlen( $hex ) === 4 ) ? list( $r, $g, $b ) = sscanf( $hex, '#%1x%1x%1x' ) : list( $r, $g, $b ) = sscanf( $hex, '#%2x%2x%2x' );
		return "rgba($r,$g,$b,$opacity)";
	}
}
