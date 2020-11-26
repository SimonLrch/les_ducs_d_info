<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $dataManager = new \EJ\DataManager();
    $dataManager->url("//js.syncfusion.com/demos/ejServices/Wcf/Northwind.svc/")->crossDomain(true);

    $query = new \EJ\Query();
    $query->from("Categories")->select("CategoryID,CategoryName")->take(3);



    $child = new \EJ\TreeView\Field();
    $child->dataSource($dataManager)->tableName("Products")->parentId("CategoryID")->text("ProductName");

    $treeview = new \EJ\TreeView("remoteData");
    $fields = new EJ\TreeView\Field();
    $fields->id("CategoryID")->text("CategoryName")->dataSource($dataManager)->query($query)->child($child);

    echo $treeview->height("300px")->width("300px")->fields($fields)->render();
    ?>

</div>


<style>
    .cols-sample-area {
        width: 300px;
        max-width:100%;
    }
</style>
