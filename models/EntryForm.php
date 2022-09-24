<?php

namespace app\models;

use Yii;
use yii\base\Model; //yii\db\ActiveRecord correspond to db but not this

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'], //both the name and email values are required
            ['email', 'email'], //the email data must be a syntactically valid email address
        ];
    }
}