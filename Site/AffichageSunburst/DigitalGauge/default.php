<div align="center">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $gauge=new EJ\DigitalGauge("container");
    
    $segment = new EJ\DigitalGauge\SegmentSetting();
    $segment->width(1)->spacing(0)->color("#8c8c8c");
    $character = new EJ\DigitalGauge\CharacterSetting();
    $character->opacity(0.8);
    $position = new EJ\DigitalGauge\Position();
    $position->x(52)->y(52);
    $item1 = new EJ\DigitalGauge\Item();
    $item1->value("Syncfusion");
    $items = array($item1);

    echo $gauge->items($items)->width(525)->isResponsive(true)->height(305)->render();
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
