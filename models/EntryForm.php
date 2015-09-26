<?php
/**
 * Created by PhpStorm.
 * User: Танька-таранька
 * Date: 26.09.2015
 * Time: 2:05
 */
namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}