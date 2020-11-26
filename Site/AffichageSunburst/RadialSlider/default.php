<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    
    $radialslider=new EJ\RadialSlider("defaults");
    echo $radialslider->innerCircleImageUrl("Content/images/radialslider/chevron-right.png")->render();
    ?>
</div>
<style>    
    .cols-sample-area {
        width:400px;        
        margin:0 auto;
        float:none;
    }
	#sampleContainer{
        overflow-x: auto;
    }
</style>
