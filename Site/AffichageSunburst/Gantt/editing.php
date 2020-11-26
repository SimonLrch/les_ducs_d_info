<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php
    $gantt=new EJ\Gantt("GanttEditing");
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
	->predecessorMapping("predecessor")
    ->isResponsive(true)
    ->progressMapping("progress")
    ->childMapping("subtasks")
    ->allowSorting(true)
    ->allowGanttChartEditing(true)
    ->toolbarSettings($toolbar)
    ->editSettings($edit)
    ->enableContextMenu(true)
    ->treeColumnIndex(1)
    ->dataSource($Json)->render();
    ?>
</div>
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
