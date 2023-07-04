<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e511806aa85c4cd1353aaed38f6ba76
{
    public static $files = array (
        'fccd6c30fa70f56cfd048c001bd392f4' => __DIR__ . '/..' . '/seboettg/collection/src/ArrayList/Functions.php',
        'd9e2a8c16442dde496ed7a052bc063c9' => __DIR__ . '/..' . '/seboettg/citeproc-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seboettg\\Collection\\' => 20,
            'Seboettg\\CiteProc\\' => 18,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seboettg\\Collection\\' => 
        array (
            0 => __DIR__ . '/..' . '/seboettg/collection/src',
        ),
        'Seboettg\\CiteProc\\' => 
        array (
            0 => __DIR__ . '/..' . '/seboettg/citeproc-php/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/myclabs/php-enum/stubs/Stringable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e511806aa85c4cd1353aaed38f6ba76::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e511806aa85c4cd1353aaed38f6ba76::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e511806aa85c4cd1353aaed38f6ba76::$classMap;

        }, null, ClassLoader::class);
    }
}