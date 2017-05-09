<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>



    <div class="wrapper" id="top">

        <?=Menu::widget([
            'options' => ['class' => 'sidebar-menu treeview'],
            'items' => [

                ['label' => 'Menu 1', 'url' => ['/a/index']],
                ['label' => 'Menu 2', 'url' => ['/link2/index']],
                ['label' => 'Submenu',
                    'url' => ['#'],
                    'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                    'items' => [
                        ['label' => 'Action', 'url' => '#'],
                        ['label' => 'Another action', 'url' => '#'],
                        ['label' => 'Something else here', 'url' => '#'],
                    ],
                ],
            ],
            'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
            'encodeLabels' => false, //allows you to use html in labels
            'activateParents' => true,   ]);  ?>

    </div>


<?php $this->endContent() ?>