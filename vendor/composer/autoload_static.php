<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee5fe5e78053f47170e0c2dac5c10e2e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ErrorsController' => __DIR__ . '/../..' . '/app/controllers/ErrorsController.php',
        'App\\Controllers\\PostsController' => __DIR__ . '/../..' . '/app/controllers/PostsController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Helper\\Helper\\Helper' => __DIR__ . '/../..' . '/app/helpers/Helper.php',
        'App\\Helpers\\DataCompare' => __DIR__ . '/../..' . '/app/helpers/DataCompare.php',
        'App\\Helpers\\FormHelper' => __DIR__ . '/../..' . '/app/helpers/FormHelper.php',
        'App\\Helpers\\LogInspect' => __DIR__ . '/../..' . '/app/helpers/LogInspect.php',
        'App\\Libs\\Controller' => __DIR__ . '/../..' . '/app/libs/Controller.php',
        'App\\Libs\\Database' => __DIR__ . '/../..' . '/app/libs/Database.php',
        'App\\Libs\\View' => __DIR__ . '/../..' . '/app/libs/View.php',
        'App\\Models\\Db' => __DIR__ . '/../..' . '/app/models/db.php',
        'App\\Posts' => __DIR__ . '/../..' . '/app/models/Posts.php',
        'App\\TestController' => __DIR__ . '/../..' . '/app/controllers/TestController.php',
        'App\\ViewsController' => __DIR__ . '/../..' . '/app/controllers/ViewsController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee5fe5e78053f47170e0c2dac5c10e2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee5fe5e78053f47170e0c2dac5c10e2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee5fe5e78053f47170e0c2dac5c10e2e::$classMap;

        }, null, ClassLoader::class);
    }
}
