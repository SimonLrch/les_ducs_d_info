<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="ctrllabel">Select an expert</div>
 <?php
 $emplist=array ( array ( "text"=> "Erik Linden", "eimg"=> "3", "desig"=> "Representative", "country"=> "England" ), array ( "text"=> "John Linden", "eimg"=> "6", "desig"=> "Representative", "country"=> "Norway" ),
              array ( "text"=> "Louis", "eimg"=> "7", "desig"=> "Representative", "country"=> "Australia" ), array ( "text"=> "Lawrence", "eimg"=> "5", "desig"=> "Representative", "country"=> "India" ));
 $listbox1=new EJ\ListBox("selectExperts");
 echo $listbox1->dataSource($emplist)->height("240px")->template("<div><img class='eimg' src='Content/images/Employees/$\{eimg\}.png' alt='employee'/><div class='ename'> $\{text\} </div><div class='desig'> $\{desig\} </div><div class='cont'> $\{country\} </div></div>")->render();
 ?>
</div>
<style>
    .cols-sample-area
    {
        width: 200px;
        margin: 0 auto;
        float: none;
    }
            .e-ddl-popup {
            margin: 0 auto;
        }

        .ctrllabel {
            font-weight: 600;
            padding-bottom: 12px;
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

        #selectExperts li {
            width: 200px;
            height: 70px;
            padding: 5px;
        } 
</style>