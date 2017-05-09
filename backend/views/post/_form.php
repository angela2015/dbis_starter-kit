<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use trntv\filekit\widget\Upload;
use trntv\yii\datetime\DateTimeWidget;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'summary')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'category_id')->dropDownList(\yii\helpers\ArrayHelper::map(
        $categories,
        'id',
        'title'
    ), ['prompt'=>'']) ?>

    <?php echo $form->field($model, 'body')->widget(
        \yii\imperavi\Widget::className(),
        [
            'plugins' => ['fullscreen', 'fontcolor', 'video'],
            'options' => [
                'minHeight' => 400,
                'maxHeight' => 400,
                'buttonSource' => true,
                'convertDivs' => false,
                'removeEmptyTags' => false,
                'imageUpload' => Yii::$app->urlManager->createUrl(['/file-storage/upload-imperavi'])
            ]
        ]
    ) ?>

    <?php echo $form->field($model, 'thumbnail')->widget(
        Upload::className(),
        [
            'url' => ['/file-storage/upload'],
            'maxFileSize' => 5000000, // 5 MiB
        ]);
    ?>

    <?php echo $form->field($model, 'created_by')->textInput() ?>

    <?php echo $form->field($model, 'place')->textInput() ?>

    <?php echo $form->field($model, 'toparty')->widget(Select2::classname(), [
        'data' => $departmentlist,
        'options' => ['multiple' => true,'placeholder' => '请选择 ...'],
    ]); ?>

    <?php echo $form->field($model, 'touser')->widget(Select2::classname(), [
        'data' => $userlist,
        'options' => ['multiple' => true,'placeholder' => '请选择 ...'],
        'pluginEvents' => [
            "change" => "function() {  var data_id = $(this).val();
        var s ='';
        for(var item in $(this).val())
        {
            s=s+$(this).val()[item]+',';
        }
        document.getElementsByName(\"Post[touser]\").value=s; }",
        ]
    ]);
    $model?>

    <?php echo $form->field($model, 'begintime')->widget(
        DateTimeWidget::className(),
        [
            'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
            'clientOptions' =>[
                'locale' => 'es',
            ]
        ]
    ) ?>

    <?php echo $form->field($model, 'endtime')->widget(
        DateTimeWidget::className(),
        [
            'phpDatetimeFormat' => 'yyyy-MM-dd\'T\'HH:mm:ssZZZZZ',
            'clientOptions' =>[
                'locale' => 'es',
            ]
        ]
    ) ?>

    <?php echo $form->field($model, 'status')->checkbox() ?>

    <div class="form-group">
        <?php echo Html::submitButton(
            $model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'),
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
