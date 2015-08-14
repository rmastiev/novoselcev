<?php

namespace common\models;

use Yii;
use common\models\SongOrder;

/**
 * This is the model class for table "{{%song}}".
 *
 * @property integer $id
 * @property string $singer
 * @property string $song
 */
class Song extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return '{{%song}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['singer', 'song'], 'required'],
            [['singer', 'song'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'singer' => 'Исполнитель',
            'song' => 'Песня',
            'fullSong' => Yii::t('app', 'Песня')
        ];
    }
    /**
     * @inheritdoc
     */
    public function getSongOrder()
    {
        return $this->hasMany(SongOrder::className(),['song_id' => 'id']);
    }

    public function getFullSong()
    {
        return $this->singer . ' - ' . $this->song;
    }
}
