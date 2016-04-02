<?php

define( 'GD_VIP', '184.168.47.225' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', 'bf779e8a87237c8b49d2a48b955a375d' );
define( 'GD_STAGING_SITE', true );
define( 'GD_EASY_MODE', false );
define( 'GD_SITE_CREATED', 1459611885 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( '01808dc8-531c-4014-9dec-07bd368632b7;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}