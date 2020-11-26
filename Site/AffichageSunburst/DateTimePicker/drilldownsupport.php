<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $drill=new EJ\DateTimePicker\TimeDrillDown();
    $date = new \EJ\DateTimePicker("datetimepicker");
    $drill->showMeridian(false)->interval(5)->enabled(true);
    echo $date->width("100%")->height("40px")->timeDrillDown($drill)->render();

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
