<div class="cols-sample-area">
 <div class="ctrllabel">Select a customer</div>
 <?php
 require_once '../EJ/AutoLoad.php';
 $dataManager  = new EJ\DataManager();
 $dataManager->url('//js.syncfusion.com/ejServices/wcf/NorthWind.svc/');
 
 $query = new EJ\Query();
 $query->from('Customers');
 
 $listbox=new EJ\ListBox("selectcustomer");
 $field=new EJ\ListBox\Field();
 $field=array("text"=>"CustomerID");
 echo $listbox->dataSource($dataManager)->query($query)->fields($field)->itemRequestCount(10)->allowVirtualScrolling(true)->render();
 ?>
</div>
<div id="property-window" class="box wide">
<div class="row">
    <div class="col-md-6">Select mode</div>
    <div class="col-md-6">
        <div id="dropdown">
            <ul>
                <li value="disablevirtual">Normal Mode</li>
                <li value="enablevirtual">Continuous Mode</li>
            </ul>
        </div>
        <?php 
        $ddl=new EJ\DropDownList("dropdwn");
        echo $ddl->width("120px")->targetID("dropdown")->selectedIndex(0)->change("onValueChange")->render();
        ?>
    </div>
</div>
</div>
<style>
    .cols-sample-area
    {
        width: 200px;
        margin: 0 auto;
        float: none;
    }
	.ctrllabel {
		font-weight: 600;
		padding-bottom: 12px;
    }
</style>
 <script type="text/javascript">

     function onValueChange(args) {
         var target = $('#selectcustomer').data("ejListBox");
         //target.destroy();
         var dataManger = ej.DataManager({
             url: "//js.syncfusion.com/ejServices/wcf/NorthWind.svc/"
         });
         // Query creation
         var query = ej.Query()
                .from("Customers");
         if (args.value == "enablevirtual") {
             $("#selectcustomer").ejListBox({
                 dataSource: dataManger,
                 fields: { text: "CustomerID" },
                 query: query, virtualScrollMode: ej.VirtualScrollMode.Continuous, allowVirtualScrolling: true

             });
         }
         if (args.value == "disablevirtual") {
             $("#selectcustomer").ejListBox({
                 dataSource: dataManger,
                 fields: { text: "CustomerID" },
                 query: query, allowVirtualScrolling: true
             });
         }
     }
    </script>
