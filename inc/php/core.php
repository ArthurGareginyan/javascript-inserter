<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Register text domain
 */
function spacexchimp_p016_textdomain() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    load_plugin_textdomain( $plugin['text'], false, $plugin['dir'] . '/languages/' );
}
add_action( 'init', $plugin['prefix'] . '_textdomain' );

/**
 * Print direct link to the plugin administration page
 *
 * Fetches array of links generated by WordPress Plugin admin page ( Deactivate | Edit )
 * and inserts a link to the plugin admin page
 */
function spacexchimp_p016_settings_link( $links ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Declare variables
    $text_settings = __( 'Settings', $plugin['text'] );
    $url_settings = admin_url( 'options-general.php?page=' . $plugin['slug'] );
    $link_settings = '<a href="' . $url_settings . '">' . $text_settings . '</a>';

    array_unshift( $links, $link_settings );

    // Declare variables
    $url_upgrade = "https://www.spacexchimp.com/plugins/javascript-inserter-pro.html";
    $text_upgrade = __( 'Upgrade to PRO', $plugin['text'] );
    $link_upgrade = '<a href="' . $url_upgrade . '" target="_blank"><b style="color:red;">' . $text_upgrade . '</b></a>';

    array_unshift( $links, $link_upgrade );

    return $links;
}
add_filter( 'plugin_action_links_' . $plugin['base'], $plugin['prefix'] . '_settings_link' );

/**
 * Print additional links to the plugin meta row
 */
function spacexchimp_p016_plugin_row_meta( $links, $file ) {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    if ( strpos( $file, $plugin['slug'] . '.php' ) !== false ) {

        // Declare variables
        $url_donate = "https://www.spacexchimp.com/donate.html";
        $text_donate = __( 'Donate', $plugin['text'] );
        $link_donate = '<a href="' . $url_donate . '" target="_blank"><span class="dashicons dashicons-heart"></span> ' . $text_donate . '</a>';

        $url_upgrade = "https://www.spacexchimp.com/plugins/javascript-inserter-pro.html";
        $text_upgrade = __( 'Upgrade to PRO', $plugin['text'] );
        $link_upgrade = '<a href="' . $url_upgrade  . '" target="_blank"><span class="dashicons dashicons-star-filled"></span> ' . $text_upgrade . '</a>';

        $new_links = array(
                           'donate' => $link_donate,
                           'upgrage' => $link_upgrade
                           );

        $links = array_merge( $links, $new_links );
    }

    return $links;
}
add_filter( 'plugin_row_meta', $plugin['prefix'] . '_plugin_row_meta', 10, 2 );

/**
 * Register a submenu item in the top-level menu item "Settings"
 */
function spacexchimp_p016_register_submenu_page() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Declare variables
    $page_title  = $plugin['name'];
    $menu_title  = __( 'JS Inserter', $plugin['text'] );
    $capability  = 'manage_options';
    $menu_slug   = $plugin['slug'];
    $function    = $plugin['prefix'] . '_render_submenu_page';

    add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function );
}
add_action( 'admin_menu', $plugin['prefix'] . '_register_submenu_page' );

/**
 * Register settings
 */
function spacexchimp_p016_register_settings() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    register_setting( $plugin['settings'] . '_settings_group', $plugin['settings'] . '_settings' );
    register_setting( $plugin['settings'] . '_settings_group_si', $plugin['settings'] . '_service_info' );
}
add_action( 'admin_init', $plugin['prefix'] . '_register_settings' );

/**
 * Branded footer text on the plugin's settings page
 */
function spacexchimp_p016_admin_footer_text() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Get current screen data
    $current_screen = get_current_screen();

    // Return if the page is not a settings page of this plugin
    $settings_page = 'settings_page_' . $plugin['slug'];
    if ( $settings_page != $current_screen->id ) {
        return;
    }

    // Filter footer text
    function spacexchimp_p016_new_admin_footer_text() {
        $year = date('Y');
        return "Copyright &copy; " . $year . " <a href='https://www.spacexchimp.com' target='_blank'>Space X-Chimp</a> | Click <a href='https://www.spacexchimp.com/store.html' target='_blank'>here</a> to see our other products.";
    }
    add_filter( 'admin_footer_text', $plugin['prefix'] . '_new_admin_footer_text', 11 );
}
add_action( 'current_screen', $plugin['prefix'] . '_admin_footer_text' );

/**
 * Runs during the plugin activation
 */
function spacexchimp_p016_activation() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    // Read the plugin service information from the database and put it into an array
    $info = get_option( $plugin['settings'] . '_service_info' );

    // Make the "$info" array if the plugin service information in the database is not exist
    if ( ! is_array( $info ) ) {
        $info = array();
    }

    // Get the activation date of the plugin from the database
    $activation_date = !empty( $info['activation_date'] ) ? $info['activation_date'] : '';

    if ( $activation_date == '' ) {
        $info['activation_date'] = time();
        update_option( $plugin['settings'] . '_service_info', $info );
    }
}
register_activation_hook( $plugin['file'], $plugin['prefix'] . '_activation' );

/**
 * Delete options on uninstall
 */
function spacexchimp_p016_uninstall() {

    // Put value of plugin constants into an array for easier access
    $plugin = spacexchimp_p016_plugin();

    delete_option( $plugin['settings'] . '_settings' );
}
register_uninstall_hook( $plugin['file'], $plugin['prefix'] . '_uninstall' );
