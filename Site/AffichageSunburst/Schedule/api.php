<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule")->priority("Priority");
    $schedule = new EJ\Schedule("Schedule1");
    echo $schedule->width("100%")->height("525px")->startHour(0)->endHour(24)->timeMode(24)->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-2 aligntop">CurrentDate</div>
        <div class="col-md-2">
            <?php 
            $currentdate= new EJ\DatePicker("scheduledate");
            echo $currentdate->width("110px")->select("")->value(new DateTime('2017/6/5'))->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">DateFormat</div>
        <div class="col-md-2">
            <?php 
            $dateformats=array(array('text'=>'MM/dd/yyyy', 'value'=>'Default - MM/dd/yyyy'),
                array('text'=>'Default - MM/dd/yyyy', 'value'=>'MM/dd/yyyy'),
                array('text'=>'Short - d M, y', 'value'=>'d M, y'),
                array('text'=>'Medium - d MM, y', 'value'=>'d MM, y'),
                array('text'=>'Full-dddd,d MMMM,yy', 'value'=>'dddd, d MMMM, yy'),
                array('text'=>'UTC - yyyy-MM-dd', 'value'=>'yyyy-MM-dd'));
            $field= new EJ\DropDownList\Field();
            $field->value("value")->text("text");
            $dateformat =new EJ\DropDownList("dateformat");
            echo $dateformat->dataSource($dateformats)->fields($field)->selectedIndex(0)->width("110px")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Min Date</div>
        <div class="col-md-2">
            <?php
            $mindate= new EJ\DatePicker("mindate");
            echo $mindate->change("selectedDate1")->value(new DateTime('2017/1/1'))->width("110px")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Max Date</div>
        <div class="col-md-2">
            <?php
            $maxdate=new EJ\DatePicker("maxdate");
            echo $maxdate->width("110px")->change("selectedDate2")->value(new DateTime('2017/12/31'))->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Business start hour</div>
        <div class="col-md-2">
            <?php 
            $hourlist=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,23);
            $businessstart= new EJ\DropDownList("businessstart");
            echo $businessstart->width("110px")->dataSource($hourlist)->selectedIndex(9)->select("businessstart")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Business end hour</div>
        <div class="col-md-2">
            <?php 
            $hourlist=array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,23);
            $businessend= new EJ\DropDownList("businessend");
            echo $businessend->width("110px")->dataSource($hourlist)->selectedIndex(18)->select("businessend")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Hightlight Business Hours</div>
        <div class="col-md-2">
            <?php 
            $highlightbusiness=new EJ\CheckBox("businesshour");
            echo $highlightbusiness->checked(true)->change("businesshour")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Read Only</div>
        <div class="col-md-2">
            <?php 
            $apicheckbox=new EJ\CheckBox("readonly");
            echo $apicheckbox->checked(false)->change("readOnly")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Show/Hide AllDay row</div>
        <div class="col-md-2">
            <?php 
            $apicheckbox=new EJ\CheckBox("alldayrow");
            echo $apicheckbox->checked(true)->change("allDayRow")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Next/Prev Month Date</div>
        <div class="col-md-2">
            <?php 
            $apicheckbox=new EJ\CheckBox("nextprevmonth");
            echo $apicheckbox->checked(true)->change("nextPrevMonth")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Disable TimeScale</div>
        <div class="col-md-2">
            <?php 
            $apicheckbox=new EJ\CheckBox("timeScale");
            echo $apicheckbox->checked(false)->change("timeScale")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Show/Hide Appointment Priority</div>
        <div class="col-md-2">
            <?php 
            $apicheckbox=new EJ\CheckBox("appointmentpriority");
            echo $apicheckbox->checked(false)->change("appointmentPriority")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Start Time</div>
        <div class="col-md-2">
            <?php 
            $apinumric= new EJ\NumericTextbox("stime");
            echo $apinumric->value(0)->width("110px")->minValue(0)->maxValue(24)->enableStrictMode(true)->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">End Time</div>
        <div class="col-md-2">
            <?php 
            $apinumric= new EJ\NumericTextbox("etime");
            echo $apinumric->value(24)->width("110px")->minValue(0)->maxValue(24)->enableStrictMode(true)->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">Cell Width</div>
        <div class="col-md-2">
            <?php 
            $apinumric= new EJ\NumericTextbox("cellwidth");
            echo $apinumric->value(100)->width("110px")->render();
            ?>
        </div>
        <div class="col-md-2 aligntop">Cell Height</div>
        <div class="col-md-2">
            <?php 
            $apinumric= new EJ\NumericTextbox("cellheight");
            echo $apinumric->value(60)->width("110px")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php 
            $btnsubmit= new EJ\Button("submit");
            echo $btnsubmit->text("Submit")->width("80px")->height("25px")->click("changeTime")->render();
            ?>
        </div>
    </div>
</div>
<script>
    function selectedDate1(sender) {
        $(function () {
            $("#maxdate").ejDatePicker({ "minDate": new Date(sender.value) });
            $("#scheduledate").ejDatePicker({ "minDate": new Date(sender.value) });
        });
    }

    function selectedDate2(sender) {
        $(function () {
            $("#mindate").ejDatePicker({ "maxDate": new Date(sender.value) });
            $("#scheduledate").ejDatePicker({ "maxDate": new Date(sender.value) });
        });
    }

    function onChange(args) {
        $("#Schedule1").ejSchedule({ dateFormat: args.value });
        $("#scheduledate").ejDatePicker({ dateFormat: args.value });
        $("#mindate").ejDatePicker({ dateFormat: args.value });
        $("#maxdate").ejDatePicker({ dateFormat: args.value });
    }

    function changeTime() {
        if (parseInt($("#stime").val()) < parseInt($("#etime").val()))
            $("#Schedule1").ejSchedule({
                startHour: parseInt($("#stime").val()),
                endHour: parseInt($("#etime").val()),
                currentDate: $("#scheduledate").val(),
                cellWidth: $("#cellwidth").val() + 'px',
                cellHeight: $("#cellheight").val() + 'px',
                minDate: $("#mindate").val(),
                maxDate: $("#maxdate").val()
            });
        else {
            alert("Start hour should be less than end hour");
        }
    }

    function businessstart(args) {
        var schObj = $("#Schedule1").data("ejSchedule");
        if (args.itemId < schObj.model.workHours.end)
            $("#Schedule1").ejSchedule({ workHours: { start: args.itemId } });
        else
            alert("Start time should be less than end time.");
    }

    function businessend(args) {
        var schObj = $("#Schedule1").data("ejSchedule");
        if (args.itemId > schObj.model.workHours.start)
            $("#Schedule1").ejSchedule({ workHours: { end: args.itemId } });
        else
            alert("End time should be greater than start time.");

    }

    function businesshour(args) {
        $("#Schedule1").ejSchedule({ workHours: { highlight: args.isChecked } });
    }

    function readOnly(args) {
        $("#Schedule1").ejSchedule({ readOnly: args.isChecked });
    }

    function allDayRow(args) {
        $("#Schedule1").ejSchedule({ showAllDayRow: args.isChecked });
    }

    function nextPrevMonth(args) {
        $("#Schedule1").ejSchedule({ showNextPrevMonth: args.isChecked });
    }

    function timeScale(args) {
        $("#Schedule1").ejSchedule({ timeScale: { enable: !args.isChecked } });
    }

    function datechange(args) {
        $("#Schedule1").ejSchedule({ currentDate: args.value });
    }

    function appointmentPriority(args) {
        $("#Schedule1").ejSchedule({ prioritySettings: { enable: args.isChecked } });
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
