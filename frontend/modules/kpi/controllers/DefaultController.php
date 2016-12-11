<?php

namespace frontend\modules\kpi\controllers;

use yii\web\Controller;

/**
 * Default controller for the `kpi` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCup($topic=NULL){
        $this->layout = 'cup';
        return $this->render('cup',[
            'topic'=>$topic
        ]);
    }
}
