<script>

    var chartobj,
      count = 0,
      chartData = null,
      chartData1 = null,
      value = 10;
    generateData();


    function onchartload(sender) {
        chartobj = this;
        sender.model.series[0].points = chartData;
        sender.model.series[1].points = chartData1;
        window.timer = window.setInterval(update, 40);
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


    function generateData() {
        var num = 100, data = [], data1 = [];;
        for (i = 0; i < num; i++) {
            if (Math.random() > .5) {
                if (value < 45)
                    value += Math.random() * 2.0;
                else
                    value -= 2.0;
            }
            else {
                if (value > 5)
                    value -= Math.random() * 2.0;
                else
                    value += 2.0;
            }
            data[i] = {
                x: i.toString(), y: value
            };
            data1[i] = {
                x: i.toString(), y: value + 20
            };
        }
        chartData = data;
        chartData1 = data1;
    };


    function update() {
        if (Math.random() > .5) {
            if (value < 45)
                value += Math.random() * 2.0;
            else
                value -= 2.0;
        }
        else {
            if (value > 5)
                value -= Math.random() * 2.0;
            else
                value += 2.0;
        }
        chartData.push({ x: i.toString(), y: value });
        chartData1.push({ x: i.toString(), y: value + 20 });
        i++;
        chartData.shift();
        chartData1.shift();
		 if( chartobj.model){
        chartobj.model.series[0].points = chartData;
        chartobj.model.series[1].points = chartData1;
        $("#livechart").ejChart("redraw");
		}
		else
		 window.clearInterval(window.timer);
		
    };

</script>

<div>

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $chart=new EJ\Chart("livechart");
    $xAxis = new EJ\Chart\PrimaryXAxis();
    $xTitle = new EJ\Chart\Title();
    $major = new EJ\Chart\MajorGridLine();
    $major->visible(false);
    $xAxis->majorGridLines($major);


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yTitle = new EJ\Chart\Title();
    $range = new EJ\Chart\Range();
    $range->min(0)->max(50)->interval(10);
    $yAxis->range($range);


   
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);

   

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();
   
    $series1->type("line")->enableAnimation(false);
    $series2->type("line")->enableAnimation(false);
   
    $seriesCollection = array($series1,$series2);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->isResponsive(true)
        ->load("onchartload")
        ->enableCanvasRendering(true)
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
