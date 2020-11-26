<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <div style="border-width: 2px; opacity: 0.7; text-align: center;">
        <label class="ht-label1">Product Sales by Month</label><br />
        <label class="ht-label2">(In Percentage)</label>
    </div>
    <div style="width: 700px; margin: 0 auto; text-align: center;">
        <div style="width: 700px; margin: 0 auto; text-align: center;">
            <?php
            $heatmap=new EJ\HeatMap("HeatMap1");

            
            $colorMap1=new EJ\HeatMap\ColorMappingCollection();
            $label1=new EJ\HeatMap\Label();
            $label1->text("0");
            $colorMap1->color("#fe0002")->value(0)->label($label1);

            $colorMap2=new EJ\HeatMap\ColorMappingCollection();
            $label2=new EJ\HeatMap\Label();
            $label2->text("3");
            $colorMap2->color("#ffff01")->value(3)->label($label2); 


            $colorMap3=new EJ\HeatMap\ColorMappingCollection();
            $label3=new EJ\HeatMap\Label();
            $label3->text("6");
            $colorMap3->color("#13ab11")->value(6)->label($label3); 

            $colorMap4=new EJ\HeatMap\ColorMappingCollection();
            $label4=new EJ\HeatMap\Label();
            $label4->text("10");
            $colorMap4->color("#005ba2")->value(10)->label($label4); 
                     

            $itemSource = array();
            for ($i = 0; $i < 900; $i++)
            {
                $itemObj=new virtualSourceClass();
                array_push($itemSource, $itemObj->Year(2016 - $i)->Jan(getValue())->Feb(getValue())->Mar(getValue())->Apr(getValue())->May(getValue())->Jun(getValue())->Jul(getValue())->Aug(getValue())->Sep(getValue())->Oct(getValue())->Nov(getValue())->Dec(getValue()));
            }  
            

            $headerMapping=new EJ\HeatMap\HeaderMapping();

            $columnStyle=new EJ\HeatMap\ColumnStyle();
            $columnStyle->textAlign("right");
            $headerMapping->propertyName("Year")->displayName("Year")->columnStyle($columnStyle);


            $columnMapping0=new EJ\HeatMap\Column();
            $columnMapping0->displayName("Jan")->propertyName("Jan");
            $columnMapping1=new EJ\HeatMap\Column();
            $columnMapping1->displayName("Feb")->propertyName("Feb");
            $columnMapping2=new EJ\HeatMap\Column();
            $columnMapping2->displayName("Mar")->propertyName("Mar");
            $columnMapping3=new EJ\HeatMap\Column();
            $columnMapping3->displayName("Apr")->propertyName("Apr");
            $columnMapping4=new EJ\HeatMap\Column();
            $columnMapping4->displayName("May")->propertyName("May");
            $columnMapping5=new EJ\HeatMap\Column();
            $columnMapping5->displayName("Jun")->propertyName("Jun");
            $columnMapping6=new EJ\HeatMap\Column();
            $columnMapping6->displayName("Jul")->propertyName("Jul");
            $columnMapping7=new EJ\HeatMap\Column();
            $columnMapping7->displayName("Aug")->propertyName("Aug");
            $columnMapping8=new EJ\HeatMap\Column();
            $columnMapping8->displayName("Sep")->propertyName("Sep");
            $columnMapping9=new EJ\HeatMap\Column();
            $columnMapping9->displayName("Oct")->propertyName("Oct");
            $columnMapping10=new EJ\HeatMap\Column();
            $columnMapping10->displayName("Nov")->propertyName("Nov");
            $columnMapping11=new EJ\HeatMap\Column();
            $columnMapping11->displayName("Dec")->propertyName("Dec");
           

            $itemsMapping= new EJ\HeatMap\ItemsMapping();
            $itemsMapping->headerMapping($headerMapping)->columnMapping(array($columnMapping0,$columnMapping1,$columnMapping2,$columnMapping3,$columnMapping4,$columnMapping5,$columnMapping6,$columnMapping7,$columnMapping8,$columnMapping9,$columnMapping10,$columnMapping11));

            echo $heatmap->width("810")->height(300)->enableVirtualization(true)->colorMappingCollection(array($colorMap1,$colorMap2,$colorMap3,$colorMap4))->itemsMapping($itemsMapping)->itemsSource($itemSource)->isResponsive(true)->render();
            
            
            class virtualSourceClass{ 
                public function Year ($value){
                    $this -> Year = $value;
                    return $this;
                } 
                public function Jan ($value){
                    $this -> Jan = $value;
                    return $this;
                } 
                public function Feb ($value){
                    $this -> Feb = $value;
                    return $this;
                }
                public function Mar ($value){
                    $this -> Mar = $value;
                    return $this;
                }
                public function Apr ($value){
                    $this -> Apr = $value;
                    return $this;
                }
                public function May ($value){
                    $this -> May = $value;
                    return $this;
                }
                public function Jun ($value){
                    $this -> Jun = $value;
                    return $this;
                }
                public function Jul ($value){
                    $this -> Jul = $value;
                    return $this;
                }
                public function Aug ($value){
                    $this -> Aug = $value;
                    return $this;
                }
                public function Sep ($value){
                    $this -> Sep = $value;
                    return $this;
                }
                
                public function Oct ($value){
                    $this -> Oct = $value;
                    return $this;
                }

                public function Nov ($value){
                    $this -> Nov = $value;
                    return $this;
                }

                public function Dec ($value){
                    $this -> Dec = $value;
                    return $this;
                }
            }
            
            function getValue (){
                return  rand(0,10);
            } 

            ?>

        </div>
    </div>
    <style>
        .cols-sample-area {
            height: 400px;
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
