<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <?php
        $reportviewer = new EJ\ReportViewer('groupingaggregate_reportViewer');		
        echo $reportviewer->reportServiceUrl("//js.syncfusion.com/demos/ejServices/api/ReportViewer" )->processingMode("Remote")->reportPath("GroupingAgg.rdl")->render();
        ?>
    </div>
    <style>
         .cols-sample-area
        {
            width: 100%;
            margin: 0 auto;
            float: none;
        }
		#groupingaggregate_reportViewer{
			height: 550px;
			display: block;
		}
    </style>
</body>
