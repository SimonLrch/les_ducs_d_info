<div class="cols-sample-area">
    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div class="frame">
                    <div class="control">
                        
                        <div class="toolver">
                        <?php
                        $items = array(
                            array('id'=> "1", 'spriteCssClass'=> "editTools cursor", 'tooltipText'=> "Cursor"),
                            array('id'=> "2", 'spriteCssClass'=> "editTools select", 'tooltipText'=> "Select"),
                            array('id'=> "3", 'spriteCssClass'=> "editTools move", 'tooltipText'=> "Move"),
                            array('id'=> "4", 'spriteCssClass'=> "editTools rectselect", 'tooltipText'=> "Rectselect"),
                            array('id'=> "5", 'spriteCssClass'=> "editTools roundselect", 'tooltipText'=> "Roundselect"),
                            array('id'=> "6", 'spriteCssClass'=> "editTools brush", 'tooltipText'=> "Brush"),
                            array('id'=> "7", 'spriteCssClass'=> "editTools pen", 'tooltipText'=> "Pen"),
                            array('id'=> "8", 'spriteCssClass'=> "editTools gradient", 'tooltipText'=> "Gradient"),
                            array('id'=> "9", 'spriteCssClass'=> "editTools crop", 'tooltipText'=> "Crop"),
                            array('id'=> "10", 'spriteCssClass'=> "editTools symbols", 'tooltipText'=> "Symbols"),
                            );

                        $toolbar = new EJ\Toolbar("edittoolsv");
                        $toolbar->width("100%")->dataSource($items)->enableRTL(true);
                        echo $toolbar->render();
                        ?>  
                        </div>

                    </div>
                </div>
    


</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
    .darktheme .frame .e-tooltxt .editTools {
            background-image: url('Content/images/toolbar/editToolbar.png');
        }

        .frame .e-tooltxt .editTools {
            display: block;
            background-image: url('Content/images/toolbar/editToolbarl.png');
            height: 26px;
            width: 26px;
            background-repeat: no-repeat;
        }

        .e-tooltxt:hover .editTools, .darktheme .frame .e-tooltxt:hover .editTools {
            background-image: url('Content/images/toolbar/editToolbarh.png');
        }

        .editTools.cursor {
            background-position: -0px -0px;
        }

        .editTools.select {
            background-position: -0px -36px;
        }

        .editTools.move {
            background-position: -0px -72px;
        }

        .editTools.rectselect {
            background-position: -0px -108px;
        }

        .editTools.roundselect {
            background-position: -0px -144px;
        }

        .editTools.brush {
            background-position: -0px -180px;
        }

        .editTools.pen {
            background-position: -0px -216px;
        }

        .editTools.gradient {
            background-position: -0px -252px;
        }

        .editTools.crop {
            background-position: -0px -288px;
        }

        .editTools.symbols {
            background-position: -0px -324px;
        }
</style>