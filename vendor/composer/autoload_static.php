<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81e0141fa94bc2cd4bbb1836a4e5b117
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TexLab\\MyDB\\' => 12,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TexLab\\MyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/texlab/mydb/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81e0141fa94bc2cd4bbb1836a4e5b117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81e0141fa94bc2cd4bbb1836a4e5b117::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
