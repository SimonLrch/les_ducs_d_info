<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="ctrllabel">Select a country</div>
 <?php
 $skillset=array ( array ( "skill"=> "Bahrain", "category"=> "B" ), array ( "skill"=> "Brazil", "category"=> "B" ), array ( "skill"=> "Argentina", "category"=> "A" ),
            array ( "skill"=> "Bangladesh", "category"=> "B" ), array ( "skill"=> "Burma", "category"=> "B" ), array ( "skill"=> "Afghanistan", "category"=> "A" ), array ( "skill"=> "Antigua and Barbuda", "category"=> "A" ),
            array ( "skill"=> "Barbados", "category"=> "B" ), array ( "skill"=> "Botswana", "category"=> "B" ), array ( "skill"=> "Albania", "category"=> "A" ), array ( "skill"=> "Andorra", "category"=> "A" ),
            array ( "skill"=> "Belarus", "category"=> "B" ), array ( "skill"=> "Bolivia", "category"=> "B" ), array ( "skill"=> "Algeria", "category"=> "A" ), array ( "skill"=> "Angola", "category"=> "A" )
         );
 $listbox1=new EJ\ListBox("selectCountry");
 $fields=new EJ\ListBox\Field();
 $fields->groupBy("category")->text("skill");
 echo $listbox1->dataSource($skillset)->fields($fields)->width("100%")->render();
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