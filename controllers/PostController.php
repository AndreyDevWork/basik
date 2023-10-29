<?php

namespace app\controllers;

use yii\web\Controller;
use yii;
use app\models\PostForm;
use app\models\Product;
use yii\data\ActiveDataProvider;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = new PostForm();
        $dataProvider = new ActiveDataProvider([
           'query' => $model->findAllPosts(),
            'pagination' => [
                'pageSize' => 20,
            ]
        ]);

        if($model->load(Yii::$app->request->post())) {
            $model->select = json_encode($model->select);
            $model->save();
            $this->refresh();
        }
        return $this->render('index', compact('model', 'dataProvider'));
    }
    public function actionDataBase() {
        $model = new PostForm();
        $products = new Product();
        $rows = PostForm::find()->all();
        $where = PostForm::find()->where(['name' => 'RUSSIA'])->all();
        $like = PostForm::find()->asArray()->where(['like', 'select', 'g'])->all();
        $moreThan = PostForm::find()->asArray()->where(['>=', 'id', '50'])->all();
        $sortDesc = Product::find()->orderBy(['id' => SORT_DESC])->all();
        $asArray = Product::find()->asArray()->all();
        return $this->render('data_base', compact('model', 'rows', 'products', 'sortDesc', 'asArray', 'where', 'like', 'moreThan'));
    }
}