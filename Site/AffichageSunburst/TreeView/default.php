<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $tree = new EJ\TreeView("treeView");

    $tree1 = new EJ\TreeView\TreeViewItem();
    $tree1->id("1")->text("Artwork");
    $tree2 = new EJ\TreeView\TreeViewItem();
    $tree2->id("2")->text("Music");
    $tree3 = new EJ\TreeView\TreeViewItem();
    $tree3->id("3")->text("Books");

    $tree11 = new EJ\TreeView\TreeViewItem();
    $tree11->id("11")->text("Abstract");
    $tree12 = new EJ\TreeView\TreeViewItem();
    $tree12->id("12")->text("Child");
    $tree13 = new EJ\TreeView\TreeViewItem();
    $tree13->id("13")->text("Comic / Cartoon");

    $tree121 = new EJ\TreeView\TreeViewItem();
    $tree121->id("121")->text("Preschool Crafts");
    $tree122 = new EJ\TreeView\TreeViewItem();
    $tree122->id("122")->text("School-age Crafts");

    $tree21 = new EJ\TreeView\TreeViewItem();
    $tree21->id("21")->text("Comics");
    $tree22 = new EJ\TreeView\TreeViewItem();
    $tree22->id("21")->text("Design");


    $tree31 = new EJ\TreeView\TreeViewItem();
    $tree31->id("31")->text("Classical");
    $tree32 = new EJ\TreeView\TreeViewItem();
    $tree32->id("32")->text("Mass");
    $tree33 = new EJ\TreeView\TreeViewItem();
    $tree33->id("33")->text("Folk");

    $tree311 = new EJ\TreeView\TreeViewItem();
    $tree311->id("311")->text("Medieval");
    $tree312 = new EJ\TreeView\TreeViewItem();
    $tree312->id("312")->text("Orchestral");

    $tree12->addItem($tree121,$tree122);
    $tree1->addItem($tree11,$tree13,$tree13);

    $tree2->addItem($tree21,$tree22);

    $tree31->addItem($tree311,$tree312);
    $tree3->addItem($tree31,$tree32,$tree33);

    $tree->addItem($tree1,$tree2,$tree3);
    echo $tree->render();
    ?>

</div>


<style>
    .cols-sample-area {
        width: 300px;
        max-width:100%;
    }
</style>
