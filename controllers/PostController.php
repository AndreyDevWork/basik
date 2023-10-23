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
            $model->save();
            if($model->save()) {
                Yii::$app->session->setFlash('success', 'form send complete');
            } else {
                Yii::$app->session->setFlash('error', 'form DID NON send');
            }
        }
        return $this->render('index', compact('model'));
    }
}