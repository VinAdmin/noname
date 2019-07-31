<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3865d9c1822eadc239a28161b47f00dd
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3865d9c1822eadc239a28161b47f00dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3865d9c1822eadc239a28161b47f00dd::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit3865d9c1822eadc239a28161b47f00dd::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
