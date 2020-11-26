<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <div>
        <table class="editors">

            <tbody>
                <tr>
                    <td>
                        <span>Kilometers</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $numeric = new EJ\NumericTextbox("numeric");
                        echo $numeric->value(40)->minValue(1)->maxValue(1000)->width("250")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Fare</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $currency = new EJ\CurrencyTextbox("currency");
                        echo $currency->value(10)->minValue(1)->maxValue(1000)->width("250")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Service Tax</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $percent = new EJ\PercentageTextbox("percent");
                        echo $percent->value(20)->minValue(1)->maxValue(1000)->width("250")->render();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>Mobile No</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $mask = new EJ\MaskEdit("mask");
                        echo $mask->maskFormat("99 999-99999")->value("4242422424")->width("250")->render();
                        ?>

                    </td>


                </tr>
            </tbody>
        </table>


    </div>
</div>
<style type="text/css" class="cssStyles">
    table {
        width: 100%;
        margin: 10px 75px;
    }

    td {
        padding: 5px;
        left: 50%;
    }

    .cols-sample-area {
        width: 500px;
    }
</style>