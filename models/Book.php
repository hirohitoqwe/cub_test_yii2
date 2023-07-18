<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%books}}';
    }

}
