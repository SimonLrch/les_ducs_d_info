<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <table>
            <tr>
                <td class="btn_label">Normal</td>
                <td class="btnsht">
                    <label for="check11">Toggle</label>
                    <?php
                    $button =  new EJ\ToggleButton("check11");
                    echo $button ->showRoundedCorner(true)->size("normal")->contentType("imageonly")->defaultPrefixIcon("e-icon e-mediaplay")->activePrefixIcon("e-icon e-mediapause e-uiLight")->render();
                    ?>
                </td>
            </tr>
            <tr>
                <td class="btn_label">Mini</td>
                <td class="btnsht">
                    <label for="check12">Toggle</label>
                    <?php
                    $button =  new EJ\ToggleButton("check12");
                    echo $button ->showRoundedCorner(true)->defaultText("Play")->activeText("Pause")->size("mini")->render();
                    ?>
                </td>
            </tr>

            <tr>
                <td class="btn_label">Small</td>
                <td class="btnsht">
                    <label for="check13">Toggle</label>
                    <?php
                    $button =  new EJ\ToggleButton("check13");
                    echo $button ->showRoundedCorner(true)->defaultText("Play")->activeText("Pause")->size("small")->render();
                    ?>
                </td>
            </tr>
            <tr>
                <td class="btn_label">Medium</td>
                <td class="btnsht">
                    <label for="check14">Toggle</label>
                    <?php
                    $button =  new EJ\ToggleButton("check14");
                    echo $button ->showRoundedCorner(true)->defaultText("Play")->activeText("Pause")->size("medium")->render();
                    ?>
                </td>
            </tr>

            <tr>
                <td class="btn_label">Large</td>
                <td class="btnsht">
                    <label for="check15">Toggle</label>
                    <?php
                    $button =  new EJ\ToggleButton("check15");
                    echo $button ->showRoundedCorner(true)->defaultText("Play")->activeText("Pause")->size("large")
                    ->contentType("textandimage")->defaultPrefixIcon("e-icon e-mediaplay")->activePrefixIcon("e-icon e-mediapause")->render();                
                    ?>
                </td>
            </tr>

        </table>
    </div>
    <style>
        table {
            margin: auto;
            width: 300px;
        }

        td {
            padding: 11px;
        }

            td.btn_label {
                padding: 0 19px;
            }

        .e-bghover .e-tglebuttondiv .e-icon.e-uiLight, .e-bgselected .e-tglebuttondiv .e-icon.e-uiLight {
            background-image: url('../Content/ejthemes/common-images/icons-white.png');
        }
    </style>
</body>
