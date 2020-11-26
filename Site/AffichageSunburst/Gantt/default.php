<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php
    $gantt=new EJ\Gantt("GanttDefault");
    $Json = json_decode(file_get_contents("Data.json"), true);
    $size=new EJ\Gantt\SizeSetting();
    echo $gantt -> taskIdMapping("taskID")
    ->taskNameMapping("taskName")
    ->startDateMapping("startDate")
    ->endDateMapping("endDate")
    ->durationMapping("duration")
	->predecessorMapping("predecessor")
    ->isResponsive(true)
    ->progressMapping("progress")
    ->childMapping("subtasks")
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
