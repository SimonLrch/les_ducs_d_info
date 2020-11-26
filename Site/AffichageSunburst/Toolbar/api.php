<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame">
                    <div class="control">
                            <?php
    $toolbar = new EJ\Toolbar("toolbarMethods");
    $toolbarItem1 = new EJ\Toolbar\ToolbarItem();
    $toolbarItem1->templateStart();
    ?>
            <li id="Left" title="Left">
                <div class="ToolbarItems LeftAlign_tool"></div>
            </li>
            <li id="Center" title="Center">
                <div class="ToolbarItems CenterAlign_tool"></div>
            </li>
            <li id="Right" title="Right">
                <div class="ToolbarItems RightAlign_tool"></div>
            </li>
            <li id="Justify" title="Justify">
                <div class="ToolbarItems Justify_tool"></div>
            </li>
    <?php
    $toolbarItem1->templateEnd();
    $toolbar->AddItem($toolbarItem1);
    $toolbarItem2 = new EJ\Toolbar\ToolbarItem();
    $toolbarItem2->templateStart();
    ?>
            <li id="Bold" title="Bold">
                <div class="ToolbarItems Bold_tool"></div>
            </li>
            <li id="Italic" title="Italic">
                <div class="ToolbarItems Italic_tool"></div>
            </li>
            <li id="StrikeThrough" title="Strike Through">
                <div class="ToolbarItems StrikeThrough_tool"></div>
            </li>
            <li id="UndeLine" title="UnderLine">
                <div class="ToolbarItems Underline_tool"></div>
            </li>
    <?php
    $toolbarItem2->templateEnd();
    $toolbar->AddItem($toolbarItem2);
    $toolbar->width("100%");
    echo $toolbar->render();
    ?>
                    </div>
                </div>
                  <?php
    $toolbar = new EJ\Toolbar("toolbarMethods");
    $toolbar->width("100%");
    echo $toolbar->render();
    ?>
   
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">Select Item By ID</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optSelectId">
                                <option value="none">None</option>
                                <option value="Left">Left</option>
                                <option value="Center">Center</option>
                                <option value="Right">Right</option>
                                <option value="Justify">Justify</option>
                                <option value="Bold">Bold</option>
                                <option value="Italic">Italic</option>
                                <option value="StrikeThrough">StrikeThrough</option>
                                <option value="UndeLine">UnderLine</option>
                            </select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">Deselect Item By ID</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optDeselectId">
                                <option value="none">None</option>
                                <option value="Left">Left</option>
                                <option value="Center">Center</option>
                                <option value="Right">Right</option>
                                <option value="Justify">Justify</option>
                                <option value="Bold">Bold</option>
                                <option value="Italic">Italic</option>
                                <option value="StrikeThrough">StrikeThrough</option>
                                <option value="UndeLine">UnderLine</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Disable Item By ID</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optDisableId">
                                <option value="none">None</option>
                                <option value="Left">Left</option>
                                <option value="Center">Center</option>
                                <option value="Right">Right</option>
                                <option value="Justify">Justify</option>
                                <option value="Bold">Bold</option>
                                <option value="Italic">Italic</option>
                                <option value="StrikeThrough">StrikeThrough</option>
                                <option value="UndeLine">UnderLine</option>
                            </select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-md-6">Enable Item By ID</div>
                        <div class="col-md-6">
                            <select name="selectIndex" class="e-ddl" id="optEnableId">
                                <option value="none">None</option>
                                <option value="Left">Left</option>
                                <option value="Center">Center</option>
                                <option value="Right">Right</option>
                                <option value="Justify">Justify</option>
                                <option value="Bold">Bold</option>
                                <option value="Italic">Italic</option>
                                <option value="StrikeThrough">StrikeThrough</option>
                                <option value="UndeLine">UnderLine</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">Disable/Enable All </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="enabledisable" class="e-togglebtn" value="checkuncheck" />
                        </div>
                        <div class="col-md-6">Show/Hide </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="showhide" class="e-togglebtn" value="checkuncheck" />
                        </div>
                    </div>
</div>

<script>
    var toolbar1;
        $(function () {
            toolbar1 = $("#toolbarMethods").data("ejToolbar");
            /**/
            $("#optSelectId").ejDropDownList({ "change": "onSelectChange", width: "100px", selectedItemIndex: 0 });
            $("#optDeselectId").ejDropDownList({ "change": "onDeselectChange", width: "100px", selectedItemIndex: 0 });
            $("#optDisableId").ejDropDownList({ "change": "onDisableChange", width: "100px", selectedItemIndex: 0 });
            $("#optEnableId").ejDropDownList({ "change": "onEnableChange", width: "100px", selectedItemIndex: 0 });

            $("#enabledisable").ejToggleButton({ width: "100px", "change": "onEnableDisableAll", "defaultText": "Disable", "activeText": "Enable" });
            $("#showhide").ejToggleButton({ width: "100px", "change": "onShowHide", "defaultText": "Hide", "activeText": "Show" });

        });
        function onSelectChange(args) {
            toolbar1.selectItemByID(args.value);
        }
        function onDeselectChange(args) {
            $("#optSelectId").data('ejDropDownList').option('selectedItemIndex', 0);
			toolbar1.deselectItemByID(args.value);
        }
        function onDisableChange(args) {
            toolbar1.disableItemByID(args.value);
        }
        function onEnableChange(args) {
            $("#optDisableId").data('ejDropDownList').option('selectedItemIndex', 0);
			toolbar1.enableItemByID(args.value);
        }

        function onEnableDisableAll(args) {
            if (args.isChecked) 
                toolbar1.disable();
            else
                toolbar1.enable();
            $("#optSelectId").data('ejDropDownList').option('selectedItemIndex', 0);
			$("#optDeselectId").data('ejDropDownList').option('selectedItemIndex', 0);
			$("#optDisableId").data('ejDropDownList').option('selectedItemIndex', 0);
            $("#optEnableId").data('ejDropDownList').option('selectedItemIndex', 0);
        }
        function onShowHide(args) {
            if (args.isChecked)
                toolbar1.hide();
            else
                toolbar1.show();
        }

</script>

<style>
    .cols-sample-area
    {
        width: 450px;
        margin: 0 auto;
        float: none;
    }
     .darktheme .frame .e-tooltxt .ToolbarItems {
            background-image: url('Content/images/toolbar/ui-icons-metro.png');
        }

        .frame .e-tooltxt .ToolbarItems, .disabletoolli.e-tooltxt:hover .ToolbarItems {
            display: block;
            background-image: url('Content/images/toolbar/ui-icons-dark.png');
            height: 22px;
            width: 22px;
        }

        .e-tooltxt:hover .ToolbarItems, .darktheme .frame .e-tooltxt:hover .ToolbarItems {
            background-image: url('Content/images/toolbar/ui-icons-light.png');
        }

        .e-tooltxt:hover.e-disable .ToolbarItems, .darktheme .frame .e-tooltxt:hover .e-disable .ToolbarItems {
            background-image: url('Content/images/toolbar/ui-icons-dark.png');
        }

        .ToolbarItems.LeftAlign_tool {
            background-position: -26px -39px;
        }

        .ToolbarItems.CenterAlign_tool {
            background-position: -55px -39px;
        }

        .ToolbarItems.RightAlign_tool {
            background-position: -89px -39px;
        }

        .ToolbarItems.Justify_tool {
            background-position: -123px -39px;
        }

        .ToolbarItems.Bold_tool {
            background-position: -159px -39px;
        }

        .ToolbarItems.Italic_tool {
            background-position: -196px -39px;
        }

        .ToolbarItems.StrikeThrough_tool {
            background-position: -55px -70px;
        }

        .ToolbarItems.Underline_tool {
            background-position: -23px -68px;
        }
</style>
