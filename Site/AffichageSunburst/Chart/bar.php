
<script>

    function OndataLabel(sender) {
        sender.data.location.x = sender.data.location.x + 20;
    }


    function onchartload(sender) {
        if (!ej.util.isNullOrUndefined(window.orientation) && sender) {   	//to modify chart properties for mobile view
            var model = sender.model,
            seriesLength = model.series.length;
            model.title.enableTrim = true;
            model.elementSpacing = 5;
            model.legend.visible = false;
            model.size.height = null;
            model.size.width = null;
            for (var i = 0; i < seriesLength; i++) {
                if (!model.series[i].marker)
                    model.series[i].marker = {};
                if (!model.series[i].marker.size)
                    model.series[i].marker.size = {};
                model.series[i].marker.size.width = 6;
                model.series[i].marker.size.height = 6;
            }
            model.primaryXAxis.labelIntersectAction = "rotate45";
            if (model.primaryXAxis.title)
                model.primaryXAxis.title.text = "";
            model.primaryXAxis.edgeLabelPlacement = "hide";
            model.primaryYAxis.labelIntersectAction = "rotate45";
            if (model.primaryYAxis.title)
                model.primaryYAxis.title.text = "";
            model.primaryYAxis.edgeLabelPlacement = "hide";
            if (model.axes) {
                for (var j = 0; j < model.axes.length; j++) {
                    model.axes[j].labelIntersectAction = "rotate45";
                    if (model.axes[j].title)
                        model.axes[j].title.text = "";
                    model.axes[j].edgeLabelPlacement = "hide";
                }
            }
        }
    }

</script>
<div>

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $chart=new EJ\Chart("container");
    $xAxis = new EJ\Chart\PrimaryXAxis();
    $xRange = new EJ\Chart\Range();
    $xRange->min(2005)->max(2012)->interval(1);
    $xTitle = new EJ\Chart\Title();
    $xTitle->text("Year");
    $xAxis->range($xRange);


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("Percentage");
    $yRange->min(3)->max(12)->interval(1);
    $yAxis->labelFormat("{value}%")->range($yRange);


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $marker = new EJ\Chart\Marker();
    $size = new EJ\Chart\Size();
    $border = new EJ\Chart\Border();
    $datalabel = new EJ\Chart\DataLabel();
    $font = new EJ\Chart\Font();
    $font->size("13px")->fontFamily("Segoe UI")->fontStyle("Normal")->fontWeight("regular");
    $datalabel->font($font)->textPosition("top")->horizontalTextAlignment("near")->visible(true);

    $border->width(2);
    $tooltip->visible(true)->format("#series.name# <br/> #point.x# : #point.y#");
    $marker->dataLabel($datalabel);

    $common->type("bar")->enableAnimation(true)->tooltip($tooltip)->border($border);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false)->position('right')->alignment('near');

     $chartTitle->text("Unemployment rate (%)");

    $Json = '[  
                { "xName": 2006, "yName": 7.8,  "yName1": 4.8 },
                { "xName": 2007, "yName": 7.2,  "yName1": 4.6 },
                { "xName": 2008, "yName": 6.8,  "yName1": 7.2 },
                { "xName": 2009, "yName": 10.7, "yName1": 9.3 },
                { "xName": 2010, "yName": 10.8, "yName1": 9.7 },
                { "xName": 2011, "yName": 9.8,  "yName1": 9 }
            ]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("xName")->yName("yName")->name("India");
    $series2->dataSource($Json)->xName("xName")->yName("yName1")->name("US");

    $seriesCollection = array($series1, $series2);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->commonSeriesOptions($common)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
        ->size($chartSize)  
        ->displayTextRendering("OndataLabel")
        ->legend($chartLegend)
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
