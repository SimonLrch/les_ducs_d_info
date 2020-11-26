<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    
                <?php
                $rating =new EJ\Rating("orientRating");
                echo $rating->value(4)->orientation("vertical")->render();
                ?>
            
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
        text-align: center;
    }
</style>