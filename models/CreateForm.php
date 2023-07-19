<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class CreateForm extends Model
{
    public $news_headline;
    public $news_text;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['news_headline', 'news_text'], 'required'],
        ];
    }

}
