<?php
require_once '../EJ/AutoLoad.php';
?>
<div id="radialtarget1" style="position:relative;">
    <div class="cols-sample-area">
         <textarea id="rteSample2" rows="10" cols="70" style="height: 550px">
            <p>Model-view-controller (MVC) is a software architecture pattern which separates the representation of information from the user's interaction with it.
            The model consists of application data, business rules, logic, and functions. A view can be any output representation of data, such as a chart or a diagram.
            Multiple views of the same data are possible, such as a bar chart for management and a tabular view for accountants.
            The controller mediates input, converting it to commands for the model or view.The central ideas behind MVC are code reusability and in addition to dividing the application into three kinds of components, the MVC design defines the interactions between them.</p>

            <p>A controller can send commands to its associated view to change the view's presentation of the model (e.g., by scrolling through a document). It can also send commands to the model to update the model's state (e.g., editing a document).</p>

            <p>A model notifies its associated views and controllers when there has been a change in its state. This notification allows the views to produce updated output, and the controllers to change the available set of commands. A passive implementation of MVC omits these notifications, because the application does not require them or the software platform does not support them.</p>

            <p>A view requests from the model the information that it needs to generate an output representation to the user.</p>
        </textarea>
     
         <?php
         $radial=new EJ\RadialMenu("nestedradialmenu");
         $ritem1=new EJ\RadialMenu\Item();
         $ritem1->text("Copy")->click("copy")->imageUrl("Content/images/RadialMenu/copy.png");
         $ritem2=new EJ\RadialMenu\Item();
         $badgevalue=array("enbale"=>true,"value"=>"2");
         $sliderset=array("ticks"=>array(0,2,4,6,8,10,12,14),"strokeWidth"=>"1");
         $ritem2->text("Font")->click("font")->imageUrl("Content/images/RadialMenu/fontsize.png")->type("slider")->badge($badgevalue)->sliderSettings($sliderset);
         $ritem3=new EJ\RadialMenu\Item();
         $ritemc3=new EJ\RadialMenu\Item();
         $ritemc3->imageUrl("Content/images/RadialMenu/list.png")->text("Bullets")->click("unorderedList");
         $ritemc4=new EJ\RadialMenu\Item();
         $ritemc4->imageUrl("Content/images/RadialMenu/l5.png")->text("Numbering")->click("orderedList");
         $itemschild1=array($ritemc3,$ritemc4);
         $ritem3->text("List")->click("unorderedList")->imageUrl("Content/images/RadialMenu/list.png")->items($itemschild1);
         $ritem4=new EJ\RadialMenu\Item();
         $ritem4->text("Paste")->click("paste")->imageUrl("Content/images/RadialMenu/paste.png");
         $ritem5=new EJ\RadialMenu\Item();
         $ritemc3=new EJ\RadialMenu\Item();
         $ritemc3->imageUrl("Content/images/RadialMenu/undo.png")->text("Undo")->click("undo")->enabled(false);
         $ritemc4=new EJ\RadialMenu\Item();
         $ritemc4->imageUrl("Content/images/RadialMenu/redo.png")->text("Redo")->click("redo")->enabled(false);
         $itemschild2=array($ritemc3,$ritemc4);
         $ritem5->text("Undo")->click("undo")->enabled(false)->imageUrl("Content/images/RadialMenu/undo.png")->items($itemschild2);
         $ritem6=new EJ\RadialMenu\Item();
         $ritemc3=new EJ\RadialMenu\Item();
         $ritemc3->imageUrl("Content/images/RadialMenu/a1.png")->text("Left")->click("left");
         $ritemc4=new EJ\RadialMenu\Item();
         $ritemc4->imageUrl("Content/images/RadialMenu/a2.png")->text("Right")->click("right");
         $itemschild3=array($ritemc3,$ritemc4);
         $ritem6->text("Alignment")->click("center")->imageUrl("Content/images/RadialMenu/align.png")->items($itemschild3);
         $itemsr= array($ritem1,$ritem2,$ritem3,$ritem4,$ritem5,$ritem6);
         echo $radial->items($itemsr)->imageClass("imageclass")->backImageClass("backimageclass")->targetElementId("radialtarget1")->render();
         ?>
        </div>
    </div>

<script type="text/javascript">
    var rteObj, rteEle = $("#rteSample2"), radialEle = $('#nestedradialmenu');
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
				$('#nestedradialmenu').css({"left":25});
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
		$('iframe').contents().find('body').blur();
    }
    function rteChange(e) {
        radialEle.ejRadialMenu("enableItem", "Undo");
    }
    function copy(e) {
        rteObj.executeCommand("copy");
    }
    function paste(e) {
        if (ej.browserInfo().name == 'msie')
            rteObj.executeCommand("paste");
        else
            rteObj._openAlert("Your browser doesn't support direct access to the clipboard. Please use the Ctrl+V keyboard shortcut instead of paste opertion.");
    }
    function italic(e) {
        rteObj.executeCommand("italic");
    }
    function bold(e) {
        rteObj.executeCommand("bold");
    }
    function center(e) {
        rteObj.executeCommand("justifyCenter");
    }
    function left(e) {
        rteObj.executeCommand("justifyLeft");
    }
    function right(e) {
        rteObj.executeCommand("justifyRight");
    }
    function undo(e) {
        rteObj.executeCommand("undo");
        radialEle.ejRadialMenu("disableItem", "Undo");
        radialEle.ejRadialMenu("enableItem", "Redo");
    }
    function redo(e) {
        rteObj.executeCommand("redo");
        radialEle.ejRadialMenu("disableItem", "Redo");
        radialEle.ejRadialMenu("enableItem", "Undo");
    }
    function unorderedList(e) {
        rteObj.executeCommand("insertunorderedList");
    }
    function orderedList(e) {
        rteObj.executeCommand("insertorderedList");
    }
    function font(e) {
		if(!ej.isNullOrUndefined(e.value))
			var val = e.value.toString();
		else{
			var size=e.text.split('Font');
			var val = size[1];
		}
        rteObj.executeCommand("fontSize", val);
    }
    </script>
<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
    .e-radialmenu .imageclass
        {
            background-image: url(Content/images/RadialMenu/main.png);
        }

    .e-radialmenu .backimageclass
    {
        background-image: url(Content/images/RadialMenu/Back_button.png);
    }
</style>