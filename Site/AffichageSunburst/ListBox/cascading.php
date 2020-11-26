<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$group = array(   array ( "parentId"=> 'a', "text"=> "Group A" ),
          array ( "parentId"=> 'b', "text"=> "Group B" ),
          array ( "parentId"=> 'c', "text"=> "Group C" ),
          array ( "parentId"=> 'd', "text"=> "Group D" ),
          array ( "parentId"=> 'e', "text"=> "Group E" ),
            array ( "parentId"=> 'f', "text"=> "Group F" ),
            array ( "parentId"=> 'g', "text"=> "Group G" ),
            array ( "parentId"=> 'h', "text"=> "Group H" ),
            array ( "parentId"=> 'i', "text"=> "Group I" ),
            array ( "parentId"=> 'j', "text"=> "Group J" ));    
$countries=array(array ( "value"=> 11, "parentId"=> 'a', "text"=> "Algeria" ),
           array ( "value"=> 12, "parentId"=> 'a', "text"=> "Armenia"),
           array ( "value"=> 13, "parentId"=> 'a', "text"=> "Bangladesh"),
           array ( "value"=> 14, "parentId"=> 'a', "text"=> "Cuba"),
           array ( "value"=> 15, "parentId"=> 'b', "text"=> "Denmark" ),
           array ( "value"=> 16, "parentId"=> 'b', "text"=> "Egypt"),
           array ( "value"=> 17, "parentId"=> 'c', "text"=> "Finland" ),
           array ( "value"=> 18, "parentId"=> 'c', "text"=> "India" ),
           array ( "value"=> 19, "parentId"=> 'c', "text"=> "Malaysia"),
           array ( "value"=> 20, "parentId"=> 'd', "text"=> "New Zealand" ),
           array ( "value"=> 21, "parentId"=> 'd', "text"=> "Norway" ),
           array ( "value"=> 22, "parentId"=> 'd', "text"=> "Poland" ),
           array ( "value"=> 23, "parentId"=> 'e', "text"=> "Romania"),
           array ( "value"=> 24, "parentId"=> 'e', "text"=> "Singapore"),
           array ( "value"=> 25, "parentId"=> 'e', "text"=> "Thailand" ),
           array ( "value"=> 26, "parentId"=> 'e', "text"=> "Ukraine"),
            array ( "value"=> 27, "parentId"=> 'f', "text"=> "Falkland Islands"),
            array ( "value"=> 28, "parentId"=> 'f', "text"=> "Faroe Islands"),
            array ( "value"=> 29, "parentId"=> 'f', "text"=> "Fiji"),
            array ( "value"=> 30, "parentId"=> 'g', "text"=> "Germany" ),
            array ( "value"=> 31, "parentId"=> 'g', "text"=> "Greece" ),
            array ( "value"=> 32, "parentId"=> 'g', "text"=> "Greenland"),
            array ( "value"=> 33, "parentId"=> 'g', "text"=> "Ghana"),
            array ( "value"=> 34, "parentId"=> 'h', "text"=> "Hong Kong"),
            array ( "value"=> 35, "parentId"=> 'h', "text"=> "Haiti" ),
            array ( "value"=> 36, "parentId"=> 'i', "text"=> "Iceland" ),
            array ( "value"=> 37, "parentId"=> 'i', "text"=> "Indonesia" ),
            array ( "value"=> 38, "parentId"=> 'i', "text"=> "Ireland" ),
            array ( "value"=> 39, "parentId"=> 'j', "text"=> "Jamaica" ),
            array ( "value"=> 40, "parentId"=> 'j', "text"=> "Japan" ),
            array ( "value"=> 41, "parentId"=> 'j', "text"=> "Jordan" ));
?>
 <?php
 $listbox1=new EJ\ListBox("grouplist");
 $listbox2=new EJ\ListBox("countrylist");
 $fields2=new EJ\ListBox\Field();
 $fields2->value("parentId")->text("text");
 $fields1=new EJ\ListBox\Field();
 $fields1->text("text")->value("parentId");

 
 ?>
    <div class="listbox frame">
                    <div class="contents">
                        <div class="ctrllabel">Select group</div>
                        <?php
                        echo $listbox1->dataSource($group)->fields($fields1)->width("180px")->height("220px")->cascadeTo("countrylist")->render();
                        ?>
                    </div>
                    <div class="contents">
                        <div class="ctrllabel">Select country</div>
                        <?php
                        echo $listbox2->dataSource($countries)->loadDataOnInit(false)->width("180px")->height("220px")->fields($fields2)->render();
                        ?>
                    </div>
                </div>
</div>
<style>
    .cols-sample-area
    {
        width: 700px;
        margin: 0 auto;
        float: none;
    }
     .txt {
            display: block;
            margin-top: 12px;
        }

        .ctrllabel {
            font-weight: 600;
            padding-bottom: 12px;
        }

        .contents {
            display: inline-block;
            padding: 0px 15px;
        }
</style>