<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <table>
            <tr>
                <td class="btn_label">Normal</td>
                <td class="btnsht">
                    <div class="spltspan">
                        <?php
                        $splitbtn = new EJ\SplitButton("SplitBtnNormal");
                        $item1 = new EJ\SplitButton\SplitButtonItem();
                        $item1->id("1")->text("User");
                        $item2 = new EJ\SplitButton\SplitButtonItem();
                        $item2->id("2")->text("Guest");
                        $item3 = new EJ\SplitButton\SplitButtonItem();
                        $item3->id("3")->text("Admin");
                        $splitbtn->addItem($item1,$item2,$item3);
                        $item11 = new EJ\SplitButton\SplitButtonItem();                   
                        echo $splitbtn->text("Login")->size("normal")->showRoundedCorner(true)->contentType("imageonly")
                        ->prefixIcon("e-icon e-login")->render();                
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td  class="btn_label">Mini</td>
                <td class="btnsht">
                    <?php
                    $splitbtn = new EJ\SplitButton("SplitBtnMini");
                    $item1 = new EJ\SplitButton\SplitButtonItem();
                    $item1->id("1")->text("User");
                    $item2 = new EJ\SplitButton\SplitButtonItem();
                    $item2->id("2")->text("Guest");
                    $item3 = new EJ\SplitButton\SplitButtonItem();
                    $item3->id("3")->text("Admin");
                    $splitbtn->addItem($item1,$item2,$item3);
                    $item11 = new EJ\SplitButton\SplitButtonItem();                   
                    echo $splitbtn->text("Login")->size("mini")->showRoundedCorner(true)->render();                          
                    ?>
                </td>
            </tr>

            <tr>
                <td  class="btn_label">Small</td>
                <td class="btnsht">
                    <?php
                    $splitbtn = new EJ\SplitButton("SplitBtnSmall");
                    $item1 = new EJ\SplitButton\SplitButtonItem();
                    $item1->id("1")->text("User");
                    $item2 = new EJ\SplitButton\SplitButtonItem();
                    $item2->id("2")->text("Guest");
                    $item3 = new EJ\SplitButton\SplitButtonItem();
                    $item3->id("3")->text("Admin");
                    $splitbtn->addItem($item1,$item2,$item3);
                    $item11 = new EJ\SplitButton\SplitButtonItem();                   
                    echo $splitbtn->text("Login")->size("small")->showRoundedCorner(true)->render();  
                    ?>
                </td>
            </tr>
            <tr>
                <td  class="btn_label">Medium</td>
                <td class="btnsht">
                    <?php
                    $splitbtn = new EJ\SplitButton("SplitBtnMedium");
                    $item1 = new EJ\SplitButton\SplitButtonItem();
                    $item1->id("1")->text("User");
                    $item2 = new EJ\SplitButton\SplitButtonItem();
                    $item2->id("2")->text("Guest");
                    $item3 = new EJ\SplitButton\SplitButtonItem();
                    $item3->id("3")->text("Admin");
                    $splitbtn->addItem($item1,$item2,$item3);
                    $item11 = new EJ\SplitButton\SplitButtonItem();                   
                    echo $splitbtn->text("Login")->size("medium")->showRoundedCorner(true)->render();  
                    ?>
                </td>
            </tr>

            <tr>
                <td  class="btn_label">Large</td>
                <td class="btnsht">
                    <?php
                    $splitbtn = new EJ\SplitButton("SplitBtnLarge");
                    $item1 = new EJ\SplitButton\SplitButtonItem();
                    $item1->id("1")->text("User");
                    $item2 = new EJ\SplitButton\SplitButtonItem();
                    $item2->id("2")->text("Guest");
                    $item3 = new EJ\SplitButton\SplitButtonItem();
                    $item3->id("3")->text("Admin");
                    $splitbtn->addItem($item1,$item2,$item3);
                    $item11 = new EJ\SplitButton\SplitButtonItem();                   
                    echo $splitbtn->text("Login")->size("large")->showRoundedCorner(true)->contentType("textandimage")
                    ->prefixIcon("e-icon e-login")->render();                   
                    ?>
                </td>
            </tr>

        </table>
    </div>
    <style>
        table {
            width: 350px;
            margin: auto;
        }

        td {
            padding: 11px;
        }

            td.btn_label {
                padding: 0 19px;
            }

        .spltspan {
            width: 50px;
        }
    </style>
</body>
