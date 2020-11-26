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
    echo $dropdownlist->dataSource($dataManager)->fields($fields)->itemsCount(10)->allowVirtualScrolling(true)->width("100%")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
     .e-ddl-popup {
            margin: 0 auto;
        }
		.frame{
			width : 250px;
		}

</style>