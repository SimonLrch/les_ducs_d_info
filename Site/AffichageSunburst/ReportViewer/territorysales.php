<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <?php
         $reportviewer = new EJ\ReportViewer('territorysales_reportViewer');		
        echo $reportviewer->reportServiceUrl("//js.syncfusion.com/demos/ejServices/api/ReportViewer" )->processingMode("Remote")->reportServerUrl("//104.207.134.201/reportserver")->reportPath("/SSRSSamples2/Territory Sales new")->render();
        ?>
    </div>
    <style>
         .cols-sample-area
        {
            width: 100%;
            margin: 0 auto;
            float: none;
        }
		#territorysales_reportViewer{
			height: 550px;
			display: block;
		}
    </style>
</body>
