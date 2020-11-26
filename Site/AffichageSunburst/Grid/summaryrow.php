<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    
    $Json = json_decode(file_get_contents("data.json"), true);
    $grid =  new EJ\Grid("Grid");
    $summaryrow=new EJ\Grid\SummaryRow();
    $summarycol=new EJ\Grid\SummaryColumn();
    $disaplayname="Freight";
    $summaryType="sum";
    $datamember="Freight";
    $title="Sum";
    $col1 = new EJ\Grid\Column();
    $col1->field("OrderID")->headerText("OrderID")->textAlign("right")->width(100);
    $col2 = new EJ\Grid\Column();
    $col2->field("CustomerID")->headerText("CustomerID")->width(70);
    $col3 = new EJ\Grid\Column();
    $col3->field("EmployeeID")->headerText("EmployeeID")->textAlign("right")->width(70);
    $col4 = new EJ\Grid\Column();
    $col4->field("ShipCountry")->headerText("ShipCountry")->width(70);
    $col5 = new EJ\Grid\Column();
    $col5->field("Freight")->headerText("Freight")->textAlign("right")->format("{0:C}")->width(70);
    $gridColumns = array($col1,$col2,$col3,$col4,$col5);
    $sumcol1=$summarycol->format("{0:c}")->summaryType($summaryType)->dataMember($datamember)->displayColumn($disaplayname);
    $summaryColumns=array($sumcol1);
    $summaryrow->summaryColumns($summaryColumns)->title($title);
    $sumrow1=array($summaryrow);
    echo $grid -> dataSource( $Json)->allowPaging(true)->columns($gridColumns)->summaryRows($sumrow1)->showSummary(true)->render();
    ?>

</div>
<style>
    .cols-sample-area {        
        margin:0 auto;
        float:none;
    }
</style>
