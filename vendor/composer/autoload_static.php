<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16ef67ba6a3a2c2554b31b3c11730d67
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sintex' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit16ef67ba6a3a2c2554b31b3c11730d67::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
