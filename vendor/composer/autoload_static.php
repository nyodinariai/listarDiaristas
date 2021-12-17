<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e6f86cdd6825a86ef19f2308ebdd976
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e6f86cdd6825a86ef19f2308ebdd976::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e6f86cdd6825a86ef19f2308ebdd976::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e6f86cdd6825a86ef19f2308ebdd976::$classMap;

        }, null, ClassLoader::class);
    }
}
