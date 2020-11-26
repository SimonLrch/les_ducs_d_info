<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $treenode= new EJ\TreeView("treeViewediting");

    $treenode1 = new EJ\TreeView\TreeViewItem();
    $treenode1->id("1")->text("Laptops");
    $treenode2 = new EJ\TreeView\TreeViewItem();
    $treenode2->id("2")->text("Desktop");
    $treenode3 = new EJ\TreeView\TreeViewItem();
    $treenode3->id("3")->text("Pen drives");

    $treenode11 = new EJ\TreeView\TreeViewItem();
    $treenode11->id("11")->text("Lenovo");
    $treenode12 = new EJ\TreeView\TreeViewItem();
    $treenode12->id("12")->text("Dell");
    $treenode13 = new EJ\TreeView\TreeViewItem();
    $treenode13->id("13")->text("Sony");

    $treenode21 = new EJ\TreeView\TreeViewItem();
    $treenode21->id("21")->text("All in one Desktops");
    $treenode22 = new EJ\TreeView\TreeViewItem();
    $treenode22->id("21")->text("Monitors");


    $treenode31 = new EJ\TreeView\TreeViewItem();
    $treenode31->id("31")->text("8 GB");
    $treenode32 = new EJ\TreeView\TreeViewItem();
    $treenode32->id("32")->text("16 GB ");
    $treenode33 = new EJ\TreeView\TreeViewItem();
    $treenode33->id("33")->text("32 GB ");


    $treenode1->addItem($treenode11,$treenode12,$treenode13);

    $treenode2->addItem($treenode21,$treenode22);

    $treenode3->addItem($treenode31,$treenode32,$treenode33);

    $treenode->addItem($treenode1,$treenode2,$treenode3);
    echo $treenode->allowEditing(true)->allowDragAndDrop(true)->allowDropChild(true)->allowDropSibling(true)->render();
    ?>

</div>


<style>
    .cols-sample-area {
        width: 300px;
        max-width:100%;
    }
</style>
