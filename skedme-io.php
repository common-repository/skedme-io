<?php
/*
 * Plugin Name: skedme.io
 * Plugin URI: https://skedme.io/
 * Description: Plugin skedme.io is an online booking for customers of service companies such as car service centers, beauty salons, hairdressers`, etc.
 * Version: 1.0.0
 * Author: arozhkov
 * Author URI: https://skedme.io/
 * License: GPLv2
 * TextDomain: skedme-io
 * DomainPath:
 * Network: false
 */
if ( ! defined( 'WPINC' ) ) { die; }
require plugin_dir_path( __FILE__ ) . 'includes/Skedme.php';

$skedme = new Skedme();
$skedme->run();
