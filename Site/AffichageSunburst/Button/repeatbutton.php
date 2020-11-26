<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <table>
            <tr>
                <td style="padding-left:80px">
                    Repeat Button
                    <br />
                    <?php
                    $repeatBtn=new EJ\Button("repeatBtn");
                    echo $repeatBtn->size("large")->showRoundedCorner(true)->repeatButton(true)->text("click")->render();

                    ?>
                </td>
            </tr>
        </table>
    </div>
    <script>
         
    </script>
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
