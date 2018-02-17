<?php

/* @var $this yii\web\View */

$this->title = 'Simple 3D Effect';
?>
<div class="site-index">

    <div class="col-xs-12">
        <div class="par1">
            <div class="par1-forest">
                <?= \yii\helpers\Html::img('@web/images/forest.jpeg',['class'=>'par1-forest-img']) ?>
            </div>
            <div class="par1-stump">
                <?= \yii\helpers\Html::img('@web/images/stump.png',['class'=>'par1-forest-img']) ?>
            </div>
        </div>
        <div class="par1-description">
            <h3>How it works?</h3>
            <p>
                There are a simple jquery code to "slow down" stump.
            </p>
            <?= \yii\helpers\Html::encode('
                <div class="par1">
                    <div class="par1-forest">
                        <img class="par1-forest-img" src="/parallaxeffect/yii-application/frontend/web/images/forest.jpeg" alt="">            
                    </div>
                    <div class="par1-stump">
                        <img class="par1-forest-img" src="/parallaxeffect/yii-application/frontend/web/images/stump.png" alt="">            
                    </div>
                </div>
            '); ?>
        </div>
    </div>
</div>
