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
    $datalabel=new EJ\Chart\DataLabel();
    $connector = new EJ\Chart\ConnectorLine();
    $connector->height(70)->color('black');
    $datalabel->shape('none')->visible(true)->connectorLine($connector)->textMappingName("x")->textPosition('top'); 
    $tooltip->visible(true)->format("#point.x# : #point.y#%");
    $marker->datalabel($datalabel);

    $common->labelPosition("outside")->type("pie")->explode(false)->explodeIndex(0)->tooltip($tooltip);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);

     $chartTitle->text("Expenditure shares on a child");

    $Json = '[  
                { "x": "Housing",         "y": 31 }, 
			    { "x": "Food",            "y": 16 }, 
			    { "x": "Transportation",  "y": 14 }, 
			    { "x": "Clothing",        "y": 6 }, 
			    { "x": "Health care",     "y": 8 }, 
			    { "x": "Education",       "y": 17 }, 
			    { "x": "Miscellaneous",   "y": 8 }
            ]';


    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();

    $series1->dataSource($Json)->xName("x")->yName("y");

    $seriesCollection = array($series1);

    $legend = new EJ\Chart\Legend();
    $legend->visible(false);
    echo $chart
        ->commonSeriesOptions($common)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
        ->size($chartSize)
        ->depth(30)
        ->enable3D(true)
        ->enableRotation(true)			
        ->rotation(-30)
        ->wallSize(2)
        ->legend($legend)
        ->tilt(-30)
        ->rotation(-30)
        ->perspectiveAngle(90)
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
