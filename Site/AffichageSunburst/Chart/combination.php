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
     $xTitle->text("Month");


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("Unit Sold");


    


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $marker = new EJ\Chart\Marker();
    $size = new EJ\Chart\Size();
    $size->width(8)->height(8); 
    
    
    $tooltip->visible(true)->format("#point.x# <br/> Unit Sold : #point.y# <br/>");
    $marker->shape('circle')->size($size)->visible(true);

    $common->enableAnimation(true)->tooltip($tooltip);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $itemStyle= new EJ\Chart\ItemStyle();
    $itemStyle->width(15)->height(15);
    $lfont = new EJ\Chart\Font();
    $lfont->size("15px");
    $chartLegend->shape("seriesType")->itemStyle($itemStyle)->font($lfont);

     $chartTitle->text("Sales Report");
    $border = new EJ\Chart\Border();
    $border->width(2);
    $Json = '[  
                { "xName": "Jan",     "yName": 45,  "yName1": 10 },
                { "xName": "Feb",     "yName": 100, "yName1": 30 },
                { "xName": "March",   "yName": 25,  "yName1": 10 },
                { "xName": "April",   "yName": 100, "yName1": 70 },
                { "xName": "May",     "yName": 85,  "yName1": 50 },
                { "xName": "June",    "yName": 140, "yName1": 140 }
            ]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();

    $series1->dataSource($Json)->fill("#69D2E7")->type("column")->xName("xName")->yName("yName")->name("Unit Sold");
    $series2->dataSource($Json)->fill("")->type("line")->xName("xName")->yName("yName1")->name("Total Transaction")->marker($marker);

    $seriesCollection = array($series1, $series2);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->commonSeriesOptions($common)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
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
