<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$countries = array( array( "id"=> "bk1", "text"=> "Aache RTR" ), array( "id"=> "bk2", "text"=> "CBR 150-R" ), array( "id"=> "bk3", "text"=> "CBZ Xtreme" ),
                array( "id"=> "bk4", "text"=> "Discover" ), array( "id"=> "bk5", "text"=> "Dazzler" ), array( "id"=> "bk6", "text"=> "Flame" ),
                array( "id"=> "bk7", "text"=> "Fazzer" ), array( "id"=> "bk8", "text"=> "FZ-S" ), array( "id"=> "bk9", "text"=> "Pulsar" ),
                array( "id"=> "bk10", "text"=> "Shine" ), array( "id"=> "bk11", "text"=> "R15" ), array( "id"=> "bk12", "text"=> "Unicorn" ));    
?>
<div class="ctrllabel">Select a bike</div>
 <?php
 $listbox1=new EJ\ListBox("selectCountry");
 $fields=new EJ\ListBox\Field();
 $fields->id("id")->text("text");
 echo $listbox1->dataSource($countries)->fields($fields)->showCheckbox(true)->width("100%")->render();
 ?>
</div>
<style>
    .cols-sample-area
    {
        width: 200px;
        margin: 0 auto;
        float: none;
    }
    .ctrllabel {
		font-weight: 600;
        padding-bottom: 12px;
    }
</style>