<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Portfolio $model */

$this->title = 'Редактирование Портфолио';
?>
<div class="portfolio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
