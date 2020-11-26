<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $empList = array(
       array('text'=> "Erik Linden", 'eimg'=> "3", 'desig' => "Representative", 'country' => "England"),
       array('text'=> "John Linden", 'eimg'=> "6", 'desig' => "Representative", 'country' => "Norway"),
       array('text'=> "Louis", 'eimg'=> "7", 'desig' => "Representative", 'country' => "Australia"),
       array('text'=> "Lawrence", 'eimg'=> "5", 'desig' => "Representative", 'country' => "India"),
       );
    $dropdownlist =new EJ\DropDownList("skillsets");
    echo $dropdownlist->dataSource($empList)->width("100%")->template("<div><img class='eimg' src='Content/images/Employees/${eimg}.png' alt='employee'/> <div class='ename'> ${text} </div><div class='desig'> ${desig} </div><div class='cont'> ${country} </div></div>")->watermarkText("Select an employee")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .eimg {
            margin: 0;
            padding: 3px 10px 3px 3px;
            border: 0 none;
            width: 60px;
            height: 60px;
            float: left;
        }

        .ename {
            font-weight: bold;
            padding: 6px 3px 1px 3px;
        }

        .desig, .cont {
            font-size: smaller;
            padding: 3px 3px -1px 0px;
        }
</style>