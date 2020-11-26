<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    $colors = array("AliceBlue", "AntiqueWhite", "Aqua",
                "Black", "Blue", "Brown",
                "Chocolate", "Cyan",
                "DarkBlue", "DarkGreen", "DarkRed",
                "ForestGreen", "Fuchsia", "Gold", "Gray",
                "Green", "HoneyDew", "Indigo", "Ivory",
                "Khaki", "Lavender", "LemonChiffon", "Lime",
                "Maroon", "Magenta", "Olive", "Orange", "OrangeRed",
                "Pink", "Purple", "PowderBlue", "Red",
                "RosyBrown", "RoyalBlue", "Silver", "SkyBlue",
                "SlateGray", "Tan", "Teal", "Turquoise",
                "Violet", "Wheat", "Yellow", "YellowGreen ");
    ?>
    <?php
    $autocomplete=new EJ\AutoComplete("selectColor");
    echo $autocomplete->dataSource($colors)->width("100%")->watermarkText("Choose a color")
    ->select("onSelect")->focusIn("onFocusIn")->focusOut("onFocusOut")->change("onChange")
    ->open("onOpen")->close("onClose")->create("onCreate")->render();
    ?>

</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("clearLog")->type("button")->render();
        ?>
    </div>
</div>
<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
<script type="text/javascript" class="jsScript">
    var autocompleteObj;
    $(function () {
        // declaration
        autocompleteObj = $("#selectColor").data("ejAutocomplete");
    });

    // Client side Events
    function onCreate(args) {
        jQuery.addEventLog("Autocomplete has been <span class='eventTitle'>created</span>.");
    }
    function onFocusIn(args) {
        jQuery.addEventLog("Autocomplete  is in <span class='eventTitle'>focus</span>. ");
    }
    function onFocusOut(args) {
        jQuery.addEventLog("Autocomplete  is out of <span class='eventTitle'>focus</span>.");
    }
    function onSelect(args) {
        jQuery.addEventLog("The value '" + args.value + "' has been <span class='eventTitle'>selected</span>.");
    }
    function onChange(args) {
        jQuery.addEventLog("The value has been <span class='eventTitle'>changed</span> to '" + args.value + "'.");
    }
    function onOpen(args) {
        jQuery.addEventLog("Suggestion List has been <span class='eventTitle'>opened</span>.");
    }
    function onClose(args) {
        jQuery.addEventLog("Suggestion List has been <span class='eventTitle'>closed</span>.");
    }
    function clearLog() {
        jQuery.clearEventLog();
    }
    </script>
