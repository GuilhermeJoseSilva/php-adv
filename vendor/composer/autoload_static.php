<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdaf9e9871f37c1b5afd79c1b6d572d2f
{
    public static $files = array (
        '876237d6ec5cc2386dba42bb7c735eac' => __DIR__ . '/../..' . '/app/helpers/Constants.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'G' => 
        array (
            'GuilhermeSilva\\Avancado\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'GuilhermeSilva\\Avancado\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdaf9e9871f37c1b5afd79c1b6d572d2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdaf9e9871f37c1b5afd79c1b6d572d2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdaf9e9871f37c1b5afd79c1b6d572d2f::$classMap;

        }, null, ClassLoader::class);
    }
}
