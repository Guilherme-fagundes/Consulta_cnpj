<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'test\\' => 5,
        ),
        'C' => 
        array (
            'Consultas\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'test\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test',
        ),
        'Consultas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite59fbb3f2b32d99cf568c429a4d94dc4::$classMap;

        }, null, ClassLoader::class);
    }
}
