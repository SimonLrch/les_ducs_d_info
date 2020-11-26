<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->resourceFields("roomId,ownerId");
    
    $group =new EJ\Schedule\Group();
    $group ->resources(array("Rooms","Owners"));
    
    $res1 =new EJ\Schedule\Resource();
    $resSetttings1 =new EJ\Schedule\ResourceSetting();
    $resData1 ='[{"text":"ROOM 1","id":1,"groupId":1,"color":"#cb6bb2"},{"text":"ROOM 2","id":2,"groupId":1,"color":"#56ca85"}]';
    $resData1 =json_decode($resData1,true);
    $resSetttings1->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData1);
    $res1 ->allowMultiple(false)->field("roomId")->name("Rooms")->title("Room")->resourceSettings($resSetttings1);  
    
    $res2 =new EJ\Schedule\Resource();
    $resSetttings2 =new EJ\Schedule\ResourceSetting();
    $resData2 ='[{"text":"Nancy","id":1,"groupId":1,"color":"#ffaa00","on":10,"off":18,"customDays":["monday","wednesday","friday"]},{"text":"Steven","id":3,"groupId":2,"color":"#f8a398","on":6,"off":10,"customDays":["tuesday","thursday"]},{"text":"Michael","id":5,"groupId":1,"color":"#7499e1","on":11,"off":15,"customDays":["sunday","tuesday","thursday","saturday"]}]';
    $resData2 =json_decode($resData2,true);
    $resSetttings2->text('text')->id('id')->groupId('groupId')->color('color')->start("on")->end("off")->workWeek("customDays")->dataSource($resData2);
    $res2 ->allowMultiple(true)->field("ownerId")->name("Owners")->title("Owner")->resourceSettings($resSetttings2);  

    $resource=array($res1,$res2);

    $schedule = new EJ\Schedule("workhoursSchedule");
    echo $schedule -> width("100%")->height("525px")->currentDate(new DateTime('2017/6/5'))->currentView("workweek")->appointmentSettings($appointment)->group($group)->resources($resource)->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row"><strong>Nancy</strong></div>
    <div class="row">
        <div class="col-md-2 aligntop">Workweek Days</div>
        <div class="col-md-2">
            <?php 
            $workweek=array("Sunday" ,"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
            $selecteditems=array(1,3,5);
            $nancyworkdays= new EJ\DropDownList("nancyworkdays");
            echo $nancyworkdays->dataSource($workweek)->showCheckbox(true)->selectedIndices($selecteditems)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">WorkHours Start</div>
        <div class="col-md-2">
            <?php 
            $nancyhoursstart= new EJ\NumericTextbox("nancyhourstart");
            echo $nancyhoursstart->value(10)->minValue(0)->maxValue(24)->name("nancyhourstart")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">WorkHours End</div>
        <div class="col-md-2">
            <?php 
            $nancyhoursstart= new EJ\NumericTextbox("nancyhourend");
            echo $nancyhoursstart->value(18)->minValue(0)->maxValue(24)->name("nancyhourend")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
    <div class="row"><strong>Michael</strong></div>
    <div class="row">
        <div class="col-md-2 aligntop">Workweek Days</div>
        <div class="col-md-2">
            <?php 
            $workweek=array("Sunday" ,"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
            $selecteditems=array(0,2,4,6);
            $michelworkdays= new EJ\DropDownList("michaelworkdays");
            echo $michelworkdays->dataSource($workweek)->showCheckbox(true)->selectedIndices($selecteditems)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">WorkHours Start</div>
        <div class="col-md-2">
            <?php 
            $michaelhoursstart= new EJ\NumericTextbox("michaelhourstart");
            echo $michaelhoursstart->value(11)->minValue(0)->maxValue(24)->name("michaelhourstart")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">WorkHours End</div>
        <div class="col-md-2">
            <?php 
            $michaelhoursend= new EJ\NumericTextbox("michaelhourend");
            echo $michaelhoursend->value(15)->minValue(0)->maxValue(24)->name("michaelhourend")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
    <div class="row"><strong>Steven</strong></div>
    <div class="row">
        <div class="col-md-2 aligntop">Workweek Days</div>
        <div class="col-md-2">
            <?php 
            $workweek=array("Sunday" ,"Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
            $selecteditems=array(2,4);
            $stevenworkdays= new EJ\DropDownList("stevenworkdays");
            echo $stevenworkdays->dataSource($workweek)->showCheckbox(true)->selectedIndices($selecteditems)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">WorkHours Start</div>
        <div class="col-md-2">
            <?php 
            $stevenhoursstart= new EJ\NumericTextbox("stevenhourstart");
            echo $stevenhoursstart->value(6)->minValue(0)->maxValue(24)->name("stevenhourstart")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">WorkHours End</div>
        <div class="col-md-2">
            <?php 
            $stevenhoursend= new EJ\NumericTextbox("stevenhourend");
            echo $stevenhoursend->value(10)->minValue(0)->maxValue(24)->name("stevenhourend")->showSpinButton(false)->width("110px")->decimalPlaces(0)->change("onWorkHoursChange")->render();
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    function onWorkHoursChange() {
        var weekDays = ej.cultureObject.calendar.days.names;
        var nancydays = $("#nancyworkdays").data("ejDropDownList");
        var michaeldays = $("#michaelworkdays").data("ejDropDownList");
        var stevendays = $("#stevenworkdays").data("ejDropDownList");

        var nancy = nancydays.model.selectedItems.sort();
        var michael = michaeldays.model.selectedItems.sort();
        var steven = stevendays.model.selectedItems.sort();

        var nancyWorkweek = [], michaelWorkweek = [], stevenWorkweek = [];
        for (i = 0; i < nancy.length; i++) { nancyWorkweek.push(weekDays[nancy[i]].toLowerCase()); }
        for (i = 0; i < michael.length; i++) { michaelWorkweek.push(weekDays[michael[i]].toLowerCase()); }
        for (i = 0; i < steven.length; i++) { stevenWorkweek.push(weekDays[steven[i]].toLowerCase()); }

        var schObj = $("#workhoursSchedule").data("ejSchedule");
        if (nancyWorkweek.length == 0) nancyWorkweek = schObj.model.workWeek;
        if (michaelWorkweek.length == 0) michaelWorkweek = schObj.model.workWeek;
        if (stevenWorkweek.length == 0) stevenWorkweek = schObj.model.workWeek;

        var nancyStart = parseInt($("#nancyhourstart").val());
        var nancyEnd = parseInt($("#nancyhourend").val());
        var michaelStart = parseInt($("#michaelhourstart").val());
        var michaelEnd = parseInt($("#michaelhourend").val());
        var stevenStart = parseInt($("#stevenhourstart").val());
        var stevenEnd = parseInt($("#stevenhourend").val());

        $("#workhoursSchedule").ejSchedule({
            resources: [{
                field: "roomId",
                title: "Room",
                name: "Rooms", allowMultiple: false,
                resourceSettings: {
                    dataSource: [
                        { text: "ROOM 1", id: 1, groupId: 1, color: "#cb6bb2" },
                        { text: "ROOM 2", id: 2, groupId: 1, color: "#56ca85" }
                    ],
                    text: "text", id: "id", groupId: "groupId", color: "color"
                }
            }, {
                field: "ownerId",
                title: "Owner",
                name: "Owners", allowMultiple: true,
                resourceSettings: {
                    dataSource: [
                        { text: "Nancy", id: 1, groupId: 1, color: "#ffaa00", on: nancyStart, off: nancyEnd, customDays: nancyWorkweek },
                        { text: "Steven", id: 3, groupId: 2, color: "#f8a398", on: stevenStart, off: stevenEnd, customDays: stevenWorkweek },
                        { text: "Michael", id: 5, groupId: 1, color: "#7499e1", on: michaelStart, off: michaelEnd, customDays: michaelWorkweek }
                    ],
                    text: "text", id: "id", groupId: "groupId", color: "color", start: "on", end: "off", workWeek: "customDays"
                }
            }]
        });
    }
</script>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
    }
</style>
