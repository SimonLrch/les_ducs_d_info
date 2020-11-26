<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $dialog = new  \EJ\Dialog("keyboardDialog");
    $dialog->title("Amazon")->templateStart();
    ?>
    <div>
        Amazon.com, Inc., often referred to as simply Amazon, is an American electronic commerce and cloud computing company with headquarters in Seattle, Washington. It is the largest Internet-based retailer in the United States. Amazon.com started as an online bookstore, later diversifying to sell DVDs, Blu-rays, CDs, video downloads/streaming, MP3 downloads/streaming, audiobook downloads/streaming, software, video games, electronics, apparel, furniture, food, toys and jewelry. The company also produces consumer electronics�notably, Amazon Kindle e-book readers, Fire tablets, Fire TV and Fire Phone�and is the world's largest provider of cloud infrastructure services (IaaS). Amazon also sells certain low-end products like USB cables under its in-house brand AmazonBasics.
		Amazon has separate retail websites for United States, United Kingdom and Ireland, France, Canada, Germany, Italy, Spain, Netherlands, Australia, Brazil, Japan, China, India and Mexico. Amazon also offers international shipping to certain other countries for some of its products.In 2011, it professed an intention to launch its websites in Poland and Sweden.
    </div>
    <?php    
    echo $dialog->width("450px")->minHeight("215px")->minWidth("310px")->target(".cols-sample-area")->isResponsive(true)->close("onDialogClose")->templateEnd()->render();

    $btn = new \EJ\Button("btn");
    echo $btn->text("Click to open dialog")->type("button")->height("30px")->width("150px")->click("onBtnClick")->render();

    ?>

</div>
<div id="property-window" class="box wide">
<div class="prop-grid keyboard">
    <div class="row">
        <div class="col-md-3">
            Alt + j
        </div>
        <div class="col-md-3">
            Focuses the control.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Up
        </div>
        <div class="col-md-3">
            Dialog move up.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Right
        </div>
        <div class="col-md-3">
            Dialog move right.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Down
        </div>
        <div class="col-md-3">
            Dialog move down.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Left
        </div>
        <div class="col-md-3">
            Dialog move left.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Ctrl + Right
        </div>
        <div class="col-md-3">
            Dialog resize to right direction.
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Ctrl + Down
        </div>
        <div class="col-md-3">
            Dialog resize to bottom direction.
        </div>
    </div>
</div>
</div>
<script>
    $(function () {
        $("#btn").hide();
        $(document).on("keydown", function (e) {
            if (e.altKey && e.keyCode === 74) { // j- key code.
                $("#keyboardDialog_wrapper").focus();
            }
        });
    });
    function onDialogClose() {
        $("#btn").show()
    }
    function onBtnClick() {
        $("#btn").hide();
        $("#keyboardDialog").ejDialog("open");
    }
</script>
<style class="cssStyles">
    .audi-q3
    {
        float: right;
        height: 356px;
        width: 267px;
        margin-left: 10px;
    }    
    
    .cnt
    {
        min-height: 356px;
        text-align: justify;
    }

    h1
    {
        margin: 0 0 10px 0;
    }

    .img
    {
        margin-bottom: 10px;
    }

    #dialog
    {
        padding: 15px;
    }
    .cols-sample-area{
     height: 500px!important;
    width: 650px;
    display: block !important;
	position:relative; overflow:hidden;
    }
</style>


