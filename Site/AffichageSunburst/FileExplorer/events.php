<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
        <?php
        $fileexplorer=new EJ\FileExplorer('event');
        echo $fileexplorer->width('100%')->minWidth('150px')->layout('tile')->
				path('Content/images/FileBrowser/')->ajaxAction('../EJ/Services/FileExplorer')->
				ajaxDataType('jsonp')->
				isResponsive(true)->
                layoutChange('onLayoutChange')->
                select('onSelect')->
                unselect('onUnselect')->
                createFolder('onCreateFolder')->
                remove('onRemove')->
                cut('onCut')->
                copy('onCopy')->
                paste('onPaste')->
                open('onOpen')->
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
        function onLayoutChange(args) {
            jQuery.addEventLog("<span class='eventTitle'>Layout changed</span> to '" + args.layoutType + "' view.");
        }
        function onSelect(args) {
            jQuery.addEventLog("'" + args.name + "' " + args.nodeType + " has been <span class='eventTitle'>selected</span>.");
        }
        function onUnselect(args) {
            jQuery.addEventLog("'" + args.name + "' " + args.nodeType + " has been <span class='eventTitle'>unselected</span>.");
        }
        function onCreateFolder(args) {
            jQuery.addEventLog("'" + args.data.files[0].name + "' Directory has been <span class='eventTitle'>created</span>.");
        }
        function onRemove(args) {
            jQuery.addEventLog("'" + args.name + "' " + args.selectedItems[0].type + " has been <span class='eventTitle'>removed</span>.");
        }
        function onCut(args) {
            jQuery.addEventLog("'" + args.name + "' " + args.selectedItems[0].type + " has been <span class='eventTitle'>cut</span>.");
        }
        function onCopy(args) {
            jQuery.addEventLog("'" + args.name + "' " + args.selectedItems[0].type + " has been <span class='eventTitle'>copied</span>.");
        }
        function onPaste(args) {
            jQuery.addEventLog("'" + args.selectedItems[0].name + "' " + args.selectedItems[0].type + " has been <span class='eventTitle'>pasted</span>.");
        }
        function onOpen(args) {
            jQuery.addEventLog("'" + args.selectedItems[0].name + "' " + args.itemType + " has been <span class='eventTitle'>opened</span>.");
        }
        function onClear() {
            jQuery.clearEventLog();
        }

</script>
<style>
	.cols-sample-area
    {
		width: 100%;
        margin: 0 auto;
        float: none;
	}
</style>

