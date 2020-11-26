<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
     $gameList = array(
        array('id'=> "level1", 'game'=> "American Football"),
        array('id'=> "level2", 'game'=> "Badminton"),
        array('id'=> "level3", 'game'=> "Basketball"),
        array('id'=> "level4", 'game'=> "Cricket"),
        array('id'=> "level5", 'game'=> "Football"),
        array('id'=> "level6", 'game'=> "Golf"),
        array('id'=> "level7", 'game'=> "Hockey"),
        array('id'=> "level8", 'game'=> "Rugby"),
        array('id'=> "level9", 'game'=> "Snooker"),
        array('id'=> "level10", 'game'=> "Tennis"),
    );
   
    $combobox =new EJ\ComboBox("selectGame");
    $fields = new EJ\ComboBox\Field();
    $fields->text("game")->value("id");
    echo $combobox->fields($fields)->dataSource($gameList)->width("100%")->placeholder("Select a Game")->create("onCreate")->focus("onFocus")->
        select("onSelect")->
        change("onChange")->
        open("onOpen")-> 
        close("onClose")->
        render();
    ?>

</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("onClear")->type("button")->render();
        ?>
    </div>
</div>
<script>
    function onCreate(sender) {
            jQuery.addEventLog("Combobox control has been <span class='eventTitle'>created</span>.<br/>");
        }
       function onFocus(args) {
            jQuery.addEventLog("ComboBox  is in <span class='eventTitle'>focus</span>. ");
        }
        function onBlur(args) {
            jQuery.addEventLog("ComboBox  is out of <span class='eventTitle'>focus</span>.");
        }
        function onSelect(args) {
            jQuery.addEventLog("The value '" + args.text + "' has been <span class='eventTitle'>selected</span>.");
        }
        function onChange(args) {
            jQuery.addEventLog("The value has been <span class='eventTitle'>changed</span> to '" + args.value + "'.");
        }
        function onOpen(args) {
            jQuery.addEventLog("Popup List has been <span class='eventTitle'>opened</span>.");
        }
        function onClose(args) {
            jQuery.addEventLog("Popup List has been <span class='eventTitle'>closed</span>.");
        }
        function onClear() {
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
