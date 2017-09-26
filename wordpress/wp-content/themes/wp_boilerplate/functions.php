<?php

	$files = glob(get_template_directory() . '/functions/*.php');

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	}


	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}

	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
	    array_pop($excerpt);
	    $excerpt = implode(" ",$excerpt).'...';
	  } else {
	    $excerpt = implode(" ",$excerpt);
	  }
	  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	  return $excerpt;
	}

	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
	    array_pop($content);
	    $content = implode(" ",$content).'...';
	  } else {
	    $content = implode(" ",$content);
	  }
	  $content = preg_replace('/[.+]/','', $content);
	  $content = apply_filters('the_content', $content);
	  $content = str_replace(']]>', ']]&gt;', $content);
	  return $content;
	}
	
?>
