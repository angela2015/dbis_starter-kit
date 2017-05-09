<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form ActiveForm */
?>
<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'startdate') ?>
        <?= $form->field($model, 'enddate') ?>
        <?= $form->field($model, 'teacherid') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'introduction') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'project_num') ?>
        <?= $form->field($model, 'finance_account') ?>
        <?= $form->field($model, 'paper') ?>
        <?= $form->field($model, 'patent') ?>
        <?= $form->field($model, 'software') ?>
        <?= $form->field($model, 'displayurl') ?>
        <?= $form->field($model, 'source') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- project-form -->
