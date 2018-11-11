<?php
namespace app\models;
use app\behaviors\MyBehavior;
use yii\base\Model;

class testModel extends Model
{
    //чет
    public $even;
    //не чет
    public $odd;

    public function rules()
    {
        return [
            [['even'], 'parity']
        ];
    }

    public function behaviors()
    {
        return [
            'my' => MyBehavior::class
        ];
    }
}