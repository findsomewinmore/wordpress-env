<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Findsome & Winmore Wordpress Env
 * @version    1.0
 */


/** Set environment based on hostname **/
switch ($hostname) {
    case 'domain.dev':
        define('WP_ENV', 'development');
        break;
    
    case 'staging.domain.com':
        define('WP_ENV', 'staging');
        break;

    case 'www.domain.com':
    default: 
        define('WP_ENV', 'production');
}

