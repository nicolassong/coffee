<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a6d632d67e4f39705df4f1767d24dc8
{
    public static $files = array (
        '232c0b404f8015c8e0ebb41d8d578fc6' => __DIR__ . '/..' . '/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'services\\' => 9,
        ),
        'd' => 
        array (
            'drives\\' => 7,
        ),
        'c' => 
        array (
            'component\\' => 10,
            'coffee\\' => 7,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'services\\' => 
        array (
            0 => __DIR__ . '/..' . '/services',
        ),
        'drives\\' => 
        array (
            0 => __DIR__ . '/..' . '/drives',
        ),
        'component\\' => 
        array (
            0 => __DIR__ . '/..' . '/component',
        ),
        'coffee\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffee',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/component/whoops/src/Whoops',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a6d632d67e4f39705df4f1767d24dc8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a6d632d67e4f39705df4f1767d24dc8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
