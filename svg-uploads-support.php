<?php
/*
Plugin Name: 	SVG Uploads Support
Plugin URI:		https://www.innovacusco.com/tutoriales/como-anadir-imagenes-svg-en-wordpress
Description: 	SVGs are not raster images like other formats (such as png, jpg, gif), they are actually vectors.
Version: 		2.1.1
Author: 		AblyPeru
Author URI: 	https://ablyperu.com
Text Domain: 	svg-uploads-support
License: 		GPLv2 or later
License URI:	http://www.gnu.org/licenses/gpl-2.0.html

	Copyright 2017-2018 | AblyPeru (email : info@ablyperu.com)

*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function svg_mime_types($svgmimes) {
  $svgmimes['svg'] = 'image/svg+xml';
  $svgmimes['svgz'] = 'image/svg+xml';
  return $svgmimes;
}
add_filter('upload_mimes', 'svg_mime_types');
//Add Secure wordpress version
function ablyperu_remove_version() {return '';}
add_filter('the_generator', 'ablyperu_remove_version');