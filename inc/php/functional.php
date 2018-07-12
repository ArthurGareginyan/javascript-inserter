<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Inject the custom JavaScript code in the frontend head and footer
 */
add_action( 'wp_head', 'spacexchimp_p016_inject_head_beginning', 0 );
add_action( 'wp_head', 'spacexchimp_p016_inject_head_end', 1000 );
add_action( 'wp_footer', 'spacexchimp_p016_inject_footer_beginning', 0 );
add_action( 'wp_footer', 'spacexchimp_p016_inject_footer_end', 1000 );

/**
 * Prepare the custom JavaScript code for outputing
 */
function spacexchimp_p016_inject_head_beginning() { spacexchimp_p016_output('header_beginning'); }
function spacexchimp_p016_inject_head_end() { spacexchimp_p016_output('header_end'); }
function spacexchimp_p016_inject_footer_beginning() { spacexchimp_p016_output('footer_beginning'); }
function spacexchimp_p016_inject_footer_end() { spacexchimp_p016_output('footer_end'); }

/**
 * Outputs the given setting, if conditions are met
 */
function spacexchimp_p016_output( $option ) {

    // Ignore admin, feed, robots or trackbacks
    if (is_admin() || is_feed() || is_robots() || is_trackback()) {
        return;
    }

    // Read options from database and declare variables
    $options = get_option( SPACEXCHIMP_P016_SETTINGS . '_settings' );
    $data = $options[$option];

    // If data is empty then exit
    if( empty( $data ) ) {
        return;
    }

    // Add comments to output
    $data_out = "\n<!-- [BEGIN] Custom JavaScript code added via JavaScript-Inserter plugin by Space X-Chimp ( https://www.spacexchimp.com ) -->\n";
    $data_out .= "<script>" . $data . "</script>";
    $data_out .= "\n<!-- [END] Custom JavaScript code added via JavaScript-Inserter plugin by Space X-Chimp ( https://www.spacexchimp.com ) -->\n\n";

    // Output
    echo $data_out;
}
