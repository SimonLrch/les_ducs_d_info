


    <?php
    require_once '../EJ/AutoLoad.php';
    require_once '../navigation/scriptsection.php';
   
 

    ?>

  
<body>
   
            <div class="cols-sample-area">
             
                        <table>
                            
                            <tr>
                                <td>Normal</td>
                                <td class="btnsht">
                                    <input type="checkbox" id="check11" />
                                    <?php
                                    $button =  new EJ\ToggleButton("check11");
                                    echo $button->size("normal") ->render();
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Mini</td>
                                <td class="btnsht">
                                    <input type="checkbox" id="Button6" />
                                    <?php
                                     $button =  new EJ\ToggleButton("Button6");
                                    echo $button->size("mini") ->render();
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Small</td>
                                <td class="btnsht">
                                    <input type="checkbox" id="Button8" />
                                    <?php
                                     $button =  new EJ\ToggleButton("Button8");
                                    echo $button->size("small") ->render();
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td class="btnsht">
                                    <input type="checkbox" id="Button4" />
                                    <?php
                                     $button =  new EJ\ToggleButton("Button4");
                                     echo $button->size("medium") ->render();
                                    ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Large</td>
                                <td class="btnsht">
                                    <input type="checkbox" id="Button2" />
                                    <?php
                                     $button =  new EJ\ToggleButton("Button2");
                                     echo $button->size("large") ->render();
                                    ?>
                                </td>
                            </tr>
                        </table>
                    </div>
     
    
    <style>
        .cols-sample-area{
            margin-top:10%;
        }
         .e-bgdefault:hover .e-buttondiv .e-icon.e-uiLight, .e-bgdefault:active .e-buttondiv .e-icon.e-uiLight {
            background-image: url('../Content/ejthemes/common-images/icons-white.png');
        }

        .control {
            padding: 30px;
        }

        td {
            padding: 5px;
        }

        .frame {
            padding: 0 20px;
        }
    </style>    
</body>