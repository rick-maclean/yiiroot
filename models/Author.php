<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%author}}".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $sirname
 * @property string $biography
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%author}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'sirname'], 'required'],
            [['firstname'], 'string', 'max' => 32],
            [['sirname'], 'string', 'max' => 64],
            [['biography'], 'string', 'max' => 2048]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'firstname' => Yii::t('app', 'Firstname'),
            'sirname' => Yii::t('app', 'Sirname'),
            'biography' => Yii::t('app', 'Biography'),
        ];
    }
}
