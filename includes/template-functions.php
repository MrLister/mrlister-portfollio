<?php
/**
 * template functions for my site.
 */
define( 'LISTERPATH', dirname( __DIR__, 1 ) );
define( 'LISTERNAME', basename( dirname( __DIR__ ) ) );
define( 'LISTERASSETSPATH', LISTERPATH . '/assets/' );
define( 'LISTERINCLUDESPATH', LISTERPATH . '/includes/' );
define( 'LISTERSITEURL', ( 'on' === $_SERVER['HTTPS'] ) ? 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] );
define( 'LISTERASSETSURL', LISTERSITEURL . 'assets/' );
define( 'LISTERINCLUDESURL', LISTERSITEURL . 'includes/' );

function lister_head() {
	include_once LISTERPATH . '/header.php';
}

function load_head() {
	$css_files = array_filter( glob( LISTERASSETSPATH . 'css/*' ), 'is_file' );
	// Loading bootstrap css.
	echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">';

	foreach ( $css_files as $file ) {
		if ( strpos( $file, '.css' ) !== false ) {
			$file_name = explode( '/', $file );
			$file_name = end( $file_name );
			echo '<link rel="stylesheet" type="text/css" href="' . LISTERASSETSURL . 'css/' . $file_name . '">';
		}
	}

	// Load jQuery Script here if going to use it.
}

function lister_footer() {
	include_once LISTERPATH . '/footer.php';
}

function load_foot() {
	echo '<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>';
	$js_files = array_filter( glob( LISTERASSETSPATH . 'js/*' ), 'is_file' );
	foreach ( $js_files as $file ) {
		if ( strpos( $file, '.js' ) !== false ) {
			$file_name = explode( '/', $file );
			$file_name = end( $file_name );
			echo '<script type="text/javascript" src="' . LISTERASSETSURL . 'js/' . $file_name . '"></script>';
		}
	}
}

function page_title( $title = null ) {
	echo get_page_title( $title );
}

function get_page_title( $title = null ) {
	if ( ! empty( $title ) ) {
		return $title;
	}

	return LISTERNAME;
}
