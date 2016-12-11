<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
/* @var $this \yii\web\View */
/* @var $content string */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div style="margin: 20px">
            <?= $content ?>                    

        </div>

        
            <div class="container">
                <p class="pull-right">
                    หมายเหตุ: 
                </p>
            </div>
       

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
