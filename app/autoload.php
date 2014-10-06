<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
/*$loader = require __DIR__.'/../vendor/autoload.php';

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

// Use APC for autoloading to improve performance.
// Change 'sf2' to a unique prefix in order to prevent cache key conflicts
// with other applications also using APC.
$apcLoader = new \Symfony\Component\ClassLoader\ApcClassLoader('sf2', $loader);
$loader->unregister();
$apcLoader->register(true);

return $apcLoader;
*/

require_once(__DIR__ . '/../vendor/alexey-kupershtokh/lazy-apc-class-loader/src/LazyApcClassLoader.php');

$loader = new \AlexeyKupershtokh\LazyApcClassLoader\LazyApcClassLoader(
    'sf2_',
    function () {
        // init composer autoloader if ever needed
        return require_once __DIR__ . '/../vendor/autoload.php';
    }
);
$loader->register();

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;