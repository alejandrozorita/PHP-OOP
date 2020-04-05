<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ac7f4a2758280937e3676766c2178cc
{
    public static $files = array (
        'a7af6cce7635d6949632663a2298d287' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MetodosMagicos\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MetodosMagicos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ac7f4a2758280937e3676766c2178cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ac7f4a2758280937e3676766c2178cc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
