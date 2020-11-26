<?php
require_once '../EJ/AutoLoad.php';
?>

<div class="cols-sample-area">
    <div class="control">
        <?php
        $scroller=new EJ\Scroller("scrollcontent");
        $scroller->templateStart();
        ?>    
        <div class="sampleContent">
            <h3 style="font-size: 20px;">MVC</h3>
            <div>
                <p>
                    Model-view-controller (MVC) is a software architecture pattern which separates the
                    representation of information from the user's interaction with it.
                    The model consists of application data, business rules, logic, and functions. A view can be any
                    output representation of data, such as a chart or a diagram. Multiple views of the same data
                    are possible, such as a bar chart for management and a tabular view for accountants.
                    The controller mediates input, converting it to commands for the model or view.The central
                    ideas behind MVC are code reusability and n addition to dividing the application into three
                    kinds of components, the MVC design defines the interactions between them.
                </p>
                <ul>
                    <li>
                        <b>A controller </b>can send commands to its associated view to change the view's presentation of the model (e.g., by scrolling through a document).
                        It can also send commands to the model to update the model's state (e.g., editing a document).
                    </li>
                    <li>
                        <b>A model</b>notifies its associated views and controllers when there has been a change in its state. This notification allows the views to produce updated output, and the controllers to change the available set of commands.
                        A passive implementation of MVC omits these notifications, because the application does not require them or the software platform does not support them.
                    </li>
                    <li>
                        <b>A view</b>requests from the model the information that it needs to generate an output representation to the user.
                    </li>
                </ul>
            </div>
        </div>          

        <?php
        $scroller->templateEnd();
        echo $scroller->height("300px")->width("100%")->render();
        ?>
    </div>
</div>

<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-sm-2">
            <label>Enable / Disable</label>
        </div>
        <div class="col-sm-2">
            <label for="disableBtn" />
            <?php
            $disableBtn = new EJ\ToggleButton("disableBtn");
            echo $disableBtn->size("small")->defaultText("Disable")->activeText("Enable")->click("onEnabled")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">

            <label>ScrollY</label>
        </div>
        <div class="col-sm-2">
            <?php
            $scrolly=new EJ\NumericTextbox("ScrollY");
            echo $scrolly->showSpinButton(false)->minValue(0)->width("95px")->watermarkText("scrollY")->change("setScrollY")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label>ScrollX</label>
        </div>
        <div class="col-sm-2">
            <?php

            $scrolly=new EJ\NumericTextbox("ScrollX");
            echo $scrolly->showSpinButton(false)->minValue(0)->width("95px")->watermarkText("scrollX")->change("setScrollY")->render();
            ?>
        </div>
    </div>
</div>

<script>
    var scrollobj;
    $(function () {
        scrollobj = $("#scrollcontent").data("ejScroller");
        $(window).bind('resize', function () {            
            $(window).bind('resize', onResizeEvent);
        });
    });
    function destroy(args) {
        $(window).unbind('resize', onResizeEvent);
    }
    function onResizeEvent() {
        if ($("#scrollcontent").data("ejScroller"))
            scrollobj.refresh();
    }
    function onEnabled(args) {
        if (args.isChecked) {
            scrollobj.disable();
        }
        else {
            scrollobj.enable();
        }
    }
    function setScrollY(args) {
        scrollobj.scrollY(args.value);
    }
    function setScrollX(args) {
        scrollobj.scrollX(args.value);
    }

</script>
<style type="text/css" class="cssStyles">
    .cols-sample-area .control {
        border: 1px solid #bbbcbb;
        color: gray;
        width: 75% !important;
    }

    .sampleContent {
        width: 700px;
        padding: 15px;
    }
    
    #sampleContainer .cols-sample-area{
        display:block;
    }
</style>