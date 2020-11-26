<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame">
<?php
    $toolbar = new EJ\Toolbar("toolbarEvents");
    $toolbarItem1 = new EJ\Toolbar\ToolbarItem();
    $toolbarItem1->templateStart();
    ?>
            <li title="Mail">
                <div class="mailtools movetofolder" />
            </li>
            <li title="Scheduler">
                <div class="mailtools categorize" />
            </li>
            <li title="Calculator">
                <div class="mailtools flag" />
            </li>
            <li title="Sticky Notes">
                <div class="mailtools forward" />
            </li>
            <li title="Calendar">
                <div class="mailtools newmail" />
            </li>
            <li title="Notes">
                <div class="mailtools reply" />
            </li>
            <li title="Delete">
                <div class="mailtools done" />
                </span></li>
    <?php
    $toolbarItem1->templateEnd();
    $toolbar->AddItem($toolbarItem1);
    $toolbar->width("100%")->
    create("toolbarLoad")->
                click("toolbarClick")->
                itemHover("toolbarChecked")->
                itemLeave("toolbarUnChecked");
    echo $toolbar->render();
    ?>
                            
                         </div>
  
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("onClear")->type("button")->render();
        ?>
    </div>
</div>
<script>
        function toolbarLoad(args) {
            jQuery.addEventLog("Toolbar control has been <span class='eventTitle'>created </span>.");
        }
        function toolbarClick(args) {
            jQuery.addEventLog("Toolbar item is <span class='eventTitle'>clicked </span>.");
        }
        function toolbarChecked(args) {
            jQuery.addEventLog("Mouse pointer <span class='eventTitle'>hovered on</span> toolbar item. </br>");
        }
        function toolbarUnChecked(args) {
            jQuery.addEventLog("Mouse pointer <span class='eventTitle'>hovered away</span> from toolbar item. </br>");
        }

        function onClear() {
            jQuery.clearEventLog();
        }

</script>

<style>
    .cols-sample-area
    {
        width: 450px;
        margin: 0 auto;
        float: none;
    }
        .darktheme .frame .e-tooltxt .mailtools {
            background-image: url('Content/images/toolbar/maild.png');
        }

        .frame .e-tooltxt .mailtools {
            display: block;
            background-image: url('Content/images/toolbar/maill.png');
            height: 24px;
            width: 24px;
            background-repeat: no-repeat;
        }

        .e-tooltxt:hover .mailtools, .darktheme .frame .e-tooltxt:hover .mailtools {
            background-image: url('Content/images/toolbar/mailh.png');
        }

        .mailtools.done {
            background-position: -11px -140px;
        }

        .mailtools.movetofolder {
            background-position: -12px -40px;
        }

        .mailtools.categorize {
            background-position: -14px -248px;
        }

        .mailtools.flag {
            background-position: -13px -282px;
        }

        .mailtools.forward {
            background-position: -14px -314px;
        }

        .mailtools.newmail {
            background-position: -14px -348px;
        }

        .mailtools.reply {
            background-position: -14px -388px;
        }

</style>
