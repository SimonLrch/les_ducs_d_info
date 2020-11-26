<?php
require_once '../EJ/AutoLoad.php';
?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<div class="cols-sample-area">
<div class="frame">
                    <div class="ctrl">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" id="back">Back</button>
                            </span>
                            <input type="text" class="form-control" placeholder="Search for...">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="button" id="go">Go</button>
                                <button class="btn btn-default" type="button" id="reload">
                                    <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
   <?php
    $tooltip1 =new EJ\Tooltip("reload");
    $pos1 = new EJ\Tooltip\Position();
    $tar1 = new EJ\Tooltip\Target();
    $stem1 = new EJ\Tooltip\Stem();
    $tar1->horizontal("center")->vertical("bottom");
    $stem1->horizontal("left")->vertical("top");
    $pos1->target($tar1)->stem($stem1);
    echo $tooltip1->width("440px")->height("200px")->content("Reload current page")->position($pos1)->isBalloon(false)->render();
    ?>

    <?php
    $tooltip2 =new EJ\Tooltip("go");
    $pos2 = new EJ\Tooltip\Position();
    $tar2 = new EJ\Tooltip\Target();
    $stem2 = new EJ\Tooltip\Stem();
    $tar2->horizontal("center")->vertical("bottom");
    $stem2->horizontal("left")->vertical("top");
    $pos2->target($tar2)->stem($stem2);
    echo $tooltip2->width("440px")->height("200px")->content("search")->position($pos2)->render();
    ?>
    
    <?php
    $tooltip3 =new EJ\Tooltip("back");
    $pos3 = new EJ\Tooltip\Position();
    $tar3 = new EJ\Tooltip\Target();
    $stem3 = new EJ\Tooltip\Stem();
    $tar3->horizontal("center")->vertical("bottom");
    $stem3->horizontal("left")->vertical("top");
    $pos3->target($tar3)->stem($stem3);
    echo $tooltip3->width("440px")->height("200px")->content("Go back one page")->position($pos3)->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6"> Target Element </div>
                        <div class="col-md-6">
                            <select id="refresh">
                                <option value="back">Back Button</option>
                                <option value="go">Go Button</option>
                                <option value="reload">Reload Button</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"> Disable\Enable </div>
                        <div class="col-md-6">
                            <input type="button" id="btnEnable" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"> Show\Hide </div>
                        <div class="col-md-6">
                            <input type="button" id="hideButton" />
                        </div>
                    </div>
</div>

<script>
    
        var target, value, count=0;
        $(function () {
            $("#temp").hide();
            target = $("#reload").data("ejTooltip");
			 $("#refresh").ejDropDownList({
			     selectedIndex: 2,
                 width : "110px",
                change: "onEffectChange"
            });
            $("#btnEnable").ejButton({
                showRoundedCorner: true,
                width: "107px",
                click: "onEnableDisable",
                text: "Disable",
                enabled : false
            });
            $("#hideButton").ejButton({
                showRoundedCorner: true,
                width: "107px",
                click: "onShowHide",
                text: "Show",
            });
        });
		
	
		function onEffectChange(args){
		    var btnObj = $("#hideButton").data("ejButton");
			target.show($("#" +args.value));
			$('#hideButton').ejButton({ text:  "Hide"});
		}
        function onEnableDisable(args) {
            var text;
            var btnObj = $("#hideButton").data("ejButton");
			var DropDownListObj = $("#refresh").data("ejDropDownList");
            if (args.model.text == "Disable") {
                target.disable();
                text = "Enable";
                btnObj.disable();
				DropDownListObj.disable();
            }
            else{
                target.enable();
                text = "Disable";
                btnObj.enable();
				DropDownListObj.enable();
            }

            $('#btnEnable').ejButton({ text: text });

        }
        function onShowHide(args) {
            var text;
			var DropDownListObj = $("#refresh").data("ejDropDownList");
			var value = DropDownListObj.getSelectedValue();
            enableBtn = $("#btnEnable").data("ejButton");
            if(args.model.text == "Hide") {
                target.hide();
                text = "Show";
                enableBtn.disable();
            }
            else{
				target.show($("#" +value));
                text = "Hide";
                enableBtn.enable();
            }
            $('#hideButton').ejButton({ text: text });
        }
</script>

<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
    .frame {
            width: 100%;
            height:250px;
            box-sizing: border-box;

        }
        .ctrl{
            margin-top: 80px;
        }
</style>
