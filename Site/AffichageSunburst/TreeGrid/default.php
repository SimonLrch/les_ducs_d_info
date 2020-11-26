<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php 
    $treegrid=new EJ\TreeGrid("TreegridDefault");
    $Json = json_decode(file_get_contents("Data.json"), true);
    $columns1= new EJ\TreeGrid\Column();
    $columns1 -> field="taskID";
    $columns1 -> headerText="Task ID";
    $columns2= new EJ\TreeGrid\Column();
    $columns2 -> field="taskName";
    $columns2 ->headerText ="Task Name";
    $columns3= new EJ\TreeGrid\Column();
    $columns3 -> field="startDate";
    $columns3 ->headerText="Start Date";
    $columns4= new EJ\TreeGrid\Column();
    $columns4 -> field="endDate";
    $columns4->headerText="End Date";
    $columns5= new EJ\TreeGrid\Column();
    $columns5 -> field="progress";
    $columns5 ->headerText ="Progress";
    $columns=array($columns1,$columns2,$columns3,$columns4,$columns5);
    echo $treegrid -> isResponsive(true)-> columns($columns)-> childMapping("subtasks")->treeColumnIndex(1) -> dataSource($Json)->render();    
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
