<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule");

    $schedule = new EJ\Schedule("dayofweekSchedule");
    echo $schedule->firstDayOfWeek("Monday") -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-3 aligntop">First Day Of Week</div>
        <div class="col-md-3">
            <?php 
            $workweek=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            $dayofweek=new EJ\DropDownList("dayofweek");
            echo $dayofweek->dataSource($workweek)->selectedIndex(1)->change("onDayofWeekChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 aligntop">Work Week</div>
        <div class="col-md-3">
            <?php 
            $workweek=array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            $workweeks=new EJ\DropDownList("workweeks");
            $selecteditems=array(1,2,3,4,5);
            echo $workweeks->dataSource($workweek)->showCheckbox(true)->selectedIndices($selecteditems)->change("onWorkweekChange")->render();
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    function onDayofWeekChange(args) {
        $("#dayofweekSchedule").ejSchedule({ firstDayOfWeek: args.selectedValue });
    }
    function onWorkweekChange(args) {
        var workweek = [];
        var array = args.model.selectedItems.sort();
        for (i = 0; i < args.model.selectedItems.length; i++) {
            workweek.push(args.model.dataSource[array[i]]);
        }
        $("#dayofweekSchedule").ejSchedule({ workWeek: workweek });
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
