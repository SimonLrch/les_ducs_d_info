
<script>
    var dataSource = GetData(),
        zoomPosition,zoomFactor;
    function onchartloaded(sender) {
        var chartobj = $("#chart1").data("ejChart");
        zoomPosition = sender.zoomPosition;
        zoomFactor = sender.zoomFactor;
        if (chartobj != null) {
            chartobj.model.primaryXAxis.zoomPosition = zoomPosition;
            chartobj.model.primaryXAxis.zoomFactor = zoomFactor;
            $("#chart1").ejChart("redraw");
        }
    }
    function onrangeload(sender) {
        sender.model.dataSource = dataSource.Open;
        sender.model.xName = "XValue";
        sender.model.yName = "YValue";
        sender.model.series = [{ fill: "#69D2E7" }];
    }
    function onchartload(sender) {
        sender.model.series[0].dataSource = dataSource.Open;
        sender.model.series[0].xName = "XValue";
        sender.model.series[0].yName = "YValue";
        sender.model.series[1].dataSource = dataSource.Close;
        sender.model.series[1].xName = "XValue";
        sender.model.series[1].yName = "YValue";
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
    function chartloaded(chartobj) {
        chartobj.model.primaryXAxis.zoomPosition = zoomPosition;
        chartobj.model.primaryXAxis.zoomFactor = zoomFactor;
        $("#chart1").ejChart("redraw");
    }
    function GetData() {
        var series1 = [];
        var series2 = [];
        var value = 100;
        var value1 = 120;
        for (var i = 1; i < 730; i++) {

            if (Math.random() > .5) {
                value += Math.random();
                value1 += Math.random();
            } else {
                value -= Math.random();
                value1 -= Math.random();
            }
            value = Math.round(value);
            value1 = Math.round(value1);
            var point1 = { XValue: new Date(2010, 0, i), YValue: value };
            var point2 = { XValue: new Date(2010, 0, i), YValue: value1 };
            series1.push(point1);
            series2.push(point2);
        }
 
        return { Open: series1, Close: series2 };
    }
</script>
<div align="center">
    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    
    $rangenavigator=new EJ\RangeNavigator("range");

    $selectedRangeSettings=new EJ\RangeNavigator\SelectedRangeSetting();
    $selectedRangeSettings->start("2010/5/1")->end("2011/10/1"); 

    $tooltip=new EJ\RangeNavigator\TooltipSetting();
    $tooltip->tooltipDisplayMode("ondemand")->visible(true);

    //->load("onchartload")->xName("XValue")->yName("YValue")
    echo $rangenavigator->load("onrangeload")->isResponsive(true)->rangeChanged("onchartloaded")->valueType("datetime")->selectedRangeSettings($selectedRangeSettings)->tooltipSettings($tooltip)->render();
    
    
    $chart=new EJ\Chart("chart1");

    $series=new EJ\Chart\Series();
    $seriesarray=array();
    $seriesarray[0]=$series->type("line")->name("Product X");
    $seriesarray[1]=$series->type("line")->name("Product Y");

    $crosshair=new EJ\Chart\Crosshair();
	$line = new EJ\Chart\Line();
	$line->color("transparent");
    $crosshair->visible(true)->type("trackball")->line($line);
	
	
	 

    $xaxis=new EJ\Chart\PrimaryXAxis();
    $majorgrid=new EJ\Chart\MajorGridLine();
    $majorgrid->visible(false);
    $xaxis->valueType("datetime")->labelFormat("MMM dd")->majorGridLines($majorgrid);

    $yaxis=new EJ\Chart\PrimaryYAxis();
    $yaxis->labelFormat("\${value}");

    echo $chart->isResponsive(true)->series($seriesarray)->load("onchartload")->crosshair($crosshair)->primaryXAxis($xaxis)->primaryYAxis($yaxis)->create("chartloaded")->render();

    ?>
</div>
<style>
    .cols-sample-area
    {
        width: 800px;
        margin: 0 auto;
        float: none;
    }
</style>