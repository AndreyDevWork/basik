<?php

namespace app\models;
use yii\base\Model;
class TestForm extends Model
{
    public $name;
    public $email;
    public $text;
    public function rules()
    {
        return [
            // атрибут required указывает, что name, email, subject, body обязательны для заполнения
            [['name', 'email'], 'required'],
            ['email', 'email'],

        ];
    }
}