<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c77fa52d520091c2801dc08baf85a0f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c77fa52d520091c2801dc08baf85a0f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c77fa52d520091c2801dc08baf85a0f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c77fa52d520091c2801dc08baf85a0f::$classMap;

        }, null, ClassLoader::class);
    }
}
