<?php

namespace common\models;

use Yii;
use common\models\SongOrder;

/**
 * This is the model class for table "{{%room_table}}".
 *
 * @property integer $id
 * @property integer $room
 */
class RoomTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%room_table}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room'], 'required'],
            [['room'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'room' => 'Номер стола',
        ];
    }
    /**
     * @inheritdoc
     */
    public function getSongOrder()
    {
        return $this->hasMany(SongOrder::className(),['room_id' => 'id']);
    }
}
