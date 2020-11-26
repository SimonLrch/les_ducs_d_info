<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $disable='[{ "startTime": "3:00 AM", "endTime": "6:00 AM" },
                    { "startTime": "1:00 PM", "endTime": "3:00 PM" },
                    { "startTime": "8:00 PM", "endTime": "10:00 PM" }]';
    $disable=json_decode($disable,true);
    $time = new EJ\TimePicker("TimePicker");
    echo $time->width("100%")->disableTimeRanges($disable)->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width:300px;
        margin:0 auto;
        float:none;
    }
</style>
