<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
   <?php
    $menu = new EJ\Menu("vertical");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("Books");
        $Item11 = new EJ\Menu\MenuItem();
        $Item11->text("New Releases");
        $Item12 = new EJ\Menu\MenuItem();
        $Item12->text("New Releases audio books");
        $Item13 = new EJ\Menu\MenuItem();
        $Item13->text("Bestsellers");
        $Item14 = new EJ\Menu\MenuItem();
        $Item14->text("Upcoming");
        $Item15 = new EJ\Menu\MenuItem();
        $Item15->text("Box Sets");
    $Item1->AddItem($Item11,$Item12,$Item13,$Item14,$Item15);
    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("Gaming");
        $Item21 = new EJ\Menu\MenuItem();
        $Item21->text("XBox");
        $Item22 = new EJ\Menu\MenuItem();
        $Item22->text("PC");
        $Item23 = new EJ\Menu\MenuItem();
        $Item23->text("PS");
        $Item24 = new EJ\Menu\MenuItem();
        $Item24->text("PS3");
        $Item25 = new EJ\Menu\MenuItem();
        $Item25->text("Consoles");
    $Item2->AddItem($Item21,$Item22,$Item23,$Item24,$Item25);
    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("Mobiles");
        $Item31 = new EJ\Menu\MenuItem();
        $Item31->text("New Arrivals");
        $Item32 = new EJ\Menu\MenuItem();
        $Item32->text("Low Price");
        $Item33 = new EJ\Menu\MenuItem();
        $Item33->text("Bestsellers");
        $Item34 = new EJ\Menu\MenuItem();
        $Item34->text("Tablets");
    $Item3->AddItem($Item31,$Item32,$Item33,$Item34);
    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("Cameras");
        $Item41 = new EJ\Menu\MenuItem();
        $Item41->text("Point & Shoots");
        $Item42 = new EJ\Menu\MenuItem();
        $Item42->text("Digital SLR");
        $Item43 = new EJ\Menu\MenuItem();
        $Item43->text("Camcorders");
        $Item44 = new EJ\Menu\MenuItem();
        $Item44->text("Bestsellers");
    $Item4->AddItem($Item41,$Item42,$Item43,$Item44);
    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("Musics");
        $Item51 = new EJ\Menu\MenuItem();
        $Item51->text("New Releases");
        $Item52 = new EJ\Menu\MenuItem();
        $Item52->text("Rock Music");
        $Item53 = new EJ\Menu\MenuItem();
        $Item53->text("Bestsellers");
    $Item5->AddItem($Item51,$Item52,$Item53);
    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5);
    echo $menu->orientation("vertical")->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
</style>