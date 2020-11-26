<?php
require_once '../EJ/AutoLoad.php';
?>
<script id="blocktemplate" type="text/x-jsrender">
        <span class="blocksubject">{{:Subject}}</span>
        <div style='float:right; padding:5px;'>{{:~format(Subject)}}</div>
</script>
<script type="text/javascript">
    function _getImages(Subject) {
        switch (Subject) {
            case "BAD MONSOON":
                return "<img src='Content/images/schedule/badmonsoon.png'/>";
            case "MAINTENANCE":
                return "<img src='Content/images/schedule/maintenance_01.png'/>";
            case "SERVICE":
                return "<img src='Content/images/schedule/service.png'/>";
            default:
                return null;
        }
    }
    $.views.helpers({ format: _getImages });
</script>
<div class="cols-sample-area">
    <?php    
    $data = array(
       array(
          'Id' => 100,
          'Subject' => '#SG 208 Greenville - Washington',
          'StartTime' => new DateTime('2017/6/5 12:00'),
          'EndTime' => new DateTime('2017/6/5 14:30'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId'=> 3
      ),
      array(
          'Id' => 101,
          'Subject' => "#IT 188 Washington - Arizona",
          'StartTime' => new DateTime('2017/6/5 04:00'),
          'EndTime' => new DateTime('2017/6/5 05:30'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId' =>3
      ),
      array(
          'Id' => 102,
          'Subject' => "#SG 300 Chicago - Nevada",
          'StartTime' => new DateTime('2017/6/5 11:30'),
          'EndTime' => new DateTime('2017/6/5 13:00'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId' =>1
      ),
      array(
          'Id' => 103,
          'Subject' => "#IT 306 Washington - Newport",
          'StartTime' => new DateTime('2017/6/5 04:00'),
          'EndTime' => new DateTime('2017/6/5 05:00'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId' =>5
      ),
      array(
          'Id' => 104,
          'Subject' => "#AI 520 Washington - Chicago",
          'StartTime' => new DateTime('2017/6/5 12:30'),
          'EndTime' => new DateTime('2017/6/5 13:30'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId' =>5
      ),
      array(
          'Id' => 105,
          'Subject' => "#AI 520 Washington - Chicago",
          'StartTime' => new DateTime('2017/6/5 06:30'),
          'EndTime' => new DateTime('2017/6/5 07:30'),
          'Description'=> '',
          'AllDay' => false,
          'Recurrence' => false,
          'RecurrenceRule'=> '',
          'ownerId' =>3
      )
  );
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->resourceFields("ownerId");
    
    $group =new EJ\Schedule\Group();
    $group ->resources(array("Owners"));
    
    $res =new EJ\Schedule\Resource();
    $resSetttings =new EJ\Schedule\ResourceSetting();
    $resData ='[{"text":"Airline 1","id":1,"groupId":1,"color":"#f8a398"},{"text":"Airline 2","id":3,"groupId":2,"color":"#56ca85"},{"text":"Airline 3","id":5,"groupId":1,"color":"#51a0ed"}]';
    $resData =json_decode($resData,true);
    $resSetttings->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData);
    $res ->allowMultiple(false)->field("ownerId")->name("Owners")->title("Owner")->resourceSettings($resSetttings);    
    $resource=array($res);

    $blockdata = array(
   array(
      'Id' => 1,
      'Subject' => 'MAINTENANCE',
      'StartTime' => new DateTime('2017/6/5 8:00'),
      'EndTime' => new DateTime('2017/6/5 10:00'),
      'BlockAppointment' => true,
      'ResourceId' =>3
  ),
  array(
      'Id' => 2,
      'Subject' => 'SERVICE',
      'StartTime' => new DateTime('2017/6/5 9:00'),
      'EndTime' => new DateTime('2017/6/5 11:00'),
      'BlockAppointment' => true,
      'ResourceId' =>1
  ),
  array(
      'Id' => 3,
      'Subject' => 'SERVICE',
      'StartTime' => new DateTime('2017/6/6'),
      'EndTime' => new DateTime('2017/6/6'),
      'BlockAppointment' => true,
      'ResourceId' =>1,
      'FullDay'=>true
  ),
  array(
      'Id' => 4,
      'Subject' => 'BAD MONSOON',
      'StartTime' => new DateTime('2017/6/5 15:30'),
      'EndTime' => new DateTime('2017/6/5 17:00'),
      'BlockAppointment' => true,
      'ResourceId' =>1
  ),
  array(
      'Id' => 5,
      'Subject' => 'BAD MONSOON',
      'StartTime' => new DateTime('2017/6/5 15:30'),
      'EndTime' => new DateTime('2017/6/5 17:00'),
      'BlockAppointment' => true,
      'ResourceId' =>3
  ),
  array(
      'Id' => 6,
      'Subject' => 'BAD MONSOON',
      'StartTime' => new DateTime('2017/6/5 15:30'),
      'EndTime' => new DateTime('2017/6/5 17:00'),
      'BlockAppointment' => true,
      'ResourceId' =>5
  )
);
    $blockout= new EJ\Schedule\BlockoutSetting();
    $blockout->enable(true)->templateId("#blocktemplate")->dataSource($blockdata)->id("Id")->subject("Subject")->startTime("StartTime")->endTime("EndTime")->isAllDay("FullDay")->isBlockAppointment("BlockAppointment")->resourceId("ResourceId");

    $schedule = new EJ\Schedule("blockintervalsSchedule");
    echo $schedule->width("100%")->height("525px")->currentDate(new DateTime('2017/6/5'))->timeZone("UTC +00:00")->currentView('day')->appointmentSettings($appointment)->group($group)->resources($resource)->blockoutSettings($blockout)->render();
    ?>
</div>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
    }

    .e-blocktimeappointment img
    {
        width: 36px;
    }

    .blocksubject
    {
        font-size: 14px;
        font-weight: 600;
        color: rgba(0, 0, 0, 1);
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0px 5px;
    }
</style>
