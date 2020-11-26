<div class="cols-sample-area" style="position:relative">
    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div  class="waiting">
        <?php
        $waitingpopup =new EJ\WaitingPopup("target");
        echo $waitingpopup->showOnInit(true)->appendTo(".cols-sample-area")->render();
        ?>
    </div>
</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
    #target {
            height: 320px;
            width: 600px;
    }

    #target_WaitingPopup .e-image {
        display: block;
        height: 70px;
    }
</style>