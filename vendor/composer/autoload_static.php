<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf74d6302ff22d6ca9f1ebbf1a19d8e44
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yurun\\Util\\' => 11,
            'Yurun\\OAuthLogin\\' => 17,
        ),
        'W' => 
        array (
            'WhichBrowser\\' => 13,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'R' => 
        array (
            'Rahul900day\\Gpt3Encoder\\' => 24,
        ),
        'P' => 
        array (
            'Puock\\Theme\\' => 12,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'O' => 
        array (
            'Orhanerday\\OpenAi\\' => 18,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yurun\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/yurunsoft/yurun-http/src',
        ),
        'Yurun\\OAuthLogin\\' => 
        array (
            0 => __DIR__ . '/..' . '/yurunsoft/yurun-oauth-login/src',
        ),
        'WhichBrowser\\' => 
        array (
            0 => __DIR__ . '/..' . '/whichbrowser/parser/src',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Rahul900day\\Gpt3Encoder\\' => 
        array (
            0 => __DIR__ . '/..' . '/rahul900day/gpt-3-encoder/src',
        ),
        'Puock\\Theme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Orhanerday\\OpenAi\\' => 
        array (
            0 => __DIR__ . '/..' . '/orhanerday/open-ai/src',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Ip2Region' => __DIR__ . '/..' . '/zoujingli/ip2region/Ip2Region.php',
        'XdbSearcher' => __DIR__ . '/..' . '/zoujingli/ip2region/XdbSearcher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf74d6302ff22d6ca9f1ebbf1a19d8e44::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf74d6302ff22d6ca9f1ebbf1a19d8e44::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf74d6302ff22d6ca9f1ebbf1a19d8e44::$classMap;

        }, null, ClassLoader::class);
    }
}
