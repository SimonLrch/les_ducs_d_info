<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area" style="width: 80%">
    <?php
    $treegrid=new EJ\TreeGrid("TreegridEditing");
    $Json = json_decode(file_get_contents("Data.json"), true);
    $edit=new EJ\TreeGrid\EditSetting();
    $edit->allowEditing(true)->allowAdding(true)->allowDeleting(true);
    $toolbar= new EJ\TreeGrid\ToolbarSetting();
    $toolbarItems=array("add","edit","delete","update","cancel","expandAll","collapseAll");
    $toolbar->showToolbar(true)->toolbarItems($toolbarItems);
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
    echo $treegrid ->toolbarSettings($toolbar)->editSettings($edit) -> isResponsive(true)-> columns($columns)-> childMapping("subtasks")->treeColumnIndex(1) -> dataSource($Json)->render();    
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
