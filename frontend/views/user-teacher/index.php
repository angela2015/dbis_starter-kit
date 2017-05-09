<?php
/* @var $this yii\web\View */
?>

<div class="row animated-blog">
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'pager'=>[
            'hideOnSinglePage'=>true,
        ]
        ,'summary'=>'',
        'itemView'=>'_item'
    ])?>
    </div>