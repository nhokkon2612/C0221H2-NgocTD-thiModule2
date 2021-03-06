<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbc15c7503bd8091f7ddc6c14bb17e54
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbc15c7503bd8091f7ddc6c14bb17e54::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbc15c7503bd8091f7ddc6c14bb17e54::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdbc15c7503bd8091f7ddc6c14bb17e54::$classMap;

        }, null, ClassLoader::class);
    }
}
