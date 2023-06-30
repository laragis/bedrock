<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define('WP_CACHE', env('WP_CACHE') ?: true);

/**Redis Cache**/
Config::define('WP_CACHE_KEY_SALT', env('WP_CACHE_KEY_SALT') ?: (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));

# Scheme: Unix
// Config::define('WP_REDIS_SCHEME', env('WP_REDIS_SCHEME') ?: 'unix');
// Config::define('WP_REDIS_PATH', env('WP_REDIS_PATH') ?: '/home/ubuntu/redis/redis.sock');

# Scheme: TCP
Config::define('WP_REDIS_HOST', env('WP_REDIS_HOST') ?: 'localhost');
Config::define('WP_REDIS_PORT', env('WP_REDIS_PORT') ?: '6379');
Config::define('WP_REDIS_PASSWORD', env('WP_REDIS_PASSWORD') ?: 'secret_redis');

Config::define('WP_REDIS_MAXTTL', env('WP_REDIS_MAXTTL') ?: '900');
Config::define('WP_REDIS_SELECTIVE_FLUSH', env('WP_REDIS_SELECTIVE_FLUSH') ?: true);