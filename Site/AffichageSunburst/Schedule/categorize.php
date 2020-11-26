<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php    
    $data = json_decode(file_get_contents("ScheduleData.json"), true);
    $appointment= new EJ\Schedule\AppointmentSetting();
    $appointment ->dataSource($data)->id("Id") ->startTime("StartTime")->endTime("EndTime")->subject("Subject")->description("Description")->allDay("AllDay")->recurrence("Recurrence")->recurrenceRule("RecurrenceRule") ->categorize("Categorize");
    $categorizedData= '[{"text":"Blue Category","id":1,"color":"#43b496","fontColor":"#ffffff"},{"text":"Green Category","id":2,"color":"#7f993e","fontColor":"#ffffff"},{"text":"Orange Category","id":3,"color":"#cc8638","fontColor":"#ffffff"},{"text":"Purple Category","id":4,"color":"#ab54a0","fontColor":"#ffffff"},{"text":"Red Category","id":5,"color":"#dd654e","fontColor":"#ffffff"},{"text":"Yellow Category","id":6,"color":"#d0af2b","fontColor":"#ffffff"}]';
    $categorizedData=json_decode($categorizedData,true);
    $categorize= new EJ\Schedule\CategorizeSetting();
    $categorize->enable(true)->allowMultiple(true)->dataSource($categorizedData)->text("text")->id("id")->color("color")->fontColor("fontColor");

    $menuitem= new EJ\Schedule\MenuItem();
    $appmenuitem= array(array( "id" => "open", "text" => "Open Appointment" ),
                        array( "id" => "delete", "text" => "Delete Appointment" ),
                        array( "id" => "customMenu3", "text" => "Menu Item 3" ),
                        array( "id" => "customMenu4", "text" => "Menu Item 4" ),
                        array( "id" => "categorize", "text" => "Categorize" )
                        ); 
    $cellsmenuitem= array(array( "id" => "new", "text" => "New Appointment" ),
                         array( "id" => "recurrence", "text" => "New Recurring Appointment" ),
                         array( "id" => "today", "text" => "Today" ),
                         array( "id" => "gotodate", "text" => "Go to date" ),
                         array( "id" => "settings", "text" => "Settings" ),
                         array( "id" => "view", "text" => "View", "parentId" => "settings" ),
                         array( "id" => "timemode", "text" => "TimeMode", "parentId" => "settings" ),
                         array( "id" => "view_Day", "text" =>"Day", "parentId" => "view" ),
                         array( "id" => "view_Week", "text" => "Week", "parentId" => "view" ),
                         array( "id" => "view_Workweek", "text" => "Workweek", "parentId" => "view" ),
                         array( "id" => "view_Month", "text" => "Month", "parentId" => "view" ),
                         array( "id" => "timemode_Hour12", "text" => "12 Hours", "parentId" => "timemode" ),
                         array( "id" => "timemode_Hour24", "text" =>"24 Hours", "parentId" => "timemode" ),
                         array( "id" => "workhours", "text" => "Work Hours", "parentId" => "settings" ),
                         array( "id" => "customMenu1", "text" => "Menu Item 1" ),
                         array( "id" => "customMenu2", "text" => "Menu Item 2" )
        );
    $menuitem->appointment($appmenuitem)->cells($cellsmenuitem);
    $contextmenu=new EJ\Schedule\ContextMenuSetting();
    $contextmenu->enable(true)->menuItems($menuitem);

    $schedule = new EJ\Schedule("categorizeSchedule");
    echo $schedule->categorizeSettings($categorize)->contextMenuSettings($contextmenu) -> width("100%") ->height("525px")->currentDate(new DateTime('2017/6/5')) ->appointmentSettings($appointment) ->render();
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
