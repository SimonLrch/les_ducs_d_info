<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
     <?php
    $menu = new EJ\Menu("menuRTL");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("كتب");
        $Item11 = new EJ\Menu\MenuItem();
        $Item11->text("الإصدارات الجديدة");
        $Item12 = new EJ\Menu\MenuItem();
        $Item12->text("جديد إصدارات الكتب السمعية");
        $Item13 = new EJ\Menu\MenuItem();
        $Item13->text("أكثر الكتب مبيعا");
        $Item14 = new EJ\Menu\MenuItem();
        $Item14->text("قادمة");
        $Item15 = new EJ\Menu\MenuItem();
        $Item15->text("مجموعات مربع");
    $Item1->AddItem($Item11,$Item12,$Item13,$Item14,$Item15);
    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("الألعاب");
        $Item21 = new EJ\Menu\MenuItem();
        $Item21->text("قادمة");
        $Item22 = new EJ\Menu\MenuItem();
        $Item22->text("PC");
        $Item23 = new EJ\Menu\MenuItem();
        $Item23->text("PS");
        $Item24 = new EJ\Menu\MenuItem();
        $Item24->text("PS3");
        $Item25 = new EJ\Menu\MenuItem();
        $Item25->text("اكس بوكس");
        $Item26 = new EJ\Menu\MenuItem();
        $Item26->text("لوحات المفاتيح");
    $Item2->AddItem($Item21,$Item22,$Item23,$Item24,$Item25,$Item26);
    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("متنقل");
        $Item31 = new EJ\Menu\MenuItem();
        $Item31->text("القادمون الجدد");
        $Item32 = new EJ\Menu\MenuItem();
        $Item32->text("أكثر الكتب مبيعا");
        $Item33 = new EJ\Menu\MenuItem();
        $Item33->text("منخفض السعر");
        $Item34 = new EJ\Menu\MenuItem();
        $Item34->text("أقراص");
    $Item3->AddItem($Item31,$Item32,$Item33,$Item34);
    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("الكاميرات");
        $Item41 = new EJ\Menu\MenuItem();
        $Item41->text("حدد و صور");
        $Item42 = new EJ\Menu\MenuItem();
        $Item42->text("SLR الرقمية");
        $Item43 = new EJ\Menu\MenuItem();
        $Item43->text("كاميرات الفيديو الرقمية");
        $Item44 = new EJ\Menu\MenuItem();
        $Item44->text("أكثر الكتب مبيعا");
    $Item4->AddItem($Item41,$Item42,$Item43,$Item44);
    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("موسيقى");
        $Item51 = new EJ\Menu\MenuItem();
        $Item51->text("الإصدارات الجديدة");
        $Item52 = new EJ\Menu\MenuItem();
        $Item52->text("أكثر الكتب مبيعا");
        $Item53 = new EJ\Menu\MenuItem();
        $Item53->text("موسيقى الروك");
        $Item54 = new EJ\Menu\MenuItem();
        $Item54->text("التعبدية والروحية");
        $Item55 = new EJ\Menu\MenuItem();
        $Item55->text("الصوفية وغزال");
    $Item5->AddItem($Item51,$Item52,$Item53,$Item54,$Item55);
    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5);
    echo $menu->width("100%")->enableRTL(true)->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        height: 300px;
        margin: 0 auto;
        float: none;
    }
</style>