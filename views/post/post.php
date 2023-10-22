<?php
/** @var app\models\TestForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>POST</h1>
<?php $form = ActiveForm::begin([

    'options' => [
        'class' => 'form-horizontal',
        'id' => 'login-form',
        ]
]); ?>

<?= $form->field($model, 'name')->textInput()->label('Имя') ?>
<?= $form->field($model, 'email')->textInput() ?>
<?= $form->field($model, 'text')->textarea()->label('Сообщение') ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>

