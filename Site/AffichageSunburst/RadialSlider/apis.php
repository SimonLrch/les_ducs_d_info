
<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$skillset = array(  array ( "skill"=> "ASP.NET" ), array ( "skill"=> "ActionScript" ), array ( "skill"=> "Basic" ),
          array ( "skill"=> "C++" ), array ( "skill"=> "C#" ), array ( "skill"=> "dBase" ), array ( "skill"=> "Delphi" ),
          array ( "skill"=> "ESPOL" ), array ( "skill"=> "F#" ));
?>

            <?php
            $radialslider=new EJ\RadialSlider("apiradialSlider");
            echo $radialslider->innerCircleImageUrl("Content/images/radialslider/chevron-right.png")->render();
            ?>
    </div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-12" style="text-align:left">
            Start Angle (0-360)
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php $start=new EJ\Slider("startAngleSlider");
                  echo $start->minValue(0)->maxValue(360)->incrementStep(10)->width(225)->height(16)->change("onStartchange")->slide("onchange")->value(0)->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="text-align:left">
            End Angle (360-0)
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php $end =new EJ\Slider("endAngleSlider");
                  echo $end->minValue(360)->maxValue(0)->incrementStep(10)->width(225)->height(16)->change("onEndchange")->slide("onchange")->value(360)->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Stroke width
        </div>
        <div class="col-md-3">
            <?php
            $num=new EJ\NumericTextbox("numeric");   
            echo $num->value(2)->width(108)->minValue(1)->maxValue(10)->change("valueChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Show
        </div>
        <div class="col-md-3">
            <input type="checkbox" id="radialshow" class="e-togglebtn" />
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
	#sampleContainer{
        overflow-x: auto;
    }

</style>
  <script>
      $(function () {
          var interestvalue = 4, tenurevalue = 3;
          $("#radialshow").ejToggleButton({ "width": "107px", "change": "radialshowChange", "defaultText": "Hide", "activeText": "Show" });
      });
      function onStartchange(args) {
          var instance = $("#apiradialSlider").data("ejRadialSlider");
          var value1 = instance.model.endAngle;
          if (args.value > value1)
              alert("Value must be less than end angle");
          else
              $("#apiradialSlider").ejRadialSlider({ startAngle: args.value })
      }
      function onEndchange(args) {
          var instance = $("#apiradialSlider").data("ejRadialSlider");
          var value2 = instance.model.startAngle;
          if (args.value < value2)
              alert("Value must be greater than start angle");
          else
              $("#apiradialSlider").ejRadialSlider({ endAngle: args.value })
      }
      function onShowHideReset(args) {
          var roundUpp = args.isChecked ? false : true;
          $("#apiradialSlider").ejRadialSlider({ enableRoundOff: roundUpp })
      }
      function valueChange(args) {
          if (!ej.isNullOrUndefined(args.value))
              $("#apiradialSlider").ejRadialSlider({ strokeWidth: (args.value != null) ? args.value : 1 })
      }
      function radialshowChange(args) {
          $("#apiradialSlider").ejRadialSlider(args.isChecked ? "hide" : "show");

      }
    </script>