<?php
use yii\helpers\Html;

$this->title = 'test';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        TEST page REACT
    </p>
    <div id="like_button_container"></div>

    <div id="root">Here</div>
    <div>HELLLOOOOOOO</div>
    <h1>fwafwafawfawfawfawf</h1>
    
    <?php $this->registerJsFile(Yii::getAlias('@web/js/like_button.js')) ?>
    <?php $this->registerJsFile(Yii::getAlias('@web/js/test1.js'), $options = ['type' => "text/babel"]) ?>
</div>

