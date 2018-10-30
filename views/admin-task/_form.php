<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\tables\tasks */
/* @var $form yii\widgets\ActiveForm */
/* @var $users array */
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(
        \yii\jui\DatePicker::class,
            ['dateFormat' => 'yyyy-MM-dd', 'language' => 'russian']
    )

//     \yii\jui\DatePicker::widget([
//         'model' => $model,
//         'attribute' => 'date',
//         'dateFormat' => 'yyyy-MM-dd',
//         'language' => 'russian'
//    ])?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->dropDownList($users) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
