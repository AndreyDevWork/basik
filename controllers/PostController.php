<?php

namespace app\controllers;

use yii\web\Controller;
use yii;
use app\models\PostForm;

class PostController extends Controller
{
    public function actionIndex()
    {
        $model = new PostForm();
        if(Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            $model->select = json_encode($model->select);
            $model->save();
        }
        return $this->render('index', compact('model'));
    }
}