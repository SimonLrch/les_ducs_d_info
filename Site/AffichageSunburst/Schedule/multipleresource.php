<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->resourceFields("ownerId");
    
    $group =new EJ\Schedule\Group();
    $group ->resources(array("Owners"));
    
    $res =new EJ\Schedule\Resource();
    $resSetttings =new EJ\Schedule\ResourceSetting();
    $resData ='[{"text":"Nancy","id":1,"groupId":1,"color":"#f8a398"},{"text":"Steven","id":3,"groupId":2,"color":"#56ca85"},{"text":"Michael","id":5,"groupId":1,"color":"#51a0ed"}]';
    $resData =json_decode($resData,true);
    $resSetttings->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData);
    $res ->allowMultiple(true)->field("ownerId")->name("Owners")->title("Owner")->resourceSettings($resSetttings);    
    $resource=array($res);

    $schedule = new EJ\Schedule("multipleresourceSchedule");
    echo $schedule -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->currentView("workweek") ->appointmentSettings($appointment) ->group($group) ->resources($resource) ->render();
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
