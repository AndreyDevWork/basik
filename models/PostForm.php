<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $select
 */
class PostForm extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['message', 'select'], 'safe'],
            ['email', 'email'],
            ['name', 'in', 'range' => ['USA', 'RUSSIA'], 'message' => 'Только USA и RUSSIA'],
//            ['name', 'myCountry'], myCountry() не поддерживает клиентскую валидацию, так как он не встроенный валидатор Yii.
        ];
    }

    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'email' => 'E-mai',
          'message' => 'Сообщение',
          'select' => 'Цвет'
        ];
    }

    public function myCountry($attribute) {
        if (!in_array($this->$attribute, ['USA', 'RUSSIA'])) {
            $this->addError($attribute, 'Только USA и RUSSIA');
        }
    }

    public function findAllPosts()
    {
        return self::find();
    }


}
