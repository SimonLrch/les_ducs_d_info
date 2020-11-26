<?php
require_once '../EJ/AutoLoad.php';
?>
<script type="text/javascript" src="Scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.validate.unobtrusive.min.js"></script>
<div class="cols-sample-area">

    <?php
    $style = new EJ\Spreadsheet\Style();
    $style->fontWeight("bold")->color("#FFFFFF")->backgroundColor("#428bca");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Item Name")->style($style);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("Quantity")->style($style);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("Price")->style($style);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("Amount")->style($style);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("Stock Detail")->style($style);
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Website")->style($style);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row1 = new EJ\Spreadsheet\Row();
    $row1->height(30)->cells($cell);
	$comment1 = new EJ\Spreadsheet\Comment();
    $comment1->value("Casual Footwears with wide variety of colors.");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Casual Shoes")->comment($comment1);
	$format = new EJ\Spreadsheet\Format();
    $format->type("currency");
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("10");
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("20")->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B2*C2");
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("OUT OF STOCK");
	$hyperlink1 = new EJ\Spreadsheet\Hyperlink();
    $hyperlink1->webAddr("www.amazon.com");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Amazon")->hyperlink($hyperlink1);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row2 = new EJ\Spreadsheet\Row();
    $row2->cells($cell);
	$style1 = new EJ\Spreadsheet\Style();
    $style1->backgroundColor("#E5F3FF");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Sports Shoes")->style($style1);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("20")->style($style1);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("30")->style($style1)->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B3*C3")->style($style1);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("IN STOCK")->style($style1);
	$hyperlink2 = new EJ\Spreadsheet\Hyperlink();
    $hyperlink2->webAddr("www.aliexpress.com");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("AliExpress")->style($style1)->hyperlink($hyperlink2);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row3 = new EJ\Spreadsheet\Row();
    $row3->cells($cell);
	$comment1 = new EJ\Spreadsheet\Comment();
    $comment1->value("Formal Footwears with wide range of sizes.");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Formal Shoes")->comment($comment1);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("20");
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("15")->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B4*C4");
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("IN STOCK");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Amazon")->hyperlink($hyperlink1);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row4 = new EJ\Spreadsheet\Row();
    $row4->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Sandals & Floaters")->style($style1);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("15")->style($style1);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("20")->style($style1)->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B5*C5")->style($style1);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("OUT OF STOCK")->style($style1);
	$hyperlink3 = new EJ\Spreadsheet\Hyperlink();
    $hyperlink3->webAddr("www.alibaba.com");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Alibaba")->style($style1)->hyperlink($hyperlink3);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row5 = new EJ\Spreadsheet\Row();
    $row5->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Flip-Flops & Slippers");
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("30");
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("10")->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B6*C6");
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("IN STOCK");
	$hyperlink4 = new EJ\Spreadsheet\Hyperlink();
    $hyperlink4->webAddr("www.ebay.com");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Ebay")->hyperlink($hyperlink4);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row6 = new EJ\Spreadsheet\Row();
    $row6->cells($cell);
	$comment2 = new EJ\Spreadsheet\Comment();
    $comment2->value("Sneakers with recent designs.");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Sneakers")->style($style1)->comment($comment2);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("40")->style($style1);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("20")->style($style1)->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B7*C7")->style($style1);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("OUT OF STOCK")->style($style1);
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Amazon")->style($style1)->hyperlink($hyperlink1);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row7 = new EJ\Spreadsheet\Row();
    $row7->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Running Shoes");
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("20");
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("10")->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B8*C8");
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("IN STOCK");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("AliExpress")->hyperlink($hyperlink2);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row8 = new EJ\Spreadsheet\Row();
    $row8->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Loafers")->style($style1);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("31")->style($style1);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("10")->format($format)->style($style1);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B9*C9")->style($style1);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("OUT OF STOCK")->style($style1);
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Alibaba")->style($style1)->hyperlink($hyperlink3);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row9 = new EJ\Spreadsheet\Row();
    $row9->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("Cricket Shoes");
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("41");
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("30")->format($format);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B10*C10");
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("IN STOCK");
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Ebay")->hyperlink($hyperlink4);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row10 = new EJ\Spreadsheet\Row();
    $row10->cells($cell);
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->value("T-Shirts")->style($style1);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->value("50")->style($style1);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("10")->format($format)->style($style1);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=B11*C11")->style($style1);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->value("OUT OF STOCK")->style($style1);
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->value("Amazon")->style($style1)->hyperlink($hyperlink1);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row11 = new EJ\Spreadsheet\Row();
    $row11->cells($cell);
	$style2 = new EJ\Spreadsheet\Style();
	$style2->backgroundColor("#428bca");
    $cell1 = new EJ\Spreadsheet\Cell();
    $cell1->style($style2);
    $cell2 = new EJ\Spreadsheet\Cell();
    $cell2->style($style2);
    $cell3 = new EJ\Spreadsheet\Cell();
    $cell3->value("Total Amount")->index(2)->style($style);
    $cell4 = new EJ\Spreadsheet\Cell();
    $cell4->value("=Sum(D2:D11)")->style($style);
    $cell5 = new EJ\Spreadsheet\Cell();
    $cell5->style($style2);
    $cell6 = new EJ\Spreadsheet\Cell();
    $cell6->style($style2);
    $cell = array($cell1, $cell2, $cell3, $cell4, $cell5, $cell6);
    $row12 = new EJ\Spreadsheet\Row();
    $row12->height(30)->cells($cell);
    $rows = array($row1, $row2, $row3, $row4, $row5, $row6, $row7, $row8, $row9, $row10, $row11, $row12);
    $sheet1 = new EJ\Spreadsheet\Sheet();
    $sheet1->rows($rows);
    $sheets = array($sheet1);
    $spreadsheet =  new EJ\Spreadsheet("Spreadsheet");
    $scroll = new EJ\Spreadsheet\ScrollSetting();
    $scroll->height(500)->width(900);
	
    echo $spreadsheet ->allowFormulaBar(false)->showRibbon(false)->sheets($sheets)->scrollSettings($scroll)->loadComplete("loadComplete")->render();


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
        this.setWidthToColumns([140, 100, 100, 110, 140, 100, 110]);
    }
</script>