<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
        $time = new EJ\TimePicker("time");
        echo $time->width("100%")->render();
    ?>

</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-sm-2">        
            <label>Get Time</label>  
        </div>  
          <div class="col-sm-2">     
              <?php
            $disableBtn = new \EJ\Button("getTime");
            echo $disableBtn->size("medium")->click("gettime")->text("Get Time")->render();
              ?>  
          </div>  
        </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Time Now</label>
        </div>
        <div class="col-sm-2">
            <?php
            $disableBtn = new \EJ\Button("updateTime");
            echo $disableBtn->size("medium")->text("Time Now")->click("updatetime")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>Show / Hide</label>
        </div>
        <div class="col-sm-2">
            <label for="show"></label>
            <?php
            $disableBtn = new EJ\ToggleButton("show");
            echo $disableBtn->size("medium")->defaultText("Show")->activeText("Hide")->click("showhide")->render();
            ?>
        </div>
    </div>
    </div>

<script>
    var timeObj;
    $(function(){
        timeObj = $('#time').data("ejTimePicker");
    });
    function gettime(args) {
        alert("Selected time is : " + timeObj.getValue());
    }
    function updatetime(args) {
        timeObj.setCurrentTime();
    }
    function showhide(args) {
        (args.isChecked) ? timeObj.show() : timeObj.hide();
    }
</script>

<style>
    .cols-sample-area
    {
        width:300px;
        margin:0 auto;
        float:none;
    }
</style>
