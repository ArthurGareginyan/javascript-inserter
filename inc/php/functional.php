<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Prepare the custom code
 * @return string by using "echo"
 */
function spacexchimp_p016_prepare( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Put the value of the plugin options into an array for easier access
    $options = spacexchimp_p016_options();

    // Declare variables
    $data = !empty( $options[$option] ) ? $options[$option] : '';

    // Prepare a variable for storing the processed data
    $data_out = "";

    // If data is not empty...
    if ( ! empty( $data ) ) {

        // Add an additional code to the beginning of the variable
        $data_out = '<script>' . "\n";

        $data_out .= $data;

        // Add an additional code to the end of the variable
        $data_out .= "\n" . '</script>' . "\n";
    }

    // Return the processed data
    echo $data_out;
}

/**
 * Process the custom code
 */
function spacexchimp_p016_exec_head_0() { spacexchimp_p016_prepare('header_beginning'); }
function spacexchimp_p016_exec_head_1() { spacexchimp_p016_prepare('header_end'); }
function spacexchimp_p016_exec_footer_0() { spacexchimp_p016_prepare('footer_beginning'); }
function spacexchimp_p016_exec_footer_1() { spacexchimp_p016_prepare('footer_end'); }

/**
 * Inject the custom code into the website's frontend (head and footer sections)
 */
add_action( 'wp_head', 'spacexchimp_p016_exec_head_0', 0 );
add_action( 'wp_head', 'spacexchimp_p016_exec_head_1', 1000 );
add_action( 'wp_footer', 'spacexchimp_p016_exec_footer_0', 0 );
add_action( 'wp_footer', 'spacexchimp_p016_exec_footer_1', 1000 );
