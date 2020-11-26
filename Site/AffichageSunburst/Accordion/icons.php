<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>


    <?php
    $acr = new EJ\Accordion("iconAccordion");
    $acr->width("550px")->create("onCreate")->beforeActivate("onBeforeActivate")->activate("onActivate")->beforeInactivate("onBeforeInActivate")->inActivate("onInActivate")->ajaxBeforeLoad("onBeforeLoad")->ajaxLoad("onLoad")->ajaxSuccess("onAjaxSuccess")->ajaxError("onError");

    $acrItem = new EJ\Accordion\AccordionItem();
    $acrItem->text("Volkswagen")->headerIconClass("logos volkswagan")->templateStart();
    ?>
    <div>
            Volkswagen is a German automobile manufacturer headquartered in Wolfsburg, Lower Saxony, Germany.
            Volkswagen is the original and top-selling marquee of the Volkswagen Group, the biggest German automaker and the third largest automaker in the world.
        </div>
    <?php
    $acrItem->templateEnd();
    $acr->AddItem($acrItem);
    $acrItem2 = new EJ\Accordion\AccordionItem();
    $acrItem2->text("Mitsubishi")->headerIconClass("logos mitsubishi")->templateStart();
    ?>
     <div>
            The Mitsubishi Group is a group of autonomous Japanese multinational companies covering a range of businesses which share the Mitsubishi brand,
            trademark, and legacy.The Mitsubishi group of companies form a loose entity, the Mitsubishi Keiretsu, which is often referenced in Japanese and US media and official reports.
        </div>
    <?php
    $acrItem2->templateEnd();
    $acr->AddItem($acrItem2);
    $acrItem3 = new EJ\Accordion\AccordionItem();
    $acrItem3->text("Mercedes-Benz")->headerIconClass("logos benz")->templateStart();
    ?>
        <div>
            Mercedes-Benz is a multinational division of the German manufacturer Daimler AG, and the brand is used for luxury automobiles, buses, coaches, and trucks.
            Mercedes-Benz is headquartered in Stuttgart, Baden-Württemberg, Germany.The name first appeared in 1926 under Daimler-Benz but traces its origins
            to Daimler-Motormen-Gesell shaft's 1901 Mercedes and to Karl Benz's 1886 Benz Patent Motorwagen, which is widely regarded as the first automobile.
        </div>
    <?php
    $acrItem3->templateEnd();
    $acr->AddItem($acrItem3);
    $acrIcon = new EJ\Accordion\CustomIcon();
    $acrIcon->header("header-close")->selectedHeader("header-expand");
    echo $acr->width("550px")->customIcon($acrIcon)->render();
    ?>

</div>
<style>    
    .cols-sample-area {
        width:600px;        
        margin:0 auto;
        float:none;
    }
    #iconAccordion img {
        float: left;
        margin: -7px 1px 0 -13px;
    }

    .header-expand {
        background-image: url(Content/images/ui-icons/ui-icons-active.png);
        background-position: -187px -60px;
        cursor: pointer;
        display: block;
        float: right !important;
        height: 16px;
        width: 16px;
    }

    .header-close {
        background-image: url(Content/images/ui-icons/ui-icons-default.png);
        background-position: -161px -60px;
        cursor: pointer;
        display: block;
        float: right !important;
        height: 16px;
        width: 16px;
    }

    .e-acrdn-header:hover .header-expand {
        background-image: url(Content/images/ui-icons/ui-icons-active.png);
        background-position: -187px -60px;
    }

    .e-acrdn-header:hover .header-close {
        background-image: url(Content/images/ui-icons/ui-icons-active.png);
        background-position: -161px -60px;
    }

    .logos {
        float: left;
        height: 35px;
        margin: -6px 1px 2px -15px;
        width: 35px;
    }

    .e-select .logos {
        background-image: url(Content/images/accordion/grey_logos.png);
    }

    .e-active .logos {
        background-image: url(Content/images/accordion/white_logos.png);
    }

    .e-select:hover div {
        background-image: url(Content/images/accordion/white_logos.png) !important;
    }

    .logos.volkswagan {
        background-position: 0 -170px;
    }

    .logos.mitsubishi {
        background-position: 0 -85px;
    }

    .logos.benz {
        background-position: 0 0;
    }
</style>
