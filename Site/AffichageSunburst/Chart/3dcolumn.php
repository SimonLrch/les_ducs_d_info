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
    $grid = new EJ\Chart\MajorGridLine();
    $grid->visible(true)->opacity(0.12)->color("#a9a9a9");
     $xTitle->text("Minerals");
    $xAxis->valueType("category")->labelFormat('MMM')->majorGridLines($grid);


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yAxis->majorGridLines($grid);
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->position("top");

    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $tooltip->visible(true)->format("#series.name#<br/>#point.x# : #point.y#mg");
  
    $common->type("column")->enableAnimation(true)->tooltip($tooltip);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
  
     $chartTitle->text("Fruit Nutrients");

    $Json = '[  
                { "xName": "Calcium", "yName": 11,  "yName1": 6 },
                { "xName": "Iron", "yName": 20,  "yName1": 26 },
                { "xName": "Sodium", "yName": 8,  "yName1": 7 }
            ]';


    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("xName")->yName("yName")->name("Apple");
    $series2->dataSource($Json)->xName("xName")->yName("yName1")->name("Banana");

    $seriesCollection = array($series1, $series2);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->commonSeriesOptions($common)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
        ->legend($chartLegend)
        ->enable3D(true)
        ->enableRotation(true)			
        ->depth(100)
        ->wallSize(2)
        ->tilt(0)
        ->rotation(34)
        ->perspectiveAngle(90)
        ->sideBySideSeriesPlacement(true)
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
