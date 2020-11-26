<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $date = new \EJ\DatePicker("datepicker");
    echo $date->width("100%")->tag("div")->watermarkText("select a date")->displayInline(true)->render();
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
