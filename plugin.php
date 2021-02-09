<?php
/*
Plugin Name: Yourls Customization
Plugin URI: https://github.com/dmitri-ko/privatizor
Description: Adding custom features to YOURLS installation
Version: 1.0
Author: Dmitry Kokorin
Author URI: https://github.com/dmitri-ko/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// hook our private mode on funtion the 'is_private' filter
yourls_add_filter( 'is_private', 'dmitriko_privatizator_private_mode_on' );

// Private mode always on
function dmitriko_privatizator_private_mode_on( $original_private ) {      
    return $original_private;
}


