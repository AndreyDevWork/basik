<?php
/** @var app\models\PostForm $model */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\select2\Select2;



$data = [
    "red" => "red",
    "green" => "green",
    "blue" => "blue",
    "orange" => "orange",
    "white" => "white",
    "black" => "black",
    "purple" => "purple",
    "cyan" => "cyan",
    "teal" => "teal"
];
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
<!--    --><?php //= $form->field($model, 'message')->textarea()->label('Сообщение') ?>
    <?= $form->field($model, 'message')->widget(Select2::classname(), [
        'data' => $data,
        'language' => 'de',
        'options' => ['multiple' => true, 'placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>








