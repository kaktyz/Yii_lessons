<?= \yii\widgets\DetailView::widget([
    'model' => $model,
    'attributes' => [
        'name',
        'date',
        'description:ntext'
    ],
]) ?>