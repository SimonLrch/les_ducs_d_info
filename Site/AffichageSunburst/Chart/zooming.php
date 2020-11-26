<script>

    function onchartload(sender) {
        var data = GetData();
        sender.model.series[0].dataSource = data.Open;
        sender.model.series[0].xName = "XValue";
        sender.model.series[0].yName = "YValue";

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

    function GetData() {
        var series1 = [];
        var value = 100;
        for (var i = 1; i < 250; i++) {
            if (Math.random() > .5) {
                value += Math.random();
            } else {
                value -= Math.random();
            }
            var point = { XValue: new Date(1970, i + 2, i), YValue: value };
            series1.push(point);
        }
        var data = { Open: series1 };
        return data;
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
    $xTitle->text("Date");
    $xAxis->valueType("datetime")->labelFormat("yyyy");


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("CPU Load");
    $yAxis->labelFormat("{value}%")->title($yTitle);


    $zooming = new EJ\Chart\Zooming();
    $zooming->enable(true)->type('x,y')->enableMouseWheel(true);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);

     $chartTitle->text("Server CPU Load");

   

    $series1 = new EJ\Chart\Series();
   
    $series1->name("Server")->type("line")->enableAnimation(true);
   
    $seriesCollection = array($series1);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->isResponsive(true)
        ->zooming($zooming)
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
