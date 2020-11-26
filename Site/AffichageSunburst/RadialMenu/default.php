<?php
require_once '../EJ/AutoLoad.php';
?>
<div id="radialtarget1" style="position:relative;">
    <div class="cols-sample-area">
         <textarea id="rteSample1" rows="10" cols="70" style="height: 550px">
<p>Model-view-controller (MVC) is a software architecture pattern which separates the representation of information from the user's interaction with it.
The model consists of application data, business rules, logic, and functions. A view can be any output representation of data, such as a chart or a diagram.
Multiple views of the same data are possible, such as a bar chart for management and a tabular view for accountants.
The controller mediates input, converting it to commands for the model or view.The central ideas behind MVC are code reusability and in addition to dividing the application into three kinds of components, the MVC design defines the interactions between them.</p>

<p>A controller can send commands to its associated view to change the view's presentation of the model (e.g., by scrolling through a document). It can also send commands to the model to update the model's state (e.g., editing a document).</p>

<p>A model notifies its associated views and controllers when there has been a change in its state. This notification allows the views to produce updated output, and the controllers to change the available set of commands. A passive implementation of MVC omits these notifications, because the application does not require them or the software platform does not support them.</p>

<p>A view requests from the model the information that it needs to generate an output representation to the user.</p>
                    </textarea>
 <?php
 $radial=new EJ\RadialMenu("defaultradialmenu");
 $ritem1=new EJ\RadialMenu\Item();
 $ritem1->text("Bold")->click("bold")->imageUrl("Content/images/RadialMenu/font.png");
 $ritem2=new EJ\RadialMenu\Item();
 $ritem2->text("Italic")->click("italic")->imageUrl("Content/images/RadialMenu/f1.png");
 $ritem3=new EJ\RadialMenu\Item();
 $ritem3->text("Redo")->click("redo")->imageUrl("Content/images/RadialMenu/redo.png")->enabled(false);
 $ritem4=new EJ\RadialMenu\Item();
 $ritem4->text("Undo")->click("undo")->imageUrl("Content/images/RadialMenu/undo.png")->enabled(false);
 $itemsr= array($ritem1,$ritem2,$ritem3,$ritem4);
 echo $radial->items($itemsr)->imageClass("imageclass")->backImageClass("backimageclass")->targetElementId("radialtarget1")->render();
 ?>
</div>
    </div>
<script type="text/javascript">
    var rteObj, rteEle = $("#rteSample1"), radialEle = $('#defaultradialmenu'), action = 0, forRedo = 0;
    $(function () {
        rteEle.ejRTE({ width: "100%", minWidth: "10px", change: "rteChange", select: "radialShow", showToolbar: false, showContextMenu: false });
        rteObj = rteEle.data("ejRTE");
		if (!(ej.browserInfo().name == "msie" && ej.browserInfo().version < 9)) {
			$("#radialtarget1").parent().css("position", "relative");
        }
        else {
            $("#contentDiv").html("Radial Menu is only supported from Internet Explorer Versioned 9 and above.").css({ "font-size": "20px", "color": "red" });
        }
       $(window).resize(function(){
			if(ej.isMobile() && ej.isPortrait())
				$('#defaultradialmenu').css({"left":25});
		});
    });
    function radialShow(e) {
        var target = $("#radialtarget1"), radialRadius = 150, radialDiameter = 2 * radialRadius,
            // To get Iframe positions
            iframeY = e.event.clientY, iframeX = e.event.clientX,
            // To set Radial Menu position within target
            x = iframeX > target.width() - radialRadius ? target.width() - radialDiameter : (iframeX > radialRadius ? iframeX - radialRadius : 0),
            y = iframeY > target.height() - radialRadius ? target.height() - radialDiameter : (iframeY > radialRadius ? iframeY - radialRadius : 0);
        radialEle.ejRadialMenu("setPosition", x, y);
        radialEle.focus();
		$('iframe').contents().find('body').blur();
    }
    function rteChange(e) {
        radialEle.ejRadialMenu("enableItem", "Undo");
    }
    function bold(e) {
        rteObj.executeCommand("bold");
        data = rteObj._getSelectedHtmlString() ? true : false;
        if (data) action += 1;
        forRedo = action;
        radialEle.focus();
    }
    function italic(e) {
        rteObj.executeCommand("italic");
        data = rteObj._getSelectedHtmlString() ? true : false;
        if (data) action += 1;
        forRedo = action;
        radialEle.focus();
    }
    function undo(e) {
        rteObj.executeCommand("undo");
        action -= 1;
        if (action == 0)
            radialEle.ejRadialMenu("disableItem", "Undo");
        radialEle.ejRadialMenu("enableItem", "Redo");
        radialEle.focus();
    }
    function redo(e) {
        rteObj.executeCommand("redo");
        action += 1;
        if (forRedo == action) radialEle.ejRadialMenu("disableItem", "Redo");
        radialEle.ejRadialMenu("enableItem", "Undo");
        radialEle.focus();
    }
    </script>
<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
    .e-radialmenu .imageclass {
            background-image: url(Content/images/RadialMenu/settings.png);
        }

        .e-radialmenu .backimageclass {
            background-image: url(Content/images/RadialMenu/Back_button.png);
        }
</style>