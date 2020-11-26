<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $BooksSection = array(
        array('text'=> "Art" ),
          array('text'=> "Architecture" ),
            array('text'=> "Biographies" ),  array('text'=> "Business" ),  array('text'=> "ComputerIT" ),
                 array('text'=> "Comics" ),  array('text'=> "Cookery" ),  array('text'=> "Environment" ),  array('text'=> "Fiction" ),
                 array('text'=> "Health" ),  array('text'=> "Humanities" ),  array('text'=> "Language" ),  array('text'=> "Literature" ),  array('text'=> "Memoirs" ),
                 array('text'=> "Management" ),  array('text'=> "Professional" ),  array('text'=> "Reference" ),  array('text'=> "Spirituality" ),
                 array('text'=> "Sports" ),  array('text'=> "Sciences" ),
       );
    $dropdownlist =new EJ\DropDownList("skillsets");
    $fields = new EJ\DropDownList\Field();
    $fields->text("text");
    echo $dropdownlist->AddItem($fields)->dataSource($BooksSection)->width("100%")->watermarkText("Select a section")->showCheckbox(true)->render();
    ?>
   
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">Select an item by index</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optIndexChange">
                                <option value="0">1 Item</option>
                                <option value="1">2 Item</option>
                                <option value="2">3 Item</option>
                                <option value="3">4 Item</option>
                                <option value="4">5 Item</option>
                                <option value="5">6 Item</option>
                                <option value="6">7 Item</option>
                                <option value="7">8 Item</option>
                                <option value="8">9 Item</option>
                                <option value="9">10 Item</option>
                                <option value="10">11 Item</option>
                                <option value="11">12 Item</option>
                                <option value="12">13 Item</option>
                                <option value="13">14 Item</option>
                                <option value="14">15 Item</option>
                                <option value="15">16 Item</option>
                                <option value="16">17 Item</option>
                                <option value="17">18 Item</option>
                                <option value="18">19 Item</option>
                                <option value="19">20 Item</option>
                            </select>
                        </div>
                        <div class="col-md-6">Select an item by value</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optValueChange">
                                <option value="Art">Art</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Biographies">Biographies</option>
                                <option value="Business">Business</option>
                                <option value="ComputerIT">ComputerIT</option>
                                <option value="Comics">Comics</option>
                                <option value="Cookery">Cookery</option>
                                <option value="Environment">Environment</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Health">Health</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Language">Language</option>
                                <option value="Literature">Literature</option>
                                <option value="Memoirs">Memoirs</option>
                                <option value="Management">Management</option>
                                <option value="Professional">Professional</option>
                                <option value="Reference">Reference</option>
                                <option value="Spirituality">Spirituality</option>
                                <option value="Sports">Sports</option>
                                <option value="Sciences">Sciences</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Select an item by text</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optTextChange">
                                <option value="Art">Art</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Biographies">Biographies</option>
                                <option value="Business">Business</option>
                                <option value="ComputerIT">ComputerIT</option>
                                <option value="Comics">Comics</option>
                                <option value="Cookery">Cookery</option>
                                <option value="Environment">Environment</option>
                                <option value="Fiction">Fiction</option>
                                <option value="Health">Health</option>
                                <option value="Humanities">Humanities</option>
                                <option value="Language">Language</option>
                                <option value="Literature">Literature</option>
                                <option value="Memoirs">Memoirs</option>
                                <option value="Management">Management</option>
                                <option value="Professional">Professional</option>
                                <option value="Reference">Reference</option>
                                <option value="Spirituality">Spirituality</option>
                                <option value="Sports">Sports</option>
                                <option value="Sciences">Sciences</option>
                            </select>
                        </div>
						</div>
						<div class="row">
                        <div class="col-md-6">TextBox Value</div>
                        <div class="col-md-6">
                            <input type="button" id="Button8" name="check me" class="e-btn" value="Value" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Disable\Enable</div>
                        <div class="col-md-6">
                            <input type="checkbox" id="btnchkunchk" class="e-togglebtn" />
                        </div>
                    </div>
					 <div class="row">
                        <div class="col-md-6">Filter Search </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="incrementalbutton" class="e-togglebtn"  />
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">Case-Sensitive Search </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="casesensitivebutton" class="e-togglebtn"  />
                        </div>
                    </div>
</div>

<script>
    var target;
        $(function () {
            target = $('#bookSelect').data("ejDropDownList");
            //selctions
            $("#optIndexChange").ejDropDownList({ "change": "onActiveIndexChange", width: "107px", watermarkText: "select.." });
            $("#optValueChange").ejDropDownList({ "change": "onActiveValueChange", width: "107px", watermarkText: "select.." });
            $("#optTextChange").ejDropDownList({ "change": "onActiveTextChange", width: "107px", watermarkText: "select.." });
			 
			 
		     $("#btnchkunchk").ejToggleButton({ width: "107px", "change": "onCheckUncheckAll", "defaultText": "Disable", "activeText": "Enable" });
             $("#incrementalbutton").ejToggleButton({ width: "107px", "change": "incrementalchange", "defaultText": "Enable", "activeText": "Disable" });
			 $("#casesensitivebutton").ejToggleButton({ width: "107px", "change": "casesensitivechange", "defaultText": "Enable", "activeText": "Disable" });
            $("#Button8").ejButton({
                click: "valuetext",
                width: "107px"
            });
        });
        function onActiveIndexChange(args) {
            target.option({ selectedIndex: parseInt(args.selectedValue) });
            $("#optValueChange").ejDropDownList("clearText");
            $("#optTextChange").ejDropDownList("clearText");

        }
        function onActiveValueChange(args) {
            target.selectItemByValue(args.selectedValue);
            $("#optIndexChange").ejDropDownList("clearText");
            $("#optTextChange").ejDropDownList("clearText");
        }
        function onActiveTextChange(args) {
            target.selectItemByText(args.selectedValue);
            $("#optIndexChange").ejDropDownList("clearText");
            $("#optValueChange").ejDropDownList("clearText");
        }
		
        function onCheckUncheckAll(args) {
           (args.isChecked) ?  target.disable(): target.enable()   
        }
		function incrementalchange(args) 
		{
            (args.isChecked)? target.option({"enableFilterSearch":true}): target.option({"enableFilterSearch":false})
       }
		function casesensitivechange(args) {
           (args.isChecked) ? target.option({"caseSensitiveSearch":true}) : target.option({"caseSensitiveSearch":false})
        }
        function valuetext(e, ui) {
            alert("Selected Item is " + target.getValue());
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
