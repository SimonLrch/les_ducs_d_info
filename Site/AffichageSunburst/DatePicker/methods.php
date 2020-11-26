<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $autocomplete=new EJ\DatePicker("datePicker");
    echo $autocomplete->width("100%")->value(new DateTime())->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-sm-2">
            <label>Enable / Disable</label>
        </div>
        <div class="col-sm-2">
            <label for="disableBtn" />
            <?php
            $disableBtn = new EJ\ToggleButton("disableBtn");
            echo $disableBtn->size("medium")->defaultText("Disable")->activeText("Enable")->click("onEnabled")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Show / Hide</label>
        </div>
        <div class="col-sm-2">
            <label for="show"></label>
            <?php
            $disableBtn = new EJ\ToggleButton("show");
            echo $disableBtn->size("medium")->defaultText("Show")->activeText("Hide")->click("showhide")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Get Value</label>
        </div>
        <div class="col-sm-2">
            <?php
            $disableBtn = new \EJ\Button("getValue");
            echo $disableBtn->size("medium")->text("Get Value")->click("getValue")->render();
            ?>
        </div>
    </div>
</div>


<script>
    var dateObj;
    $(function () {
        dateObj = $("#datePicker").ejDatePicker('instance');
    });
    function getValue() {
        alert(dateObj.option('value'));
    }
    function showhide(args) {
        (args.isChecked) ? dateObj.show() : dateObj.hide();
    }
    function onEnabled(args) {
        if (args.isChecked) {
            dateObj.option('enabled', false);
            $(".fadetext").addClass("e-disable");
        }
        else {
            dateObj.option('enabled', true);
            $(".fadetext").removeClass("e-disable");
        }
    }
</script>

<style>
    .cols-sample-area {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
