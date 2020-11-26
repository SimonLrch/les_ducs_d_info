<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame">
<?php
    $rating1 =new EJ\Rating("apiRating");
    echo $rating1->value(3)->render();
    ?>
                </div>
   
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">
                            Set Value
                        </div>
                        <div class="col-md-6">
                            <select name="ddlSetValue" id="ddlRating" class="e-ddl">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            Get Current Value
                        </div>
                        <div class="col-md-6">
                            <input type="button" id="btnGetValue" value="GetValue" class="e-btn" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            Reset
                        </div>
                        <div class="col-md-6">
                            <input type="button" id="btnReset" class="e-btn" value="Reset" />
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            Reset Button
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="chkResetbtn" class="e-togglebtn" />
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-6">
                            Rating
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="chkShowHideRating" class="e-togglebtn" />
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">
                            Destroy
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="chkDestroy" class="e-togglebtn" />
                        </div>
                    </div>

</div>

<script>
     var ratingObj, ddlObj;
        $(function () {
            // declaration
            ratingObj = $("#apiRating").data("ejRating");
            $("#ddlRating").ejDropDownList({ "width": "107px", "change": "setRatingValue", watermarkText: "Select", selectedItemIndex: 1 });
			ddlObj = $("#ddlRating").data("ejDropDownList");
            $("#btnGetValue").ejButton({ "width": "107px", "click": "onGetValueClck" });
			$("#btnReset").ejButton({ "width": "107px", "click": "onResetClck" });
			$("#chkResetbtn").ejToggleButton({ "width": "107px", "change": "onShowHideReset", "defaultText": "Hide", "activeText": "Show" });
			$("#chkShowHideRating").ejToggleButton({ "width": "107px", "change": "onShowHideRating", "defaultText": "Hide", "activeText": "Show" });
			$("#chkDestroy").ejToggleButton({ "width": "107px", "change": "onDestoryRestore", "defaultText": "Destory", "activeText": "Restore" });
        });
        function onGetValueClck(args) {
            if (ratingObj.model) {
                var val = ratingObj.getValue();
                alert("Current Value : " + val);
            }
        }
        function setRatingValue(args) {
            if (ratingObj.model)
                ratingObj.setValue(args.value);
        }
        function onResetClck() {
            if (ratingObj.model)
                ratingObj.reset();
            ddlObj.option("selectedItemIndex", 0);
        }
        function onShowHideRating(args) {
            if (ratingObj.model) {
                if (args.isChecked)
                    ratingObj.hide();
                else
                    ratingObj.show();
            }
        }
        function onShowHideReset(args) {
            if (ratingObj.model) {
                if (args.isChecked)
                    ratingObj.option({ allowReset: false });
                else
                    ratingObj.option({ allowReset: true });
            }
        }
        function onDestoryRestore(args) {
            if (args.isChecked){
                ratingObj.destroy();
				stateChange("disable");
				}
            else {
                $("#apiRating").ejRating();
                ratingObj = $("#apiRating").data("ejRating");
                ddlObj.option('value', "");
				stateChange("enable");
            }
        }
		function stateChange(state){
			    
                $("#ddlRating").ejDropDownList(state);
				$("#btnGetValue").ejButton(state);
				$("#btnReset").ejButton(state);
				$("#chkResetbtn").ejToggleButton(state);
				$("#chkShowHideRating").ejToggleButton(state);
				
			}
</script>

<style>
    .cols-sample-area
    {
        width: 450px;
        margin: 0 auto;
        float: none;
    }
</style>
