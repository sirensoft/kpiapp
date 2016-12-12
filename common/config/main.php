<?php
$mod1 = array_merge(   
    require(__DIR__ . '/modules.php')
);

$mod2 = array_merge([
    'admin' => [
        'class' => 'mods\admin\Admin',
    ],
]);

$modules=  array_merge($mod1,$mod2);

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
