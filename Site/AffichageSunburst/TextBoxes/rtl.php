<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <div class="editor e-rtl">
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
                        $numeric2= new EJ\NumericTextbox("numeric2");
                        echo $numeric2->value(40)->minValue(1)->maxValue(1000)->width("100%")->enableRTL(true)->render();
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
                        $currency2 = new EJ\CurrencyTextbox("currency2");
                        echo $currency2->value(10)->minValue(1)->maxValue(1000)->width("100%")->enableRTL(true)->render();
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
                        $percent2 = new EJ\PercentageTextbox("percent2");
                        echo $percent2->value(20)->minValue(1)->maxValue(1000)->width("100%")->enableRTL(true)->render();
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
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