<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite9a17cbc8fba6c9a63220ad9f073d2f6
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Calendar\\' => 9,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Alltypedev\\Public\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Calendar\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Calendar',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
        'Alltypedev\\Public\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite9a17cbc8fba6c9a63220ad9f073d2f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite9a17cbc8fba6c9a63220ad9f073d2f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite9a17cbc8fba6c9a63220ad9f073d2f6::$classMap;

        }, null, ClassLoader::class);
    }
}
