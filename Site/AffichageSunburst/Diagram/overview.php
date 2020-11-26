<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <div class="diagram_section">
    <?php
    $nodes= array(
      createNode(24, 23, 20, "Content/images/overviewcontrol/cards_05.png"),
      createNode(555, 48, 41, "Content/images/overviewcontrol/cards_03.png"),
      createNode(461, 174, -64, "Content/images/overviewcontrol/cards_07.png"),
      createNode(455, 634, 0, "Content/images/overviewcontrol/cards_09.png"),
      createNode(81, 583, 0, "Content/images/overviewcontrol/cards_11.png"),
      createNode(861, 449, -24, "Content/images/overviewcontrol/cards_14.png"),
      createNode(34, 417, 20, "Content/images/overviewcontrol/cards_16.png"),
      createNode(674, 418, 37, "Content/images/overviewcontrol/cards_18.png"),
      createNode(1181, 921, -75, "Content/images/overviewcontrol/cards_23.png"),
      createNode(159, 125, -9, "Content/images/overviewcontrol/cards_25.png"),
      createNode(776, 249, 0, "Content/images/overviewcontrol/cards_100.png"),
      createNode(776, 27, 0, "Content/images/overviewcontrol/cards_101.png"),
      createNode(634, 149, -79, "Content/images/overviewcontrol/cards_102.png"),
      createNode(287, 159, 0, "Content/images/overviewcontrol/cards_103.png"),
      createNode(223, 584, -20, "Content/images/overviewcontrol/cards_104.png"),
      createNode(294, 8, -52, "Content/images/overviewcontrol/cards_105.png"),
      createNode(388, 296, 59, "Content/images/overviewcontrol/cards_106.png"),
      createNode(102, 267, 0, "Content/images/overviewcontrol/cards_107.png"),
      createNode(380, 452, 0, "Content/images/overviewcontrol/cards_108.png"),
      createNode(683, 550, 31, "Content/images/overviewcontrol/cards_109.png"),
      createNode(1038, 567, 20, "Content/images/overviewcontrol/cards_05.png"),
      createNode(849, 115, 41, "Content/images/overviewcontrol/cards_03.png"),
      createNode(1165, 144, -64, "Content/images/overviewcontrol/cards_07.png"),
      createNode(497, 815, 0, "Content/images/overviewcontrol/cards_09.png"),
      createNode(993, 480, 0, "Content/images/overviewcontrol/cards_100.png"),
      createNode(1240, 582, -38, "Content/images/overviewcontrol/cards_101.png"),
      createNode(941, 249, 0, "Content/images/overviewcontrol/cards_102.png"),
      createNode(674, 921, -41, "Content/images/overviewcontrol/cards_104.png"),
      createNode(296, 816, -20, "Content/images/overviewcontrol/cards_104.png"),
      createNode(1025, 45, -52, "Content/images/overviewcontrol/cards_105.png"),
      createNode(962, 943, 59, "Content/images/overviewcontrol/cards_106.png"),
      createNode(1093, 409, -42, "Content/images/overviewcontrol/cards_107.png"),
      createNode(445, 939, 33, "Content/images/overviewcontrol/cards_108.png"),
      createNode(756, 783, 31, "Content/images/overviewcontrol/cards_109.png"),
      createNode(15, 1047, 0, "Content/images/overviewcontrol/cards_05.png"),
      createNode(1072, 102, 41, "Content/images/overviewcontrol/cards_03.png"),
      createNode(417, 1198, -64, "Content/images/overviewcontrol/cards_07.png"),
      createNode(1148, 815, 0, "Content/images/overviewcontrol/cards_09.png"),
      createNode(1322, 310, -34, "Content/images/overviewcontrol/cards_11.png"),
      createNode(833, 1442, -36, "Content/images/overviewcontrol/cards_14.png"),
      createNode(25, 1441, 31, "Content/images/overviewcontrol/cards_16.png"),
      createNode(630, 1442, 0, "Content/images/overviewcontrol/cards_18.png"),
      createNode(1454, 102, 37, "Content/images/overviewcontrol/cards_20.png"),
      createNode(1253, 1306, -75, "Content/images/overviewcontrol/cards_23.png"),
      createNode(115, 1148, -9, "Content/images/overviewcontrol/cards_25.png"),
      createNode(993, 480, 0, "Content/images/overviewcontrol/cards_11.png"),
      createNode(115, 815, -24, "Content/images/overviewcontrol/cards_14.png"),
      createNode(913, 676, 31, "Content/images/overviewcontrol/cards_16.png"),
      createNode(1216, 310, 0, "Content/images/overviewcontrol/cards_18.png"),
      createNode(590, 614, -16, "Content/images/overviewcontrol/cards_20.png"),
      createNode(285, 685, -75, "Content/images/overviewcontrol/cards_23.png"),
      createNode(232, 357, -9, "Content/images/overviewcontrol/cards_25.png"),
      createNode(733, 1273, 0, "Content/images/overviewcontrol/cards_100.png"),
      createNode(733, 1051, 0, "Content/images/overviewcontrol/cards_101.png"),
      createNode(590, 1273, -79, "Content/images/overviewcontrol/cards_102.png"),
      createNode(244, 1212, 0, "Content/images/overviewcontrol/cards_103.png"),
      createNode(1547, 9, -20, "Content/images/overviewcontrol/cards_104.png"),
      createNode(251, 1031, -52, "Content/images/overviewcontrol/cards_105.png"),
      createNode(344, 1320, 59, "Content/images/overviewcontrol/cards_106.png"),
      createNode(58, 1291, 0, "Content/images/overviewcontrol/cards_107.png"),
      createNode(287, 1442, 0, "Content/images/overviewcontrol/cards_108.png"),
      createNode(1499, 733, 31, "Content/images/overviewcontrol/cards_109.png"),
      createNode(1566, 726, 20, "Content/images/overviewcontrol/cards_05.png"),
      createNode(805, 1138, 41, "Content/images/overviewcontrol/cards_03.png"),
      createNode(1122, 1168, -64, "Content/images/overviewcontrol/cards_07.png"),
      createNode(1216, 0, 0, "Content/images/overviewcontrol/cards_09.png"),
      createNode(1326, 534, 0, "Content/images/overviewcontrol/cards_11.png"),
      createNode(1514, 930, -24, "Content/images/overviewcontrol/cards_14.png"),
      createNode(1622, 473, 31, "Content/images/overviewcontrol/cards_16.png"),
      createNode(1498, 1124, 0, "Content/images/overviewcontrol/cards_18.png"),
      createNode(1668, 228, 0, "Content/images/overviewcontrol/cards_20.png"),
     );
    $diagram=new EJ\Diagram("diagram");
    

    $defaultNode=new EJ\Diagram\Node(); 
    $defaultNode->width(102)->height(142);
    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode);

    $snapSettings=new EJ\Diagram\SnapSetting();
    $snapSettings->snapConstraints("None");

    echo $diagram->tool(8)->width("650px")->height("600px")->nodes($nodes)->defaultSettings($defaultSettings)->snapSettings($snapSettings)->enableContextMenu(false)->render();

    function createNode($x, $y, $angle,$src) {
        $node=new EJ\Diagram\Node(); 
        $node->name(rand(0,100))->constraints("None")->offsetX($x)->offsetY($y)->rotateAngle($angle)->type("image")->source($src)->borderColor("none");
        return $node;
    }

    
    ?>
    </div>
    <div class="overview_section">
        <?php
        $overview=new EJ\Overview("overview");
        echo $overview->sourceID("diagram")->width("100%")->height("100%")->render();;
        ?>
    </div>
</div>

<style>
    .cols-sample-area {
        height: 600px;
        width: 1000px;
    }
    
    .diagram_section {
        width: 650px;
        height: 600px;
        float: left;
    }
    
    .overview_section {
        width: 300px;
        float: left;
        height: 330px;
        background-color: #f5f5f5;
    }
</style>
