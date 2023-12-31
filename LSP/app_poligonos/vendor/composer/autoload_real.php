<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit722e1cfaecd777ba7f4766dd8712b708
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

        spl_autoload_register(array('ComposerAutoloaderInit722e1cfaecd777ba7f4766dd8712b708', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit722e1cfaecd777ba7f4766dd8712b708', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit722e1cfaecd777ba7f4766dd8712b708::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
