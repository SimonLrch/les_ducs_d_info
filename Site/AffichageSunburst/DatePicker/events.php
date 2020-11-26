<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $datepicker=new EJ\DatePicker("datePicker");
    echo $datepicker->width("100%")->create("onCreate")->select("onSelect")->open("onOpen")->close("onClose")->value(new DateTime())->render();
    ?>
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("clearLog")->type("button")->render();
        ?>
    </div>
</div>

<script>
    function onCreate(args){ 
        jQuery.addEventLog("DatePicker has been <span class='eventTitle'>created.</span>");
    }
    function onSelect(args) {
        jQuery.addEventLog(args.value + " was <span class='eventTitle'>selected.</span>");
    }
    function onOpen(args) {
        jQuery.addEventLog("DatePicker popup has been <span class='eventTitle'>opened.</span>");
    }
    function onClose(args) {
        jQuery.addEventLog("DatePicker popup has been <span class='eventTitle'>closed.</span>");
    }
    function clearLog() {
        jQuery.clearEventLog();
    }
</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
