<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SongOrder */

$this->title = 'Добавить в очередь песню';
?>
<div class="song-order-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
