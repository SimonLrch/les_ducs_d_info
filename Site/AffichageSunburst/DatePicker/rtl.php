<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $date = new \EJ\DatePicker("datepicker");
    echo $date->enableRTL(true)->width("100%")->height("40px")->watermarkText("select a date")->render();
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
