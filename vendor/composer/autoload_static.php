<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13e7c64105aaadb6978c303d703465d5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Andreterceiro\\FirstPackage\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Andreterceiro\\FirstPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit13e7c64105aaadb6978c303d703465d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13e7c64105aaadb6978c303d703465d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13e7c64105aaadb6978c303d703465d5::$classMap;

        }, null, ClassLoader::class);
    }
}
