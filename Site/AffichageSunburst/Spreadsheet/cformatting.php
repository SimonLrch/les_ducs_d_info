<?php
require_once '../EJ/AutoLoad.php';
?>
<script type="text/javascript" src="Scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate.unobtrusive.min.js"></script>
<div class="cols-sample-area">

    <?php
	
    $Json = json_decode(file_get_contents("CFData.json"), true);
    $rangeSetting1 = new EJ\Spreadsheet\RangeSetting();
    $rangeSetting1->dataSource($Json)->showHeader(false);
    $rangeSettings = array($rangeSetting1);
    $sheet1 = new EJ\Spreadsheet\Sheet();
    $sheet1->rangeSettings($rangeSettings);
    $sheets = array($sheet1);
    $spreadsheet =  new EJ\Spreadsheet("Spreadsheet");
    $scroll = new EJ\Spreadsheet\ScrollSetting();
    $scroll->height(500)->width(900);
	
    echo $spreadsheet ->allowFormulaBar(false)->enableContextMenu(false)->showRibbon(false)->sheets($sheets)->scrollSettings($scroll)->loadComplete("loadComplete")->render();


    ?>

</div>

<style>
    .cols-sample-area {   
        width: 940px;
        height:500px;     
        margin:0 auto;
        float:none;
    }
</style>
<script>
    function loadComplete(args) {
        var xlFormat = this.XLFormat, xlCFormat = this.XLCFormat;
        this.sheetRename("Conditional Formatting");
        this.setWidthToColumns([165, 130, 37, 165, 130, 37, 129, 132]);
        this.mergeCells("A1:A5", true);
        this.mergeCells("D1:D5", true);
        this.mergeCells("G1:G5", true);
        this.mergeCells("G7:G11", true);
        this.mergeCells("A7:A11", true);
        this.mergeCells("D7:D11", true);
        xlCFormat.setCFRule({ "action": "greaterthan", "inputs": ["5000"], "color": "redft", "range": "E7:E11" });
        xlCFormat.setCFRule({ "action": "lessthan", "inputs": ["30"], "color": "yellowft", "range": "H1:H5" });
        xlCFormat.setCFRule({ "action": "between", "inputs": ["400", "500"], "color": "greenft", "range": "B7:B11" });
        xlCFormat.setCFRule({ "action": "equalto", "inputs": ["20"], "color": "redf", "range": "H7:H11" });
        xlCFormat.setCFRule({ "action": "textcontains", "inputs": ["loafers"], "color": "redt", "range": "B1:B5" });
        xlCFormat.setCFRule({ "action": "dateoccur", "inputs": ["02/04/2014"], "color": "redft", "range": "E1:E5" });
        xlFormat.format({ "style": { "font-weight": "bold", "font-size": "10pt", "vertical-align": "middle", "text-align": "center" } }, "A1:A13");
        xlFormat.format({ "style": { "font-weight": "bold", "font-size": "10pt", "vertical-align": "middle", "text-align": "center" } }, "D1:D13");
        xlFormat.format({ "style": { "font-weight": "bold", "font-size": "10pt", "vertical-align": "middle", "text-align": "center" } }, "G1:G7");
        this.performSelection("B1");
    }
</script>
