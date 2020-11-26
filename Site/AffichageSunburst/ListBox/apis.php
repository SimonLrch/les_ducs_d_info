
<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$skillset = array(  array ( "skill"=> "ASP.NET" ), array ( "skill"=> "ActionScript" ), array ( "skill"=> "Basic" ),
          array ( "skill"=> "C++" ), array ( "skill"=> "C#" ), array ( "skill"=> "dBase" ), array ( "skill"=> "Delphi" ),
          array ( "skill"=> "ESPOL" ), array ( "skill"=> "F#" ));
?>
    <div class="listbox frame">
        <div class="ctrllabel">Select a skill</div>
            <?php
            $listbox1=new EJ\ListBox("listboxapi");
            $fields=new EJ\ListBox\Field();
            $fields->text("skill");
            echo $listbox1->dataSource($skillset)->fields($fields)->width("240px")->allowMultiSelection(true)->render();
            ?>
        </div>
    </div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-12">            
           <div class="row">

                <div class="col-md-6">Enable/Disable All</div>
                <div class="col-md-6">
                  <!--
                   $enable=new EJ\ToggleButton("btnendis");
                   echo $enable->type("checkbox")->defaultText("Disable All")->activeText("Enable All")->change("onEnableDiasableAll")->width("113px")->render();
                       ?> -->
                      <input type="checkbox" id="btnendis" class="e-togglebtn" value="checkuncheck" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">Remove Item</div>
                <div class="col-md-6">
                     <?php 
                     $rembtn=new EJ\Button("Remove");
                     echo $rembtn->size("normal")->cssClass("button")->height("43px")->text("Remove Item")->width("113px")->click("remove")->render();
                     ?> 
                </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">
                    <input id="additem" class="ejinputtext" type="text" value="Java" />
                </div>
                <div class="col-md-6">
                    <?php 
                    $addbtn=new EJ\Button("Add");
                    echo $addbtn->size("normal")->text("Add Item")->height("43px")->cssClass("button")->width("113px")->click("add")->render();
                    ?> 
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                 <div class="col-md-6">
                <input id="selects" class="ejinputtext" type="text" value="3,4" />
            </div>
            <div class="col-md-6">
                <?php 
                $selbtn=new EJ\Button("Selects");
                echo $selbtn->size("normal")->cssClass("button")->height("43px")->text("Select Items by index")->width("113px")->click("selects")->render();
                ?> 
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                 <div class="col-md-6">
                <input id="unselects" class="ejinputtext" type="text" value="3,4" />
            </div>
            <div class="col-md-6">
                <?php 
                $unselbtn=new EJ\Button("Unselects");
                echo $unselbtn->size("normal")->cssClass("button")->height("43px")->text("UnSelect Items by index")->width("113px")->click("unselects")->render();
                ?> 
            </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">CheckBox Visibility</div>
            <div class="col-md-6">
                <!-- 
                $chckunckbtn=new EJ\ToggleButton("btnshwhid");
                echo $chckunckbtn->change("onShowHide")->defaultText("Show")->width("113px")->activeText("Hide")->render();
                ?>--> 
                <input type="checkbox" id="btnshwhid" class="e-togglebtn" value="checkuncheck" />
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">
                <input id="checks" class="ejinputtext" type="text" value="3,4" disabled />
            </div>
            <div class="col-md-6">
                <?php 
                $chck=new EJ\Button("Checks");
                echo $chck->size("normal")->cssClass("button")->height("43px")->text("Check items by index")->width("113px")->click("checks")->render();
                ?> 
            </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                 <div class="col-md-6">
                <input id="unchecks" class="ejinputtext" type="text" value="3,4" disabled />
            </div>
            <div class="col-md-6">
               <?php 
               $unchck=new EJ\Button("Unchecks");
               echo $unchck->size("normal")->cssClass("button")->height("43px")->text("Uncheck Items by index")->width("113px")->click("unchecks")->render();
               ?>  
            </div> 
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">
                <input id="disable" class="ejinputtext" type="text" value="2,4,6" />
            </div>
            <div class="col-md-6">
                <?php 
                $disbtn=new EJ\Button("Disable");
                echo $disbtn->size("normal")->cssClass("button")->height("43px")->text("Disable items by index")->width("113px")->click("disable")->render();
                ?> 
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">            
            <div class="row">
                <div class="col-md-6">
                <input id="enable" class="ejinputtext" type="text" value="2,4" />
            </div>
            <div class="col-md-6">
                <?php 
                $enablebtn=new EJ\Button("Enable");
                echo $enablebtn->size("normal")->cssClass("button")->height("43px")->text("Enable Items by index")->width("113px")->click("enable")->render();
                ?> 
            </div>
            </div>
        </div>
    </div>
</div>
    

<style>
    .cols-sample-area
    {
        width: 50% !important;
        margin: 0 auto;
        float: none;
    }
    .box.wide {
    width: 50%;
    display: inline-block;
    margin-left: 25%;
    padding-top: 0;
}
    #property-window .row {
    padding: 10px 15px !important;
}
    .ctrllabel {
		font-weight: 600;
		padding-bottom: 12px;
    }

</style>
  <script type="text/javascript">
      var ListboxObj, CheckedObj, UnCheckObj;
      jQuery(function ($) {
          ListboxObj = $('#listboxapi').data("ejListBox");
          CheckedObj = $("#Checks").data("ejButton");
          UnCheckObj = $('#Unchecks').data("ejButton");
          SelectObj = $("#Selects").data("ejButton");
          UnSelectObj = $("#Unselects").data("ejButton");
          $("#btnendis").ejToggleButton({ "change": "onEnableDiasableAll", "defaultText": "Disable All", "height": "43px", "activeText": "Enable All", "width": "113px", "cssClass": "button" });
          $("#btnshwhid").ejToggleButton({ "change": "onShowHide", "defaultText": "Show","height":"43px", "width": "113px", "activeText": "Hide" });

          if (!ListboxObj.option('showCheckbox')) {
              CheckedObj.disable();
              UnCheckObj.disable();
          }
      });
      function add(e) {
          ListboxObj.addItem($("#additem").val(), 4);
      }
      function remove(e) {
          ListboxObj.removeItem();
      }
      function onEnableDiasableAll(args) {
          if (args.isChecked) {
              ListboxObj.disable();
              $(".ctrllabel").css("opacity", 0.5);
          }
          else {
              ListboxObj.enable();
              $(".ctrllabel").css("opacity", 1);
          }
      }
      function onShowHide(args) {
          if (args.isChecked) {
              ListboxObj.option("showCheckbox", true);
              CheckedObj.enable();
              UnCheckObj.enable();
              SelectObj.disable();
              UnSelectObj.disable();
              $("#unselects").attr("disabled", "true");
              $("#selects").attr("disabled", "true");
              $("#checks").removeAttr("disabled");
              $("#unchecks").removeAttr("disabled");
          }
          else {
              ListboxObj.option("showCheckbox", false);
              CheckedObj.disable();
              UnCheckObj.disable();
              SelectObj.enable();
              UnSelectObj.enable();
              $("#unselects").removeAttr("disabled");
              $("#selects").removeAttr("disabled");
              $("#checks").attr("disabled", "true");
              $("#unchecks").attr("disabled", "true");
          }
      }
      function checks(args) {
          value = $("#checks").val();
          if (value != "") {
              ListboxObj.checkItemsByIndices(value);
          }
          else alert("Please enter the item index");
      }
      function unchecks(e) {
          value = $("#unchecks").val();
          if (value != "") {
              ListboxObj.uncheckItemsByIndices(value);
          }
          else alert("Please enter the item index");
      }

      function selects(e) {
          value = $("#selects").val();
          if (value != "")
              ListboxObj.selectItemsByIndex(value);
          else alert("Please enter the item index");
      }
      function unselects(e) {
          value = $("#unselects").val();
          ListboxObj.unselectItemsByIndex(value);
      }

      function disable(e) {
          value = $("#disable").val();
          if (value != "")
              ListboxObj.disableItemsByIndices(value);
          else alert("Please enter the item index");
      }
      function enable(e) {
          value = $("#enable").val();
          if (value != "")
              ListboxObj.enableItemsByIndices(value);
          else alert("Please enter the item index");
      }
    </script>