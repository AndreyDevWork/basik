<?php
/** @var yii\web\View $this */
/** @var app\models\PostForm $model */
/** @var yii\data\ActiveDataProvider $dataProvider */


use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\select2\Select2;
use yii\widgets\ListView;
use yii\bootstrap5\Tabs;


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

echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_post',
]);

?>


<h1>POST</h1>
<p>Model - используем когда не требуется работа с БД</p>
<p>ActiveRecord - используем когда требуется работа с БД</p>
<?php //Pjax::begin(['id' => 'post']); ?>
    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'postForm',
            'data-pjax' => true,
        ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'message')->textarea() ?>
    <?= $form->field($model, 'select')->widget(Select2::classname(), [
        'data' => $data,
        'language' => 'de',
        'options' => ['multiple' => true, 'placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>
    <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
<?php //Pjax::end(); ?>






<?php
echo Tabs::widget([
    'items' => [
        [
            'label' => 'One',
            'content' => 'Anim pariatur cliche...',
            'active' => true
        ],
        [
            'label' => 'Two',
            'content' => 'Anim pariaввввtur cliche...',
            'options' => ['id' => 'myveryownID'],
        ],


    ],
]); ?>

