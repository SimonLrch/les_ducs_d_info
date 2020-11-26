
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
    $size = new EJ\Chart\Size();
    $border = new EJ\Chart\Border();

    $border->width(2)->color("white");
    $datalabel = new EJ\Chart\DataLabel();
    $connector = new EJ\Chart\ConnectorLine();
    $font = new EJ\Chart\Font();
    $font->size("20px")->color("white");
    $connector->type("bezier")->color("black");
    $datalabel->visible(true)->shape("none")->textPosition("inside")->textMappingName("text")->connectorLine($connector)->font($font);
    $marker->dataLabel($datalabel);
        
                                            


    $common->type("pie")->enableAnimation(true)->marker($marker)->border($border)->enableSmartLabels(true);

    $chartTitle= new EJ\Chart\Title();
     $chartTitle->text("Expenditures");
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);


    $Json =  '[
        { "xName": "Walmart","yName": 13, "text": "13%"},
        { "xName": "Apple",  "yName": 25, "text": "25%"},
        { "xName": "Best Buy","yName": 12, "text": "12%"},
        { "xName": "Target","yName": 7,  "text": "7%" },
        { "xName": "Amazon","yName": 10, "text": "10%"},
        { "xName": "Wenger","yName": 13, "text": "13%"},
        { "xName": "Others","yName": 20, "text": "20%"}
    ]';


    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("xName")->yName("yName")->labelPosition("inside")->name("Expenses");

    $seriesCollection = array($series1);


    echo $chart->commonSeriesOptions($common)->legend($chartLegend)->isResponsive(true)->load("onchartload")->title($chartTitle)->series($seriesCollection)->render();
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
