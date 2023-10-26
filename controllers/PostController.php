<?php

namespace app\controllers;

use yii\web\Controller;
use yii;
use app\models\PostForm;
use function Psy\debug;
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
}