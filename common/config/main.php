<?php
$modules = array_merge(   
    require(__DIR__ . '/modules.php')
);

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
    'modules' => $modules
];
