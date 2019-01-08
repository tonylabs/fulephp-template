<?php

// Bootstrap the framework DO NOT edit this
require COREPATH . 'bootstrap.php';

\Autoloader::add_classes(array(
    'Asset' => APPPATH . 'classes/extension/asset.php',
    'Uri' => APPPATH . 'classes/extension/uri.php'
));

// Register the autoloader
\Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
\Fuel::$env = \Arr::get($_SERVER, 'FUEL_ENV', \Arr::get($_ENV, 'FUEL_ENV', getenv('FUEL_ENV') ?: \Fuel::DEVELOPMENT));

// Initialize the framework with the config file.
\Fuel::init('config.php');
