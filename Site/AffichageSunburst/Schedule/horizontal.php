<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule");

    $schedule = new EJ\Schedule("horizontalSchedule");
    echo $schedule->orientation("horizontal") -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
    }
</style>
