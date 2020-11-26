<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
<div class="cols-sample-area">

<?php
$Json = '[{"Amount":100,"Country":"Canada","Date":"FY 2005","Product":"Bike","Quantity":2,"State":"Alberta"},{"Amount":200,"Country":"Canada","Date":"FY 2006","Product":"Van","Quantity":3,"State":"British Columbia"},{"Amount":300,"Country":"Canada","Date":"FY 2007","Product":"Car","Quantity":4,"State":"Brunswick"},{"Amount":150,"Country":"Canada","Date":"FY 2008","Product":"Bike","Quantity":3,"State":"Manitoba"},{"Amount":200,"Country":"Canada","Date":"FY 2006","Product":"Car","Quantity":4,"State":"Ontario"},{"Amount":100,"Country":"Canada","Date":"FY 2007","Product":"Van","Quantity":1,"State":"Quebec"},{"Amount":200,"Country":"France","Date":"FY 2005","Product":"Bike","Quantity":2,"State":"Charente-Maritime"},{"Amount":250,"Country":"France","Date":"FY 2006","Product":"Van","Quantity":4,"State":"Essonne"},{"Amount":300,"Country":"France","Date":"FY 2007","Product":"Car","Quantity":3,"State":"Garonne (Haute)"},{"Amount":150,"Country":"France","Date":"FY 2008","Product":"Van","Quantity":2,"State":"Gers"},{"Amount":200,"Country":"Germany","Date":"FY 2006","Product":"Van","Quantity":3,"State":"Bayern"},{"Amount":250,"Country":"Germany","Date":"FY 2007","Product":"Car","Quantity":3,"State":"Brandenburg"},{"Amount":150,"Country":"Germany","Date":"FY 2008","Product":"Car","Quantity":4,"State":"Hamburg"},{"Amount":200,"Country":"Germany","Date":"FY 2008","Product":"Bike","Quantity":4,"State":"Hessen"},{"Amount":150,"Country":"Germany","Date":"FY 2007","Product":"Van","Quantity":3,"State":"Nordrhein-Westfalen"},{"Amount":100,"Country":"Germany","Date":"FY 2005","Product":"Bike","Quantity":2,"State":"Saarland"},{"Amount":150,"Country":"United Kingdom","Date":"FY 2008","Product":"Bike","Quantity":5,"State":"England"},{"Amount":250,"Country":"United States","Date":"FY 2007","Product":"Car","Quantity":4,"State":"Alabama"},{"Amount":200,"Country":"United States","Date":"FY 2005","Product":"Van","Quantity":4,"State":"California"},{"Amount":100,"Country":"United States","Date":"FY 2006","Product":"Bike","Quantity":2,"State":"Colorado"},{"Amount":150,"Country":"United States","Date":"FY 2008","Product":"Car","Quantity":3,"State":"New Mexico"},{"Amount":200,"Country":"United States","Date":"FY 2005","Product":"Bike","Quantity":4,"State":"New York"},{"Amount":250,"Country":"United States","Date":"FY 2008","Product":"Car","Quantity":3,"State":"North Carolina"},{"Amount":300,"Country":"United States","Date":"FY 2007","Product":"Van","Quantity":4,"State":"South Carolina"}]';
// Convert Array to JSON String
$Json = json_decode($Json,true);

$pivotchart =  new EJ\PivotChart("PivotChart1");
$datasource = new EJ\PivotChart\DataSource();
$Country = new EJ\PivotChart\Row();
$Date = new EJ\PivotChart\Row();
$row=array($Country->fieldName("Country")->fieldCaption("Country"), $Date->fieldName("Date")->fieldCaption("Date"));
$column = new EJ\PivotChart\Column();
$column=array($column->fieldName("Product")->fieldCaption("Product"));
$value = new EJ\PivotChart\Value();
$value=array($value->fieldName("Amount")->fieldCaption("Amount"));

$series =  new EJ\Chart\CommonSeriesOption();
$tooltip =  new EJ\Chart\Tooltip();
$series->enableAnimation(true)->type("column")->tooltip($tooltip->visible(true));
$size =  new EJ\Chart\Size();
$size->height("460px")->width("950px");

$zooming = new EJ\PivotChart\Zooming();
$zooming->enableScrollbar(true);

$datasource->data($Json)->rows($row)->columns($column)->values($value);
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