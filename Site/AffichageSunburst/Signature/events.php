<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<h3>Sign here</h3>
  <?php
     $signature=new EJ\Signature("signature");
    echo $signature->height("400px")->isResponsive(true)->strokeWidth(3)->mouseDown("onmousedown")->change("onchange")->mouseMove("onmousemove")->mouseUp("onmouseup")->render();
	
    ?>

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
  function onmousedown(args) {
  jQuery.addEventLog("Signature <span class='eventTitle'>mousedown</span> is triggered.");
  }
  function onmousemove(args) {
  jQuery.addEventLog("Signature <span class='eventTitle'>mousemove</span> is triggered.");
  }
  function onmouseup(args) {
  jQuery.addEventLog("Signature <span class='eventTitle'>mouseup</span> is triggered.");
  }
  function onchange(args) {
  jQuery.addEventLog("Signature <span class='eventTitle'>change</span> is triggered.");
  }
  function onClear() {
  $("#EventLog").html("");
  }
</script>

<style>
  .cols-sample-area
  {
  width: 100% ;
  margin: 0 auto;
  float: none;
  }

  #property-window .row {
  padding: 10px 15px !important;
  }
  #sampleContainer{
  overflow-x: auto;
  }
</style>
