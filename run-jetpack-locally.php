<?php
/**
 * Plugin Name: Run JetPack locally
 * Plugin URI:  http://wordpress.stackexchange.com/a/144317/26350
 * Author:      birgire
 * Version:     0.0.2
 */

// Activate the development mode:
add_filter( 'jetpack_development_mode', '__return_true', PHP_INT_MAX );
