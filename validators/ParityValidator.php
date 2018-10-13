<?php
namespace app\validators;
use yii\validators\Validator;


class ParityValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if ($attribute%2 == 0){
            echo 'чет';
        }else{
            echo 'не чет';
        }
    }
}