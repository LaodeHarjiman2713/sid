<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataKeluarga */

$this->title = 'Tambah Data Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Data Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kartu-keluarga-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
