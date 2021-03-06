<?php

define( 'THEME_PATH' ,          get_template_directory()            );
//define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );
define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/dist/css'       );
//define( 'IMAGES_URL' ,          THEME_URL .    '/dist/images'       );
define( 'JS_URL' ,              THEME_URL .    '/dist/js'      );
//define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
//define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );

function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
	include_once $file;
}

function remove_width_and_height_attribute( $html ) {
	return preg_replace( '/(height|width)="\d*"\s/', "", $html );
}

