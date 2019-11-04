<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd895863944df8e67dc3547239b5c2e42
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd895863944df8e67dc3547239b5c2e42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd895863944df8e67dc3547239b5c2e42::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
