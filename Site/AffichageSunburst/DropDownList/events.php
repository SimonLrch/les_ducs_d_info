<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $dataManager  = new EJ\DataManager(); 
    $dataManager->url('//js.syncfusion.com/demos/ejServices/Wcf/Northwind.svc/Employees/')->offline(false)->crossDomain(true);
    $dropdownlist =new EJ\DropDownList("skillsets");
    $fields = new EJ\DropDownList\Field();
    $fields->text("LastName")->value("EmployeeID");
    echo $dropdownlist->dataSource($dataManager)->fields($fields)->itemsCount(10)->showCheckbox(true)->width("100%")->
        create("drpcreate")->
        popupHide("drppopuphide")->
        popupShown("drppopupshow")->
        beforePopupShown("drpbeforepopupshow")->
        change("drpvaluechange")->
        select("drpselectchange")-> 
        actionComplete("drpactionComplete")->
        actionFailure("drpactionFailure")->
        actionSuccess("drpactionSuccess")->
        dataBound("drpdataBound")->
        search("drpsearch")->
        enableFilterSearch(true)->
        enablePopupResize(true)->
        popupResizeStart("drppopupResizeStart")->
        popupResize("drppopupResize")->
        popupResizeStop("drppopupResizeStop")->render();
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
    function drpcreate(sender) {
            jQuery.addEventLog("Dropdown control has been <span class='eventTitle'>created</span>.<br/>");
        }
        function drppopuphide(sender) {
            jQuery.addEventLog("Dropdown popup is <span class='eventTitle'>closed</span>.<br/>");
        }
        function drppopupshow(sender) {
            jQuery.addEventLog("Dropdown popup is <span class='eventTitle'>opened</span>.<br/>");
        }
        function drpbeforepopupshow(sender) {
            jQuery.addEventLog("<span class='eventTitle'>BeforePopupShow</span> event is triggered.<br/>");
        }
        function drpvaluechange(sender) {
			if(sender.text == "") 
				jQuery.addEventLog("<span class='eventTitle'>Value has changed</span> to null<br/>");
			else
				jQuery.addEventLog("<span class='eventTitle'>Value has changed</span> to " + sender.text+ ".<br/>");
        }
        function drpselectchange(sender) {
            jQuery.addEventLog(sender.selectedText + " is <span class='eventTitle'>selected</span>.<br/>");
        }
         function drpsearch(sender) {
            jQuery.addEventLog(sender.searchString + " is <span class='eventTitle'>searched</span>.<br/>");
        }
		 function drpdataBound(sender) {
            jQuery.addEventLog( "The data value is <span class='eventTitle'>Bounded</span>.<br/>");
        }
		function drppopupResizeStart(sender) {
            jQuery.addEventLog("Dropdown control Popup<span class='eventTitle'>Resizing has started</span>.<br/>");
        }
		function drppopupResize(sender) {
            jQuery.addEventLog("Dropdown control Popup <span class='eventTitle'>is Resizing</span>.<br/>");
        }
		function drppopupResizeStop(sender) {
            jQuery.addEventLog("Dropdown control Popup <span class='eventTitle'>Resizing has stopped</span>.<br/>");
      }
	  function drpactionComplete(sender) {
            jQuery.addEventLog("The data fetching action is <span class='eventTitle'>Complete</span>.<br/>");
        }
		function drpactionSuccess(sender) {
            jQuery.addEventLog("The data fetching action is <span class='eventTitle'>Success</span>.<br/>");
        }
		function drpactionFailure(sender) {
            jQuery.addEventLog("The data fetching action is <span class='eventTitle'>Failure</span>.<br/>");
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
