<div class="cols-sample-area">

<?php
    require_once '../EJ/AutoLoad.php';
?>

<div class="cascadding">
    <div id="control" >
        <span class="txt">Select Group</span>
        <?php
        $groups = array(
        array('parentId'=> "a", 'text'=> "Group A" ),
        array('parentId'=> "b", 'text'=> "Group B" ),
        array('parentId'=> "c", 'text'=> "Group C" ),
        array('parentId'=> "d", 'text'=> "Group D" ),
        array('parentId'=> "e", 'text'=> "Group E" ),
        );
        $dropdownlist1 =new EJ\DropDownList("groupsList");
        $fields1 = new EJ\DropDownList\Field();
        $fields1->text("text")->value("parentId");
        echo $dropdownlist1->dataSource($groups)->fields($fields1)->width("100%")->cascadeTo("countryList")->change("onChange")->render();
        ?>
    </div> 
    <div id="binding">
        <span class="txt">Select Country</span>
        <?php
        $countries = array(
        array('value'=> 11, 'parentId'=> "a", 'text'=> "Algeria" ),
        array('value'=> 12, 'parentId'=> "a", 'text'=> "Armenia" ),
        array('value'=> 13, 'parentId'=> "a", 'text'=> "Bangladesh" ),
        array('value'=> 14, 'parentId'=> "a", 'text'=> "Cuba" ),
        array('value'=> 15, 'parentId'=> "b", 'text'=> "Denmark" ),
        array('value'=> 16, 'parentId'=> "b", 'text'=> "Egypt" ),
        array('value'=> 17, 'parentId'=> "c", 'text'=> "Finland" ),
        array('value'=> 18, 'parentId'=> "c", 'text'=> "India" ),
        array('value'=> 19, 'parentId'=> "c", 'text'=> "Malaysia" ),
        array('value'=> 20, 'parentId'=> "d", 'text'=> "New Zealand" ),
        array('value'=> 21, 'parentId'=> "d", 'text'=> "Norway" ),
        array('value'=> 22, 'parentId'=> "d", 'text'=> "Poland" ),
        array('value'=> 23, 'parentId'=> "e", 'text'=> "Romania" ),
        array('value'=> 24, 'parentId'=> "e", 'text'=> "Singapore" ),
        array('value'=> 25, 'parentId'=> "e", 'text'=> "Thailand" ),
        array('value'=> 26, 'parentId'=> "e", 'text'=> "Ukraine" ),
        );
        $dropdownlist1 =new EJ\DropDownList("countryList");
        echo $dropdownlist1->dataSource($countries)->width("100%")->enabled(false)->render();
        ?>
    </div> 
</div>
    
    
</div>

<script>
var ctry = $('#countryList').data("ejDropDownList");
    function onChange() {
            var ctry = $('#countryList').data("ejDropDownList");
            ctry.setModel({enabled:true});
            ctry.element.val("");
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