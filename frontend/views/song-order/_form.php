<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Song;
use common\models\RoomTable;


/* @var $this yii\web\View */
/* @var $model common\models\SongOrder */
/* @var $form yii\widgets\ActiveForm */
?>
<div>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'song_id')->dropDownList(ArrayHelper::map(Song::find()->all(),'id','fullSong')) ?>

<?= $form->field($model, 'room_id')->dropDownList(ArrayHelper::map(RoomTable::find()->all(),'id','room')) ?>

<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

</div