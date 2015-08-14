<?php

namespace common\models;

use Yii;
use common\models\Song;
use common\models\RoomTable;

/**
 * This is the model class for table "{{%song_order}}".
 *
 * @property integer $id
 * @property integer $song_id
 * @property integer $room_id
 * @property integer $check
 */
class SongOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%song_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['song_id', 'room_id'], 'required'],
            [['song_id', 'room_id', 'check'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'song_id' => 'Песня',
            'room_id' => 'Номер стола',
            'check' => 'Спета',
        ];
    }
    /**
     * @inheritdoc
     */
    public function getSong()
    {
        return $this->HasOne(Song::className(),['id' => 'song_id']);
    }
    /**
     * @inheritdoc
     */
    public function getRoomTable()
    {
        return $this->HasOne(RoomTable::className(),['id' => 'room_id']);
    }
}
