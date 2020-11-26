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
    $xRange = new EJ\Chart\Range();
    $xRange->min(60)->max(100)->interval(5);
    $xTitle = new EJ\Chart\Title();
     $xTitle->text("Literacy Rate");
     $xAxis->range($xRange);


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("GDP Growth Rate");
    $yRange->min(-2)->max(16)->interval(2);
    $yAxis->range($yRange);


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
   
    $tooltip->visible(true)->format("#point.text#<br/>Literacy Rate : #point.x#%<br/>GDP Annual Growth Rate : #point.y#<br/>Population : #point.size# Billion");
    $datalabel = new EJ\Chart\DataLabel();
    $datalabel->textMappingName("text");
    $marker = new EJ\Chart\Marker();
    $marker->dataLabel($datalabel);

    $common->opacity(0.7)->type("bubble")->enableAnimation(true)->tooltip($tooltip);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);

    $chartTitle->text("World Countries Details");


    $Json = '[  
                { "x": 92.2, "y": 7.8,  "size": 1.347,  "fill": "#E94649", "text":"China" }, 
                { "x": 74,   "y": 6.5,  "size": 1.241,  "fill": "#F6B53F", "text":"India" }, 
                { "x": 90.4, "y": 6.0,  "size": 0.238,  "fill": "#6FAAB0", "text":"Indonesia" }, 
                { "x": 99.4, "y": 2.2,  "size": 0.312,  "fill": "#C4C24A", "text":"US" }, 
                { "x": 88.6, "y": 1.3,  "size": 0.197,  "fill": "#FB954F", "text":"Brazil" },
                { "x": 54.9, "y": 3.7,  "size": 0.177,  "fill": "#D9CEB2", "text":"Pakistan" },
                { "x": 99,   "y": 0.7,  "size": 0.0818, "fill": "#FF8D8D", "text":"Germany" }, 
                { "x": 72,   "y": 2.0,  "size": 0.0826, "fill": "#69D2E7", "text":"Egypt" }, 
                { "x": 99.6, "y": 3.4,  "size": 0.143,  "fill": "#E27F2D", "text":"Russia" },
                { "x": 99,   "y": 0.2,  "size": 0.128,  "fill": "#6A4B82", "text":"Japan" }, 
                { "x": 86.1, "y": 4.0,  "size": 0.115,  "fill": "#F6B53F", "text":"Mexico" },
                { "x": 92.6, "y": 6.6,  "size": 0.096,  "fill": "#C4C24A", "text":"Philippines" },
                { "x": 61.3, "y": 14.5, "size": 0.162,  "fill": "#FF8D8D", "text":"Nigeria" }, 
                { "x": 56.8, "y": 6.1,  "size": 0.151,  "fill": "#69D2E7", "text":"Bangladesh" }
            ]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();


    $series1->dataSource($Json)->marker($marker)->pointColorMappingName("fill")->xName("x")->yName("y")->size("size")->name("Pound");

    $seriesCollection = array($series1);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->commonSeriesOptions($common)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
        ->size($chartSize)
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
