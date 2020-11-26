<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $color=new \EJ\ColorPicker("colorPick");
    echo  $color->value("#278787")->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-sm-2">
            <label>Enable / Disable</label>
        </div>
        <div class="col-sm-2">
            <?php
            $disableBtn = new EJ\ToggleButton("disableBtn");
            echo $disableBtn->size("medium")->defaultText("Disable")->activeText("Enable")->click("onEnabled")->render();
            ?>
        </div>
    </div> 
    <div class="row">
        <div class="col-sm-2">
            <label>Show Switcher</label>
        </div>
        <div class="col-sm-2">
            <?php
            $disableBtn = new EJ\ToggleButton("switcher");
            echo $disableBtn->size("medium")->defaultText("False")->activeText("True")->click("onSwitcher")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Show Button</label>
        </div>
        <div class="col-sm-2">
            <?php
            $disableBtn = new EJ\ToggleButton("showButton");
            echo $disableBtn->size("medium")->defaultText("False")->activeText("True")->click("onShowButton")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Get HexCode</label>
        </div>
        <div class="col-sm-2">
            <?php
                    $button =  new EJ\Button("Button4");
                    echo $button ->text("click")->size("medium")->click("getHexCode")->render();
            ?>          
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Value(With '#')</label>
        </div>
        <div class="col-sm-2">
            <input type="text" id="color-value" class="input ejinputtext" placeholder="Value" />
        </div>
    </div>
</div>
<script>
    jQuery(function ($) {     
        ColorObj = $("#colorPick").data('ejColorPicker');
    });
    function onSwitcher(args) {
        if (args.isChecked) ColorObj.option('showSwitcher', false);
        else ColorObj.option('showSwitcher', true);
    }
    function onShowButton(args) {
        if (args.isChecked) ColorObj.option('showApplyCancel', false);
        else ColorObj.option('showApplyCancel', true);
    }
    function getHexCode() {
        setTimeout(function () { alert("The Colorpicker value : " + ColorObj.getValue()); }, 250);
    }
    function onEnabled(args) {
        if (args.isChecked) {
            ColorObj.option('enabled', false);
            $(".fadetext").addClass("e-disable");
        }
        else {
            ColorObj.option('enabled', true);
            $(".fadetext").removeClass("e-disable");
        }
    }
    function onRecentColor(args) {
        if (args.isChecked) ColorObj.option('showRecentColors', true);
        else ColorObj.option('showRecentColors', false);
    }
    function getHexCode() {
        setTimeout(function () { alert("The Colorpicker value : " + ColorObj.getValue()); }, 250);
    }
    function onPreview(args) {
        if (args.isChecked) ColorObj.option('showPreview', false);
        else ColorObj.option('showPreview', true);
    }
    $("#opacityValue").keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13')
            ColorObj.option('opacityValue', $("#opacityValue").val());
    });
    $("#color-value").change(function () {
        if ($("#color-value").val() !== "") {
            if ($("#color-value").val().length == 4 || $("#color-value").val().length == 7)
                ColorObj.option('value', $("#color-value").val());
        }
    });
    $("#color-value").keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            if ($("#color-value").val() !== "") {
                if ($("#color-value").val().length == 4 || $("#color-value").val().length == 7)
                    ColorObj.option('value', $("#color-value").val());
            }
        }
    });
</script>
<style>
    .input.ejinputtext {
        text-indent: 10px;
        width: 111px;
        height: 35px;
    }

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
