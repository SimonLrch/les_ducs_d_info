<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $treemultiselection = new EJ\TreeView("multiselection");

    $treemultiselection1 = new EJ\TreeView\TreeViewItem();
    $treemultiselection1->id("1")->text("Artwork");
    $treemultiselection2 = new EJ\TreeView\TreeViewItem();
    $treemultiselection2->id("2")->text("Music");
    $treemultiselection3 = new EJ\TreeView\TreeViewItem();
    $treemultiselection3->id("3")->text("Books");

    $treemultiselection11 = new EJ\TreeView\TreeViewItem();
    $treemultiselection11->id("11")->text("Abstract");
    $treemultiselection12 = new EJ\TreeView\TreeViewItem();
    $treemultiselection12->id("12")->text("Child");
    $treemultiselection13 = new EJ\TreeView\TreeViewItem();
    $treemultiselection13->id("13")->text("Comic / Cartoon");

    $treemultiselection121 = new EJ\TreeView\TreeViewItem();
    $treemultiselection121->id("121")->text("Preschool Crafts");
    $treemultiselection122 = new EJ\TreeView\TreeViewItem();
    $treemultiselection122->id("122")->text("School-age Crafts");

    $treemultiselection21 = new EJ\TreeView\TreeViewItem();
    $treemultiselection21->id("21")->text("Comics");
    $treemultiselection22 = new EJ\TreeView\TreeViewItem();
    $treemultiselection22->id("21")->text("Design");


    $treemultiselection31 = new EJ\TreeView\TreeViewItem();
    $treemultiselection31->id("31")->text("Classical");
    $treemultiselection32 = new EJ\TreeView\TreeViewItem();
    $treemultiselection32->id("32")->text("Mass");
    $treemultiselection33 = new EJ\TreeView\TreeViewItem();
    $treemultiselection33->id("33")->text("Folk");

    $treemultiselection311 = new EJ\TreeView\TreeViewItem();
    $treemultiselection311->id("311")->text("Medieval");
    $treemultiselection312 = new EJ\TreeView\TreeViewItem();
    $treemultiselection312->id("312")->text("Orchestral");

    $treemultiselection12->addItem($treemultiselection121,$treemultiselection122);
    $treemultiselection1->addItem($treemultiselection11,$treemultiselection13,$treemultiselection13);

    $treemultiselection2->addItem($treemultiselection21,$treemultiselection22);

    $treemultiselection31->addItem($treemultiselection311,$treemultiselection312);
    $treemultiselection3->addItem($treemultiselection31,$treemultiselection32,$treemultiselection33);

    $treemultiselection->addItem($treemultiselection1,$treemultiselection2,$treemultiselection3);
    echo $treemultiselection->allowMultiSelection(true)->allowDragAndDrop(true)->render();
    ?>

</div>


<style>
    .cols-sample-area {
        width: 300px;
        max-width:100%;
    }
</style>

