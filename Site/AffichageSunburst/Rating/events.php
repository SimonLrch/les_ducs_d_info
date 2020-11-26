<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<?php
$rating =new EJ\Rating("eventRating");
echo $rating->
create("onCreate")->
                    click("onClientClick")->
                    mouseover("onClientOver")->
                    mouseout("onClientOut")->
                    change("onClientChage")->
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
   function onCreate(args) {
            jQuery.addEventLog("Rating control has been <span class='eventTitle'>created</span>.");
        }
        function onClientClick(args) {
            jQuery.addEventLog("Rating control has been <span class='eventTitle'>clicked</span>.</br>");
        }
        function onClientOver(args) {
            jQuery.addEventLog("Rating control has been <span class='eventTitle'>hovered-in</span>.</br>");
        }
        function onClientOut(args) {
            jQuery.addEventLog("Rating control has been <span class='eventTitle'>hovered-out</span>.</br>");
        }
        function onClientChage(args) {
            jQuery.addEventLog("Rating value has been <span class='eventTitle'>changed</span> to " + args.value + " out of 5.</br>");
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
