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
            

            $columns = array("Vegie-spread", "Tofuaa", "Alice Mutton", "Konbu", "Flotemysost");
            $itemSource = array();
            for ($i = 0; $i < count($columns); $i++)
            {
                for ($j = 0; $j < 6; $j++)
                {
                    $value1 = rand(0,100);
                    $itemObj=new ItemSourceClass();
                    array_push($itemSource, $itemObj->ProductName($columns[$i])->Year("Y".(2011+$j))->Value($value1));
                } 
            } 

            $column=new EJ\HeatMap\Column();
            $column->displayName("Product Name")->propertyName("ProductName");

            $row= new EJ\HeatMap\Row();
            $row->displayName("Year")->propertyName("Year");
            
            $value= new EJ\HeatMap\Value();
            $value->propertyName("Value");

            $columnMapping0=new EJ\HeatMap\Column();
            $columnMapping0->displayName( $columns[0])->propertyName($columns[0]);
            $columnMapping1=new EJ\HeatMap\Column();
            $columnMapping1->displayName( $columns[1])->propertyName($columns[1]);
            $columnMapping2=new EJ\HeatMap\Column();
            $columnMapping2->displayName( $columns[2])->propertyName($columns[2]);
            $columnMapping3=new EJ\HeatMap\Column();
            $columnMapping3->displayName( $columns[3])->propertyName($columns[3]);
            $columnMapping4=new EJ\HeatMap\Column();
            $columnMapping4->displayName( $columns[4])->propertyName($columns[4]);
            $columnMapping5=new EJ\HeatMap\Column(); 
            
            $headerMapping=new EJ\HeatMap\HeaderMapping(); 
            $columnStyle=new EJ\HeatMap\ColumnStyle();
            $columnStyle->width(105)->textAlign("right");
            $headerMapping->propertyName("Year")->displayName("Year")->columnStyle($columnStyle);

            
            $itemsMapping= new EJ\HeatMap\ItemsMapping();
            $itemsMapping->column($column)->row($row)->value($value)->columnMapping(array($columnMapping0,$columnMapping1,$columnMapping2,$columnMapping3,$columnMapping4))->headerMapping($headerMapping);

            echo $heatmap->width("810")->colorMappingCollection(array($colorMap1,$colorMap2))->itemsMapping($itemsMapping)->itemsSource($itemSource)->legendCollection(array("heatmap_legend"))->isResponsive(true)->render();

            class ItemSourceClass{ 
                public function ProductName ($value){
                    $this -> ProductName = $value;
                    return $this;
                } 
                public function Year ($value){
                    $this -> Year = $value;
                    return $this;
                } 
                public function Value ($value){
                    $this -> Value = $value;
                    return $this;
                }
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
            height: 600px;
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
