<?php
/**
 * Plugin Name: Run JetPack locally
 * Plugin URI:  https://github.com/birgire/run-jetpack-locally
 * Author:      birgire
 * Version:     0.0.3
 */

// Activate the development mode:
add_filter( 'jetpack_development_mode', '__return_true', PHP_INT_MAX );
