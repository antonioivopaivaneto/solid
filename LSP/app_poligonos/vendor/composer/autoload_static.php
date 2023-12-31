<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit722e1cfaecd777ba7f4766dd8712b708
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit722e1cfaecd777ba7f4766dd8712b708::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit722e1cfaecd777ba7f4766dd8712b708::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit722e1cfaecd777ba7f4766dd8712b708::$classMap;

        }, null, ClassLoader::class);
    }
}
