<?php
require_once '../EJ/AutoLoad.php';
?>
<script type="text/javascript" src="Scripts/cultures/ej.culture.en-US.min.js"></script>
<script type="text/javascript" src="Scripts/cultures/ej.culture.fr-FR.min.js"></script>
<script type="text/javascript" src="Scripts/cultures/ej.culture.vi-VN.min.js"></script>
<script type="text/javascript" src="Scripts/schedulelocalizedwords.js"></script>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule");

    $schedule = new EJ\Schedule("localeSchedule");
    echo $schedule->locale("fr-FR") -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-3 aligntop">
            <label>Select Culture</label>
        </div>
        <div class="col-md-3">
            <?php 
            $scheduleculture =new EJ\DropDownList("scheduleCulture");
            $cultures=array("en-US", "vi-VN", "fr-FR");
            echo $scheduleculture->dataSource($cultures)->selectedIndex(2)->select("onScheduleLocaleChange")->render();
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    function onScheduleLocaleChange(args) {
        $("#localeSchedule").ejSchedule({ locale: args.value });
    }
</script>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
        display: block;
    }
</style>
