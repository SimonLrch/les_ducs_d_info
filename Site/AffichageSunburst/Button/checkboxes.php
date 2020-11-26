<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <div class="frame">
            <br />
            Hobbies
                    <br />
            <br />
            <table>
                <tr>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("check1");
                        echo $check1->render();
                        ?>
                        <label for="check1" class="clslab">Games</label>
                    </td>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("Checkbox3");
                        echo $check1->render();
                        ?>
                        <label for="Checkbox3" class="clslab">Sports</label>

                    </td>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("Checkbox4");
                        echo $check1->render();
                        ?>
                        <label for="Checkbox4" class="clslab">Bike Riding</label>
                    </td>
                </tr>
            </table>
            <br />
            <br />
            Favorite Search Engines
                    <br />
            <br />
            <table>
                <tr>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("Checkbox1");
                        echo $check1->size("medium")->render();
                        ?>
                        <label for="Checkbox1" class="clslab">Google</label>
                    </td>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("Checkbox5");
                        echo $check1->size("medium")->render();
                        ?>
                        <label for="Checkbox5" class="clslab">Yahoo</label>
                    </td>
                    <td class="chkrad">
                        <?php
                        $check1=new EJ\CheckBox("Checkbox6");
                        echo $check1->size("medium")->render();
                        ?>
                        <label for="Checkbox6" class="clslab">Bing</label>
                    </td>
                </tr>
            </table>
            <br />
            <br />
            Favorite Social networks
                    <br />
            <br />
            <table>
                <tr>
                    <td class="chkrad">

                        <?php
                        $check1=new EJ\CheckBox("Checkbox2");
                        echo $check1->size("medium")->enableTriState(true)->render();
                        ?>
                        <label for="Checkbox2" class="clslab">Facebook</label>

                    </td>
                    <td class="chkrad">

                        <?php
                        $check1=new EJ\CheckBox("Checkbox7");
                        echo $check1->size("medium")->enableTriState(true)->render();
                        ?>
                        <label for="Checkbox7" class="clslab">GPlus</label>
                    </td>
                    <td class="chkrad">

                        <?php
                        $check1=new EJ\CheckBox("Checkbox8");
                        echo $check1->size("medium")->enableTriState(true)->render();
                        ?>
                        <label for="Checkbox8" class="clslab">Twitter</label>
                    </td>
                </tr>
            </table>
            <br />
        </div>
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
