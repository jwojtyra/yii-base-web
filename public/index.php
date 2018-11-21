<?php

use yii\di\Container;

//define('YII_DEBUG', true);
//defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER', true);
//defined('YII_ROOT') or define('YII_ROOT', COMPOSER_CONFIG_PLUGIN_BASEDIR);

require __DIR__ . '/../vendor/yiisoft/yii-core/config/defines.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii-core/src/helpers/Yii.php';

//Yii::setAlias('@yii/build', __DIR__);


try
{
    (function ()
    {
        $container = new Container(require __DIR__ . '/../config/di.php');
        \yii\helpers\Yii::setContainer($container);
        $application = $container->get('app');
        $application->run();
    })();
} catch (
\yii\di\exceptions\InvalidConfigException |
\yii\di\exceptions\NotInstantiableException |
\yii\exceptions\InvalidConfigException
$e)
{
    echo '<pre>';
    throw $e;
}
