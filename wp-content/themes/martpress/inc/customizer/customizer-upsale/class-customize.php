<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class MartPress_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ),999 );
		
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
        require_once get_template_directory() . '/inc/customizer/customizer-upsale/section-pro.php';

        // Register custom section types.
		$manager->register_section_type( 'StorePress_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new StorePress_Customize_Section_Pro(
				$manager,
				'Storepress',
				array(
					'title'    => esc_html__( 'MartPress Pro', 'martpress' ),
                    'pro_text' => esc_html__( 'Upgrade to Pro','martpress' ),
                    'pro_url'  => 'https://vfthemes.com/themes/martpress-pro/',
					'pro_demo_text' => esc_html__( 'Pro Demo','martpress' ),
                    'pro_demo_url'  => 'http://vfthemes.com/theme-demo/martpress-pro',
                    'priority' => 0
                )
			)
		);
	}
}
// Doing this customizer thang!
MartPress_Customize::get_instance();