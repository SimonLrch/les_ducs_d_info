<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $custom=["ffffff", "ffccff", "ff99ff", "ff66ff", "ff33ff", "ff00ff", "ccffff", "ccccff",
                         "cc99ff", "cc66ff", "cc33ff", "cc00ff", "99ffff", "99ccff", "9999ff", "9966ff",
                         "9933ff", "9900ff", "ffffcc", "ffcccc"
                ];
    $color=new \EJ\ColorPicker("colorPick");
    echo  $color->value("#9933ff")->custom($custom)->modelType("palette")->palette("custompalette")->showSwitcher(false)->render();
    ?>
</div>
<style>
    .cols-sample-area
    {
        width:300px;
        margin:0 auto;
        float:none;
    }
    .e-colorwidget.e-widget
    {
        margin:0 auto;
    }
    
</style>
