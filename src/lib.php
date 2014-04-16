<?php
function getServices($dirServices)
{
    $services = array();
    foreach (glob($dirServices.'/*', GLOB_ONLYDIR) as $service) {
        // Service properties
        $name = basename($service);
        $controller = $service.'/index.php';
        $help = $service.'/help.php';

        // Make sure service declares a working controller
        if (is_readable($controller)) {
            $services[$name] = array(
                'name' => $name,
                'controller' => $controller
            );

            // Optional help controller
            if (is_readable($help)) {
                $services[$name]['help'] = $help;
            }
        }
    }

    return $services;
}

function fixOutput($ouput)
{
    return substr(filter_var(trim($ouput), FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES), 0, 160);
}
