<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $autocomplete=new EJ\DateTimePicker("selectCar");
    echo $autocomplete->width("100%")->watermarkText("Select a Date")->render();
    ?>
</div>
<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
