<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6928a5848cccdfa96e9d33ca1086087b
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '538ca81a9a966a6716601ecf48f4eaef' => __DIR__ . '/..' . '/opis/closure/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'O' => 
        array (
            'Opis\\Closure\\' => 13,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'EasySwoole\\Validate\\' => 20,
            'EasySwoole\\Utility\\' => 19,
            'EasySwoole\\Trigger\\' => 19,
            'EasySwoole\\Task\\' => 16,
            'EasySwoole\\Spl\\Test\\' => 20,
            'EasySwoole\\Spl\\' => 15,
            'EasySwoole\\Socket\\' => 18,
            'EasySwoole\\Session\\Test\\' => 24,
            'EasySwoole\\Session\\' => 19,
            'EasySwoole\\ParserDown\\' => 22,
            'EasySwoole\\Log\\' => 15,
            'EasySwoole\\Http\\' => 16,
            'EasySwoole\\HttpClient\\Test\\' => 27,
            'EasySwoole\\HttpClient\\' => 22,
            'EasySwoole\\HttpAnnotation\\' => 26,
            'EasySwoole\\EasySwoole\\' => 22,
            'EasySwoole\\Config\\Test\\' => 23,
            'EasySwoole\\Config\\' => 18,
            'EasySwoole\\Component\\Tests\\' => 27,
            'EasySwoole\\Component\\' => 21,
            'EasySwoole\\Annotation\\' => 22,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 22,
            'Doctrine\\Common\\Annotations\\' => 28,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Opis\\Closure\\' => 
        array (
            0 => __DIR__ . '/..' . '/opis/closure/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'EasySwoole\\Validate\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/validate/src',
        ),
        'EasySwoole\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/utility/src',
        ),
        'EasySwoole\\Trigger\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/trigger/src',
        ),
        'EasySwoole\\Task\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/task/src',
        ),
        'EasySwoole\\Spl\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/test',
        ),
        'EasySwoole\\Spl\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/src',
        ),
        'EasySwoole\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/socket/src',
        ),
        'EasySwoole\\Session\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/session/tests',
        ),
        'EasySwoole\\Session\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/session/src',
        ),
        'EasySwoole\\ParserDown\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/parsedown/src',
        ),
        'EasySwoole\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/log/src',
        ),
        'EasySwoole\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http/src',
        ),
        'EasySwoole\\HttpClient\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http-client/tests',
        ),
        'EasySwoole\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http-client/src',
        ),
        'EasySwoole\\HttpAnnotation\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http-annotation/src',
        ),
        'EasySwoole\\EasySwoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/src',
        ),
        'EasySwoole\\Config\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/config/tests',
        ),
        'EasySwoole\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/config/src',
        ),
        'EasySwoole\\Component\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/Tests',
        ),
        'EasySwoole\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/src',
        ),
        'EasySwoole\\Annotation\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/annotation/src',
        ),
        'Doctrine\\Common\\Lexer\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/lexer/lib/Doctrine/Common/Lexer',
        ),
        'Doctrine\\Common\\Annotations\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/annotations/lib/Doctrine/Common/Annotations',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6928a5848cccdfa96e9d33ca1086087b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6928a5848cccdfa96e9d33ca1086087b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
