<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $time = new EJ\TimePicker("selectCar");
    echo $time->width("100%")->enableRTL(true)->render();
    ?>

</div>

<style>
    .cols-sample-area {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
