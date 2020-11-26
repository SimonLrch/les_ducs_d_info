<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
 <div class="frame">   
    <?php
	$method = new EJ\Slider("events");
	echo $method->sliderType("minRange")->value(40)->create("oncreate")->change("onchange")->slide("onslide")->start("onstart")->stop("onstop")->render();
    ?>
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
<script type="text/javascript">
    function oncreate(args) {
        jQuery.addEventLog("Slider has been <span class='eventTitle'>created</span>.");
    }
    function onstart(args) {
        jQuery.addEventLog("Slider has been <span class='eventTitle'>started</span> at " + args.value + ". <br/>");
    }
    function onstop(args) {
        jQuery.addEventLog("Slider has been <span class='eventTitle'>stopped</span> at " + args.value + ". <br/>");
    }
    function onchange(args) {
        jQuery.addEventLog("Slider value has been <span class='eventTitle'>changed</span> to " + args.value + ". <br/>");
    }
    function onslide(args) {
        jQuery.addEventLog("Slider is being <span class='eventTitle'>changed</span> to " + args.value + ".");
    }
    function onClear() {
        $("#EventLog").html("");
    }
</script>
<style>
    .frame {
        width: 458px;
    }
</style>