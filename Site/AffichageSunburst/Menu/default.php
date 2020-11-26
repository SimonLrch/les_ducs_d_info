<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div class="imgframe">
    <?php
    $menu = new EJ\Menu("syncfusionProducts");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("Products");
        $Item11 = new EJ\Menu\MenuItem();
        $Item11->text("ASP.NET");
        $Item12 = new EJ\Menu\MenuItem();
        $Item12->text("ASP.NET MVC");
        $Item17 = new EJ\Menu\MenuItem();
        $Item17->text("WinRT (XMAL)");
        $Item18 = new EJ\Menu\MenuItem();
        $Item18->text("WPF");
        $Item19 = new EJ\Menu\MenuItem();
        $Item19->text("Orubase Studio");
        $Item0110 = new EJ\Menu\MenuItem();
        $Item0110->text("Metro Studio");
        $Item0111 = new EJ\Menu\MenuItem();
        $Item0111->text("What's New");
            $Item0111a = new EJ\Menu\MenuItem();
            $Item0111a->text("WinRT (XMAL)");
            $Item0111b = new EJ\Menu\MenuItem();
            $Item0111b->text("WPF");
            $Item0111c = new EJ\Menu\MenuItem();
            $Item0111c->text("Silverlight");
            $Item0111d = new EJ\Menu\MenuItem();
            $Item0111d->text("Windows Forms");
            $Item0111e = new EJ\Menu\MenuItem();
            $Item0111e->text("Windows Phone");
        $Item0111->AddItem($Item0111a,$Item0111b,$Item0111c,$Item0111d,$Item0111e);
    $Item1->AddItem($Item11,$Item12,$Item17,$Item18,$Item19,$Item0110,$Item0111);

    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("Support");
        $Item21 = new EJ\Menu\MenuItem();
        $Item21->text("Direct-Trac Support");
        $Item22 = new EJ\Menu\MenuItem();
        $Item22->text("Community Forums");
        $Item23 = new EJ\Menu\MenuItem();
        $Item23->text("Knowledge Base");
        $Item24 = new EJ\Menu\MenuItem();
        $Item24->text("Online Documentation");
        $Item25 = new EJ\Menu\MenuItem();
        $Item25->text("Services");
            $Item251 = new EJ\Menu\MenuItem();
            $Item251->text("Consulting");
            $Item252 = new EJ\Menu\MenuItem();
            $Item252->text("Training");
        $Item25->AddItem($Item251,$Item252);
    $Item2->AddItem($Item21,$Item22,$Item23,$Item24,$Item25);

    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("Purchase");

    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("Downloads");
        $Item41 = new EJ\Menu\MenuItem();
        $Item41->text("Evaluation");
        $Item42 = new EJ\Menu\MenuItem();
        $Item42->text("Free E-Books");
        $Item43 = new EJ\Menu\MenuItem();
        $Item43->text("Metro Studio");
        $Item44 = new EJ\Menu\MenuItem();
        $Item44->text("Latest Version");
        $Item45 = new EJ\Menu\MenuItem();
        $Item45->text("Version History");
    $Item4->AddItem($Item41,$Item42,$Item43,$Item44,$Item45);

    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("Resources");
        $Item51 = new EJ\Menu\MenuItem();
        $Item51->text("Technology Resource Portal");
            $Item511 = new EJ\Menu\MenuItem();
            $Item511->text("E-books");
            $Item512 = new EJ\Menu\MenuItem();
            $Item512->text("White Papers");
        $Item51->AddItem($Item511,$Item512);
        $Item52 = new EJ\Menu\MenuItem();
        $Item52->text("Case Studies");
        $Item53 = new EJ\Menu\MenuItem();
        $Item53->text("Bouchers & Datasheets");
        $Item54 = new EJ\Menu\MenuItem();
        $Item54->text("FAQ");
    $Item5->AddItem($Item51,$Item52,$Item53,$Item54);


    $Item6 = new EJ\Menu\MenuItem();
    $Item6->text("Company");
        $Item61 = new EJ\Menu\MenuItem();
        $Item61->text("About Us");
            $Item611 = new EJ\Menu\MenuItem();
            $Item611->text("More About Us");
            $Item612 = new EJ\Menu\MenuItem();
            $Item612->text("Management");
            $Item613 = new EJ\Menu\MenuItem();
            $Item613->text("News & Events");
            $Item614 = new EJ\Menu\MenuItem();
            $Item614->text("Customer Quotes");
            $Item615 = new EJ\Menu\MenuItem();
            $Item615->text("Customer Lists");
            $Item617 = new EJ\Menu\MenuItem();
            $Item617->text("Awards");
            $Item618 = new EJ\Menu\MenuItem();
            $Item618->text("Media Kit");
        $Item61->AddItem($Item611,$Item612,$Item613,$Item614,$Item615,$Item617,$Item618);
        $Item63 = new EJ\Menu\MenuItem();
        $Item63->text("Technical Blog");
        $Item64 = new EJ\Menu\MenuItem();
        $Item64->text("Newsletter");
        $Item65 = new EJ\Menu\MenuItem();
        $Item65->text("Partners");
            $Item651 = new EJ\Menu\MenuItem();
            $Item651->text("Technology Partners");
            $Item652 = new EJ\Menu\MenuItem();
            $Item652->text("Training Partners");
            $Item653 = new EJ\Menu\MenuItem();
            $Item653->text("Consulting Partners");
        $Item65->AddItem($Item651,$Item652,$Item653);
        $Item66 = new EJ\Menu\MenuItem();
        $Item66->text("Locations");
            $Item661 = new EJ\Menu\MenuItem();
            $Item661->text("RDU");
            $Item662 = new EJ\Menu\MenuItem();
            $Item662->text("Chennai");
        $Item66->AddItem($Item661,$Item662);
        $Item67 = new EJ\Menu\MenuItem();
        $Item67->text("Contact Us");
        $Item68 = new EJ\Menu\MenuItem();
        $Item68->text("Careers");
    $Item6->AddItem($Item61,$Item63,$Item64,$Item65,$Item66,$Item67,$Item68);

    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5,$Item6);
    echo $menu->width("100%")->render();
    ?>
   
    </div>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
		height: 350px;
    }
    .imgframe {
        background: url("Content/images/menu/menu-bg.png") no-repeat scroll 0 0 transparent;
        width: 555px;
        height: 213px;
        background-size:100% 100%;
    }
    .e-menu {
        height: 40px;
    }
</style>