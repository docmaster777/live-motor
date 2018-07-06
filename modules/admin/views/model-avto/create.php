<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ModelAvto */

$this->title = 'Create Model Avto';
$this->params['breadcrumbs'][] = ['label' => 'Model Avtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="model-avto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
