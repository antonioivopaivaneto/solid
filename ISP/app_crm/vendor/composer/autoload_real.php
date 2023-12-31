<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteeba06c967f43f7f4ad2e52be697528b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderIniteeba06c967f43f7f4ad2e52be697528b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteeba06c967f43f7f4ad2e52be697528b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteeba06c967f43f7f4ad2e52be697528b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
