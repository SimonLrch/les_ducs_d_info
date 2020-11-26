<?php
require_once '../EJ/AutoLoad.php';

?>
<script src="../Scripts/cultures/ej.culture.de-DE.min.js"></script>
<script src="../Scripts/cultures/ej.culture.zh-CN.min.js"></script>
<script src="../Scripts/cultures/ej.culture.fr-FR.min.js"></script>
<script src="../Scripts/cultures/ej.culture.en-US.min.js"></script>
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
                        $numericlocale = new EJ\NumericTextbox("numericlocale");
                        echo $numericlocale->value(10.23)->minValue(1)->maxValue(1000)->width("100%")->locale("de-DE")->render();
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
                        $currencylocale = new EJ\CurrencyTextbox("currencylocale");
                        echo $currencylocale->value(10.50)->minValue(1)->maxValue(1000)->width("100%")->locale("de-DE")->render();
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
                        $percentlocale = new EJ\PercentageTextbox("percentlocale");
                        echo $percentlocale->value(40)->minValue(1)->maxValue(1000)->width("100%")->locale("de-DE")->render();
                        ?>
                    </td>
                </tr>
				<tr>
                    <td>
                        <span>MaskEdit</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $masklocale = new EJ\MaskEdit("masklocale");
                        echo $masklocale->maskFormat("$99,999.99")->width("100%")->locale("de-DE")->render();
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-sm-3">
            <span>Select Culture</span>
        </div>
        <div class="col-sm-3">
            <?php
            $dropdownlist =new EJ\DropDownList("selectlocale");
            echo $dropdownlist->targetID("locale")->width("100%")->value("de-DE")->watermarkText("Select locale")->change("onLocaleChange")->render();
            ?>

            <div id="locale">
                <ul>
                    <li>en-US</li>
                    <li>de-DE</li>
                    <li>zh-CN</li>
                    <li>fr-FR</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    var numobject, percentobject, currencyobject,maskobject;
    function onLocaleChange(args) {
		var Format;
		args.text == "de-DE" || args.text=="zh-CN"?Format = "99,999.99$":Format="$99,999.99";
        numobject = $("#numericlocale").data("ejNumericTextbox");
        currencyobject = $("#currencylocale").data("ejCurrencyTextbox");
        percentobject = $("#percentlocale").data("ejPercentageTextbox");
		maskobject = $("#masklocale").data("ejMaskEdit");
        numobject.setModel({ locale: args.text });
        currencyobject.setModel({ locale: args.text });
        percentobject.setModel({ locale: args.text });
		maskobject.setModel({ maskFormat: Format , locale: args.text });
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