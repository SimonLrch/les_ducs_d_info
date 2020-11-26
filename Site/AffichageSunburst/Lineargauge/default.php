<div align="center">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $gauge=new EJ\LinearGauge("container");
    
    $scale = new EJ\LinearGauge\Scale();
    $scaleBorder = new EJ\LinearGauge\Border();
    $scaleBorder->width(0)->color("transparent");
    $position = new EJ\LinearGauge\Position();
    $position->x(52)->y(50);
    $markerPointer = new\EJ\LinearGauge\MarkerPointer();
    $markerBorder = new EJ\LinearGauge\Border();
    $markerBorder->color("#4D4D4D");
    $markerPointer->value(50)->length(10)->width(10)->distanceFromScale(8)->border($markerBorder)->backgroundColor("#4D4D4D");
    $markers = array($markerPointer);
    $barPointer = new\EJ\LinearGauge\BarPointer();
    $barPointer->value(50)->width(4)->distanceFromScale(8)->backgroundColor("#6FAAB0");
    $bars = array($barPointer);
    $tick = new EJ\LinearGauge\Tick();
    $tick->width(1)->color("#8c8c8c")->type("majorinterval");
    $ticks = array($tick);
    $label = new EJ\LinearGauge\Label();
    $labelFont = new EJ\LinearGauge\Font();
    $labelFont->size("11px")->fontFamily("Segoe UI")->fontStyle("bold");
    $labelDistance = new EJ\LinearGauge\DistanceFromScale();
    $labelDistance->x(-13);
    $label->distanceFromScale(-13);
    $range1Border = new EJ\LinearGauge\Border();
    $range1Border->color("#F6B53F");
    $range2Border = new EJ\LinearGauge\Border();
    $range2Border->color("#E94649");
    $range1 = new EJ\LinearGauge\Range();
    $range1->endValue(50)->startValue(0)->backgroundColor("#F6B53F")->border($range1Border)->startWidth(4)->endWidth(4);
    $range2 = new EJ\LinearGauge\Range();
    $range2 ->endValue(100)->startValue(50)->backgroundColor("#E94649")->border($range2Border)->startWidth(4)->endWidth(4);
    $ranges = array($range1,$range2);

    $scale
        ->width(4)
        ->showRanges(true)
        ->length(310)
        ->border($scaleBorder)
        ->position($position)
        ->markerPointers($markers)
        ->barPointers($bars)
        ->ticks($ticks)
        ->ranges($ranges);


    $sca = array($scale);

    echo $gauge
        ->readOnly(false)
        ->labelColor("#8c8c8c")
        ->isResponsive(true)
        ->scales($sca)
        ->render();
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
