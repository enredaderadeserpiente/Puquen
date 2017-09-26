<?php

	function dl_enqueue_scripts() {
		$theme_data = wp_get_theme();

		/* Deregister Scripts */
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		/* Register Scripts */
		//wp_register_script('jQuery1', get_parent_theme_file_uri() . '/assets/js/lib/jquery-1.12.4.min.js', null, null, true);
		wp_register_script('jQuery3', get_parent_theme_file_uri('/assets/js/lib/jquery.min.js'), null, '3.2.1', true);
		wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/js/lib/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);
		wp_register_script('flexslider', get_parent_theme_file_uri('/assets/js/lib/jquery.flexslider.min.js'), array('jQuery_migrate'), null, true);
		wp_register_script('mainJS', get_parent_theme_file_uri('/assets/js/functions.js'), array('jQuery_migrate'), $theme_data->get( 'Version' ), true);
		wp_register_script('bootstrapJS','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array("jquery"), "3.2.1", true);
		wp_register_script('jquery','https://code.jquery.com/jquery-3.2.1.min.js', null, null , null);
		wp_register_script('openweather', get_parent_theme_file_uri('/assets/js/openweather.js'), null, null, true);
		wp_register_script('ruta_scroll', get_parent_theme_file_uri('/assets/js/ruta_scroll.js'), null, null, true);

		/* Enqueue Scripts */
		wp_enqueue_script('jquery');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('mainJS');
		wp_enqueue_script('bootstrapJS');
		wp_enqueue_script('openweather');
		wp_enqueue_script('ruta_scroll');

	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );
?>
