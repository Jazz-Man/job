<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Views\\' => array($baseDir . '/app/Views'),
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'RedBeanPHP\\' => array($vendorDir . '/gabordemooij/redbean/RedBeanPHP'),
    'PHPSecureSession\\' => array($vendorDir . '/ezimuel/php-secure-session/src'),
    'Models\\' => array($baseDir . '/app/Models'),
    'FastRoute\\' => array($vendorDir . '/nikic/fast-route/src'),
    'Core\\' => array($baseDir . '/app/Core'),
    'Controllers\\' => array($baseDir . '/app/Controllers'),
);
