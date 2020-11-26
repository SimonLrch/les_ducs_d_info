<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $barcode = new EJ\Barcode("Barcode");
    
    echo $barcode->symbologyType('code128c')->text('01234567')->render();
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
