<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <table>
        <tr>
            <td class="btn_label">Button</td>
            <td class="btnsht">
                <?php
                $button =  new EJ\Button("Button");
                echo $button ->text("click")->enableRTL(true)->size("large")->create("btnLoad")->click("btnClick")->render();                
                ?>
            </td>
        </tr>
        <tr>
            <td class="btn_label">Toggle Button</td>
            <td class="btnsht">
                <?php
                $button =  new EJ\ToggleButton("ToggleBtn");
                echo $button->size("large")->showRoundedCorner(true)->defaultText("Save")->activeText("Delete")
                ->create("tglebtnLoad")->click("tglebtnClick")->change("tglebtnChange")->render();    
                ?>
            </td>
        </tr>

        <tr>
            <td class="btn_label">Split Button</td>
            <td class="btnsht">
                <?php                    
                $splitbtn = new EJ\SplitButton("SplitBtn");
                $item1 = new EJ\SplitButton\SplitButtonItem();
                $item1->id("1")->text("Open");
                $item2 = new EJ\SplitButton\SplitButtonItem();
                $item2->id("2")->text("Save");
                $item3 = new EJ\SplitButton\SplitButtonItem();
                $item3->id("3")->text("Delete");
                $splitbtn->addItem($item1,$item2,$item3);
                $item11 = new EJ\SplitButton\SplitButtonItem();                   
                echo $splitbtn->text("Save")->size("large")->showRoundedCorner(true)->create("spltbtnLoad")
                ->beforeOpen("onFocusIn")->open("spltbtnOpened")->click("spltbtnClick")->itemMouseOver("spltbtnitmHover")->itemMouseOut("spltbtnitmOut")
                ->itemSelected("spltbtnitmSelected")->close("spltbtnClosed")->render();                
                ?>
            </td>
        </tr>
        <tr>
            <td class="btn_label">Group Button</td>
            <td class="btnsht">
                <?php    
                $grpbtn = new \EJ\GroupButton("groupBtn");
                $item1 = new \EJ\GroupButton\GroupButtonItem();
                $item1->id("1")->text("Save");
                $item2 = new \EJ\GroupButton\GroupButtonItem();
                $item2->id("2")->text("Open");
                $item3 = new \EJ\GroupButton\GroupButtonItem();
                $item3->id("3")->text("Delete");           
                $grpbtn->addItem($item1, $item2, $item3);
                echo $grpbtn->groupButtonMode("radiobutton")->showRoundedCorner(true)->width("100%")
                ->select("grpbtnSelect")->create("grpbtnLoad")->beforeSelect("grpbtnBeforeSelect")->keyPress("grpbtnKeyPress")->render();                
                ?>
            </td>
        </tr>
    </table>
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
    function btnLoad(e) {
        jQuery.addEventLog("Button has been <span class='eventTitle'>created</span>.");
    }
    function btnClick(e) {
        jQuery.addEventLog("Button has been <span class='eventTitle'>clicked</span>.");
    }
    function tglebtnLoad(e) {
        jQuery.addEventLog("ToggleButton has been <span class='eventTitle'>created</span>.");
    }
    function grpbtnLoad(e) {
        jQuery.addEventLog("Group Button has been <span class='eventTitle'>created</span>.");
    }
    function tglebtnChange(e) {
        jQuery.addEventLog("ToggleButton value has been <span class='eventTitle'>changed</span> to " + e.isChecked + ".");
    }
    function spltbtnLoad(e) {
        jQuery.addEventLog("SplitButton has been <span class='eventTitle'>created</span>.");
    }
    function spltbtnClick(e) {
        jQuery.addEventLog("SplitButton has been <span class='eventTitle'>clicked</span>.");
    }
    function onFocusIn(e) {
        jQuery.addEventLog("SplitButton popup has been <span class='eventTitle'>BeforeOpened</span>. ");
    }
    function spltbtnOpened(e) {
        jQuery.addEventLog("SplitButton popup has been <span class='eventTitle'>Opened</span>. ");
    }
    function spltbtnClosed(e) {
        jQuery.addEventLog("SplitButton popup has been <span class='eventTitle'>Closed</span>.");
    }
    function spltbtnitmHover(e) {
        jQuery.addEventLog("SplitButton item <span class='eventTitle'>hovered-in</span>.");
    }
    function spltbtnitmOut(e) {
        jQuery.addEventLog("SplitButton item <span class='eventTitle'>hovered-out</span>.");
    }
    function spltbtnitmSelected(e) {
        jQuery.addEventLog(e.text + " item has been <span class='eventTitle'>selected</span>.");
    }
    function grpbtnBeforeSelect(args) {
        jQuery.addEventLog("Group Button <span class='eventTitle'>BeforeActive</span> event is fired for Index " + args.index + ".");
    }
    function grpbtnSelect(args) {
        jQuery.addEventLog("Group Button <span class='eventTitle'>Active</span> event is fired for Index " + args.index + ".");
    }
    function grpbtnKeyPress(args) {
        jQuery.addEventLog("Group Button <span class='eventTitle'>Focus</span> Changed to the index" + args.index + ".");
    }
    function clearLog() {
        jQuery.clearEventLog();
    }
</script>
<style>
    table {
        margin: auto;
        width: 300px;
    }

    td {
        padding: 11px;
    }

        td.btn_label {
            padding: 0 19px;
        }

    .e-colorwidget.e-widget {
        margin: 0 auto;
    }
</style>
