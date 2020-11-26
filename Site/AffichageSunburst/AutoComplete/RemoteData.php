<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    $dataManager  = new EJ\DataManager();
    $dataManager->url('//js.syncfusion.com/ejServices/wcf/NorthWind.svc/')->offline(false);
    
    $query = new EJ\Query();
    $query->from('Suppliers');
    
    $autocomplete=new EJ\AutoComplete("customerDetails");
    $field=new EJ\Autocomplete\Field();
    $field=array ("text"=>"ContactName","key"=>"SupplierID");
    echo $autocomplete->dataSource($dataManager)->query($query)->fields($field)->width("100%")->watermarkText("Search a customer")->enableAutoFill(true)->render();
    ?>
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
