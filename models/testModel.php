<?php
namespace app\models;
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

}