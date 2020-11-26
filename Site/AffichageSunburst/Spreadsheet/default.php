<?php
require_once '../EJ/AutoLoad.php';
?>
<script type="text/javascript" src="Scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate.unobtrusive.min.js"></script>
<div class="cols-sample-area">

    <?php
	$Json = json_decode(file_get_contents("Data.json"), true);
    $rangeSetting1 = new EJ\Spreadsheet\RangeSetting();
    $rangeSetting1->dataSource($Json);
    $rangeSettings = array($rangeSetting1);
    $sheet1 = new EJ\Spreadsheet\Sheet();
    $sheet1->rangeSettings($rangeSettings);
    $sheets = array($sheet1);
	$importSetting = new EJ\Spreadsheet\ImportSetting();
	$importSetting->importMapper("//js.syncfusion.com/demos/ejservices/api/Spreadsheet/Import");
	$exportSetting = new EJ\Spreadsheet\ExportSetting();
	$exportSetting->excelUrl("//js.syncfusion.com/demos/ejservices/api/Spreadsheet/ExcelExport")->csvUrl("//js.syncfusion.com/demos/ejservices/api/Spreadsheet/CsvExport")->pdfUrl("//js.syncfusion.com/demos/ejservices/api/Spreadsheet/PdfExport");
    $spreadsheet =  new EJ\Spreadsheet("Spreadsheet");
    $scroll = new EJ\Spreadsheet\ScrollSetting();
    $scroll->height(500)->width(900);
	
    echo $spreadsheet ->allowFormulaBar(false)->importSettings($importSetting)->exportSettings($exportSetting)->sheets($sheets)->scrollSettings($scroll)->loadComplete("loadComplete")->render();


    ?>

</div>


<style>
    .cols-sample-area {   
        width: 940px;
        height:500px;
        line-height:0px;     
        margin:0 auto;
        float:none;
    }
</style>
<script>
    function loadComplete(args) {
        var xlFormat = this.XLFormat;
        if (!this.model.isImport) {
            this.setWidthToColumns([140, 128, 105, 100, 100, 110, 120, 120, 100]);
            xlFormat.format({ "style": { "font-weight": "bold" } }, "A1:H1");
            xlFormat.format({ "type": "currency" }, "E2:H11");
            this.XLRibbon.updateRibbonIcons();
        }
    }
</script>
