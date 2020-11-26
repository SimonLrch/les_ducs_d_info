<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
<div class="cols-sample-area">

<?php
$pivotschemadesigner = new EJ\PivotSchemaDesigner("PivotSchemaDesigner1");
echo $pivotschemadesigner->render();

$pivotgrid =  new EJ\PivotGrid("PivotGrid1");
$datasource = new EJ\PivotGrid\DataSource();
$row = new EJ\PivotGrid\Row();
$row=array($row->fieldName("[Date].[Fiscal]"));
$column = new EJ\PivotGrid\Column();
$column=array($column->fieldName("[Customer].[Customer Geography]"));
$value = new EJ\PivotGrid\Value();
$field = new EJ\PivotGrid\Measure();
$value=array($value->measures(array($field->fieldName("[Measures].[Internet Sales Amount]")))->axis("columns"));

$datasource->data("//bi.syncfusion.com/olap/msmdpump.dll")->catalog("Adventure Works DW 2008 SE")->cube("Adventure Works")->rows($row)->columns($column)->values($value);
echo $pivotgrid->dataSource($datasource)->enableGroupingBar(true)->pivotTableFieldListID("PivotSchemaDesigner1")->render();


?>
</div>
<style>
    .cols-sample-area {
        width:100%;
        margin:0 auto;
        display:inline-block;
    }
    #PivotGrid1 {
        position: relative !important;
        float:left;
        width:55%;
        overflow:auto;
    }
            #PivotSchemaDesigner1 {
            width: 40% !important;
            float:right;
        }
</style>
</body>