<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $barcode = new EJ\Barcode("Barcode");
    
    echo $barcode->symbologyType('code39')->text('SYNCFUSION')->render();
    ?>
</div>

<style>
    .cols-sample-area
    {
        width:300px;
        margin:0 auto;
        float:none;
    }
</style>
