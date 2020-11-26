<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame">
                    <div class="control">
					    <div class="e-prodefault">
                        <?php
                        $progressbar =new EJ\ProgressBar("progressBar");
                        echo $progressbar->value(10)->height("25")->showRoundedCorner(true)->text("45 %")->create("oncreate")->
                        start("onstart")->
                        change("onchange")->
                        complete("completed")->
                        destroy("onDestroy")->render();
                        ?>
						</div>
                    </div>
                    <div class="startButton">
                    <?php
                    $button =  new EJ\ToggleButton('startButton');
                    echo $button ->showRoundedCorner(true)->defaultText('Play')->activeText('Pause')->size('small')->click("startProcess")->render();
                    ?>
                        <label for="startButton">Toggle</label>
                    </div>
                </div>

</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("onClear")->type("button")->render();
        ?>
    </div>
</div>
<script>
var progresObj, buttonObj, k = 10, timer = window.clearInterval(timer), showComplete = true;
buttonObj = $("#startButton").data("ejToggleButton");
 $(function () {
            progresObj = $("#progressBar").data("ejProgressBar");
            progresObj.option("text", progresObj.getPercentage() + " %");
 });
   function startProcess(args) {
       buttonObj = $("#startButton").data("ejToggleButton");
            if (args.isChecked) {
				$(progresObj.element).find("div.e-progress-txt").removeClass("e-prodefault");
                timer = window.setInterval(draw, 100);
			}
            else {
                buttonObj.setModel({ "defaultText": "Start" });
                timer = window.clearInterval(timer);
            }
        }
        function draw() {
            progresObj.option("text", ++k + " %");
            progresObj.option("percentage", k);
        }
        function completed(args) {
            buttonObj = $("#startButton").data("ejToggleButton");
            progresObj.option("text", "Completed");
            timer = window.clearInterval(timer);
            k = 0;
            if (showComplete)
                oncomplete(args);
            buttonObj.setModel({ "toggleState": false, "defaultText": "Restart" });
        }
        function onDestroy(args) {
             timer = window.clearInterval(timer);
        }

        function oncomplete(args) {
            jQuery.addEventLog("The process has been <span class='eventTitle'>completed</span> successfully.</br>");
        }
        function oncreate(args) {
            jQuery.addEventLog("Progressbar has been <span class='eventTitle'>created</span>.");
        }
        function onstart(args) {
            jQuery.addEventLog("Progressbar has been <span class='eventTitle'>started</span>.</br>");
        }
        function onchange(args) {
            jQuery.addEventLog("Progressbar value has been <span class='eventTitle'>changed</span> to " + args.percentage + "%.</br>");
			if(args.percentage>50)
			$(this.element.find("div.e-progress-txt")).addClass("e-prodefault");
        }
			
        function onClear() {
            $("#EventLog").html("");
        }

</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .frame {
            width: 50%;
        }

        .startButton {
            text-align:center;
            padding:10px;
        }
		.e-prodefault{
			color:white;
		}
</style>
