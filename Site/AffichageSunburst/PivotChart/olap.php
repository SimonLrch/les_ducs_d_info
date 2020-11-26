<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
<div class="cols-sample-area">

<?php


$pivotchart =  new EJ\PivotChart("PivotChart1");
$datasource = new EJ\PivotChart\DataSource();

$row = new EJ\PivotChart\Row();
$row=array($row->fieldName("[Date].[Fiscal]"));
$column = new EJ\PivotChart\Column();
$column=array($column->fieldName("[Customer].[Customer Geography]"));
$value = new EJ\PivotChart\Value();
$field = new EJ\PivotChart\Measure();
$value=array($value->measures(array($field->fieldName("[Measures].[Internet Sales Amount]")))->axis("columns"));

$series =  new EJ\Chart\CommonSeriesOption();
$tooltip =  new EJ\Chart\Tooltip();
$series->enableAnimation(true)->type("column")->tooltip($tooltip->visible(true));
$size =  new EJ\Chart\Size();
$size->height("460px")->width("950px");

$zooming = new EJ\PivotChart\Zooming();
$zooming->enableScrollbar(true);

$datasource->data("//bi.syncfusion.com/olap/msmdpump.dll")->catalog("Adventure Works DW 2008 SE")->cube("Adventure Works")->rows($row)->columns($column)->values($value);
echo $pivotchart->dataSource($datasource)->isResponsive(true)->zooming($zooming)->commonSeriesOptions($series)->size($size)->load("loadTheme")->render();
?>
 </div>
<style>
    .cols-sample-area {
        width:300px;
        margin:0 auto;
        float:none;
    }
    #PivotChart1{
        width:950px;
        height:460px;
    }
</style>
</body>