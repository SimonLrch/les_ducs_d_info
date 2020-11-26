<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule");

    $renderdate=new EJ\Schedule\RenderDate();
    $renderdate->start(new DateTime("2016/5/3"))->end(new DateTime("2016/5/6"));

    $views=array("customview");

    $schedule = new EJ\Schedule("customviewSchedule");
    echo $schedule -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5'))->renderDates($renderdate)->currentView("customview")->views($views) ->appointmentSettings($appointment) ->render();
    ?>
</div>
<div id="property-window" class="box wide">
    <div class="row">
        <div class="col-md-2 aligntop">
            Select View
        </div>
        <div class="col-md-2">
            <?php     
            $data=array('Agenda', 'Month', 'Day', 'Week', 'WorkWeek', 'CustomView');
            $viewsdrpdown =new EJ\DropDownList("scheduleViews");
            echo $viewsdrpdown->dataSource($data)->width("110px")->selectedIndex(5)->select("onViewsChange")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">
            Start Date
        </div>
        <div class="col-md-2">
            <?php  
            $customstartdate=new EJ\DatePicker("customstartdate");
            echo $customstartdate->value(new DateTime("2017/6/3"))->width("110px")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 aligntop">
            End Date
        </div>
        <div class="col-md-2">
            <?php  
            $customenddate=new EJ\DatePicker("customenddate");
            echo $customenddate->value(new DateTime("2017/6/6"))->width("110px")->render();
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php  
            $viewssubmit=new EJ\Button("viewssubmit");
            echo $viewssubmit->text("Submit")->width("80px")->height("25px")->click("onViewschangeDate")->render();
            ?>
        </div>
    </div>
</div>
<script type="text/javascript">
    function onViewsChange(args) {
        $("#customviewSchedule").ejSchedule({ views: [args.value], currentView: args.value.toLowerCase() });
    }
    function onViewschangeDate(args) {
        var startDate = $("#customstartdate").ejDatePicker("option", "value");
        startDate = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate());
        var endDate = $("#customenddate").ejDatePicker("option", "value");
        endDate = new Date(endDate.getFullYear(), endDate.getMonth(), endDate.getDate());
        if (startDate <= endDate) {
            $('#scheduleViews').ejDropDownList({ select: "onViewsChange", selectedItemIndex: 5 });
            $("#customviewSchedule").ejSchedule({
                renderDates: {
                    start: new Date(startDate),
                    end: new Date(endDate)
                },
				currentDate: new Date(startDate)
            });
        }
        else
            alert("Start date must be lesser than end date");
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
