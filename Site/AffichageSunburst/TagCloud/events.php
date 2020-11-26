<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
 <?php
$carModels = array(
        array('text'=> "Hindustan Motors", 'url'=> "http://www.zigwheels.com/newcars/Hindustan-Motors", 'frequency'=> 10 ),
        array('text'=> "Bentley Continental ", 'url'=> "http://www.zigwheels.com/newcars/Bentley/Continental", 'frequency'=> 3 ),
        array('text'=> "BMW 7", 'url'=> "http://www.zigwheels.com/newcars/BMW/7-Series", 'frequency'=> 8 ),
        array('text'=> "Bugatti Veyron", 'url'=> "http://www.zigwheels.com/newcars/Bugatti/Veyron", 'frequency'=> 2 ),
        array('text'=> "Honda", 'url'=> "http://www.zigwheels.com/newcars/Honda", 'frequency'=> 3 ),
        array('text'=> "Chevrolet Beat", 'url'=> "http://www.zigwheels.com/newcars/Chevrolet/Beat", 'frequency'=> 7 ),
        array('text'=> "Force Motors", 'url'=> "http://www.zigwheels.com/newcars/Force-Motors/Gurkha", 'frequency'=> 5 ),
        array('text'=> "Ford", 'url'=> "http://www.zigwheels.com/newcars/Ford", 'frequency'=> 8 ),
        array('text'=> "Ferrari FF", 'url'=> "http://www.zigwheels.com/newcars/Ferrari/FF", 'frequency'=> 5 ),
        array('text'=> "Audi A7", 'url'=> "http://www.zigwheels.com/newcars/Audi/A7", 'frequency'=> 20 ),
        array('text'=> "HM Mitsubishi", 'url'=> "http://www.zigwheels.com/newcars/HM-Mitsubishi", 'frequency'=> 1 ),
        array('text'=> "Hyundai Santro", 'url'=> "http://www.zigwheels.com/newcars/Hyundai/Santro-Xing", 'frequency'=> 9 ),
        array('text'=> "Jaguar XKR", 'url'=> "http://www.zigwheels.com/newcars/Jaguar/XKR", 'frequency'=> 0 ),
        array('text'=> "Rolls Royce", 'url'=> "http://www.zigwheels.com/newcars/Rolls-Royce", 'frequency'=> 6 ),
        array('text'=> "Land Rover Range", 'url'=> "http://www.zigwheels.com/newcars/Land-Rover/Range-Rover", 'frequency'=> 3 ),
        array('text'=> "Mercedes Benz", 'url'=> "http://www.zigwheels.com/newcars/Mercedes-Benz/A-Class", 'frequency'=> 3 ),
        array('text'=> "Lamborghini", 'url'=> "http://www.zigwheels.com/newcars/Lamborghini/Gallardo", 'frequency'=> 14 ),
        array('text'=> "Volvo S60", 'url'=> "http://www.zigwheels.com/newcars/Volvo/S60", 'frequency'=> 1 ),
       );
    $tagcloud = new EJ\TagCloud("tag");
    echo $tagcloud->dataSource($carModels)->titleText("Car Models")->
                create("oncreate")->
                mouseover("onmouseover")->
                mouseout("onmouseout")->
                click("onclick")->
    render();
    ?>

</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("onClear")->type("button")->render();
        ?>
    </div>
</div>
<script>
        function oncreate(args) {
            jQuery.addEventLog("Tagcloud has been <span class='eventTitle'>created</span>.");
        }
        function onmouseover(args) {
            jQuery.addEventLog("Mouse pointer is <span class='eventTitle'>hovered </span> on " + args.value + ".</br>");
        }
        function onmouseout(args) {
            jQuery.addEventLog("Mouse pointer is <span class='eventTitle'>hovered away</span> from " + args.value + ".</br>");
        }
        function onclick(args) {
            jQuery.addEventLog(args.value + " is <span class='eventTitle'>clicked</span>.</br>");
        }
        function onClear() {
            $("#EventLog").html("");
        }

</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
