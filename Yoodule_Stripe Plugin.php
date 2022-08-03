<?php
/**
 * Plugin Name:       Yoodule Stripe Plugin
 * Plugin URI:        https://leadcareglobalconsult.com/
 * Description:       Redirects to a plugin page where stripe api credentials can be specified and saved to the database as a wordpress option
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nelson Osamudiamen
 * Author URI:        https://leadcareglobalconsult.com/
 * License:           GPL v2 or later
 * License URI:       https://leadcareglobalconsult.com/
 * Update URI:        https://leadcareglobalconsult.com/
 * Text Domain:       Yoodule-stripe-plugin
 * Domain Path:       /languages
 */

function donate_shortcode( $atts, $content = null) {
    global $post;extract(shortcode_atts(array(
    'account' => 'nellywhite@gmail.com',
    'for' => $post->post_title,
    'onHover' => '',
    ), $atts));
    if(empty($content)) $content='Make A Donation';
    return '<a href="https://api.stripe.com/v1/charges/ch_3LScie2eZvKYlo2C12muUa6u'.$account.'&item_name=Donation for '.$for.'" title="'.$onHover.'">'.$content.'</a>';
    }
    add_shortcode('donate', 'donate_shortcode');

    add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'YS_Plugin',
        'YS_Plugin Options',
        'manage_options',
         plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        'dashicons-admin-plugins',
        20
    );
}

?>