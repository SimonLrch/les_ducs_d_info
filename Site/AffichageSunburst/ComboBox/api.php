<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
     $gameList = array(
        array('id'=> "level1", 'game'=> "American Football"),
        array('id'=> "level2", 'game'=> "Badminton"),
        array('id'=> "level3", 'game'=> "Basketball"),
        array('id'=> "level4", 'game'=> "Cricket"),
        array('id'=> "level5", 'game'=> "Football"),
        array('id'=> "level6", 'game'=> "Golf"),
        array('id'=> "level7", 'game'=> "Hockey"),
        array('id'=> "level8", 'game'=> "Rugby"),
        array('id'=> "level9", 'game'=> "Snooker"),
        array('id'=> "level10", 'game'=> "Tennis"),
    );
   
    $combobox =new EJ\ComboBox("selectGame");
    $fields = new EJ\ComboBox\Field();
    $fields->text("game")->value("id");
    echo $combobox->fields($fields)->dataSource($gameList)->width("100%")->placeholder("Select a Game")->render();
    ?>
   
</div>
<div id="property-window" class="box wide">				
    <div class="row">
        <div class="col-md-6">Autofill</div>
        <div class="col-md-6">
            <input type="checkbox" id="chkAutofillbtn" class="e-togglebtn" />
        </div>
    </div>
	    <div class="row">
        <div class="col-md-6">Sort</div>
        <div class="col-md-6">
            <input type="checkbox" id="chkSorting" class="e-togglebtn"  />
        </div>
    </div>
					
</div>
<script>
  
    $(function () {
        $("#chkAutofillbtn").ejToggleButton({ "width": "107px", "change": "onAutofill", "defaultText": "Enable", "activeText": "Disable" });
        $("#chkSorting").ejToggleButton({ "width": "107px", "change": "onSorting", "defaultText": "Descending", "activeText": "Ascending" });
    });
    function onAutofill(args){
	    var listObj = $('#selectGame').ejComboBox("instance");
	    if (listObj.model) {
		    if (args.isChecked)
			    listObj.option({ autofill: true});
		    else
			    listObj.option({ autofill: false });
	    }
    }
    function onSorting(args){
        var listObj = $('#selectGame').ejComboBox("instance");
	    if (listObj.model) {
		    if (args.isChecked){
				    listObj.option({sortOrder: 'Descending'			
		    });
		    }
		    else
		    {
			    listObj.option({sortOrder: 'Ascending'			
		    });
		    }
        }
    }
</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
