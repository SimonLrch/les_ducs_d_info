<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

   <?php
    $acr = new EJ\Accordion("rtlAccordion");
    $acr->width("550px")->enableRTL(true);

    $acrItem = new EJ\Accordion\AccordionItem();
    $acrItem->text("سكريبت")->templateStart();
    ?>
    <div>
            جافا سكريبت (JS) هو تفسير الكمبيوتر لغة البرمجة.
            تم تنفيذ أصلا كجزء من متصفحات الويب بحيث البرامج النصية من جانب العميل يمكن أن تتفاعل مع المستخدم، والسيطرة على المتصفح،
            التواصل بشكل غير متزامن، وتغيير محتوى الوثيقة التي تم عرضها. [5] وفي الآونة الأخيرة، ومع ذلك،
            أصبح من الشائع في كل من تطوير اللعبة وإنشاء تطبيقات سطح المكتب.
        </div>
    <?php
    $acrItem->templateEnd();
    $acr->AddItem($acrItem);
    $acrItem2 = new EJ\Accordion\AccordionItem();
    $acrItem2->text("C شارب (C #)")->templateStart();
    ?>
    <div>
            يقصد به أن تكون بسيطة وعصرية، لأغراض عامة، لغة البرمجة وجوه المنحى C #.
            ويقود فريق تطويره بواسطة Anders Hejlsberg. أحدث إصدار هو C # 5.0، والذي صدر في 15 أغسطس 2012.
        </div>
    <?php
    $acrItem2->templateEnd();
    $acr->AddItem($acrItem2);
    $acrItem3 = new EJ\Accordion\AccordionItem();
    $acrItem3->text("البصرية الأساسية")->templateStart();
    ?>
    <div>
            يتم تثبيت مترجم سطر الأوامر، VBC.EXE، كجزء من مجانية. NET الإطار SDK.
            ويشمل أيضا أحادية مترجم VB.NET سطر الأوامر. أحدث إصدار هو VB 2012، والذي صدر في 15 أغسطس 2012.
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
</style>
