<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <?php
        $reportviewer = new EJ\ReportViewer('areachart_reportViewer');
        echo $reportviewer->reportServiceUrl("//js.syncfusion.com/demos/ejServices/api/ReportViewer" )->processingMode("Local")->reportPath("AreaCharts.rdlc")->reportLoaded("onReportLoaded")->render();
        ?>
    </div>
    <style>
         .cols-sample-area
        {
            width: 100%;
            margin: 0 auto;
            float: none;
        }
		#areachart_reportViewer{
			height: 550px;
			display: block;
		}
    </style>
	<script>


    function onReportLoaded(sender) {
        var reportObj = $('#areachart_reportViewer').data("ejReportViewer");	
        reportObj.model.dataSources = [{
				value: [
					{ SalesPersonID: 281, FullName: 'Ito', Title: 'Sales Representative', SalesTerritory: 'South West', Y2002: 0, Y2003: 28000, Y2004: 3018725 },
					{ SalesPersonID: 282, FullName: 'Saraiva', Title: 'Sales Representative', SalesTerritory: 'Canada', Y2002: 25000, Y2003: 14000, Y2004: 3189356 },
					{ SalesPersonID: 283, FullName: 'Cambell', Title: 'Sales Representative', SalesTerritory: 'North West', Y2002: 12000, Y2003: 13000, Y2004: 1930885 },
					{ SalesPersonID: 275, FullName: 'Blythe', Title: 'Sales Representative', SalesTerritory: 'North East', Y2002: 19000, Y2003: 47000, Y2004: 4557045 },
					{ SalesPersonID: 276, FullName: 'Mitchell', Title: 'Sales Representative', SalesTerritory: 'South West', Y2002: 28000, Y2003: 46000, Y2004: 5240075 },
					{ SalesPersonID: 277, FullName: 'Carson', Title: 'Sales Representative', SalesTerritory: 'Central', Y2002: 33000, Y2003: 49000, Y2004: 3857163 },
					{ SalesPersonID: 278, FullName: 'Vargas', Title: 'Sales Representative', SalesTerritory: 'Canada', Y2002: 11000, Y2003: 14000, Y2004: 1764938 },
					{ SalesPersonID: 279, FullName: 'Reiter', Title: 'Sales Representative', SalesTerritory: 'South East', Y2002: 32000, Y2003: 26000, Y2004: 2811012 }
						],
				name: "AdventureWorksXMLDataSet"
				}];
    }

	</script>
</body>
