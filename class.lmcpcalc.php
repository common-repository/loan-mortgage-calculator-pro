<?php

class LMCPCalc {

	private static $initiated = false;

	public static function lmcp_init() {
		if ( ! self::$initiated ) {
			self::lmcp_init_hooks();
		}
	}

	private static function lmcp_init_hooks() {
		self::$initiated = true;
        add_action( 'wp_enqueue_scripts', array( 'LMCPCalc' , 'register_lmcpcalc_styles' ) );
		add_shortcode('pro-calc', array('LMCPCalc', 'lmcp_calc_func'));
	}

	public static function lmcp_calc_func() {
		require LMCP_CALC_PLUGIN_DIR . 'includes/form.php';
	}

	public static function register_lmcpcalc_styles() {

			/* Css */
		    wp_register_style( 'lmcp-calc', plugins_url( 'assets/lmcp-calc.css', __FILE__  ) );
		    wp_enqueue_style( 'lmcp-calc' );
		    
		    /* JS */
		    wp_enqueue_script( 'jquery' );
		    wp_enqueue_script( 'jquery-inputmask-js', plugins_url( 'assets/jquery.inputmask.bundle.js', __FILE__  ) ,'jquery');
		    wp_enqueue_script( 'lmcp-calc', plugins_url( 'assets/lmcp-calc.js', __FILE__  ),'jquery' );
	}

}

?>