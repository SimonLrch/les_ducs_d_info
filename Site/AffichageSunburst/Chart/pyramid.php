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
   


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $marker = new EJ\Chart\Marker();
    $chartSize = new EJ\Chart\Size();
  
    $datalabel = new EJ\Chart\DataLabel();
    $connector = new EJ\Chart\ConnectorLine();
    $font = new EJ\Chart\Font();
    $font->size("12px")->color("black")->fontWeight("lighter");
    $connector->type("bezier")->color("black");
    $datalabel->visible(true)->font($font);
    $marker->dataLabel($datalabel);                      


    $common->type("pyramid")->marker($marker)->labelPosition("inside")->enableSmartLabels(true);

    $chartTitle= new EJ\Chart\Title();
    $chartTitle->text("Web Site Visitor");
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(true)->position("bottom");
    $Json =  '[
        { "xName": "Renewed",     "yName": 18.2},
        { "xName": "Subscribe",     "yName": 27.3},
        { "xName": "Downloaded", "yName": 76.8},
        { "xName": "Visited",       "yName": 100}
    ]';


    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("xName")->yName("yName")->name("Newyork");

    $seriesCollection = array($series1);


    echo $chart->commonSeriesOptions($common)->legend($chartLegend)->isResponsive(true)->load("onchartload")->title($chartTitle)->series($seriesCollection)->size($chartSize)->render();
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
