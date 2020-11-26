<?php
require_once '../EJ/AutoLoad.php';
?>
<div align="center">

    <?php

    $bulletGraph =new EJ\BulletGraph("bulletgraph1");
    $quantitativescale=new EJ\BulletGraph\QuantitativeScaleSetting();
    $location =new EJ\BulletGraph\QuantitativeScaleSettingsLocation();
    $location->x(110)->y(25);
    $featuremeasuresettings=new EJ\BulletGraph\FeaturedMeasureSetting();
    $featuremeasuresettings->width(6);

    $comparetivesettings=new EJ\BulletGraph\ComparativeMeasureSetting();
    $comparetivesettings->width(6);

    $featuremeasure=array();
    $featuremeasure[0]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[0]->comparativeMeasureValue(7.5)->value(9.5)->category("2001");
    $featuremeasure[1]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[1]->comparativeMeasureValue(5)->value(9.5)->category("2002");
    $featuremeasure[2]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[2]->comparativeMeasureValue(6)->value(9.5)->category("2003");
    $featuremeasure[3]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[3]->comparativeMeasureValue(8)->value(9.5)->category("2004");
    $featuremeasure[4]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[4]->comparativeMeasureValue(5)->value(9.5)->category("2005");
    $featuremeasure[5]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[5]->comparativeMeasureValue(6)->value(9.5)->category("2006");
    $quantitativescale->minimum(0)->maximum(10)->interval(1)->location($location)->featuredMeasureSettings($featuremeasuresettings)->comparativeMeasureSettings($comparetivesettings)->featureMeasures($featuremeasure);
    
    $captionlocation=new EJ\BulletGraph\CaptionSettingsLocation();
    $captionlocation->x(40)->y(210);
    $subtitlelocation=new EJ\BulletGraph\SubTitleLocation();
    $subtitlelocation->x(55)->y(210);
    $captions=new EJ\BulletGraph\CaptionSetting();
    $subtitle=new EJ\BulletGraph\SubTitle();
    $subtitle->textAngle(-90)->text("$ in Thousands")->location($subtitlelocation);
    $captions->textAngle(-90)->text("Revenue YTD")->subTitle($subtitle)->location($captionlocation);

    $qualitiverange=array();
    $qualitiverange[0]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[0]->rangeEnd(4.3);
    $qualitiverange[1]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[1]->rangeEnd(7.3);
    $qualitiverange[2]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[2]->rangeEnd(10);

    echo $bulletGraph->height(400)->qualitativeRangeSize(320)->quantitativeScaleSettings($quantitativescale)->qualitativeRanges($qualitiverange)->captionSettings($captions)->render();
    
    
    ?>

</div>