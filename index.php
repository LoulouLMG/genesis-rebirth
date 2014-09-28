<?php

/**
 * GENESIS-REBIRTH
 *
 * @author LoulouLMG
 * @link https://github.com/LoulouLMG/genesis-rebirth/
 */

// Load application config (error reporting, database credentials etc.)
require 'application/config/config.php';

// The auto-loader to load the genesis-rebirth related internal stuff automatically
require 'application/config/autoload.php';


// The Composer auto-loader (official way to load Composer contents) to load external stuff automatically
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// Start the application
$app = new Application();