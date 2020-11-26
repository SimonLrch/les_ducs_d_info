<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
$websiteCollection = array(
       array('text'=> "Google", 'url'=> "http://www.google.com", 'frequency'=> 12),
       array('text'=> "All Things Digital", 'url'=> "http://allthingsd.com/", 'frequency'=> 3),
       array('text'=> "Arts Technica", 'url'=> "http://arstechnica.com/", 'frequency'=> 8),
       array('text'=> "Business Week", 'url'=> "http://www.businessweek.com/", 'frequency'=> 2),
       array('text'=> "Yahoo", 'url'=> "http://in.yahoo.com/", 'frequency'=> 12),
       array('text'=> "Center Networks", 'url'=> "http://www.centernetworks.com/", 'frequency'=> 5),
       array('text'=> "Crave", 'url'=> "http://news.cnet.com/crave/", 'frequency'=> 8),
       array('text'=> "Crunch Gear", 'url'=> "http://techcrunch.com/gadgets/", 'frequency'=> 20),
       array('text'=> "Daily Tech", 'url'=> "http://www.dailytech.com/", 'frequency'=> 1),
       array('text'=> "Electronista", 'url'=> "http://www.electronista.com/", 'frequency'=> 3),
       array('text'=> "Engadget", 'url'=> "http://www.engadget.com/", 'frequency'=> 5),
       array('text'=> "Gearlog", 'url'=> "http://www.gearlog.com/", 'frequency'=> 9),
       array('text'=> "Information Week", 'url'=> "http://www.informationweek.com/", 'frequency'=> 0),
       array('text'=> "PCWorld", 'url'=>  "http://www.pcworld.com/", 'frequency'=> 11),
       array('text'=> "Tech Republic", 'url'=> "http://techrepublic.com/", 'frequency'=> 3),
       array('text'=> "Valleywag", 'url'=> "http://valleywag.gawker.com/", 'frequency'=> 6),
       array('text'=> "Rediff", 'url'=> "http://in.rediff.com/", 'frequency'=> 9),
       array('text'=> "WebProNews", 'url'=> "http://www.webpronews.com/", 'frequency'=> 2),
       );
    $tagcloud = new EJ\TagCloud("tag");
    echo $tagcloud->dataSource($websiteCollection)->titleText("Tech Sites")->render();
    ?>

    </div>

    <style>
        .cols-sample-area {
            width: 70%;
            margin: 0 auto;
        }
    </style>
