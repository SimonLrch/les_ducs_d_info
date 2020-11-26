<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <div class="editor">
        <table>

            <tbody>
                <tr>
                    <td>
                        <span>Numeric Textbox</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $numeric1 = new EJ\NumericTextbox("numeric1");
                        echo $numeric1->value(40)->minValue(1)->maxValue(1000)->width("100%")->create("onNumericCreate")->focusIn("numericFocusIn")->focusOut("numericFocusOut")->change("numericValChange")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Currency Textbox</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $currency1 = new EJ\CurrencyTextbox("currency1");
                        echo $currency1->value(10)->minValue(1)->maxValue(1000)->width("100%")->create("onCurrencyCreate")->focusIn("currencyFocusIn")->focusOut("currencyFocusOut")->change("currencyValChange")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Percentage Textbox</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $percent1 = new EJ\PercentageTextbox("percent1");
                        echo $percent1->value(20)->minValue(1)->maxValue(1000)->width("100%")->create("onPercentageCreate")->focusIn("percentFocusIn")->focusOut("percentFocusOut")->change("percentValChange")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>MaskEdit Textbox</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $mask1 = new EJ\MaskEdit("mask1");
                        echo $mask1->maskFormat("AAA-AA-AAAA")->width("100%")->create("onMaskCreate")->focusIn("maskFocusIn")->focusOut("maskFocusOut")->change("maskValueChange")->watermarktext("AAA-AA-AAAA")->render();
                        ?>

                    </td>


                </tr>
            </tbody>
        </table>


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
    function onNumericCreate(args) {
        jQuery.addEventLog("NumericTextbox has been <span class='eventTitle'>created</span>.");
    }
    function onPercentageCreate(args) {
        jQuery.addEventLog("PercentageTextbox has been <span class='eventTitle'>created</span>.");
    }
    function onCurrencyCreate(args) {
        jQuery.addEventLog("CurrencyTextbox has been <span class='eventTitle'>created</span>.");
    }
    function onMaskCreate(args) {
        jQuery.addEventLog("MaskEditTextbox has been <span class='eventTitle'>created</span>.");
    }
    function numericValChange(args) {
        jQuery.addEventLog("NumericTextbox value has been <span class='eventTitle'>changed</span> to " + args.value + ".<br/>");
    }
    function percentValChange(args) {
        jQuery.addEventLog("PercentageTextbox value has been <span class='eventTitle'>changed</span> to " + args.value + ".<br/>");
    }
    function currencyValChange(args) {
        jQuery.addEventLog("CurrencyTextbox value has been <span class='eventTitle'>changed</span> to " + args.value + ".<br/>");
    }
    function maskValueChange(args) {
        jQuery.addEventLog("MaskEditTextbox value has been <span class='eventTitle'>changed</span> to " + args.value + ".<br/>");
    }
    function numericFocusIn(args) {
        jQuery.addEventLog("NumericTextbox is in <span class='eventTitle'>Focus</span>");
    }
    function numericFocusOut(args) {
        jQuery.addEventLog("NumericTextbox is out of <span class='eventTitle'>Focus</span>");
    }
    function percentFocusIn(args) {
        jQuery.addEventLog("PercentTextbox is in <span class='eventTitle'>Focus</span>");
    }
    function percentFocusOut(args) {
        jQuery.addEventLog("PercentTextbox is out of <span class='eventTitle'>Focus</span>");
    }
    function currencyFocusIn(args) {
        jQuery.addEventLog("CurrencyTextbox is in <span class='eventTitle'>Focus</span>");
    }
    function currencyFocusOut(args) {
        jQuery.addEventLog("CurrencyTextbox is out of <span class='eventTitle'>Focus</span>");
    }
    function maskFocusIn(args) {
        jQuery.addEventLog("MaskEditTextbox is in <span class='eventTitle'>Focus</span>");
    }
    function maskFocusOut(args) {
        jQuery.addEventLog("MaskEditTextbox is out of <span class='eventTitle'>Focus</span>");
    }
    function onClear() {
        jQuery.clearEventLog();
    }
</script>
<style type="text/css" class="cssStyles">
    table td {
        padding: 10px;
    }

    .editor {
        width: 50%;
        margin: 0 auto;
    }

    .cols-sample-area {
        width: 400px;
    }
</style>