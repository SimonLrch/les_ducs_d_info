<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $Json = json_decode(file_get_contents("data.json"), true);
    $col1 = new EJ\Grid\Column();
    $col1->field("OrderID")->headerText("OrderID")->textAlign("right")->isPrimaryKey(true)->width(100);
    $col2 = new EJ\Grid\Column();
    $col2->field("CustomerID")->headerText("CustomerID")->width(70);
    $col3 = new EJ\Grid\Column();
    $col3->field("EmployeeID")->headerText("EmployeeID")->textAlign("right")->width(70);
    $col4 = new EJ\Grid\Column();
    $col4->field("ShipCountry")->headerText("ShipCountry")->width(70);
    $col5 = new EJ\Grid\Column();
    $col5->field("Freight")->headerText("Freight")->textAlign("right")->format("{0:C}")->width(70);
    $gridColumns = array($col1,$col2,$col3,$col4,$col5);
    $grid =  new EJ\Grid("Grid");
    $edit =new EJ\Grid\EditSetting();
    $toolbarItems = array("add","edit","delete","update","cancel");
    $toolbar= new EJ\Grid\ToolbarSetting();
    echo $grid -> dataSource($Json)->allowPaging(true)->columns($gridColumns)->editSettings($edit->allowEditing(true)->allowDeleting(true)->allowAdding(true))->toolbarSettings($toolbar->showToolbar(true)->toolbarItems($toolbarItems))->render();
    ?>

</div>
<style>
    .cols-sample-area {        
        margin:0 auto;
        float:none;
    }
</style>
