<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame">
    <?php
	$slider = new \EJ\Slider("slider");
	echo $slider->value(40)->render();
    ?>
</div>
</div>

<style>
    .frame {
        width: 458px;
    }
</style>
