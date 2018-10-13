<?php
namespace app\validators;
use yii\validators\Validator;


class CapsValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if ($model == 'name' && $attribute != test){
            echo 'norm';
        }else{
            echo 'bed';
        }
    }
}