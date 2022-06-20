<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf4579f81e1324f51dbe30fbb90eae62f
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf4579f81e1324f51dbe30fbb90eae62f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf4579f81e1324f51dbe30fbb90eae62f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
