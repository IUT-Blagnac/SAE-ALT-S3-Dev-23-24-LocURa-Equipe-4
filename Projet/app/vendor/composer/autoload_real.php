<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit8d55995fe06bdbc3b09c260ad4fc8e98
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit8d55995fe06bdbc3b09c260ad4fc8e98', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit8d55995fe06bdbc3b09c260ad4fc8e98', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit8d55995fe06bdbc3b09c260ad4fc8e98::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
