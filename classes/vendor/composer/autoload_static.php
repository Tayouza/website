<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00d4175ed47f8b4bed994b7d2dea7963
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00d4175ed47f8b4bed994b7d2dea7963::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00d4175ed47f8b4bed994b7d2dea7963::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00d4175ed47f8b4bed994b7d2dea7963::$classMap;

        }, null, ClassLoader::class);
    }
}
