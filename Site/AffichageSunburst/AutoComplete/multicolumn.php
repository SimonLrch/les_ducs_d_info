<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';

    $Json = json_decode(file_get_contents("../Grid/Data.json"), true);
    
    $autocomplete=new EJ\AutoComplete("customerDetails");
    $field=new EJ\Autocomplete\Field();
    $field->key("OrderID")->text("ShipCity");
    $multi=new EJ\Autocomplete\MultiColumnSetting();
    $cols=new EJ\Autocomplete\Column();
    $cols=array(array("field"=> "CustomerID","headerText"=> "CustomerID"),
        array("field"=> "OrderID","headerText"=> "OrderID"),array("field"=> "EmployeeID","headerText"=> "EmployeeID"),
        array("field"=> "ShipCountry","headerText"=> "ShipCountry"));
    $multi->columns($cols)->stringFormat("\{0\} (\{3\}) (\{1\})")->showHeader(true)->enable(true);

   ?>
    <?php
    $autocomplete=new EJ\AutoComplete("selectCar");
    echo $autocomplete->dataSource($Json)->showPopupButton(true)->multiColumnSettings($multi)->fields($field)->width("100%")->watermarkText("Select a order")->render();
    ?>
</div>
<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
</style>
