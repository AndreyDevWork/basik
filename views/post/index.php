<?php
/** @var app\models\PostForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>

<h1>POST</h1>

<?php Pjax::begin(['id' => 'post']); ?>
    <?php $form = ActiveForm::begin([

        'options' => [
            'class' => 'form-horizontal',
            'id' => 'login-form',
            'data-pjax' => true,
        ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput()->label('Имя') ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'message')->textarea()->label('Сообщение') ?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>


    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>





