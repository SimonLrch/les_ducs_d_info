<?php
require_once '../EJ/AutoLoad.php';
?>
<div align="center">

    <?php
    $bulletGraph =new EJ\BulletGraph("bulletgraph1");
    $quantitativescale=new EJ\BulletGraph\QuantitativeScaleSetting();
    $location =new EJ\BulletGraph\QuantitativeScaleSettingsLocation();
    $location->x(110)->y(10);
    $featuremeasuresettings=new EJ\BulletGraph\FeaturedMeasureSetting();
    $featuremeasuresettings->width(6);

    $comparetivesettings=new EJ\BulletGraph\ComparativeMeasureSetting();
    $comparetivesettings->width(6);

    $featuremeasure=array();
    $featuremeasure[0]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure[0]->comparativeMeasureValue(6.7)->value(8);
    $quantitativescale->minimum(0)->maximum(10)->interval(1)->location($location)->featuredMeasureSettings($featuremeasuresettings)->comparativeMeasureSettings($comparetivesettings)->featureMeasures($featuremeasure);
    
    $captionlocation=new EJ\BulletGraph\CaptionSettingsLocation();
    $captionlocation->x(17)->y(20);
    $subtitlelocation=new EJ\BulletGraph\SubTitleLocation();
    $subtitlelocation->x(10)->y(35);
    $captions=new EJ\BulletGraph\CaptionSetting();
    $subtitle=new EJ\BulletGraph\SubTitle();
    $subtitle->textAngle(0)->text("$ in Thousands")->location($subtitlelocation);
    $captions->textAngle(0)->text("Revenue YTD")->subTitle($subtitle)->location($captionlocation);

    $qualitiverange=array();
    $qualitiverange[0]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[0]->rangeEnd(4.3);
    $qualitiverange[1]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[1]->rangeEnd(7.3);
    $qualitiverange[2]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange[2]->rangeEnd(10);

    echo $bulletGraph->quantitativeScaleSettings($quantitativescale)->qualitativeRanges($qualitiverange)->captionSettings($captions)->render();
    
    
    // second bullet graph
    $bulletGraph2 =new EJ\BulletGraph("bulletgraph2");
    $quantitativescale2=new EJ\BulletGraph\QuantitativeScaleSetting();
    $location2 =new EJ\BulletGraph\QuantitativeScaleSettingsLocation();
    $location2->x(110)->y(10);
    $featuremeasuresettings2=new EJ\BulletGraph\FeaturedMeasureSetting();
    $featuremeasuresettings2->width(6);

    $comparetivesettings2=new EJ\BulletGraph\ComparativeMeasureSetting();
    $comparetivesettings2->width(6);
    
    $majortickssettings=new EJ\BulletGraph\MajorTickSetting();
    $majortickssettings->size(13)->width(1);
    $minortickssettings=new EJ\BulletGraph\MinorTickSetting();
    $minortickssettings->size(5)->width(1);

    $featuremeasure2=array();
    $featuremeasure2[0]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure2[0]->comparativeMeasureValue(6.7)->value(8);
    $quantitativescale2->minimum(-10)->maximum(10)->interval(2)->tickPosition("far")->minorTicksPerInterval(4)->minorTickSettings($minortickssettings)->majorTickSettings($majortickssettings)->location($location2)->featuredMeasureSettings($featuremeasuresettings2)->comparativeMeasureSettings($comparetivesettings2)->featureMeasures($featuremeasure2);
    
    $captionlocation2=new EJ\BulletGraph\CaptionSettingsLocation();
    $captionlocation2->x(60)->y(25);
    $captions2=new EJ\BulletGraph\CaptionSetting();
    $captions2->textAngle(0)->text("Profit")->location($captionlocation2);

    $labelsettings=new EJ\BulletGraph\LabelSetting();
    $labelsettings->position("below")->offset(14)->labelSuffix("%");
    $quantitativescale2->labelSettings($labelsettings);

    $qualitiverange2=array();
    $qualitiverange2[0]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange2[0]->rangeEnd(-4)->rangeStroke("#61a301");
    $qualitiverange2[1]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange2[1]->rangeEnd(3)->rangeStroke("#fcda21");
    $qualitiverange2[2]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange2[2]->rangeEnd(10)->rangeStroke("#d61e3f");

    echo $bulletGraph2->quantitativeScaleSettings($quantitativescale2)->qualitativeRanges($qualitiverange2)->captionSettings($captions2)->render();

    // third bullet graph
    $bulletGraph3 =new EJ\BulletGraph("bulletgraph3");
    $quantitativescale3=new EJ\BulletGraph\QuantitativeScaleSetting();
    $location3 =new EJ\BulletGraph\QuantitativeScaleSettingsLocation();
    $location3->x(110)->y(10);
    $featuremeasuresettings3=new EJ\BulletGraph\FeaturedMeasureSetting();
    $featuremeasuresettings3->width(6);

    $comparetivesettings3=new EJ\BulletGraph\ComparativeMeasureSetting();
    $comparetivesettings3->width(6);

    $majortickssettings3=new EJ\BulletGraph\MajorTickSetting();
    $majortickssettings3->size(13)->width(1)->stroke("gray");
    $minortickssettings3=new EJ\BulletGraph\MinorTickSetting();
    $minortickssettings3->size(5)->width(1)->stroke("gray");

    $featuremeasure3=array();
    $featuremeasure3[0]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure3[0]->comparativeMeasureValue(-2)->value(-2);
    $quantitativescale3->minimum(-10)->maximum(10)->interval(2)->majorTickSettings($majortickssettings3)->minorTickSettings($minortickssettings3)->tickPosition("far")->minorTicksPerInterval(4)->location($location3)->featuredMeasureSettings($featuremeasuresettings3)->comparativeMeasureSettings($comparetivesettings3)->featureMeasures($featuremeasure3);
    
    $captionlocation3=new EJ\BulletGraph\CaptionSettingsLocation();
    $captionlocation3->x(38)->y(25);
    $captions3=new EJ\BulletGraph\CaptionSetting();
    $captions3->textAngle(0)->text("Expenses");

    $labelsettings3=new EJ\BulletGraph\LabelSetting();
    $labelsettings3->position("below")->offset(14)->size(10)->labelPrefix("$ ")->labelSuffix("%");
    $quantitativescale3->labelSettings($labelsettings3);

    $qualitiverange3=array();
    $qualitiverange3[0]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange3[0]->rangeEnd(-4.3);
    $qualitiverange3[1]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange3[1]->rangeEnd(4.3);
    $qualitiverange3[2]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange3[2]->rangeEnd(10);

    echo $bulletGraph3->quantitativeScaleSettings($quantitativescale3)->qualitativeRanges($qualitiverange3)->captionSettings($captions3)->render();
    
    //fourth bullet graph

    $bulletGraph4 =new EJ\BulletGraph("bulletgraph4");
    $quantitativescale4=new EJ\BulletGraph\QuantitativeScaleSetting();
    $location4 =new EJ\BulletGraph\QuantitativeScaleSettingsLocation();
    $location4->x(105)->y(10);
    $featuremeasuresettings4=new EJ\BulletGraph\FeaturedMeasureSetting();
    $featuremeasuresettings4->width(6);

    $comparetivesettings4=new EJ\BulletGraph\ComparativeMeasureSetting();
    $comparetivesettings4->width(6);

    $majortickssettings4=new EJ\BulletGraph\MajorTickSetting();
    $majortickssettings4->size(13)->width(1);
    $minortickssettings4=new EJ\BulletGraph\MinorTickSetting();
    $minortickssettings4->size(5)->width(1);

    $featuremeasure4=array();
    $featuremeasure4[0]=new EJ\BulletGraph\FeatureMeasure();
    $featuremeasure4[0]->comparativeMeasureValue(6.7)->value(8);
    $quantitativescale4->minimum(0)->maximum(10)->interval(1)->minorTicksPerInterval(4)->minorTickSettings($minortickssettings4)->majorTickSettings($majortickssettings4)->location($location4)->featuredMeasureSettings($featuremeasuresettings4)->comparativeMeasureSettings($comparetivesettings4)->featureMeasures($featuremeasure4);
    
    $captionlocation4=new EJ\BulletGraph\CaptionSettingsLocation();
    $captionlocation4->x(17)->y(20);
    $subtitlelocation4=new EJ\BulletGraph\SubTitleLocation();
    $subtitlelocation4->x(10)->y(35);
    $captions4=new EJ\BulletGraph\CaptionSetting();
    $subtitle4=new EJ\BulletGraph\SubTitle();
    $subtitle4->textAngle(0)->text("$ in Thousands")->location($subtitlelocation4);
    $captions4->textAngle(0)->text("Revenue YTD")->subTitle($subtitle4)->location($captionlocation4);

    $labelsettings4=new EJ\BulletGraph\LabelSetting();
    $labelsettings4->position("below")->offset(14)->size(10)->labelPrefix("$ ")->labelSuffix("%");
    $quantitativescale4->labelSettings($labelsettings4);

    $qualitiverange4=array();
    $qualitiverange4[0]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange4[0]->rangeEnd(4.3)->rangeStroke("#61a301");
    $qualitiverange4[1]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange4[1]->rangeEnd(7.3)->rangeStroke("#fcda21");
    $qualitiverange4[2]=new EJ\BulletGraph\QualitativeRange();
    $qualitiverange4[2]->rangeEnd(10)->rangeStroke("#d61e3f");

    echo $bulletGraph4->quantitativeScaleSettings($quantitativescale4)->qualitativeRanges($qualitiverange4)->captionSettings($captions4)->render();
    
    ?>

</div>