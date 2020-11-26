<div class="cols-sample-area">
 <div class="ctrllabel">Select a customer</div>
<?php
require_once '../EJ/AutoLoad.php';

$dataManager  = new EJ\DataManager();
$dataManager->url('//js.syncfusion.com/ejServices/wcf/NorthWind.svc/');

$query = new EJ\Query();
$query->from('Customers')->take(10);

$listbox=new EJ\ListBox("selectcustomer");
$field=new EJ\ListBox\Field();
$field=array("text"=>"CustomerID");
echo $listbox->dataSource($dataManager)->query($query)->fields($field)->render();
 ?>
</div>
<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .ctrllabel {
		font-weight: 600;
		padding-bottom: 12px;
    }
</style>