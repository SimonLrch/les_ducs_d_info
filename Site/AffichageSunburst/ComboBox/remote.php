<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $dm = new EJ\DataManager();
    $dm->url("//js.syncfusion.com/demos/ejServices/Wcf/Northwind.svc/Customers");
    $combobox =new EJ\ComboBox("skillsets");
    $fields = new EJ\ComboBox\Field();
    $fields->text("CompanyName")->value("ContactName");
    echo $combobox->dataSource($dm)->fields($fields)->width("100%")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
     .e-ddl-popup {
            margin: 0 auto;
        }
		.frame{
			width : 250px;
		}

</style>