<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
<div class="frame">
    <div>
        <div class="txt e-rtl">Range</div>
    </div>
    <?php
	$range = new EJ\Slider("rtlslider1");
	echo $range->values([20,70])->sliderType("Range")->enableRTL(true)->Render();
    ?>
    <br />
    <br />
    <div>
        <div class="txt e-rtl">MinRange</div>
    </div>
    <?php
	$minrange = new EJ\Slider("rtlslider2");
	echo $minrange->value(40)->sliderType("minRange")->enableRTL(true)->Render();
    ?>
</div>
</div>
<style>
    .frame {
        width: 458px;
    }

    .txt {
        direction: rtl;
        font-size: 15px;
        margin-bottom: 13px;
        text-align: right;
    }
</style>
