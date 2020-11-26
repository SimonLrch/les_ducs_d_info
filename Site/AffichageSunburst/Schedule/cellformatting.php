<?php
require_once '../EJ/AutoLoad.php';
?>
<script type="text/javascript">
    function onAppointmentWindowOpen(args) {
        if (this._appointmentAddWindow.find("#EventType").length == 0) {
            $("<tr><td class='e-leftfields e-textlabel'>Event Type:</td><td class='e-rightfields' colspan='3'><input type='text' id='EventType' /></td></tr>").insertAfter(".cellformattingScheduleparrow");
            var items = [{ text: "Public Event", value: "Public Event" }, { text: "Holiday", value: "Holiday" }, { text: "Maintenance", value: "Maintenance" }, { text: "Commercial Event", value: "Commercial Event" }, { text: "Family Event", value: "Family Event" }];
            this._appointmentAddWindow.find('#EventType').ejDropDownList({
                dataSource: items,
                height: 30,
                width: 300
            });
        }
        if (!ej.isNullOrUndefined(args.appointment) && !ej.isNullOrUndefined(args.appointment.EventType)) {
            this._appointmentAddWindow.find("#EventType").ejDropDownList("option", "value", args.appointment.EventType);
        }
		else {              
			this._appointmentAddWindow.find("#EventType").ejDropDownList("option", "value","");
	    }
    }
    function onScheduleFormatting(args) {
        switch (args.requestType) {
            case "workcells":
                if (args.cell.resources.text == "101 Hall") {
                    args.element.css("background-color", "#ffe9cc");
                }
                else if (args.cell.resources.text == "102 Hall") {
                    args.element.css("background-color", "#ebf1c4");
                }
                else if (args.cell.resources.text == "103 Hall") {
                    args.element.css("background-color", "#dcf1f8");
                }
                break;
            case "monthcells":
                if (args.cell.resources.text == "101 Hall") {
                    args.element.css("background-color", "#ffe9cc");
                }
                else if (args.cell.resources.text == "102 Hall") {
                    args.element.css("background-color", "#ebf1c4");
                }
                else if (args.cell.resources.text == "103 Hall") {
                    args.element.css("background-color", "#dcf1f8");
                }
                break;
            case "alldaycells":
                if (args.cell.resources.text == "101 Hall") {
                    args.element.css("background-color", "#ffe9cc");
                }
                else if (args.cell.resources.text == "102 Hall") {
                    args.element.css("background-color", "#ebf1c4");
                }
                else if (args.cell.resources.text == "103 Hall") {
                    args.element.css("background-color", "#dcf1f8");
                }
                break;
            case "headercells":
                args.element.css("color", "#333");
                if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "101 Hall") {
                    args.element.css("background-color", "#ffe9cc");
                }
                else if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "102 Hall") {
                    args.element.css("background-color", "#ebf1c4");
                }
                else if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "103 Hall") {
                    args.element.css("background-color", "#dcf1f8");
                }
                break;
            case "appointment":
                args.element.find('.e-apptext ').css({ "font-weight": "bold" });
                if (args.appointment.EventType == "Holiday" || args.appointment.EventType == "Maintenance") {
                    args.element.css("background-color", "#a4a3a4");
                    args.element.css("border-color", "#a4a3a4");
                }
                else if (args.appointment.EventType == "Public Event" || args.appointment.EventType == "" || ej.isNullOrUndefined(args.appointment.EventType)) {
                    args.element.css("background-color", "#faa41a");
                    args.element.css("border-color", "#faa41a");
                }
                else if (args.appointment.EventType == "Commercial Event") {
                    args.element.css("background-color", "#1892d1");
                    args.element.css("border-color", "#1892d1");
                }
                else if (args.appointment.EventType == "Family Event") {
                    args.element.css("background-color", "#0b8140");
                    args.element.css("border-color", "#0b8140");
                }
                if ((!args.appointment.AllDay) && (((args.appointment.EndTime - args.appointment.StartTime) / 3600000) < 24)) {
                    if (args.model.currentView == "day") {
                        var eventName = (args.appointment.EventType == "" || ej.isNullOrUndefined(args.appointment.EventType)) ? "Public Event" : args.appointment.EventType;
                        var diffMs = Math.abs(args.appointment.EndTime - args.appointment.StartTime);
                        var diffMins = Math.round(diffMs / 60000);
                        if (diffMins > 30) {
                            if (diffMins > 60)
                                args.element.find('.e-appointinnertext').prepend("<div style='color:black;margin-top:10px;height:20px;width:150px;background-color:white'><span style='margin:10px 0px 0px 10px'>" + eventName + "</span></div>");
                            args.element.find('.e-apptime ').html(args.appointment.Description);
                        }
                        args.element.find('.e-apptext ').css({ "font-size": "14px" });
                        var imgHeight = ((args.element.height() - 20) > 150) ? 150 : (args.element.height() <= 20) ? 20 : args.element.height() - 20;
                        var imgName = (!ej.isNullOrUndefined(args.appointment.EventType)) ? args.appointment.EventType : eventName;
                        var marginTopVal = (imgHeight == 20) ? "0px" : "10px";
                        if (imgName == "Holiday") {
                            args.element.css({
                                'background-image': 'url(Content/images/schedule/Holidays.png)',
                                'background-repeat': 'repeat',
                                'background-size': '80px auto'
                            });
                            if (imgHeight == 20)
                                args.element.css('background-image', 'url(Content/images/schedule/Holidays.png)');
                            args.element.find('.e-apptext ').html('');
                        }
                        else
                            args.element.prepend("<img type='image/svg+xml' style='opacity:0.3;margin-top:" + marginTopVal + ";margin-right:10px;float:right;height:" + imgHeight + "px;width:" + imgHeight + "px;' id='E' src='Content/images/schedule/" + imgName + ".png'/>");
                    }
                    else if (args.model.currentView == "week" || args.model.currentView == "workweek") {
                        args.element.find('.e-apptime ').html(args.appointment.Description);
                        var imgName = (!ej.isNullOrUndefined(args.appointment.EventType)) ? args.appointment.EventType : "Public Event";
                        if (args.appointment.Subject != "Holiday") {
                            var imgHeight = ((args.element.width() * $("#cellformattingSchedule").find('.e-workcells').width()) / 100) - 10;
                            args.element.append("<img type='image/svg+xml' style='position:absolute;opacity:0.3;left:50%;bottom:0;margin-bottom:5px;margin-left:-" + Math.round(imgHeight / 2) + "px;height:" + imgHeight + "px;width:" + imgHeight + "px;' id='E' src='Content/images/schedule/" + imgName + ".png'/>");
                        } else {
                            args.element.css({
                                'background-image': 'url(Content/images/schedule/Holidays.png)',
                                'background-repeat': 'repeat-y',
                                'background-size': '80px auto'
                            });
                            args.element.find('.e-appointinnertext').prepend("<div style='color:black;margin-top:10px;height:20px;width:45px;background-color:white'><span style='margin:2px 0px 0px 2px'>Holiday</span></div>");
                            args.element.find('.e-apptext ').html('');
                        }
                    }
                }
                break;
            case "resourceheadercells":
                if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "101 Hall") {
                    args.element.css("background-color", "#ffe9cc");
                    args.element.css("color", "#333");
                }
                else if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "102 Hall") {
                    args.element.css("background-color", "#ebf1c4");
                    args.element.css("color", "#333");
                }
                else if (!ej.isNullOrUndefined(args.resource) && args.resource.text == "103 Hall") {
                    args.element.css("background-color", "#dcf1f8");
                    args.element.css("color", "#333");
                }
                break;
        }
    }
</script>
<div class="cols-sample-area">
    <?php    
    $data = array(
             array(
                'Id' => 1,
                'Subject' => 'Maintenance',
                'StartTime' => new DateTime('2017/6/30 02:30'),
                'EndTime' => new DateTime('2017/6/30 04:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Maintenance',
                'ownerId'=> 1,
                'roomId' =>1
            ),
            array(
                'Id' => 2,
                'Subject' => 'Technology Book Stall',
                'StartTime' => new DateTime('2017/6/5 12:30'),
                'EndTime' => new DateTime('2017/6/5 16:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Public Event',
                'ownerId'=> 1,
                'roomId' =>1
            ),
            array(
                'Id' => 3,
                'Subject' => 'Technology Book Stall',
                'StartTime' => new DateTime('2017/6/15 12:30'),
                'EndTime' => new DateTime('2017/6/15 16:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Public Event',
                'ownerId'=> 1,
                'roomId' =>1
            ),
             array(
                'Id' => 4,
                'Subject' => 'Technology Book Stall',
                'StartTime' => new DateTime('2017/6/10 12:30'),
                'EndTime' => new DateTime('2017/6/10 16:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Public Event',
                'ownerId'=> 2,
                'roomId' =>1
            ),
            array(
                'Id' => 5,
                'Subject' => "Annual Conference",
                'StartTime' => new DateTime('2017/6/5 17:30'),
                'EndTime' => new DateTime('2017/6/5 21:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Commercial Event',
                'ownerId'=> 1,
                'roomId' =>1
            ),array(
                'Id' => 6,
                'Subject' => "Annual Conference",
                'StartTime' => new DateTime('2017/6/15 17:30'),
                'EndTime' => new DateTime('2017/6/15 21:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Commercial Event',
                'ownerId'=> 1,
                'roomId' =>1
            ),array(
                'Id' => 7,
                'Subject' => "Annual Conference",
                'StartTime' => new DateTime('2017/6/10 17:30'),
                'EndTime' => new DateTime('2017/6/10 21:00'),
                'Description'=> '',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Commercial Event',
                'ownerId'=> 2,
                'roomId' =>1
            ),array(
                'Id' => 8,
                'Subject' => "IMI Meeting",
                'StartTime' => new DateTime('2017/6/5 15:30'),
                'EndTime' => new DateTime('2017/6/5 18:30'),
                'Description'=> 'International Management Institute',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Commercial Event',
                'ownerId'=> 3,
                'roomId' =>2
            ),array(
                'Id' => 9,
                'Subject' => "George Birthday Celebration",
                'StartTime' => new DateTime('2017/6/5 16:00'),
                'EndTime' => new DateTime('2017/6/5 19:00'),
                'Description'=> '4th Year Celebration',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Family Event',
                'ownerId'=> 2,
                'roomId' =>1
            ),array(
                'Id' => 10,
                'Subject' => "John Wedding Aniversary",
                'StartTime' => new DateTime('2017/6/2 17:00'),
                'EndTime' => new DateTime('2017/6/2 20:00'),
                'Description'=> '1st Year Celebration',
                'AllDay' => false,
                'Recurrence' => false,
                'EventType' => 'Family Event',
                'ownerId'=> 3,
                'roomId' =>2
            )
    );
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->resourceFields("roomId,ownerId");
    
    $group =new EJ\Schedule\Group();
    $group ->resources(array("Rooms","Owners"));
    
    $res1 =new EJ\Schedule\Resource();
    $resSetttings1 =new EJ\Schedule\ResourceSetting();
    $resData1 ='[{"text":"Floor 1","id":1,"groupId":10,"color":"#cb6bb2"},{"text":"Floor 2","id":2,"groupId":20,"color":"#56ca85"}]';
    $resData1 =json_decode($resData1,true);
    $resSetttings1->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData1);
    $res1 ->allowMultiple(false)->field("roomId")->name("Rooms")->title("Room")->resourceSettings($resSetttings1);  
    
    $res2 =new EJ\Schedule\Resource();
    $resSetttings2 =new EJ\Schedule\ResourceSetting();
    $resData2 ='[{"text":"101 Hall","id":1,"groupId":1,"color":"#ffaa00"},{"text":"103 Hall","id":3,"groupId":2,"color":"#7499e1"},{"text":"102 Hall","id":2,"groupId":1,"color":"#f8a398"}]';
    $resData2 =json_decode($resData2,true);
    $resSetttings2->text('text')->id('id')->groupId('groupId')->color('color')->dataSource($resData2);
    $res2 ->allowMultiple(true)->field("ownerId")->name("Owners")->title("Owner")->resourceSettings($resSetttings2);  

    $resource=array($res1,$res2);
    
    $views= array('day', 'week', 'workweek', 'month');
    $workhour= new EJ\Schedule\WorkHour();
    $workhour->start(12);

    $schedule = new EJ\Schedule("cellformattingSchedule");
    echo $schedule ->width("100%")->height("525px")->currentDate(new DateTime('2017/6/5'))->currentView("day")->appointmentSettings($appointment)->group($group)->resources($resource)->showNextPrevMonth(false)->workHours($workhour)->timeZone("UTC +00:00")->appointmentWindowOpen("onAppointmentWindowOpen")->queryCellInfo("onScheduleFormatting")->render();
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
