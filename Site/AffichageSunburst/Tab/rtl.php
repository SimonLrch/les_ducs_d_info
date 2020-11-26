<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
     <?php
    $tab =new EJ\Tab("rtlTab"); 
     $tab->templateStart();
     ?>
        <ul>
            <li><a href="#JS">سكريبت</a></li>
            <li><a href="#cSharp">C شارب (C #)</a></li>
            <li><a href="#vb">البصرية الأساسية</a></li>
        </ul>
        <div id="JS">
            جافا سكريبت (JS) هو تفسير الكمبيوتر لغة البرمجة.
                        تم تنفيذ أصلا كجزء من متصفحات الويب بحيث البرامج النصية من جانب العميل يمكن أن تتفاعل مع المستخدم، والسيطرة على المتصفح،
                        التواصل بشكل غير متزامن، وتغيير محتوى الوثيقة التي تم عرضها. [5] وفي الآونة الأخيرة، ومع ذلك،
                        أصبح من الشائع في كل من تطوير اللعبة وإنشاء تطبيقات سطح المكتب.
        </div>
        <div id="cSharp">
            يقصد به أن تكون بسيطة وعصرية، لأغراض عامة، لغة البرمجة وجوه المنحى C #.
                        ويقود فريق تطويره بواسطة Anders Hejlsberg. أحدث إصدار هو C # 5.0، والذي صدر في 15 أغسطس 2012.
        </div>
        <div id="vb">
            يتم تثبيت مترجم سطر الأوامر، VBC.EXE، كجزء من مجانية. NET الإطار SDK.
                        ويشمل أيضا أحادية مترجم VB.NET سطر الأوامر. أحدث إصدار هو VB 2012، والذي صدر في 15 أغسطس 2012.
        </div>
    <?php
    $tab->templateEnd();
    echo $tab->width("500px")->enableRTL(true)->render();
    ?>
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>