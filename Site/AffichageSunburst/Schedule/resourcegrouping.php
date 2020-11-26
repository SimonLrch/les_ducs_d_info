<?php
require_once '../EJ/AutoLoad.php';
?>
<script id="resTemplate" type="text/x-jsrender">
      <div style="height:100%">
            <div>
                {{if classname == 'e-parentnode'}}
                <div style="width:15px;height:15px;margin-right:5px;margin-top:3px;float:left;background:{{:color}};"></div>
                {{/if}}
                <div>{{:text}}</div>
            </div>
        </div>
</script>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->resourceFields("roomId,ownerId");
    
    $group =new EJ\Schedule\Group();
    $group ->resources(array("Rooms","Owners"));
    
    $res1 =new EJ\Schedule\Resource();
    $resSetttings1 =new EJ\Schedule\ResourceSetting();
    $resData1 ='[{"text":"ROOM 1","id":1,"groupId":1,"color":"#cb6bb2"},{"text":"ROOM 2","id":2,"groupId":1,"color":"#56ca85"},{"text":"ROOM 3","id":3,"groupId":1,"color":"#f8a398"}]';
    $resData1 =json_decode($resData1,true);
    $resSetttings1->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData1);
    $res1 ->allowMultiple(false)->field("roomId")->name("Rooms")->title("Room")->resourceSettings($resSetttings1);  
    
    $res2 =new EJ\Schedule\Resource();
    $resSetttings2 =new EJ\Schedule\ResourceSetting();
    $resData2 ='[{"text":"Nancy","id":1,"groupId":1,"color":"#ffaa00"},{"text":"Steven","id":3,"groupId":2,"color":"#f8a398"},{"text":"Michael","id":5,"groupId":1,"color":"#51a0ed"},{"text":"Laura","id":7,"groupId":2,"color":"#ffaa00"},{"text":"Robert","id":8,"groupId":1,"color":"#f8a398"},{"text":"Janet","id":4,"groupId":2,"color":"#51a0ed"},{"text":"Milan","id":13,"groupId":3,"color":"#99ff99"},{"text":"Paul","id":15,"groupId":3,"color":"#cc99ff"}]';
    $resData2 =json_decode($resData2,true);
    $resSetttings2->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData2);
    $res2 ->allowMultiple(true)->field("ownerId")->name("Owners")->title("Owner")->resourceSettings($resSetttings2);  

    $resource=array($res1,$res2);

    $schedule = new EJ\Schedule("multipleresourceSchedule");
    echo $schedule -> width("100%")->height("525px")->currentDate(new DateTime('2017/6/5'))->currentView("workweek")->orientation("horizontal")->cellWidth("40px")->showCurrentTimeIndicator(false)->resourceHeaderTemplateId("#resTemplate")->appointmentSettings($appointment)->group($group)->resources($resource)->render();
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
