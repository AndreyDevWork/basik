<?php
/** @var yii\web\View $this */
/** @var app\models\PostForm $model */
/** @var \yii\db\ActiveQuery $rows */
/** @var \yii\db\ActiveQuery $where */
/** @var \yii\db\ActiveQuery $one */
/** @var \yii\db\ActiveQuery $count */
/** @var \yii\db\ActiveQuery $moreThan */
/** @var \yii\db\ActiveQuery $like */
/** @var \yii\db\ActiveQuery $bySqlSelect */
/** @var app\models\Product $products */
/** @var \yii\db\ActiveQuery $sortDesc */
/** @var \yii\db\ActiveQuery $asArray */

?>
    where
<h1>Работа с базой данных</h1>
<p>Модели называть по имени таблиц!</p>

<p></p>
<?php
dump($rows);
dump($where);
dump($like);
dump($moreThan);
dump($sortDesc);
dump($asArray);
dump($one);
dump($count);
dump($bySqlSelect);

?>