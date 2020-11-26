<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <table>
            <tr>
                <td class="btn_label">Normal</td>
                <td class="btnsht">
                    <?php
                    $button =  new EJ\Button("normal");
                    echo $button ->contentType("imageOnly")->enableRTL(true)->size("normal")->prefixIcon("e-icon e-uiLight e-handup")->render();
                    ?>
                </td>
            </tr>
            <tr>
                <td class="btn_label">Mini</td>
                <td class="btnsht">
                    <?php
                    $button =  new EJ\Button("mini");
                    echo $button ->text("Play")->size("mini")->contentType("textandimage")->prefixIcon("e-icon e-mediaplay e-uiLight")->render();
                    ?>
                </td>
            </tr>

            <tr>
                <td class="btn_label">Small</td>
                <td class="btnsht">
                    <?php
                    $button =  new EJ\Button("small");
                    echo $button ->text("login")->size("small")->render();
                    ?>
                </td>
            </tr>
            <tr>
                <td class="btn_label">Medium</td>
                <td class="btnsht">
                    <?php
                    $button =  new EJ\Button("medium");
                    echo $button ->text("login")->size("medium")->render();
                    ?>
                </td>
            </tr>

            <tr>
                <td class="btn_label">Large</td>
                <td class="btnsht">
                    <?php
                    $button =  new EJ\Button("large");
                    echo $button ->text("login")->size("large")->render();
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
    </style>
</body>
