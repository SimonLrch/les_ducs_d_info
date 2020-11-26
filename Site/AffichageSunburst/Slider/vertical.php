<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
    <div class="frame">
    <div class="control">
        <?php
        $default = new EJ\Slider("default");
        echo $default->value(30)->orientation("vertical")->height(200)->render();
        ?>
        <span>Default</span>
    </div>
    <div class="control">
        <?php
		$minrange = new EJ\Slider("minrange");
		echo $minrange->value(55)->orientation("vertical")->sliderType("minRange")->height(200)->render();
        ?>
          <span>MinRange</span>
    </div>
    <div class="control">
        <?php
		$rangeslider = new EJ\Slider("rangeslider");
		echo $rangeslider->values([20,80])->orientation("vertical")->sliderType("Range")->height(200)->render();
        ?>
         <span>Range</span>
    </div>
</div>
<div>

<style>
    
    .frame {
            height: 250px;
            width: 365px;
            padding: 0px 40px;
            display:table;
    }

        .frame .e-slider-wrap {
            margin: 15px 30px;
        }

    .control {
        float: left;
    }
    
            .control span {
                color: #676767;
                display: block;
                font-size: 11px;
                text-align: center;
            }
   
</style>