<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e9a20189eb6f464840ebaa8a04ffbb7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\Cache\\' => 24,
            'Symfony\\Component\\VarExporter\\' => 30,
            'Symfony\\Component\\ExpressionLanguage\\' => 37,
            'Symfony\\Component\\Cache\\' => 24,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
            'PhpMyAdmin\\MoTranslator\\' => 24,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache-contracts',
        ),
        'Symfony\\Component\\VarExporter\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-exporter',
        ),
        'Symfony\\Component\\ExpressionLanguage\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/expression-language',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'PhpMyAdmin\\MoTranslator\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmyadmin/motranslator/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        '�' => __DIR__ . '/..' . '/symfony/cache/Traits/ValueWrapper.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e9a20189eb6f464840ebaa8a04ffbb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e9a20189eb6f464840ebaa8a04ffbb7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4e9a20189eb6f464840ebaa8a04ffbb7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4e9a20189eb6f464840ebaa8a04ffbb7::$classMap;

        }, null, ClassLoader::class);
    }
}
