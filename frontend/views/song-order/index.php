<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Очередь песен';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="songOrder">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <p>
        <?= Html::a('Добавить песню в очередь', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


	<?= GridView::widget([
        'dataProvider' => $dataProviderNotCheck,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'song.fullSong',
            'roomTable.room',

            ['class' => 'yii\grid\ActionColumn',
            	'header' => 'Песня спета',
            	'headerOptions' => ['width' => '80'],
            	'template' => '{update}',
            	/*'buttons' => [
            		'update' => function($url,$model){
            			return Html::a('Действие', $url);

            		},
        		],*/
            ],
        ],
    ]); ?>


    <h2><?= Html::encode($this->title) ?></h2>

    <?= GridView::widget([
        'dataProvider' => $dataProviderCheck,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'song.fullSong',
            'roomTable.room',
        ],
    ]); ?>


</div>