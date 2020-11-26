<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
<div class="frame">
    <div>
        <div class="txt">Range</div>
    </div>
    <?php
	$range = new EJ\Slider("rangeslider");
	echo $range->values([20,70])->sliderType("Range")->Render();
    ?>
    <br />
    <br />
    <div>
        <div class="txt">MinRange</div>
    </div>
    <?php
	$minrange = new EJ\Slider("minslider");
	echo $minrange->value(40)->sliderType("minRange")->Render();
    ?>
</div>
</div>
<style>
    .frame {
        width: 458px;
    }

    .txt {
        font-size: 15px;
        margin-bottom: 13px;
    }
</style>
