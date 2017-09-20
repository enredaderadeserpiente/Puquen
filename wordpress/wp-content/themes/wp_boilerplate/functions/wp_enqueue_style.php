<?php

	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('mainStyle2', get_parent_theme_file_uri('/assets/css/estilo.css'),null,null, null);
		wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',null,null, null);
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('mainStyle2');
		wp_enqueue_style('bootstrap');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>
