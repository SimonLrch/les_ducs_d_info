<?php
require_once '../EJ/AutoLoad.php';
?>
<div>
    <div style="height: 400px;"  id="container">	
    <?php
    $treeMap =  new EJ\TreeMap("TreeMap1");

    $medal_data = '[
 { "GameName": "Swimming", "GoldMedals": 16, "SilverMedals": 9, "BronzeMedals": 6, "TotalMedals": 31, "GameImage":"Content/images/treemap/Swimming.png" },
 { "GameName": "Track and Field", "GoldMedals": 9, "SilverMedals": 13, "BronzeMedals": 7, "TotalMedals": 29,"GameImage":"Content/images/treemap/TrackAndField.png" },
 { "GameName": "Gymnastics", "GoldMedals": 3, "SilverMedals": 1, "BronzeMedals": 2, "TotalMedals": 6,"GameImage":"Content/images/treemap/Gymnastics.png" },
 { "GameName": "Boxing", "GoldMedals": 1, "SilverMedals": 0, "BronzeMedals": 1, "TotalMedals": 2,"GameImage":"Content/images/treemap/Boxing.png" },
 { "GameName": "Cycling", "GoldMedals": 1, "SilverMedals": 2, "BronzeMedals": 1, "TotalMedals": 4,"GameImage":"Content/images/treemap/Cycling.png"},
 { "GameName": "Shooting", "GoldMedals": 3, "SilverMedals": 0, "BronzeMedals": 1, "TotalMedals": 4,"GameImage":"Content/images/treemap/Shooting.png"},
 { "GameName": "Wrestling", "GoldMedals": 2, "SilverMedals": 0, "BronzeMedals": 2, "TotalMedals": 4,"GameImage":"Content/images/treemap/Wrestling.png"},
 { "GameName": "Archery", "GoldMedals": 0, "SilverMedals": 1, "BronzeMedals": 0, "TotalMedals": 1,"GameImage":"Content/images/treemap/Archery.png"},
 { "GameName": "Soccer", "GoldMedals": 1, "SilverMedals": 0, "BronzeMedals": 0, "TotalMedals": 1,"GameImage":"Content/images/treemap/Soccer.png"},
 { "GameName": "Diving", "GoldMedals": 1, "SilverMedals": 1, "BronzeMedals": 2, "TotalMedals": 4,"GameImage":"Content/images/treemap/Diving.png"}
]';
    $JsonData = json_decode($medal_data,true);

    $uniColor=new EJ\TreeMap\UniColorMapping();
    $uniColor->color("#D73028");

    $leafItem=new EJ\TreeMap\LeafItemSetting();
    $leafItem->labelPath("GameName")->showLabels(true)->itemTemplate("imageTemplate");
   

    echo $treeMap->dataSource($JsonData)->weightValuePath("TotalMedals")->colorValuePath("GoldMedals")->borderBrush("white")->borderThickness(1)
        ->leafItemSettings($leafItem)->uniColorMapping($uniColor)->render();

    ?>
    </div> 

         <script id="imageTemplate" type="application/jsrender">
            <div style="border:1px solid white;background:url({{:Data.GameImage}}) no-repeat center center;height:{{:ItemHeight}}px;width:{{:ItemWidth}}px;" />
      </script>
</div>