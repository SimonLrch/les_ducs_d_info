<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <div style="border-width: 2px; opacity: 0.7; text-align: center;">
        <label class="ht-label1">Product Sales by Year</label><br />
        <label class="ht-label2">(In Percentage)</label>
    </div>
    <div style="width: 700px; margin: 0 auto; text-align: center;">
        <div style="width: 700px; margin: 0 auto; text-align: center;">
            <?php
            $heatmap=new EJ\HeatMap("HeatMap1");

            
            $colorMap1=new EJ\HeatMap\ColorMappingCollection();
            $label1=new EJ\HeatMap\Label();
            $label1->text("0");
            $colorMap1->color("#8ec8f8")->value(0)->label($label1);
            $colorMap2=new EJ\HeatMap\ColorMappingCollection();
            $label2=new EJ\HeatMap\Label();
            $label2->text("100");
            $colorMap2->color("#0d47a1")->value(100)->label($label2); 
            

            $itemsSource = array();
            $rows = array("Vegie-spread", "Tofuaa", "Alice Mutton", "Konbu", "Flotemysost", "Perth Pasties", "Boston Crab Meat", "Raclette Courdavault");

            for ($i = 0; $i < 8; $i++) {
                $itemObj=new TableSourceClass();
                array_push($itemsSource, $itemObj->ProductName($rows[$i])->Y2010(getValue())->Y2011(getValue())->Y2012(getValue())->Y2013(getValue())->Y2014(getValue())->Y2015(getValue())->Y2016(getValue())->Y2017(getValue())->Y2018(getValue()));
            } 

            $headerMapping=new EJ\HeatMap\HeaderMapping();

            $columnStyle=new EJ\HeatMap\ColumnStyle();
            $columnStyle->width(140)->textAlign("right");
            $headerMapping->propertyName("ProductName")->displayName("Product Name")->columnStyle($columnStyle);
            
            $columnMapping0=new EJ\HeatMap\Column();
            $columnMapping0->displayName("Y2010")->propertyName("Y2010");
            $columnMapping1=new EJ\HeatMap\Column();
            $columnMapping1->displayName("Y2011")->propertyName("Y2011");
            $columnMapping2=new EJ\HeatMap\Column();
            $columnMapping2->displayName("Y2012")->propertyName("Y2012");
            $columnMapping3=new EJ\HeatMap\Column();
            $columnMapping3->displayName("Y2013")->propertyName("Y2013");
            $columnMapping4=new EJ\HeatMap\Column();
            $columnMapping4->displayName("Y2014")->propertyName("Y2014");
            $columnMapping5=new EJ\HeatMap\Column();
            $columnMapping5->displayName("Y2015")->propertyName("Y2015");
            $columnMapping6=new EJ\HeatMap\Column();
            $columnMapping6->displayName("Y2016")->propertyName("Y2016");
            $columnMapping7=new EJ\HeatMap\Column();
            $columnMapping7->displayName("Y2017")->propertyName("Y2017");
            $columnMapping8=new EJ\HeatMap\Column();
            $columnMapping8->displayName("Y2018")->propertyName("Y2018");
            
            $itemsMapping= new EJ\HeatMap\ItemsMapping();
            $itemsMapping->headerMapping($headerMapping)->columnMapping(array($columnMapping0,$columnMapping1,$columnMapping2,$columnMapping3,$columnMapping4,$columnMapping5,$columnMapping6,$columnMapping7,$columnMapping8));

            echo $heatmap->width("800")->colorMappingCollection(array($colorMap1,$colorMap2))->itemsMapping($itemsMapping)->itemsSource($itemsSource)->legendCollection(array("heatmap_legend"))->isResponsive(true)->render();

            class TableSourceClass{ 
                public function ProductName ($value){
                    $this -> ProductName = $value;
                    return $this;
                } 
                public function Y2010 ($value){
                    $this -> Y2010 = $value;
                    return $this;
                } 
                public function Y2011 ($value){
                    $this -> Y2011 = $value;
                    return $this;
                }
                public function Y2012 ($value){
                    $this -> Y2012 = $value;
                    return $this;
                }
                public function Y2013 ($value){
                    $this -> Y2013 = $value;
                    return $this;
                }
                public function Y2014 ($value){
                    $this -> Y2014 = $value;
                    return $this;
                }
                public function Y2015 ($value){
                    $this -> Y2015 = $value;
                    return $this;
                }
                public function Y2016 ($value){
                    $this -> Y2016 = $value;
                    return $this;
                }
                public function Y2017 ($value){
                    $this -> Y2017 = $value;
                    return $this;
                }
                public function Y2018 ($value){
                    $this -> Y2018 = $value;
                    return $this;
                }
                
            }
            
            function getValue (){
                return  rand(0,100);
            } 
            ?>
            <div style="height: 15px; width: 100%;"></div>
        </div>
        <div style="height: 15px; width: 100%;"></div>
        <div style="height: 100px; width: 100%; margin-left: 100px;">
            <?php
            $heatmaplegnd =new EJ\HeatMapLegend("heatmap_legend");
            $colorMap1=new EJ\HeatMap\ColorMappingCollection();
            $label1=new EJ\HeatMap\Label();
            $label1->text("0");
            $colorMap1->color("#8ec8f8")->value(0)->label($label1);

            $colorMap2=new EJ\HeatMap\ColorMappingCollection();
            $label2=new EJ\HeatMap\Label();
            $label2->text("100");
            $colorMap2->color("#0d47a1")->value(100)->label($label2); 
            

            echo $heatmaplegnd->width("75%")->height("50px")->colorMappingCollection(array($colorMap1,$colorMap2))->isResponsive(true)->render();
            ?>
        </div>
    </div>
    <style>
        .cols-sample-area {
            height: 450px;
            text-align: center;
        }

        .ht-label1 {
            color: Black;
            font-size: 22px;
            height: 25px;
            font-weight: Normal;
        }

        .ht-label2 {
            color: Black;
            font-size: 16px;
            margin-top: -2px;
            height: 25px;
            font-weight: normal;
        }
    </style>
