<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $color=new \EJ\ColorPicker("colorPick");
    echo  $color->value("#278787")->select("onSelect")->open("onOpen")->close("onClose")->change("onChange")->render();
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
    // Client side Events  
    function clearLog() {
        jQuery.clearEventLog();
    }
    function onOpen(args) {
        jQuery.addEventLog("ColorPicker popup has been <span class='eventTitle'>Opened</span>. ");
    }
    function onClose(args) {
        jQuery.addEventLog("ColorPicker popup has been <span class='eventTitle'>Closed</span>.");
    }
    function onSelect(args) {
        jQuery.addEventLog("The value '" + args.value + "' has been <span class='eventTitle'>selected</span>.");
    }
    function onChange(args) {
        jQuery.addEventLog("The value has been <span class='eventTitle'>changed</span> to '" + args.value + "'.");
    }

    function onClear() {
        jQuery.clearEventLog();
    }
</script>
<style>
    .cols-sample-area
    {
        width:300px;
        margin:0 auto;
        float:none;
    }
    .e-colorwidget.e-widget
    {
        margin:0 auto;
    }
    
</style>
