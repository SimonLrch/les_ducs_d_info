<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule");
    $timescale= new EJ\Schedule\TimeScale();
    $timescale->majorSlot(60)->minorSlotCount(5);
    $schedule = new EJ\Schedule("timescalseSchedule");
    echo $schedule->timeScale($timescale) -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-2 aligntop">
            MinorSlotCount</div>
        <div class="col-md-2">
            <?php     
            $minorslotdata=array(1,2,3,4,5,6,7,8,9,10);
            $minorslotdrpdown =new EJ\DropDownList("minorslot");
            echo $minorslotdrpdown->dataSource($minorslotdata)->width("110px")->selectedIndex(4)->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">
            MajorSlot</div>
        <div class="col-md-2">
            <?php     
            $majorslotdata=array(60,30,20,12,10,120,180,240);
            $majorslotdrpdown =new EJ\DropDownList("majorslot");
            echo $majorslotdrpdown->dataSource($majorslotdata)->width("110px")->selectedIndex(0)->render();
            ?>
        </div>
        <div class="col-md-2">
            <?php     
            $timescaleSubmit= new EJ\Button("submit");
            echo $timescaleSubmit->width("80px")->height("25px")->click("changeTime")->text("Submit")->render();
            ?>
        </div>
    </div>
</div>
<style type="text/css">
    .cols-sample-area
    {
        width: 100%;        
    }
</style>
<script type="text/javascript">
    function changeTime(args) {
        $("#timescalseSchedule").ejSchedule({
            timeScale: {
                minorSlotCount: parseInt($("#minorslot").val()),
                majorSlot: parseInt($("#majorslot").val())
            }
        });
    }
</script>
