<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1278c62850128a83458cc92c7ba157b
{
    public static $prefixesPsr0 = array (
        'b' => 
        array (
            'bdno' => 
            array (
                0 => 'C:\\xampp\\htdocs\\www\\MVC_aula\\vendor',
            ),
        ),
        'A' => 
        array (
            'App' => 
            array (
                0 => __DIR__ . '/../..' . '/',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite1278c62850128a83458cc92c7ba157b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}