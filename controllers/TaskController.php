<?php

namespace app\controllers;
use app\models\tables\Tasks;
use app\models\tables\Users;
use app\models\testModel;
use app\models\User;
use yii\data\ActiveDataProvider;
use yii\debug\models\timeline\DataProvider;
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
        $month = date('n');

        $provider = new ActiveDataProvider([
            'query' => Tasks::getByMonth($month)
        ]);
        return $this->render('index', ['provider' => $provider]);

    }

    public function actionTest(){
//        $model = new testModel();
//        $model->even = 2;
//        $model->odd = 3;
//        var_dump($model->validate());
//        $tasks = Tasks::find()->all();
//        return $this->render('index', ['list'=>$tasks]);
//        $id = 1;
//        $res = \Yii::$app->db->createCommand("
//            SELECT * FROM test WHERE id = :id
//        ")
//            ->bindParam(':id', $id)
//            ->queryOne();
//        var_dump($res);
        /*Создание новой строчки в таблице*/
//        $user = new Users();
//        $user->login = "Ivanov";
//        $user->password = md5("qwer");
//        $user->role = 1;
//
//        //валидирует автоматом
//        $user->save();
        /*Чтение*/
//
//        $user = Users::findOne(1);
//        var_dump($user);

        /*Del*/

        $user = Users::findOne(2);
        var_dump($user->getRole());
    }
}