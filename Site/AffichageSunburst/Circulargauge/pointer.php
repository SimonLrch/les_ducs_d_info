<?php
require_once '../EJ/AutoLoad.php';
?>
<div align="center">

    <?php
    $circular = new EJ\CircularGauge("circulargauge");
    $scale1 = new EJ\CircularGauge\Scale();
    
    $crange1=new EJ\CircularGauge\Range();   
    $cborder0=new EJ\CircularGauge\Border();
    $cborder0->color("#bc4b4b")->width(2);
    $crange1 -> distanceFromScale(-73)->startValue(0)->size(40)->endValue(80)->backgroundColor("#bc4b4b")->border($cborder0);
    $crange2=new EJ\CircularGauge\Range();
    $cborder1=new EJ\CircularGauge\Border();
    $cborder1->color("#21a56f")->width(2);
    $crange2 -> distanceFromScale(-132)->startValue(0)->size(40)->endValue(70)->backgroundColor("#21a56f")->border($cborder1);
    $crange3=new EJ\CircularGauge\Range();
    $cborder2=new EJ\CircularGauge\Border();
    $cborder2->color("#2bafbc")->width(2);
    $crange3 -> distanceFromScale(-190)->startValue(0)->size(40)->endValue(90)->backgroundColor("#2bafbc")->border($cborder2);
    $cranges = array($crange1, $crange2, $crange3);    

    $label1 = new EJ\CircularGauge\CustomLabel();
    $position1 = new EJ\CircularGauge\Position();
    $position1->x(350)->y(280);
    $font1 = new EJ\CircularGauge\Font();
    $font1->fontFamily("Segoe UI")->size("24px")->fontStyle("Bold");
    $label1->color("#333333")->value("Sports")->position($position1)->font($font1);

    $label2 = new EJ\CircularGauge\CustomLabel();
    $position2 = new EJ\CircularGauge\Position();
    $position2->x(350)->y(310);
    $font2 = new EJ\CircularGauge\Font();
    $font2->fontFamily("Segoe UI")->size("18px")->fontStyle("Bold");
    $label2->color("#333333")->value("Fan Ratio")->position($position2)->font($font2);

    $label3 = new EJ\CircularGauge\CustomLabel();
    $position3 = new EJ\CircularGauge\Position();
    $position3->x(350)->y(330);
    $font3 = new EJ\CircularGauge\Font();
    $font3->fontFamily("Segoe UI")->size("12px")->fontStyle("Bold");
    $label3->color("#333333")->value("(in million)")->position($position3)->font($font3);

    $customLabels = array($label1, $label2, $label3);
    
    $pointer1 = new EJ\CircularGauge\Pointer();    

    
    $pborder1=new EJ\CircularGauge\Border();
    $pborder1->color("transparent")->width(0);
    $pointer1 -> type("marker")->length(43)->width(43)->placement("far")->distanceFromScale(15)->value(80)->markerType("image")->backgroundColor("transparent")->border($pborder1)->imageUrl("Content/images/gauge/golfball.png");
    $pointer2 = new EJ\CircularGauge\Pointer();   
    $pointer2 -> type("marker")->length(43)->width(43)->placement("far")->distanceFromScale(74)->value(70)->markerType("image")->backgroundColor("transparent")->border($pborder1)->imageUrl("Content/images/gauge/basketball.png");
    $pointer3 = new EJ\CircularGauge\Pointer();   
    $pointer3 -> type("marker")->length(43)->width(43)->placement("far")->distanceFromScale(131)->value(90)->markerType("image")->backgroundColor("transparent")->border($pborder1)->imageUrl("Content/images/gauge/football.png");
    $pointers = array($pointer1, $pointer2, $pointer3);
    $label =  new EJ\CircularGauge\Label();
    $label->color("transparent");
    $labels = array($label); 

    $indicator = new EJ\CircularGauge\Indicator();
    
    $srange = new EJ\CircularGauge\StateRange();
    $font = new EJ\CircularGauge\Font();
    $font->size("12px");
    $srange->startValue(0)->endValue(100)->textColor("8c8c8c")->font($font);
    $sranges = array($srange);
    $indicator->height(10)->width(10)->type("text")->stateRanges($sranges);
    
    $indicators = array($indicator, $indicator, $indicator);
	$sborder= new EJ\CircularGauge\Border();
	$sborder->width(0.001);
    
    $scale1 -> startAngle(120)->customLabels($customLabels)->border($sborder)->sweepAngle(300)->size(1)->indicators($indicators)->labels($labels)->radius(80)->showIndicators(true)->showRanges(true)->showTicks(false)->showScaleBar(false)->pointers($pointers)->ranges($cranges)->size(1)->maximum(100)->minimum(0)->majorIntervalValue(10)->minorIntervalValue(10);
	$scale = array($scale1);
    echo $circular->isResponsive(true)->drawLabels("drawLabels")->drawPointers("drawpointers")->enableAnimation(false)->backgroundColor("#e0e0e0")->scales($scale)->width(700)->height(600)->radius(85)->render();
    ?>
 </div>
<script>

    function drawLabels(args) {
        if (args.pointerValue != 100 && args.pointerValue != 0)
            args.style.textValue = "";
    }
    function drawpointers(args) {
        var i = args.pointer.index;
        args.model.scales[0].indicators[i].stateRanges[0].text = args.pointer.pointerValue.toString();
        args.model.scales[0].indicators[i].position.x = args.position.startX + 20;
        args.model.scales[0].indicators[i].position.y = args.position.startY + 50;
    }
</script>