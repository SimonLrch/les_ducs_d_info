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

 <div id="Tooltip" style="display: none;">
		<div id="icon">	
            <div id="eficon">
			</div>
	    </div>
        <div id="value">
            <div>
               <label id="efpercentage">&nbsp;#point.y#
			   </label>
               <label id="ef">Efficiency
			   </label>
            </div>
        </div>
    </div>
	 
<style class="cssStyles">
       label{	 
		text-align :center !important;
		}
        .tooltipDivcontainer {
            background-color:#E94649;        
            color: white;
			width:130px;
        }
        #Tooltip >div:first-child {
            float: left;
        }
        #Tooltip #value {
            float: right;
            height: 50px;
            width: 68px;
        }
        #Tooltip #value >div {
            margin: 5px 5px 5px 5px;            
        }
        #Tooltip #efpercentage {
            font-size: 20px;
            font-family: segoe ui;
			padding-left: 2px;
        }
         #Tooltip #ef {
            font-size: 12px;
            font-family: segoe ui;
        }
        #eficon {
            background-image: url("Content/images/chart/eficon.png");
            height: 60px;           
            width: 60px;
            background-repeat: no-repeat;
        }		 
  </style>	



<div>

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $chart=new EJ\Chart("container");
    $xAxis = new EJ\Chart\PrimaryXAxis();
    $xRange = new EJ\Chart\Range();
    $xRange->min(2005)->max(2011)->interval(1);
    $xTitle = new EJ\Chart\Title();
   $xTitle->text("Year");
    $xAxis->range($xRange)->valueType("category");


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("Efficiency");
    $yRange->min(25)->max(55)->interval(5);
    $yAxis->labelFormat("{value}%")->range($yRange);


    $common = new EJ\Chart\CommonSeriesOption();
    $tooltip = new EJ\Chart\Tooltip();
    $marker = new EJ\Chart\Marker();
    $size = new EJ\Chart\Size();
    $border = new EJ\Chart\Border();

    $border->width(2);
    $tooltip->visible(true)->template("Tooltip");
    $size->width(10)->height(10);
    $marker->shape("circle")->size($size)->visible(true);

    $common->type("line")->enableAnimation(true)->tooltip($tooltip)->marker($marker)->border($border);

    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartTitle->text("Efficiency of oil-fired power production");

    $Json = '[{ "Year": "2005", "yName": 28, "yName1": 31, "yName2": 36, "yName3": 39 }, { "Year": "2006", "yName": 25, "yName1": 28, "yName2": 32, "yName3": 36 }, { "Year": "2007", "yName": 26, "yName1": 30, "yName2": 34, "yName3": 40 }, { "Year": "2008", "yName": 27, "yName1": 36, "yName2": 41, "yName3": 44 }, { "Year": "2009", "yName": 32, "yName1": 36, "yName2": 42, "yName3": 45 }, { "Year": "2010", "yName": 35, "yName1": 39, "yName2": 42, "yName3": 49 }, { "Year": "2011", "yName": 30, "yName1": 37, "yName2": 43, "yName3": 46 }]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $series2 = new EJ\Chart\Series();
    $series3 = new EJ\Chart\Series();
    $series4 = new EJ\Chart\Series();

    $series1->dataSource($Json)->type("line")->xName("Year")->yName("yName")->name("India");
    $series2->dataSource($Json)->type("line")->xName("Year")->yName("yName1")->name("Germany");
    $series3->dataSource($Json)->type("line")->xName("Year")->yName("yName2")->name("England");
    $series4->dataSource($Json)->type("line")->xName("Year")->yName("yName3")->name("France");

    $seriesCollection = array($series1, $series2, $series3, $series4);


    echo $chart->primaryXAxis($xAxis)->primaryYAxis($yAxis)->title($chartTitle)->commonSeriesOptions($common)->isResponsive(true)->load("onchartload")->series($seriesCollection)->size($chartSize)->render();
    ?>
</div>

 
