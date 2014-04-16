<?php
// Response configuration
header('Content-Type: text/plain; charset=utf-8');

// PHP configuration
if (isset($_GET['debug'])) {
    $debug = true;
    ini_set('display_errors', true);
    ini_set('html_errors', false);
} else {
    $debug = false;
    ini_set('display_errors', false);
}

// Dependencies
require_once(__DIR__.'/../lib.php');

// Filter input
$service = filter_input(INPUT_GET, 'service', FILTER_DEFAULT, FILTER_NULL_ON_FAILURE);
$parameters = filter_input(INPUT_GET, 'parameters', FILTER_SANITIZE_STRING);

// Get services list
$services = getServices(__DIR__.'/../services');

try {
    // Sanity checks
    if (false === $service) {
        throw new \InvalidArgumentException('Please provide a service name');
    }

    // Service selection
    if (!in_array($service, array_keys($services))) {
        throw new \InvalidArgumentException('Unkown service - service='.$service);
    }
} catch (\Exception $e) {
    if (isset($_GET['debug'])) {
        throw $e;
    }
    $service = 'default';
}

// Execute service, pass output to fixOutput function which makes sure we are not sending "dangerous" content
ob_start('fixOutput');
require($services[$service]['controller']);
ob_end_flush();
