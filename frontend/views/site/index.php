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
                See our html code:
            </p>
            <pre><code class="html"><?= \yii\helpers\Html::encode('
    <div class="par1">
        <div class="par1-forest">
            <img class="par1-forest-img" src="/parallaxeffect/yii-application/frontend/web/images/forest.jpeg" alt="">            
        </div>
        <div class="par1-stump">
            <img class="par1-forest-img" src="/parallaxeffect/yii-application/frontend/web/images/stump.png" alt="">            
        </div>
    </div>');?></code></pre>

            <p>
                css:
            </p>
            <pre><code class="css"><?= \yii\helpers\Html::encode('
    .par1-forest{
        position: relative;
    }
    .par1-forest-img{
        width: 100%;
    }
    .par1-stump{
        position: absolute;
        width: 100px;
        bottom: -100px;
        left: 30%;
    }');?></code></pre>

            <p>
                jquery:
            </p>
            <pre><code class="css"><?= \yii\helpers\Html::encode('
    function parallaxStump() {
    // create variables
    var $window = $(window);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    var $stump = $(\'.par1-stump\');
    $stump.speed=5;
    $stump.bottompos=-200;

    // update positions
    $window.on(\'scroll resize\', function() {
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
        var yPos =  (scrollTop / $stump.speed) +$stump.bottompos;
    
        $stump.css(\'bottom\', yPos);
        console.log(scrollTop);
        console.log(yPos);
        console.log($stump.speed);
    });
    // triggers winodw scroll for refresh
    $window.trigger(\'scroll\');
    }
   parallaxStump();');?></code></pre>

        </div>
    </div>
</div>
