<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<?php
    $menu = new EJ\Menu("JobSearch");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("Home");
    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("Search Jobs");
        $Item21 = new EJ\Menu\MenuItem();
        $Item21->text("Advanced Search");
        $Item22 = new EJ\Menu\MenuItem();
        $Item22->text("Jobs by Company");
        $Item23 = new EJ\Menu\MenuItem();
        $Item23->text("Jobs by Category");
        $Item24 = new EJ\Menu\MenuItem();
        $Item24->text("Jobs by Location");
        $Item25 = new EJ\Menu\MenuItem();
        $Item25->text("Jobs by Skills");
        $Item26 = new EJ\Menu\MenuItem();
        $Item26->text("Jobs by Designation");
    $Item2->AddItem($Item21,$Item22,$Item23,$Item24,$Item25,$Item26);
    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("Post Resume");
    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("JobSeeker Login");
    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("Fast Forward");
        $Item51 = new EJ\Menu\MenuItem();
        $Item51->text("Resume writing");
        $Item52 = new EJ\Menu\MenuItem();
        $Item52->text("Certification");
        $Item53 = new EJ\Menu\MenuItem();
        $Item53->text("Resume Spotlight");
        $Item54 = new EJ\Menu\MenuItem();
        $Item54->text("Jobs4u");
    $Item5->AddItem($Item51,$Item52,$Item53,$Item54);
    $Item6 = new EJ\Menu\MenuItem();
    $Item6->text("More");
        $Item61 = new EJ\Menu\MenuItem();
        $Item61->text("Mobile");
        $Item62 = new EJ\Menu\MenuItem();
        $Item62->text("Pay check");
        $Item63 = new EJ\Menu\MenuItem();
        $Item63->text("Blog");
    $Item6->AddItem($Item61,$Item62,$Item63);
    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5,$Item6);
    echo $menu->width("100%")->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
                        <div class="col-md-6">
                            Disable Item
                        </div>
                        <div class="col-md-6">
                            <select id="Disable" class="e-ddl">
                                <option>Home</option>
                                <option>Search Jobs</option>
                                <option>Post Resume</option>
                                <option>JobSeeker Login</option>
                                <option>Fast Forward</option>
                                <option>More</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Enable Item
                        </div>
                        <div class="col-md-6">
                            <select id="Enable" class="e-ddl">
                                <option>Home</option>
                                <option>Search Jobs</option>
                                <option>Post Resume</option>
                                <option>JobSeeker Login</option>
                                <option>Fast Forward</option>
                                <option>More</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            Disable All\Enable All
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="btnchkunchk" class="e-togglebtn" value="checkuncheck" />
                        </div>
                    </div>
</div>

<script>
    var menuObj;
    jQuery(function ($) {
        
        menuObj = $("#JobSearch").data("ejMenu");

        $("#Enable").ejDropDownList({ change: "onChange1", width: "120px" });

        $("#Disable").ejDropDownList({ change: "onChange2", width: "120px" });

        $("#btnchkunchk").ejToggleButton({ "change": "onCheckUncheckAll", "width": "120px", "defaultText": "Disable", "activeText": "Enable" });

    });
    function onChange1(args) {
        var mobj = $("#JobSearch").data("ejMenu");
        mobj.enableItem(args.value);
        $("#Disable").ejDropDownList("clearText");
    }
    function onChange2(args) {
        var mobj = $("#JobSearch").data("ejMenu");
        mobj.disableItem(args.value);
        $("#Enable").ejDropDownList("clearText");
    }
    function onCheckUncheckAll(args) {
        $("#Disable").ejDropDownList("clearText");
        $("#Enable").ejDropDownList("clearText");
        if (args.isChecked) {
            menuObj.disable();
        }
        else {
            menuObj.enable();
        }
    }
</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
