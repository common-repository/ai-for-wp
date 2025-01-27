<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4110cc5b266ff836b78492eb2013d368
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpAi\\CodeWpHelper\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpAi\\CodeWpHelper\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WpAi\\CodeWpHelper\\AdminPage' => __DIR__ . '/../..' . '/includes/AdminPage.php',
        'WpAi\\CodeWpHelper\\Ajax' => __DIR__ . '/../..' . '/includes/Ajax.php',
        'WpAi\\CodeWpHelper\\Cron' => __DIR__ . '/../..' . '/includes/Cron.php',
        'WpAi\\CodeWpHelper\\Filters' => __DIR__ . '/../..' . '/includes/Filters.php',
        'WpAi\\CodeWpHelper\\Main' => __DIR__ . '/../..' . '/includes/Main.php',
        'WpAi\\CodeWpHelper\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
        'WpAi\\CodeWpHelper\\Utils\\RegisterAjaxMethod' => __DIR__ . '/../..' . '/includes/Utils/RegisterAjaxMethod.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4110cc5b266ff836b78492eb2013d368::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4110cc5b266ff836b78492eb2013d368::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4110cc5b266ff836b78492eb2013d368::$classMap;

        }, null, ClassLoader::class);
    }
}
