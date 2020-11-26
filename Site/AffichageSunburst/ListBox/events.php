<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
   
$countries=array(array ( "Country"=> "America" ), array ( "Country"=> "Australia" ), array ( "Country"=> "Austria" ), array ( "Country"=> "Bangladesh" ),
               array ( "Country"=> "Brazil" ), array ( "Country"=> "Canada" ), array ( "Country"=> "China" ), array ( "Country"=> "Denmark" ),
               array ( "Country"=> "Europe" ), array ( "Country"=> "France" ), array ( "Country"=> "Germany" ), array ( "Country"=> "India" ),
               array ( "Country"=> "Japan" ), array ( "Country"=> "Kuwait" ), array ( "Country"=> "Malaysia" ), array ( "Country"=> "New Zealand" ));
?>
 <?php
 $listbox2=new EJ\ListBox("selectcountry");
 $listbox1=new EJ\ListBox("select");
 $fields2=new EJ\ListBox\Field();
 $fields2->value("Country")->text("Country"); 
 ?>
    <div class="row">
        <div class="col-md-8" style="margin: 0 14%;">
            <div class="col-md-6" >
            <div class="ctrllabel">Select a country</div>
            <?php
            echo $listbox2->dataSource($countries)->fields($fields2)->width("180px")->height("220px")->allowDrag(true)
            ->allowDrop(true)->create("Oncreate")->change("OnselectIndexchange")->select("Onselected")->itemDragStart("OnnodeDragStart")
            ->itemDrag("OnnodeDrag")->itemDragStop("OnnodeDragStop")->itemDrop("OnnodeDropped")->render();
            ?>
        </div>
        <div class="col-md-6" style="float:right">
            <div class="ctrllabel">Drag and drop here</div>
            <?php
            echo $listbox1->width("180px")->allowDrop(true)->height("220px")->render();
            ?>
        </div>
            </div>
    </div>
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("clearLog")->type("button")->render();
        ?>
    </div>
</div>
<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
     .txt {
            display: block;
            margin-top: 12px;
        }

        .ctrllabel {
            font-weight: 600;
            padding-bottom: 12px;
        }

        .contents {
            display: inline-block;
            padding: 0px 15px;
        }
</style>
<script type="text/javascript">

    function Oncreate(args) {
        jQuery.addEventLog("<span class='eventTitle'>Create</span> has been fired");
    }
    function OnselectIndexchange(args) {
        jQuery.addEventLog("<span class='eventTitle'>Change</span> has been fired");
    }
    function Onselected(args) {
        jQuery.addEventLog("<span class='eventTitle'>Select</span> has been fired");
    }
    function OnnodeDragStart(args) {
        jQuery.addEventLog("<span class='eventTitle'>ItemDragStart</span> has been fired");
    }
    function OnnodeDrag(args) {
        jQuery.addEventLog("<span class='eventTitle'>ItemDrag</span> has been fired");
    }
    function OnnodeDragStop(args) {
        jQuery.addEventLog("<span class='eventTitle'>ItemDragStop</span> has been fired");
    }
    function OnnodeDropped(args) {
        jQuery.addEventLog("<span class='eventTitle'>ItemDrop</span> has been fired");
    }
    function clearLog() {
        jQuery.clearEventLog();
    }

    function evtpropscheckedevent(args) {
        var target = $('#selectcountry').data("ejListBox");
        if (args.isChecked) {
            switch (args.selectedValue) {
                case "create": target.option(args.selectedValue, "Oncreate"); break;
                case "change": target.option(args.selectedValue, "OnselectIndexchange"); break;
                case "select": target.option(args.selectedValue, "Onselected"); break;
                case "itemDragStart": target.option(args.selectedValue, "OnnodeDragStart"); break;
                case "itemDrag": target.option(args.selectedValue, "OnnodeDrag"); break;
                case "itemDragStop": target.option(args.selectedValue, "OnnodeDragStop"); break;
                case "itemDrop": target.option(args.selectedValue, "OnnodeDropped"); break;
            }
        }
        else {
            target.option(args.selectedValue, null);
        }
    }
    </script>