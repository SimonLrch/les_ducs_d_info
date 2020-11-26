<div class="cols-sample-area">
  <?php
require_once '../EJ/AutoLoad.php';
?>
   <h3>Sign here</h3>
  <?php
              $signature=new EJ\Signature("apisignature");
              echo $signature->height("400px")->isResponsive(true)->strokeWidth(3)->saveWithBackground(true)->backgroundImage("Content/images/progressbar/water.png")->render();
            ?>
</div>
<div id="property-window" class="box wide">


  <div class="row">
    <div class="col-md-3 col-xs-4">Stroke Color</div>
    <div class="col-md-3 col-xs-4">
      <?php $start=new EJ\ColorPicker("signstroke");
                  echo $start->value("#000000")->change("onstrokecolorchange")->render();
            ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-4">StrokeWidth</div>
    <div class="col-md-3 col-xs-4">
      <?php
    $dropdownlist =new EJ\DropDownList("selectwidth");
    echo $dropdownlist->targetID("width")->width("100px")->watermarkText("Width")->change("onchange")->render();
    ?>
      <div id="width">
        <ul>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-4">Undo</div>
    <div class="col-md-3 col-xs-4">
      <?php  $button =  new EJ\Button("signundo");
                  echo $button->size("normal")->showRoundedCorner(true)->width("50px")->text("Undo")->click("onundo")->render();
            ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-4">Redo</div>
    <div class="col-md-3 col-xs-4">
      <?php  $button =  new EJ\Button("signredo");
                  echo $button->size("normal")->showRoundedCorner(true)->width("50px")->text("Redo")->click("onredo")->render();
            ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3 col-xs-4">Clear</div>
    <div class="col-md-3 col-xs-4">
      <?php  $button =  new EJ\Button("signclear");
                  echo $button->size("normal")->showRoundedCorner(true)->width("50px")->text("Clear")->click("onclear")->render();
            ?>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-4">Save</div>
    <div class="col-md-3 col-xs-4">
      <a id="download">
        <input id="signsave" class="e-btn" type="button" value="Save" />
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 col-xs-4">Hide/Show</div>
    <div class="col-md-3 col-xs-4">
      <?php
                    $button =  new EJ\ToggleButton("signshow");
                    echo $button ->showRoundedCorner(true)->size("normal")->defaultText("Hide")->activeText("Show")->change("signshowChange")->width("50px")->render();
                    ?>
    </div>
  </div>
</div>


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
<script>
  $(function () {
  $("#signsave").ejButton({
  size: "normal", width: "50px",
  showRoundedCorner: true,
  });
  var clientPng = document.getElementById('download');
  if (clientPng.addEventListener)
  clientPng.addEventListener('click', downloadClient, false);
  else
  clientPng.attachEvent('onclick', downloadClient, false);

  function downloadClient(e) {
  var sign = $("#apisignature").ejSignature("instance");
  sign.option("saveImageFormat", "jpg")
  this.download = "Signature." + sign.model.saveImageFormat + "";
  var div = $("#apisignature");
  var canvas = div["children"]()[0];
  this.href = canvas.toDataURL("image/" + sign.model.saveImageFormat + "");
  }
  });


  function onstrokecolorchange(args) {
  var sig = $("#apisignature").ejSignature("instance");
  sig.model.strokeColor = args.value;
  }

  function onchange(args) {
  var sig = $("#apisignature").ejSignature("instance");
  sig.model.strokeWidth = parseInt(args.value);
  }


  function onclear() {
  var sig = $("#apisignature").ejSignature("instance");
  sig.clear();
  }

  function onundo() {
  var sig = $("#apisignature").ejSignature("instance");
  sig.undo();
  }

  function onredo() {
  var sig = $("#apisignature").ejSignature("instance");
  sig.redo();
  }

  function signshowChange(args) {
  $("#apisignature").ejSignature(args.isChecked ? "hide" : "show");
  }


</script>