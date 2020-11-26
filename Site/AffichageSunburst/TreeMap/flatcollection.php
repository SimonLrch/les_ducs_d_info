<?php
require_once '../EJ/AutoLoad.php';
?>
<div >
    <div style="height: 400px;"  id="container">	
    <?php
    $treeMap =  new EJ\TreeMap("TreeMap1");

    $population_data = '[
 { "Continent": "Asia", "Country": "Indonesia", "Growth": 3, "Population": 237641326 },
 { "Continent": "Asia", "Country": "Russia", "Growth": 2, "Population": 152518015 },
 { "Continent": "Asia", "Country": "Malaysia", "Growth": 1, "Population": 29672000 },
 { "Continent": "North America", "Country": "United States", "Growth": 4, "Population": 315645000 },
 { "Continent": "North America", "Country": "Mexico", "Growth": 2, "Population": 112336538 },
 { "Continent": "North America", "Country": "Canada", "Growth": 1, "Population": 39056064 },
 { "Continent": "South America", "Country": "Colombia", "Growth": 1, "Population": 47000000 },
 { "Continent": "South America", "Country": "Brazil", "Growth": 3, "Population": 193946886 },
 { "Continent": "Africa", "Country": "Nigeria", "Growth": 2, "Population": 170901000 },
 { "Continent": "Africa", "Country": "Egypt", "Growth": 1, "Population": 83661000 },
 { "Continent": "Europe", "Country": "Germany", "Growth": 1, "Population": 81993000 },
 { "Continent": "Europe", "Country": "France", "Growth": 1, "Population": 65605000 },
 { "Continent": "Europe", "Country": "UK", "Growth": 1, "Population": 63181775 }
]';
    $JsonData = json_decode($population_data,true);

    $uniColor=new EJ\TreeMap\UniColorMapping();
    $uniColor->color("#D73028");

    $leafItem=new EJ\TreeMap\LeafItemSetting();
    $leafItem->labelPath("Country")->showLabels(true);
    $levels1=new EJ\TreeMap\Level();

    $levels1->groupPath("Continent")->showHeader(true)->groupGap(5)->headerHeight(25)->headerTemplate("headertemplate");
    $leafItem->showLabels(true)->labelPath("Country");
    $levelsCol=array($levels1);

    $gradiant = array("#fde6cc", "#fab665");
    $rangeColor=new EJ\TreeMap\RangeColorMapping();
    $rangeColor->from(29671000)->to(315646000)->gradientColors($gradiant);
    $rangeColorColl=array($rangeColor);

    $legend=new EJ\TreeMap\LegendSetting();
    $legend->leftLabel("20000000:")->rightLabel(":300000000")->width(150)->height(20)->mode("interactive")->title("Population")->dockPosition("top")->alignment("center");
    echo $treeMap->dataSource($JsonData)->weightValuePath("Population")->colorValuePath("Population")->enableGradient(true)->borderThickness(0)
    ->showTooltip(true)->tooltipTemplate("template")->showLegend(true)->legendSettings($legend)
    ->leafItemSettings($leafItem)->levels($levelsCol)->rangeColorMapping($rangeColorColl)->render();

    ?>
    </div> 


    <script id="headertemplate" type="application/jsrender">
	        <div style="margin-top:3px;">
            <label style="color:black;font-size:16px;font-weight:normal;margin-left:5px;" id="Label1">{{:header}}</label><br />            
      </div> 
        
    </script> 
    <script id="labeltemplate" type="application/jsrender">	
	        <div style="background-color: transparent;">
            <label style="color:black;font-size:large;font-weight:normal;" >{{:Country}}</label><br />            
        </div>       
     
    </script>  
         <script  id="template" type="application/jsrender">
        <div  style="margin-left:17px;margin-top:15px;">      
            <div style="height:auto;width:auto;background:black;border-radius:3px;opacity:1">
                <div style="margin-top:5px;margin-left:9px;padding-top:3px;margin-right:9px;">
                    <label style="margin-top:1px;font-weight:normal;font-size:12px;color:white;font-family:Segoe UI;">{{:Country}}</label>
                </div>
               <div style="height:10px;"></div>
                <div style="margin-top:-10px;margin-left:9px;margin-right:9px;padding-bottom:3px;">
                    <label style="margin-top:-5px;font-weight:normal;font-size:14px;color:white;font-family:segoe ui light;">{{:Population}}</label>
                </div>
            </div>
        </div>            
    </script>
</div>