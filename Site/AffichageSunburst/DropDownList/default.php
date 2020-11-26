<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $dropdownlist =new EJ\DropDownList("selectCar");
    echo $dropdownlist->targetID("carsList")->width("100%")->watermarkText("Select a car")->render();
    ?>

    <div id="carsList">
        <ul>
            <li>Audi A4</li>
            <li>Audi A5</li>
            <li>Audi A6</li>
            <li>Audi A7</li>
            <li>Audi A8</li>
        </ul>
    </div>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>