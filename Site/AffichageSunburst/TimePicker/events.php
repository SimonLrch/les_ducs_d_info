<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $time=new EJ\TimePicker("time");
    echo $time->width("100%")->create("oncreate")->focusIn("onFocusIn")->focusOut("onFocusOut")->change("timeValChange")->value(new DateTime())->render();
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
    function oncreate(args) {
        jQuery.addEventLog("TimePicker has been <span class='eventTitle'>created</span>.");
    }
    function timeValChange(args) {
        jQuery.addEventLog("TimePicker value has been <span class='eventTitle'>changed</span> to " + args.value + ".</br>");
    }
    function onFocusIn(args) {
        jQuery.addEventLog("TimePicker is in <span class='eventTitle'>Focus</span>");
    }
    function onFocusOut(args) {
        jQuery.addEventLog("TimePicker is out of <span class='eventTitle'>Focus</span>");
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
