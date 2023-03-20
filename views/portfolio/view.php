<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Portfolio;
use yii\db\BaseActiveRecord;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */

\yii\web\YiiAsset::register($this);
?>
<div class="portfolio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php $data = Portfolio::findOne($model); ?>
    <?php echo '<p>Скиллы: ' . $data->skills . '</p>'?>
    <?php echo '<p>Знания: ' . $data->knowledge . '</p>'?>
    <?php echo Html::decode($data['description']);?>

</div>
