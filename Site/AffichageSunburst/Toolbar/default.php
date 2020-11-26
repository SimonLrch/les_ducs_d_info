<div class="cols-sample-area">
<div class="control">
    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div class="ctrllabel"><div class="ctrltext">Toolbar</div></div>
    <?php
    $toolbar = new EJ\Toolbar("editingToolbar");
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

<style>
    .cols-sample-area
    {
        width: 310px;
        margin: 0 auto;
        float: none;
    }
     .darktheme .control .e-tooltxt .ToolbarItems {
        background-image: url('Content/images/toolbar/ui-icons-metro.png');
    }

    .control .e-tooltxt .ToolbarItems {
        display: block;
        background-image: url('Content/images/toolbar/ui-icons-dark.png');
        height: 22px;
        width: 22px;
    }

    .e-tooltxt:hover .ToolbarItems, .darktheme .control .e-tooltxt:hover .ToolbarItems {
        background-image: url('Content/images/toolbar/ui-icons-light.png');
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
    .ctrllabel {
        height: 28px;
        width: 100%;
        color: #FFFFFF;
        font-weight: normal;
        background: #6d6e74; /* Old browsers */
        background: -moz-linear-gradient(top, #6d6e74 0%, #4d4f53 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#6d6e74), color-stop(100%,#4d4f53)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #6d6e74 0%,#4d4f53 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #6d6e74 0%,#4d4f53 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #6d6e74 0%,#4d4f53 100%); /* IE10+ */
        background: linear-gradient(to bottom, #6d6e74 0%,#4d4f53 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6d6e74', endColorstr='#4d4f53',GradientType=0 ); /* IE6-9 */
    }
    .ctrltext 
    {
        padding-left: 10px;
        padding-top: 5px;
    }
</style>