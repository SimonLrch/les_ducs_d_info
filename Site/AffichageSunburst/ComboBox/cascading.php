<div class="cols-sample-area">

<?php
    require_once '../EJ/AutoLoad.php';
?>

<div class="cascadding">
    <div id="control" >
        <span class="txt">Select a Country</span>
        <?php
        $country = array(
        array('countryName'=> "United States", 'countryId'=> "1" ),
        array('countryName'=> "Australia", 'countryId'=> "2" ),
        );
        $countryCombobox =new EJ\ComboBox("countryList");
        $countryField = new EJ\ComboBox\Field();
        $countryField->text("countryName")->value("countryId");
        echo $countryCombobox->dataSource($country)->fields($countryField)->width("100%")->change("onChange")->render();
        ?>
    </div> 
    <div id="binding">
        <span class="txt">Select a state</span>
        <?php
        $state = array(
        array('stateName'=> "New York", 'countryId'=> "1", 'stateId'=> "101" ),
        array('stateName'=> "Virginia", 'countryId'=> "1", 'stateId'=> "102" ),
        array('stateName'=> "Washington", 'countryId'=> "1", 'stateId'=> "103" ),
        array('stateName'=> "Queensland", 'countryId'=> "2", 'stateId'=> "104" ),
        array('stateName'=> "Tasmania", 'countryId'=> "2", 'stateId'=> "105" ),
        array('stateName'=> "Victoria", 'countryId'=> "2", 'stateId'=> "106" ),
        );
        $stateCombobox =new EJ\ComboBox("stateList");
        $stateField = new EJ\ComboBox\Field();
        $stateField->text("stateName")->value("stateId");
        echo $stateCombobox->dataSource($state)->fields($stateField)->width("100%")->enabled(false)->render();
        ?>
    </div> 
</div>
    
    
</div>

<script>

    function onChange(e) {
        listObj1 = $('#stateList').ejComboBox("instance");
        listObj1.option({ enabled: true, query: new ej.Query().where('countryId', 'equal', e.model.value) ,value:null});
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