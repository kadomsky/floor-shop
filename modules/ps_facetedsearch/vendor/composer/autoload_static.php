<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7649db59577c7cd0b14451cd545e4816
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\FacetedSearch\\Tests\\' => 38,
            'PrestaShop\\Module\\FacetedSearch\\Controller\\' => 43,
            'PrestaShop\\Module\\FacetedSearch\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\FacetedSearch\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests/php/FacetedSearch',
        ),
        'PrestaShop\\Module\\FacetedSearch\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
        'PrestaShop\\Module\\FacetedSearch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Ps_Facetedsearch' => __DIR__ . '/../..' . '/ps_facetedsearch.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7649db59577c7cd0b14451cd545e4816::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7649db59577c7cd0b14451cd545e4816::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7649db59577c7cd0b14451cd545e4816::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit7649db59577c7cd0b14451cd545e4816::$classMap;

        }, null, ClassLoader::class);
    }
}
