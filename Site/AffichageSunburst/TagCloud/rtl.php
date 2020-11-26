<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
$websiteCollection = array(
       array('text'=> "جوجل", 'url'=> "http://www.google.com", 'frequency'=> 12),
       array('text'=> "كل الأشياء الرقمية", 'url'=> "http://allthingsd.com/", 'frequency'=> 3),
       array('text'=> "الفنون تكنيكا", 'url'=> "http://arstechnica.com/", 'frequency'=> 8),
       array('text'=> "بيزنس ويك", 'url'=> "http://www.businessweek.com/", 'frequency'=> 2),
       array('text'=> "ياهو", 'url'=> "http://in.yahoo.com/", 'frequency'=> 12),
       array('text'=> "مركز الشبكات", 'url'=> "http://www.centernetworks.com/", 'frequency'=> 5),
       array('text'=> "حن", 'url'=> "http://news.cnet.com/crave/", 'frequency'=> 8),
       array('text'=> "جير أزمة", 'url'=> "http://techcrunch.com/gadgets/", 'frequency'=> 20),
       array('text'=> "يوميا تك", 'url'=> "http://www.dailytech.com/", 'frequency'=> 1),
       array('text'=> "التقنية بلا حدود", 'url'=> "http://www.engadget.com/", 'frequency'=> 5),
       array('text'=> "الأسبوع المعلومات", 'url'=> "http://www.informationweek.com/", 'frequency'=> 0),
       array('text'=> "إستخدام آمن", 'url'=>  "http://www.pcworld.com/", 'frequency'=> 11),
       array('text'=> "جمهورية التكنولوجيا", 'url'=> "http://techrepublic.com/", 'frequency'=> 3),
       array('text'=> "الثعبان", 'url'=> "http://valleywag.gawker.com/", 'frequency'=> 6),
       array('text'=> "ريديف", 'url'=> "http://in.rediff.com/", 'frequency'=> 9),
       );
    $tagcloud = new EJ\TagCloud("tag");
    echo $tagcloud->dataSource($websiteCollection)->enableRTL(true)->titleText("مواقع التكنولوجيا")->render();
    ?>
    </div>

    <style>
        .cols-sample-area {
            width: 70%;
            margin-top: 20%;
        }
    </style>
