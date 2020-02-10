<?php

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord // имя класса == название таблицы в базе
{

    public static function tableName() // не обязательный метод, который возвращает название таблицы
    {
        return 'post';
    }

    public function getCategory() // вызываем метод
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']); // из таблицы category берем поле id и из текущей модели post берем поле category_id
    }

}