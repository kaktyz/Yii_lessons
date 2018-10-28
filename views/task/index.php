<?
/* @var \app\models\tables\Tasks*/
echo \yii\widgets\ListView::widget([
    'dataProvider' => $provider,
    'itemView' => 'single_cart',
    'viewParams' => [
            'hideBradcrumbs' => true
    ]
]);


