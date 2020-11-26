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

<div id="Tooltip" style="display: none;  width:110px;padding-top: 10px;padding-bottom:10px">
		<div align="center" style="font-weight:bold">
            #point.x#
        </div>  
        <table>
            <tr>
                <td>
                   Open:
                </td>
                <td>
                    $#point.open#
                </td>               
            </tr>
            <tr>
                <td>
                    High:
                </td>
                <td>
                    $#point.high#
                </td>               
            </tr>
            <tr>
                <td>
                    Low:
                </td>
                <td >
                    $#point.low#
                </td>               
            </tr>
            <tr>
                <td>
                    Close:
                </td>
                <td>
                    $#point.close#
                </td>               
            </tr>             
        </table>        
    </div>    

<div>

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <?php
    $chart=new EJ\Chart("container");
    $xAxis = new EJ\Chart\PrimaryXAxis();
    $xTitle = new EJ\Chart\Title();
    $xRange = new EJ\Chart\Range();
     $xTitle->text("Date");
     $xAxis->intervalType("Years")->range($xRange)->valueType("datetime");


    $yAxis = new EJ\Chart\PrimaryYAxis();
    $yRange = new EJ\Chart\Range();
    $yTitle = new EJ\Chart\Title();
    $yTitle->text("Price in Dollars");
    $yRange->min(0)->max(250)->interval(50);
    $yAxis->labelFormat('${value}')->range($yRange);



    $chartTitle= new EJ\Chart\Title();
    $chartSize = new EJ\Chart\Size();
    $chartLegend = new EJ\Chart\Legend();
    $chartLegend->visible(false);

     $chartTitle->text("Foreign Exchange Rate Analysiss");

    $Json = '[
{ "xName": "1950/01/12", "high": 125, "low": 70,  "open": 115, "close": 90 },
{ "xName": "1953/01/12", "high": 150, "low": 60,  "open": 120, "close": 70 },
{ "xName": "1956/01/12", "high": 200, "low": 140, "open": 160, "close": 190 },
{ "xName": "1959/01/12", "high": 160, "low": 90,  "open": 140, "close": 110 },
{ "xName": "1962/01/12", "high": 200, "low": 100, "open": 180, "close": 120 },
{ "xName": "1965/01/12", "high": 100, "low": 45,  "open": 70,  "close": 50 },
{ "xName": "1968/01/12", "high": 150, "low": 70,  "open": 140, "close": 130 },
{ "xName": "1971/01/12", "high": 90,  "low": 60,  "open": 65,  "close": 80 },
{ "xName": "1974/01/12", "high": 225, "low": 170, "open": 175, "close": 220 },
{ "xName": "1977/01/12", "high": 250, "low": 180, "open": 223, "close": 190 },
{ "xName": "1980/01/12", "high": 200, "low": 140, "open": 160, "close": 190 },
{ "xName": "1983/01/12", "high": 160, "low": 90,  "open": 140, "close": 110 },
{ "xName": "1986/01/12", "high": 200, "low": 100, "open": 180, "close": 120 },
{ "xName": "1989/01/01",  "high": 130, "low": 95,  "open": 120, "close": 100 },
{ "xName": "1991/01/12", "high": 100, "low": 70,  "open": 92,  "close": 75 },
{ "xName": "1994/01/12", "high": 50,  "low": 85,  "open": 65,  "close": 80 },
{ "xName": "1997/01/12", "high": 185, "low": 110, "open": 130, "close": 170 },
{ "xName": "2000/01/12", "high": 90,  "low": 30,  "open": 80,  "close": 50 },
{ "xName": "2003/01/12", "high": 200, "low": 140, "open": 160, "close": 190 },
{ "xName": "2006/01/12", "high": 170, "low": 90,  "open": 140, "close": 110 },
{ "xName": "2008/01/12", "high": 200, "low": 100, "open": 180, "close": 120 }
]';
    $Json = json_decode($Json,true);

    $series1 = new EJ\Chart\Series();
    $tooltip =new EJ\Chart\Tooltip();

    $tooltip->visible(true)->template("Tooltip");

    $series1->dataSource($Json)->tooltip($tooltip)->xName("xName")->high("high")->low("low")->open("open")->close("close")->type("candle");

    $seriesCollection = array($series1);


    echo $chart->primaryXAxis($xAxis)
        ->primaryYAxis($yAxis)
        ->isResponsive(true)
        ->load("onchartload")
        ->title($chartTitle)
        ->series($seriesCollection)
        ->size($chartSize)
        ->legend($chartLegend)
        ->render();
    ?>
</div>

<style class="cssStyles">          
	.tooltipDivcontainer table, table th, table tr , table td
	{
        border:0px none;
        margin: 0 auto;           
    }  		
	.tooltipDivcontainer 
	{
        border:2px transparent;
        color:white;
    }
	#Tooltip td
	{
		color:white;
	}

    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
