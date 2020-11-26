<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<textarea id="rteSample" rows="10" cols="30" style="width: 100%; height: 440px">
                  &lt;p&gt;&lt;b&gt;Description:&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;The Rich Text Editor (RTE) control is an easy to render in
    client side. Customer easy to edit the contents and get the HTML content for
    the displayed content. A rich text editor control provides users with a toolbar
    that helps them to apply rich text formats to the text entered in the text
    area. &lt;/p&gt;
    &lt;p&gt;&lt;b&gt;Functional
    Specifications/Requirements:&lt;/b&gt;&lt;/p&gt;
    &lt;ol&gt;&lt;li&gt;&lt;p&gt;Provide
    the tool bar support, it’s also customizable.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Options
    to get the HTML elements with styles.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Support
    to insert image from a defined path.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Footer
    elements and styles(tag / Element information , Action button (Upload, Cancel))&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Re-size
    the editor support. &lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Provide
    efficient public methods and client side events.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Keyboard
    navigation support.&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;
                    </textarea>
    <?php
    $rte =new EJ\RTE("rteSample");
    echo $rte->isResponsive(true)->width("100%")->minWidth("300px")->render();
    ?>
   
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="disableToolbarItem" onclick="ongetHtmlString()">Get HTML</button>
                        </div>
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="disableToolbarItem" onclick="ongetText()">Get Text</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="disableToolbarItem" onclick="onexec()">Exec Bold</button>
                        </div>
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="disableToolbarItem" onclick="oncmdStatus()">Bold Status</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="selectALL" onclick="onSelectAll()">Select All</button>
                        </div>
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="selectRange" onclick="onSeletcRange()">Select Range</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="e-btn inputbtn" value="pasteContent" onclick="onPasteContent()">Paste Content</button>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="checkbox" id="chkDestroy" class="e-togglebtn" />
                        </div>
                    </div>
</div>

<script>
    var rte;
        $(function () {
            rte = $("#rteSample").data("ejRTE");
            $("#chkShowHide").ejCheckBox({ "change": "onShowHide" });
			 $(".e-btn.inputbtn").ejButton();
            $("#chkDestroy").ejToggleButton({ "change": "onDestoryRestore", "width": "107px", "defaultText": "Destory", "activeText": "Restore" });
        });
        function ongetHtmlString() {
            if (rte)
                alert(rte.getHtml());
        }
        function ongetText() {
            if (rte)
                alert(rte.getText());
        }
        function onexec() {
            if (rte)
                rte.executeCommand("bold", true);
        }
        function oncmdStatus() {
            if (rte) {
                var status = rte.getCommandStatus("bold");
                alert(status);
            }
        }
        function onDestoryRestore(args) {
            if (args.isChecked) {
                rte.destroy();
                rte = null;
            }
            else {
                $("#rteSample").ejRTE({ width:"100%",minWidth:"150px",isResponsive:true});
                rte = $("#rteSample").data("ejRTE");			
            }
        }
        function onSelectAll()
        {
		if(!ej.isNullOrUndefined(rte))
            rte.selectAll();
        }
        function onSeletcRange() {
		if(!ej.isNullOrUndefined(rte)){
            var range = rte.createRange();
            var liTag = rte.getDocument().getElementsByTagName("li");           
            if (!rte._isIE8()) {
                range.setStart(liTag[2], 1);
                range.setEnd(liTag[4], 0);
            }
            else {
                range = rte.getDocument().body.createTextRange()
                range.moveToElementText(liTag[3]);
            }
            rte.selectRange(range);
        }
        }
        function onPasteContent() {
		if(!ej.isNullOrUndefined(rte)){
            select = rte.getSelectedHtml();
            rte.pasteContent("<p style='background-color:yellow;color:skyblue'> " + select + " </p>");
        }
        }
</script>

<style>
    .cols-sample-area
    {
        width: 750px;
        margin: 0 auto;
        float: none;
    }
     #rteSample{
        display: none;
    }
    .inputbtn {
            width: 107px;
        }
</style>
