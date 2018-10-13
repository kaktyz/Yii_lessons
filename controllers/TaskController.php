<?php
/**
 * Created by PhpStorm.
 * User: accadmin
 * Date: 13.10.2018
 * Time: 17:08
 */

namespace app\controllers;
use app\models\testModel;
use yii\web\Controller;

class TaskController extends Controller
{
//    public function actionIndex(){
//        return $this->render('index', [
//            'hiWord' => 'Hi',
//            'exlane' => 'It`s a word'
//        ]);
//    }

    public function actionIndex(){
        $model = new testModel();
        $model->even = 2;
        $model->odd = 3;
        var_dump($model->validate());
    }
}