<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

   <?php
    $acr = new EJ\Accordion("APIAccordion");
    $acr->width("550px");

    $acrItem = new EJ\Accordion\AccordionItem();
    $acrItem->text("London")->templateStart();
    ?>
    <div>
        London is one of the most popular tourist destinations in the world for a reason. A cultural and historical hub, London has an excellent public transportation system that allows visitors to see all the fantastic sights without spending a ton of money on a rental car.
    </div>
    <?php
    $acrItem->templateEnd();
    $acr->AddItem($acrItem);
    $acrItem2 = new EJ\Accordion\AccordionItem();
    $acrItem2->text("Paris")->templateStart();
    ?>
    <div>
        Paris, the city of lights and love - this short guide is full of ideas for how to make the most of the romanticism that oozes from every one of its beautiful corners.
    </div>
    <?php
    $acrItem2->templateEnd();
    $acr->AddItem($acrItem2);
    $acrItem3 = new EJ\Accordion\AccordionItem();
    $acrItem3->text("Rome")->templateStart();
    ?>
    <div>
        Rome is one of the world's most fascinating cities. The old adage that Rome was not built in a day — and that you won't see it in one or even in three — is true. For the intrepid traveler who can keep pace, here is a list of must-sees. But remember what the Romans say: "Even a lifetime isn't enough to see Rome."
    </div>
    <?php
    $acrItem3->templateEnd();
    $acr->AddItem($acrItem3);
    echo $acr->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">
                            Active Index
                        </div>
                        <div class="col-md-6">
                        <?php
                        $dropdownlist =new EJ\DropDownList("optActiveChange");
                        echo $dropdownlist->targetID("ddlcontent1")->width("120px")->watermarkText("Select")->change("onActiveChange")->render();
                        ?>

                        <div id="ddlcontent1">
                            <ul>
                                <li>London</li>
                                <li>Paris</li>
                                <li>Rome</li>
                            </ul>
                        </div>
                        </div>
                        <div class="col-md-6">
                            Disable Item
                        </div>
                        <div class="col-md-6">
                        <?php
                        $dropdownlist =new EJ\DropDownList("optDisableChange");
                        echo $dropdownlist->targetID("ddlcontent2")->width("120px")->showCheckbox(true)->watermarkText("Select")->change("onDisableChange")->render();
                        ?>

                        <div id="ddlcontent2">
                            <ul>
                                <li>London</li>
                                <li>Paris</li>
                                <li>Rome</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Enable Item
                        </div>
                        <div class="col-md-6">
                        <?php
                        $dropdownlist =new EJ\DropDownList("optEnableChange");
                        echo $dropdownlist->targetID("ddlcontent3")->width("120px")->value("content")->change("onEnableChange")->render();
                        ?>

                        <div id="ddlcontent3">
                            <ul>
                                <li>London</li>
                                <li>Paris</li>
                                <li>Rome</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Enable / Disable All
                        </div>
                        <div class="col-md-6">
                        <?php
                                    $button =  new EJ\ToggleButton("btnEnableDisable");
                                    echo $button->size("normal") ->
                                    change("onEnaleDisableAll")-> defaultText("Disable All")-> activeText("Enable All")-> width("120px")->
                                    render();
                                    ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Show / Hide
                        </div>
                        <div class="col-md-6">
                        <?php
                            $button =  new EJ\ToggleButton("chkShowHide");
                            echo $button->size("normal") ->
                            change("onShowHide")-> defaultText("Hide")-> activeText("Show")-> width("120px")->
                            render();
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Destroy
                        </div>
                        <div class="col-md-6">
                        <?php
                        $button =  new EJ\ToggleButton("chkDestroy");
                        echo $button->size("normal") ->
                        change("onDestoryRestore")-> defaultText("Destory")-> activeText("Restore")-> width("120px")->
                        render();
                        ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Height Adjust Mode
                        </div>
                        <div class="col-md-6">
                        <?php
                        $dropdownlist =new EJ\DropDownList("optHeightAdjust");
                        echo $dropdownlist->targetID("ddlcontent4")->width("120px")->value("content")->change("onHeightAdjust")->render();
                        ?>

                        <div id="ddlcontent4">
                            <ul>
                                <li>Fill</li>
                                <li>Content</li>
                                <li>Auto</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Close button
                        </div>
                        <div class="col-md-6">
                        <?php
                        $button =  new EJ\ToggleButton("chkCloseBtn");
                        echo $button->size("normal") ->
                        change("onShowHideCloseBtn")-> defaultText("Show")-> activeText("Hide")-> width("120px")->
                        render();
                        ?>
                        </div>
                    </div>
</div>

<script>
    var acrdnObj, optDisable, optEnable, activeObj;
        $(function () {
            // declaration
            acrdnObj = $("#APIAccordion").data("ejAccordion");
            activeObj=$("#optActiveChange").data("ejDropDownList");
			optDisable = $("#optDisableChange").data("ejDropDownList");
            optEnable = $("#optEnableChange").data("ejDropDownList");
        });
        function onEnaleDisableAll(args) {
            if (acrdnObj) {
                if (args.isChecked){
                    acrdnObj.disable();
					activeObj.disable();
					optDisable.disable();
					}
                else{
                    acrdnObj.enable(); 
					activeObj.enable(); 
					optDisable.enable();    
					}
            }
        }
        function onDestoryRestore(args) {
            if (args.isChecked) {
                acrdnObj.destroy();
                acrdnObj = null;
            }
            else {
                $("#APIAccordion").ejAccordion();
                acrdnObj = $("#APIAccordion").data("ejAccordion");
            }
        }
        function onActiveChange(args) {
            if (acrdnObj) {
                acrdnObj.option({ selectedItemIndex: args.value });
                $("#optDisableChange").ejDropDownList("clearText");
                $("#optEnableChange").ejDropDownList("clearText"); 
            }
        }
        function onDisableChange(args) {
            var arrIndex = [], uncheck = [];
            if (args.isChecked) arrIndex.push(parseInt(args.value));
            else uncheck.push(parseInt(args.value));
            if (acrdnObj) {
                acrdnObj.disableItems(arrIndex); acrdnObj.enableItems(uncheck);
                $("#optActiveChange").ejDropDownList("clearText");
                $("#optEnableChange").ejDropDownList("clearText");

            }
        }
        function onEnableChange(args) {
            var arrayIndex = [], uncheck = [];
            if (args.isChecked) arrayIndex.push(parseInt(args.value));
            else uncheck.push(parseInt(args.value));
            if (acrdnObj) {
                acrdnObj.enableItems(arrayIndex); acrdnObj.disableItems(uncheck);
                $("#optActiveChange").ejDropDownList("clearText");
                $("#optDisableChange").ejDropDownList("clearText");
            }
        }
        function onShowHide(args) {
            if (acrdnObj) {
                if (args.isChecked)
                    acrdnObj.show();
                else
                    acrdnObj.hide();
            }
        }
        function onHeightAdjust(args) {
            if (acrdnObj) {
                acrdnObj.element.find(">.e-content").css("height", "");
                acrdnObj.option("heightAdjustMode", args.value);
            }
        }
        function onShowHideCloseBtn(args) {
            acrdnObj && acrdnObj.option("showCloseButton", args.isChecked);
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
