<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

   <div class="frame">
                    <div class="control">
                    <?php
                    $progressbar =new EJ\ProgressBar("progressBar");
                    echo $progressbar->height("25")->percentage(75)->showRoundedCorner(true)->render();
                    ?>
                    </div>
                    <div class="txt"></div>
                </div>
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" id="check21" class="e-togglebtn" />
                            <label for="check21">Toggle</label>
                        </div>
                        <br/>
                        <div class="col-md-12">
                            <input type="button" id="getper" value="Get Percentage" />
                        </div>
                    </div>
</div>

<script>
    var progressBar;
        $(function () {
            progressBar = $("#progressBar").data("ejProgressBar");
            $('.txt').html(progressBar.getPercentage() + " %");

            $("#check21").ejToggleButton({
                defaultText: "Disable",
                activeText: "Enable",
                click: "changeState",
                width: "107px",
            });
            $("#getper").ejButton({
                width: "107px",
                click: "onGetPercentage"
            });

        });
        function changeState(args) {
            if (args.isChecked) progressBar.disable();
            else progressBar.enable();
        }
        function onGetPercentage() {
            alert("Progress percentage : " + progressBar.getPercentage());
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

        .txt {
            font-size: 18px;
            padding:10px;
            text-align: center;
        }
</style>
