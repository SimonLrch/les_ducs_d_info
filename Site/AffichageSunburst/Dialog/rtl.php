<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">

    <?php
    $dialog = new  \EJ\Dialog("dialog");
    $dialog->title("Audi Q3")->templateStart();
    ?>
     <h1>Audi Q3</h1>
        <div class="audi-q3" style="">
            <img src="Content/images/dialog/audiq3-1.png" class="img" />
            <br />
            <img src="Content/images/dialog/audiq3-2.png" class="img" />
        </div>
        <div class="cnt">
           It is a concept vehicle with Liquid Silver body colour, 20-inch wheels, fabric folding roof, electrically-controlled hood, 4-cylinder 2.0 TDI engine rated 204 PS (150 kW; 201 hp)
            and 400 N·m (295.02 lbf·ft), diesel particulate filter and Bluetec emission control system, quattro permanent four-wheel drive system with Haldex clutch,
            Audi S tronic dual-clutch gearbox, McPherson-strut front axle and a four-link rear axle, Audi drive select system with 3 modes (dynamic, sport, efficiency),
            MMI control panel with touch pad and dual-view technology, sound system with the prominent extending tweeters.
   </div>
    <?php    
    echo $dialog->width("550px")->minHeight("215px")->minWidth("310px")->isResponsive(true)->enableRTL(true)->target(".cols-sample-area")->close("onDialogClose")->templateEnd()->render();

    $btn = new \EJ\Button("btn");
    echo $btn->text("Click to open dialog")->type("button")->height("30px")->width("150px")->click("onBtnClick")->render();

    ?>

</div>
<script>
    $(function () {
        $("#btn").hide();
    });
    function onDialogClose() {
        $("#btn").show()
    }
    function onBtnClick() {
        $("#btn").hide();
        $("#dialog").ejDialog("open");
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
     height: 550px!important;
    width: 650px;
    display: block !important;
	position:relative; overflow:hidden;
    }
</style>


