<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DataUser */

$this->title = 'Tanbah Data User';
$this->params['breadcrumbs'][] = ['label' => 'Data User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-user-create">
    <div class="box box-primary">
        <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>
