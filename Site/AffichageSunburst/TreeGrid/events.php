<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php
    $treegrid=new EJ\TreeGrid("TreegridEvents");
    $Json = json_decode(file_get_contents("Data.json"), true);
    $edit=new EJ\TreeGrid\EditSetting();
    $edit->allowEditing(true)->allowAdding(true)->allowDeleting(true);
    $columns1= new EJ\TreeGrid\Column();
    $columns1 -> field="taskID";
    $columns1 -> headerText="Task ID";
	$columns1->editType="numericedit";
    $columns2= new EJ\TreeGrid\Column();
    $columns2 -> field="taskName";
    $columns2 ->headerText ="Task Name";
    $columns3= new EJ\TreeGrid\Column();
    $columns3 -> field="startDate";
    $columns3 ->headerText="Start Date";
	$columns3->editType="datepicker";
    $columns4= new EJ\TreeGrid\Column();
    $columns4 -> field="endDate";
    $columns4->headerText="End Date";
	$columns4->editType="datepicker";
    $columns5= new EJ\TreeGrid\Column();
    $columns5 -> field="progress";
    $columns5 ->headerText ="Progress";
	$columns5->editType="numericedit";
    $columns=array($columns1,$columns2,$columns3,$columns4,$columns5);
    echo $treegrid ->editSettings($edit) 
    -> isResponsive(true)
    -> columns($columns)
    -> childMapping("subtasks")
    -> treeColumnIndex(1)
    -> load("load")
    -> create("create")
    -> actionBegin("actionBegin")
    ->actionComplete("actionComplete")
    ->beginEdit("beginEdit")
    ->queryCellInfo("queryCellInfo")
    ->endEdit("endEdit")
    ->rowDataBound("rowDataBound")
    ->rowSelected("rowSelected")
    ->rowSelecting("rowSelecting")
    ->expanding("expanding")
    ->expanded("expanded")
    ->collapsed("collapsed")
    ->collapsing("collapsing")
    -> dataSource($Json)->render();
    ?>
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog">
    </div>
    <div>
        <?php
        $clearBtn=new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("clearLog")->type("button")->render();
        ?>
    </div>
</div>
<script>
    function load(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>load</span> event called");
    }
    function create(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>create</span> event called");
    }
    function actionBegin(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>actionBegin</span> event called");
    }
    function actionComplete(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>actionComplete</span> event called");
    }
    function beginEdit(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>beginEdit</span> event called");
    }
    function endEdit(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>endEdit</span> event called");
    }
    function queryCellInfo(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>queryCellInfo</span> event called");
    }
    function rowDataBound(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>rowDataBound</span> event called");
    }
    function rowSelecting(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>rowSelecting</span> event called");
    }
    function rowSelected(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>rowSelected</span> event called");
    }
    function expanding(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>expanding</span> event called");
    }
    function expanded(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>expanded</span> event called");
    }
    function collapsing(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>collapsing</span> event called");
    }
    function collapsed(args) {
        jQuery.addEventLog("Treegrid <span class='eventTitle'>collapsed</span> event called");
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
