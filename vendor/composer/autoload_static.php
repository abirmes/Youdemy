<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fc55a313b4a94ffe17f9dbfe2dea3a3
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0fc55a313b4a94ffe17f9dbfe2dea3a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0fc55a313b4a94ffe17f9dbfe2dea3a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0fc55a313b4a94ffe17f9dbfe2dea3a3::$classMap;

        }, null, ClassLoader::class);
    }
}
