<script>


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
    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yRange->min(15)->max(90)->interval(15);
    $yAxis->range($yRange);


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $tooltip->visible(true);
    $common->type("polar")->enableAnimation(true)->tooltip($tooltip);

  
    $chartSize = new EJ\Chart\Size();
    $chartTitle = new\EJ\Chart\Title();
     $chartTitle->text("Unemployment rate (%)");
   

    $Json = '[
        { "xName": "N",       "yName": 42, "yName1": 63, "yName2": 80 },
        { "xName": "NE",   "yName": 28, "yName1": 73, "yName2": 88 },
        { "xName": "E",        "yName": 40, "yName1": 58, "yName2": 79 },
        { "xName": "SE",   "yName": 45, "yName1": 65, "yName2": 83 },
        { "xName": "S",       "yName": 20, "yName1": 47, "yName2": 78 },
        { "xName": "SW",   "yName": 40, "yName1": 70, "yName2": 90 },
        { "xName": "W",        "yName": 25, "yName1": 45, "yName2": 78 },
        { "xName": "NW",   "yName": 40, "yName1": 70, "yName2": 85 }]';

    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();
    $series3 = new EJ\Chart\Series();

    $marker = new EJ\Chart\Marker();
    $marker->visible(true);

    $series1->dataSource($Json)->xName("xName")->yName("yName")->name("Line")->marker($marker)->zOrder(2);
    $series2->dataSource($Json)->xName("xName")->drawType("column")->yName("yName1")->name("Column")->zOrder(1);
    $series3->dataSource($Json)->xName("xName")->drawType("Area")->yName("yName2")->name("Area")->marker($marker)->zOrder(0);



    $seriesCollection = array($series3, $series2, $series1);


    echo $chart->primaryYAxis($yAxis)
        ->commonSeriesOptions($common)
        ->isResponsive(true)
    ->load("onchartload")
        ->series($seriesCollection)
        ->size($chartSize)
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
