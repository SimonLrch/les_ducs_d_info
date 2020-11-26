<?php
require_once '../EJ/AutoLoad.php';
?>
<div align="center">
    <div style="background-color: #FAFAF9;border-color: lightgray;margin-left:0px;border-width: 2px;opacity: 0.7;height: 45px;width:240px" >
		<label style="color:Black;font-size:22px;margin:15px;margin-top:7px;margin-left:20px;margin-right:20px;height:25px;font-weight:Normal;">USA Election 2012</label>   
	</div>
    <div style="height: 400px;"  id="container">	
   <?php
   include 'MapSource.php';
   $map =  new EJ\Map("ChartControl");
   $layer1=new EJ\Map\Layer();
   $electionData = file_get_contents('../Json/USA_ElectionData.json');
   $electionData=json_decode($electionData);

   $data = getUSAMap();
   $USMap = json_decode($data);

   $colorMaping=new EJ\Map\ShapeSettingsColorMapping();
   $equalColor1=new EJ\Map\EqualColorMapping();
   $equalColor1->value("Romney")->color("#D84444");
   $equalColor2=new EJ\Map\EqualColorMapping();
   $equalColor2->value("Obama")->color("#316DB5");
   $equalColorMapping=array($equalColor1, $equalColor2);
   $colorMaping->equalColorMapping($equalColorMapping);


   $shapeSetting=new EJ\Map\ShapeSetting();
   $shapeSetting->valuePath("Electors")->colorValuePath("Candidate")->stroke("white")->autoFill(false)->enableGradient(true)->strokeThickness("0.5")->highlightStroke("white")
       ->highlightColor("#AFAFAF")->selectionColor("#EFB856")->selectionStroke("white")->selectionStrokeWidth(2.5)->highlightBorderWidth("1")->colorMappings($colorMaping);
   
   $layer1->shapeData($USMap)->dataSource($electionData)->layerType("geometry")->shapeDataPath("State")->showTooltip(true)->tooltipTemplate("template")->enableSelection(true)->enableMouseHover(true)
       ->shapePropertyPath("name")->showMapItems(false)->shapeSettings($shapeSetting);
   $layer = array($layer1);

   echo $map->layers($layer)->render();

   
   ?>
        
 </div>
    <style type="text/css">
        .e-map {
            background-color: white;
        }

        p.small {
            line-height: 50%;
        }

        p.big {
            line-height: 110%;
        }

        .tip {
            border: 1px solid #4D4D4D;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            border-radius: 7px;
            margin-right: 25px;
            min-width: 110px;
            padding-top: 9px;
            padding-right: 10px;
            padding-left: 10px;
            width: auto;
            height: auto;
            background: #4D4D4D;
        }

        .popup {
            border: 1px solid #5B5B5B;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            left: 73.5%;
            top: 55%;
            margin-bottom: 2em;
            border-radius: 7px;
            opacity: 0.8;
            display: none;
            margin-right: 25px;
            position: absolute;
            width: 190px;
            padding: 1em;
            height: 70px;
            background: white;
        }

        .close-btn {
            border: 2px solid #5B5B5B;
            padding: 1px 4px;
            position: absolute;
            opacity: 0.8;
            background-color: #605F61;
            border-radius: 50%/50%;
            width: 12px;
            height: 19px;
            display: none;
            z-index: 1000;
        }

            .close-btn a {
                margin-left: 2px;
                font-weight: bold;
                color: white;
                text-decoration: none;
            }
    </style>
   
    <script id="template" type="application/jsrender">
        <div class="tip">
            <p class="small" style="margin-top:8px">
                <label style="color:white;font-size:12px;font-weight:normal;">State : {{:State}}</label>
            </p>
            <p class="big">
                <label style="color:white;font-size:12px;font-weight:normal;">Winner : {{:Candidate}}</label>
            </p>
        </div>
    </script>
</div>