<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int $idUser
 * @property string $description
 * @property string $skills
 * @property string $knowledge
 *
 * @property User $idUser0
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'skills', 'knowledge'], 'required'],
            [['idUser'], 'integer'],
            [['description'], 'string'],
            [['skills', 'knowledge'], 'string', 'max' => 255],
            [['idUser'], 'exist', 'skipOnError' => true, 'targetClass' => user::class, 'targetAttribute' => ['idUser' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idUser' => 'Id User',
            'description' => 'Description',
            'skills' => 'Skills',
            'knowledge' => 'Knowledge',
        ];
    }

    /**
     * Gets query for [[IdUser0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'idUser']);
    }
}
