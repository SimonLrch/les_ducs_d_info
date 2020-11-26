<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">

<?php
$row = new EJ\PivotTreeMap\Row();
$row=array($row->fieldName("[Date].[Fiscal]"));
$column = new EJ\PivotTreeMap\Column();
$column=array($column->fieldName("[Customer].[Customer Geography]"));
$value = new EJ\PivotTreeMap\Value();
$field = new EJ\PivotTreeMap\Measure();
$value=array($value->measures(array($field->fieldName("[Measures].[Internet Sales Amount]")))->axis("columns"));

$pivottreemap=  new EJ\PivotTreeMap("PivotTreeMap1");
$datasource = new EJ\PivotTreeMap\DataSource();
$datasource->data("//bi.syncfusion.com/olap/msmdpump.dll")->catalog("Adventure Works DW 2008 SE")->cube("Adventure Works")->rows($row)->columns($column)->values($value);
echo $pivottreemap->dataSource($datasource)->render();
?>
 </div>
<script id="tooltipTemplate" type="application/jsrender">
        <div style="background:White; color:black; font-size:12px; font-weight:normal; border: 1px solid #4D4D4D; white-space: nowrap;border-radius: 2px; margin-right: 25px; min-width: 110px;padding-right: 5px; padding-left: 5px; padding-bottom: 2px ;width: auto; height: auto;">
            <div>Measure(s) : {{:~Measures(#data)}}</div><div>Row : {{:~Row(#data)}}</div><div>Column : {{:~Column(#data)}}</div><div>Value : {{:~Value(#data)}}</div>
        </div>
</script>  
<style>
    .cols-sample-area {
        width:90%;
        margin:0 auto;
        float:none;
    }
    #PivotTreeMap1{
        width:99%;
        height:460px;
    }
</style>
</body>
