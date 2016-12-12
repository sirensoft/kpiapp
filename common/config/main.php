<?php
$mod_plus =  require(__DIR__ . '/module_plus.php');

$modules_main = [
    'admin' => [
        'class' => 'mods\admin\Admin',
    ],
];

$modules_all=array_merge($modules_main,$mod_plus);

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'sp'=>[
            'class'=>'common\components\sp'
        ]
    ],
    'modules' => $modules_all
];
