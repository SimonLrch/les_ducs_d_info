<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $color=new \EJ\ColorPicker("colorPick");
    echo  $color->value("#278787")->render();
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
