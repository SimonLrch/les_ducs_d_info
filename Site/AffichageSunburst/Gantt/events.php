<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php
    $gantt=new EJ\Gantt("GanttEvents");
    $Json = json_decode(file_get_contents("Data.json"), true);
    $edit=new EJ\Gantt\EditSetting();
    $edit->allowAdding(true)->allowDeleting(true)->allowEditing(true)->allowIndent(true)->editMode("cellEditing");
    $toolbar=new EJ\Gantt\ToolbarSetting();
    $toolbarItems = array("add","edit","delete","update","cancel","indent","outdent","expandAll","collapseAll","search");
    $toolbar->showToolbar(true)->toolbarItems($toolbarItems);    
    echo $gantt -> taskIdMapping("taskID")
    ->taskNameMapping("taskName")
    ->startDateMapping("startDate")
    ->endDateMapping("endDate")
    ->durationMapping("duration")
    ->isResponsive(true)
    ->progressMapping("progress")
    ->childMapping("subtasks")
    ->allowGanttChartEditing(true)
    ->toolbarSettings($toolbar)
    ->editSettings($edit)
    ->enableContextMenu(true)
    ->treeColumnIndex(1)
    ->load("load")
    ->create("create")
    ->queryCellInfo("queryCellInfo")
    ->actionBegin("actionBegin")
    ->actionComplete("actionComplete")
    ->beginEdit("beginEdit")
    ->endEdit("endEdit")
    ->rowDataBound("rowDataBound")
    ->rowSelected("rowSelected")
    ->rowSelecting("rowSelecting")
    ->taskbarEdited("taskbarEdited")
    ->taskbarEditing("taskbarEditing")
    ->queryTaskbarInfo("queryTaskbarInfo")
    ->expanded("expanded")
    ->expanding("expanding")
    ->collapsing("collapsing")
    ->collapsed("collapsed")
    ->toolbarClick("toolbarClick")
    ->dataSource($Json)->render();
    ?>
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn=new EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("clearLog")->type("button")->render();
        ?>
    </div>
</div>
<script>
    function load(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>load</span> event called");
    }
    function create(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>create</span> event called");
    }
    function actionBegin(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>actionBegin</span> event called");
    }
    function actionComplete(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>actionComplete</span> event called");
    }
    function beginEdit(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>beginEdit</span> event called");
    }
    function endEdit(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>endEdit</span> event called");
    }
    function queryCellInfo(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>queryCellInfo</span> event called");
    }
    function rowDataBound(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>rowDataBound</span> event called");
    }
    function rowSelecting(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>rowSelecting</span> event called");
    }
    function rowSelected(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>rowSelected</span> event called");
    }
    function expanding(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>expanding</span> event called");
    }
    function expanded(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>expanded</span> event called");
    }
    function collapsing(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>collapsing</span> event called");
    }
    function collapsed(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>collapsed</span> event called");
    }
    function taskbarEditing(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>taskbarEditing</span> event called");
    }
    function queryTaskbarInfo(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>queryTaskBarInfo</span> event called");
    }
    function taskbarEdited(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>taskbarEdited </span> event called");
    }
    function toolbarClick(args) {
        jQuery.addEventLog("Gantt <span class='eventTitle'>toolbarClick </span> event called");
    }
    function clearLog() {
        jQuery.clearEventLog();
    }
</script>
<style>
    table {
        font-size: inherit;
    }

    th {
        width: inherit;
    }

    html body {
        height: 100%;
        width: 100%;
    }
</style>
