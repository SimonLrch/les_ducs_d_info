<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
<div class="frame">
    <div>
        <div class="rangetxt">Range</div>
    </div>
    <?php
	$range = new EJ\Slider("rangeslider");
	echo $range->values([20,70])->sliderType("Range")->showButtons(true)->Render();
    ?>
    <br />
    <br />
    <div>
        <div class="minrangetxt">Min-Range</div>
    </div>
    <?php
	$minrange = new EJ\Slider("minslider");
	echo $minrange->value(40)->sliderType("minRange")->showButtons(true)->showScale(true)->largeStep(20)->smallStep(5)->incrementStep(5)->Render();
    ?>
</div>
</div>
<style>
    .frame {
        width: 458px;
    }

    .minrangetxt {
            font-size: 15px;
            margin-bottom: 30px;
        }

        .rangetxt {
            font-size: 15px;
            margin-bottom: 20px;
        }
</style>
