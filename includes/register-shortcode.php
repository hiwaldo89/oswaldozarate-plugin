<?php

// Register a shortcode
function oswaldozarate_get_ip_address_shortcode() {
    $ipAddress = get_transient( 'get_ip_address_transient' );
    if ( !$ipAddress ) {
        $ipAddress = wp_remote_get('http://bot.whatismyipaddress.com/');
        set_transient('get_ip_address_transient', $ipAddress, 60*60*1);
    }
    return '<div class="get-ip-address">' . $ipAddress['body'] . '</div>';
}
add_shortcode('get_api_address', 'oswaldozarate_get_ip_address_shortcode');