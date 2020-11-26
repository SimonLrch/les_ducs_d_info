<?php
require_once '../EJ/AutoLoad.php';
?>
<div align="center">

    <?php
    $circular = new EJ\CircularGauge("circulargauge");
    $scale1 = new EJ\CircularGauge\Scale();
    $crange1=new EJ\CircularGauge\Range();   
    $crange1 -> distanceFromScale(-30)->startValue(0)->endValue(70);
    $crange2=new EJ\CircularGauge\Range();
    $cborder1=new EJ\CircularGauge\Border();
    $cborder1->color("#fc0606");
    $crange2 -> distanceFromScale(-30)->startValue(70)->endValue(110)->backgroundColor("#fc0606")->border($cborder1);
    $crange3=new EJ\CircularGauge\Range();
    $cborder2=new EJ\CircularGauge\Border();
    $cborder2->color("#f5b43f");
    $crange3 -> distanceFromScale(-30)->startValue(110)->endValue(120)->backgroundColor("#f5b43f")->border($cborder2);
    $cranges = array($crange1, $crange2, $crange3);
    
	$tick1 = new EJ\CircularGauge\Tick();

      
    $tick1->type("major")->distanceFromScale(2)->height(16)->width(1)->color("#8c8c8c");
    $tick2 = new EJ\CircularGauge\Tick();
    $tick2->type("major")->distanceFromScale(2)->height(8)->width(1)->color("#8c8c8c");

    $ticks = array($tick1, $tick2);
    $pointer = new EJ\CircularGauge\Pointer();
    $cap = new EJ\CircularGauge\PointerCap();
    $cap->radius(12);
    $pointer -> value(60)->showBackNeedle(true)->width(7)->backNeedleLength(20)->length(95);
    $pointers = array($pointer);
    $label =  new EJ\CircularGauge\Label();
    $label->color("#8c8c8c");
    $labels = array($label);

    
    $scale1 -> startAngle(122)->ticks($ticks)->sweepAngle(296)->labels($labels)->radius(130)->showRanges(true)->pointers($pointers)->ranges($cranges)->showScaleBar(true)->size(1)->maximum(120)->majorIntervalValue(20)->minorIntervalValue(10);
	$scale = array($scale1);
    echo $circular->isResponsive(true)->backgroundColor("transparent")->scales($scale)->render();
    ?>
 </div>