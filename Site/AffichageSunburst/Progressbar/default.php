<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $progressbar =new EJ\ProgressBar("selectCar");
    echo $progressbar->value(45)->height("25")->showRoundedCorner(true)->text("45 %")->render();
    ?>
    
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>