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
    $xAxis = new EJ\Chart\PrimaryXAxis();
    $xTitle = new EJ\Chart\Title();
     $xTitle->text("Countries");


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("Medals");
    $yRange->min(0)->max(80)->interval(20);
    $yAxis->range($yRange);


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $marker = new EJ\Chart\Marker();
    $size = new EJ\Chart\Size();
    $border = new EJ\Chart\Border();

    $border->width(2);
    $tooltip->visible(true)->format("#point.x# : #point.y# #series.name# Medals");
    $marker->shape("circle")->size($size)->visible(true);

    $common->type("column")->enableAnimation(true)->tooltip($tooltip)->border($border);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->position("top");
     $chartTitle->text("Olympic Medals");

    $Json = '[
                { "xName": "USA",       "yName": 50, "yName1": 70, "yName2": 45 },
                { "xName": "China",     "yName": 40, "yName1": 60, "yName2": 55 },
                { "xName": "Japan",     "yName": 70, "yName1": 60, "yName2": 50 }
            ]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();
    $series3 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("xName")->yName("yName")->name("Gold");
    $series2->dataSource($Json)->xName("xName")->yName("yName1")->name("Silver");
    $series3->dataSource($Json)->xName("xName")->yName("yName2")->name("Bronze");

    $seriesCollection = array($series1, $series2, $series3);


    echo $chart->primaryXAxis($xAxis)->legend($chartLegend)->load("onchartload")->primaryYAxis($yAxis)->commonSeriesOptions($common)->isResponsive(true)->title($chartTitle)->series($seriesCollection)->size($chartSize)->render();
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
