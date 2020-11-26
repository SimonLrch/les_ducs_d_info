<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $item = array(
                    array("id"=>1, "name"=>"Discover Music", "hasChild"=>true, "expanded"=>true ),
                    array("id"=>2, "pid"=>1, "name"=>"Hot Singles" ),
                    array("id"=>3, "pid"=>1, "name"=>"Rising Artists" ),
                    array("id"=>4, "pid"=>1, "name"=>"Live Music" ),
                    array("id"=>6, "pid"=>1, "name"=>"Best of 2013 So Far" ),
                    array("id"=>7, "name"=>"Sales and Events", "hasChild"=>true, "expanded"=>true,"isChecked"=>true ),
                    array("id"=>8, "pid"=>7, "name"=>"100 Albums - $5 Each", "hasChild"=>true,"isChecked"=>true ),
                    array("id"=>9, "pid"=>8, "name"=>"Hip-Hop and R&B Sale","isChecked"=>true ),
                    array("id"=>10, "pid"=>7, "name"=>"CD Deals" ),
                    array("id"=>11, "name"=>"Categories", "hasChild"=>true ),
                    array("id"=>12, "pid"=>11, "name"=>"Songs" ),
                    array("id"=>13, "pid"=>11, "name"=>"Bestselling Albums" ),
                    array("id"=>14, "pid"=>11, "name"=>"New Releases" ),
                    array("id"=>15, "pid"=>11, "name"=>"Bestselling Songs" ),
                    array("id"=>16, "name"=>"MP3 Albums", "hasChild"=>true ),
                    array("id"=>17, "pid"=>16, "name"=>"Rock" ),
                    array("id"=>18, "pid"=>16, "name"=>"Gospel" ),
                    array("id"=>19, "pid"=>16, "name"=>"Latin Music" ),
                    array("id"=>20, "pid"=>16, "name"=>"Jazz" ),
                    array("id"=>21, "name"=>"More in Music", "hasChild"=>true ),
                    array("id"=>22, "pid"=>21, "name"=>"Music Trade-In" ),
                    array("id"=>23, "pid"=>21, "name"=>"Redeem a Gift Card" ),
                    array("id"=>24, "pid"=>21, "name"=>"Band T-Shirts" ),
                    array("id"=>25, "pid"=>21, "name"=>"Mobile MVC" ));
    $events = new \EJ\TreeView("localData");
    $fields = new EJ\TreeView\Field();
    $fields->id("id")->text("name")->parentId("pid")->hasChild("hasChild")->dataSource($item)->expanded("expanded")->isChecked("isChecked");
    echo $events->fields($fields)->create("onCreate")->nodeExpand("onExpand")->nodeCollapse("onCollapse")->nodeSelect("onSelect")->nodeDragStart("onDragStart")->nodeDragStop("onDragStop")->nodeDropped("onDropped")->allowDragAndDrop(true)->nodeDrag("onDrag")->render();
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
<script type="text/javascript">
    var treeviewObj, tabIndex = 1;
    function onCreate(args) {
        jQuery.addEventLog("Treeview has been <span class='eventTitle'>created</span>.");
    }
    function onExpand(args) {
        jQuery.addEventLog($.trim(args.value) + " node is <span class='eventTitle'>Expanded</span>.");
    }
    function onCollapse(args) {
        jQuery.addEventLog($.trim(args.value) + " node is <span class='eventTitle'>Collapsed</span>.");
    }
    function onSelect(args) {
        jQuery.addEventLog($.trim(args.value) + " node is <span class='eventTitle'>selected</span>.");
    }
    function onDragStart(args) {
        jQuery.addEventLog($.trim(args.targetElementData.text) + " node <span class='eventTitle'>dragging has been started</span>.");
    }
    function onDrag(args) {
        jQuery.addEventLog($.trim(args.draggedElementData.text) + " node is being <span class='eventTitle'>dragged</span>.");
    }
    function onDragStop(args) {
        jQuery.addEventLog($.trim(args.draggedElementData.text) + " node dragging has been <span class='eventTitle'>stopped</span>.");
    }
    function onDropped(args) {
        var targetText = (args.targetElementData.text != "") ? $.trim(args.targetElementData.text) : "Treeview";
        jQuery.addEventLog($.trim(args.droppedElementData.text) + " node has been <span class='eventTitle'>dropped </span> to " + targetText + ".");
    }
    function onClear() {
        jQuery.clearEventLog();
    }


</script>
<style>
    .cols-sample-area {
        width: 300px;
        max-width:100%;
    }
</style>