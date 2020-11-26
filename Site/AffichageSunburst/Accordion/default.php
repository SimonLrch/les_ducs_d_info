<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>


    <?php
    $acr = new EJ\Accordion("basicAccordion");
    $acr->width("550px");

    $acrItem = new EJ\Accordion\AccordionItem();
    $acrItem->text("Inbox")->templateStart();
    ?>
    <div>
        <div class="emp-list">
            <img src="Content/images/Employees/3.png" alt="employee" />
            <div class="time-panel">7:30</div>
            <b class="headername">Catriona</b><br />
            All WinRT controls are optimized for touch, supporting common gestures: zooming, panning, selecting, double-tapping, rotating, resizing.
        </div>
        <div class="emp-list">
            <img src="Content/images/Employees/6.png" alt="employee" />
            <div class="time-panel">5:33</div>
            <b class="headername">John Linden</b><br />
            All the components in the ASP.NET MVC have been built from the ground up with performance in mind and are extremely lightweight.
        </div>
        <div class="emp-list">
            <img src="Content/images/Employees/8.png" alt="employee" />
            <div class="time-panel">2:10</div>
            <b class="headername">Louis</b><br />
            Big data is a broad term for data sets so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying and information privacy.
        </div>
    </div>
    <?php
    $acrItem->templateEnd();
    $acr->AddItem($acrItem);
    $acrItem2 = new EJ\Accordion\AccordionItem();
    $acrItem2->text("Sent")->templateStart();
    ?>
    <div>
        <div class="emp-list">
            <img src="Content/images/Employees/8.png" alt="employee" />
            <div class="time-panel">3:55</div>
            <b class="headername">Louis</b><br />
            Big data is a broad term for data sets so large or complex that traditional data processing applications are inadequate. Challenges include analysis, capture, data curation, search, sharing, storage, transfer, visualization, querying and information privacy.
        </div>
        <div class="emp-list">
            <img src="Content/images/Employees/6.png" alt="employee" />
            <div class="time-panel">6:47</div>
            <b class="headername">John Linden</b><br />
            Cloud computing, also known as 'on-demand computing', is a kind of Internet-based computing, where shared resources, data and information are provided to computers and other devices on-demand.
        </div>
    </div>
    <?php
    $acrItem2->templateEnd();
    $acr->AddItem($acrItem2);
    $acrItem3 = new EJ\Accordion\AccordionItem();
    $acrItem3->text("Trash")->templateStart();
    ?>
    <div>
        <div class="emp-list">
            <img src="Content/images/Employees/3.png" alt="employee" />
            <div class="time-panel">8:30</div>
            <b class="headername">Catriona</b><br />
            With our sophisticated support system, built from the ground up to support all type of customers, you will have a streamlined experience working with our support team.
        </div>
    </div>
    <?php
    $acrItem3->templateEnd();
    $acr->AddItem($acrItem3);
    echo $acr->render();
    ?>




</div>
<style>    
    .cols-sample-area {
        width:600px;        
        margin:0 auto;
        float:none;
    }
    #basicAccordion img {
        float: left;
        height: 40px;
        padding-right: 6px;
    }

    .emp-list {
        border-bottom: 1px solid #BBBCBB;
        margin-bottom: 9px;
        padding-bottom: 9px;
    }

        .emp-list:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

    .time-panel {
        float: right;
        color: #2382C3;
    }

    .headername {
        font-size: 16px;
        font-weight: 600;
    }
</style>