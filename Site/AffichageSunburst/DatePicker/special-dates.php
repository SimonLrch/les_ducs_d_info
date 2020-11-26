<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $today = date("Y/m/d");
    $special= array( array("date" => $today, "tooltip" => "In Australia", "iconClass"=> "flags sprite-Australia") ,
                                  array("date" => date('Y-m-d', strtotime($today. ' + 8 days')) , "tooltip"=>"In France", "iconClass"=> "flags sprite-France" ),
                                  array("date" => date('Y-m-d', strtotime($today. ' + 10 days')) , "tooltip"=>"In USA", "iconClass"=> "flags sprite-USA" ),
                                  array("date" => date('Y-m-d', strtotime($today. ' + 16 days')) , "tooltip"=>"In Germany", "iconClass"=> "flags sprite-Germany" ),
                                  array("date" => date('Y-m-d', strtotime($today. ' + 4 days')) , "tooltip"=>"In India", "iconClass"=> "flags sprite-India" ));
    $date = new \EJ\DatePicker("datepicker");
    echo $date->width("100%")->height("40px")->watermarkText("select a date")->specialDates($special)->render();

    ?>
</div>

<style>
    .flags {
        width: 16px !important;
        background-image: url("Content/images/tab/flags.png");
        background-repeat: no-repeat;
    }

    .sprite-Australia {
        background-position: 0 -2px;
    }

    .sprite-Germany {
        background-position: 0 -398px;
    }

    .sprite-India {
        background-position: -3px -462px;
    }

    .sprite-France {
        background-position: 0px -331px;
    }

    .sprite-USA {
        background-position: 0 -1121px;
    }

    .e-datepicker.e-calendar { /*change the width of the calender along with table cells*/
        width: 24em;
    }
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
