<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\TestForm;

class PostController extends Controller
{
    public function actionIndex() {
        $model = new TestForm();

        return $this->render('post', compact('model'));
    }
}