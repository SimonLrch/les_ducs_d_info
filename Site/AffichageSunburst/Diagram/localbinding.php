<?php
require_once '../EJ/AutoLoad.php';

?>

<script>
    //Binds Custom JSON with node
    function nodeTemplate(diagram, node) {
        node.labels[0].text = node.Role;
        node.fillColor = node.Color;
    }

</script>
<div class="cols-sample-area">
    <?php

    $localData = array(
                array( "Id"=> "parent", "Role"=> "Marketing Director", "Color"=> "#f79663" ),
                array( "Id"=> "1", "Role"=> "Manager", "TeamLead"=> "parent", "Color"=> "#f79663" ),
                array( "Id"=> 3, "Role"=> "Fundraiser", "TeamLead"=> "1", "Color"=> "#5cc3b5" ),
                array( "Id"=> 4, "Role"=> "Programmer", "TeamLead"=> "1", "Color"=> "#5cc3b5" ),
                array( "Id"=> 6, "Role"=> "Communicator", "TeamLead"=> 3, "Color"=> "#67a961" ),
                array( "Id"=> 7, "Role"=> "Advertisor", "TeamLead"=> 3, "Color"=> "#67a961" ),
                array( "Id"=> 8, "Role"=> "Funding Officer", "TeamLead"=> 3, "Color"=> "#67a961" ),
                array( "Id"=> 9, "Role"=> "Inter", "TeamLead"=> 6, "Color"=> "#67a961" ),
                array( "Id"=> 10, "Role"=> " Officer", "TeamLead"=> 7, "Color"=> "#67a961" ),
                array( "Id"=> 11, "Role"=> " Officer", "TeamLead"=> 7, "Color"=> "#67a961" ),
                array( "Id"=> 12, "Role"=> " Asst.Director", "TeamLead"=> 4, "Color"=> "#e9b833" ),
                array( "Id"=> 13, "Role"=> " Asst.Director", "TeamLead"=> 4, "Color"=> "#e9b833" ),
                array( "Id"=> 14, "Role"=> " Asst.Director", "TeamLead"=> 4, "Color"=> "#e9b833" ) 
                   );


    $diagram=new EJ\Diagram("diagram1");     
    
    $layout=new EJ\Diagram\Layout();
    $margin=new EJ\Diagram\Margin();
    $margin->top(50);
    $layout->type("hierarchicaltree")->horizontalSpacing(30)->verticalSpacing(40)->margin($margin);
    
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNodeLabel=new EJ\Diagram\Label();
    $defaultNodeLabel->name("label1")->fontColor("#ffffff")->fontSize(12);
    $defaultNode->width(110)->height(40)->borderColor("transparent")->fillColor("#253737")->labels(array($defaultNodeLabel))->constraints("None");
    
    $defaultConnector=new EJ\Diagram\Connector(); 
    $segment=new EJ\Diagram\Segment();
    $segment->type("orthogonal");
    $targetDecorator=new EJ\Diagram\TargetDecorator();
    $targetDecorator->shape("arrow")->borderColor("#4F4F4F")->fillColor("#4F4F4F")->width("10")->height("10");
    $defaultConnector->lineColor("#000000")->segments(array($segment))->targetDecorator($targetDecorator)->constraints("None");

    $selectedItems=new EJ\Diagram\SelectedItem();
    $selectedItems->constraints("None");

    $dataSourceSettings= new EJ\Diagram\DataSourceSetting();
    $dataSourceSettings->dataSource($localData)->id("Id")->parent("TeamLead");

    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector); 
    
    $snapSettings =new EJ\Diagram\SnapSetting();
    $snapSettings->snapConstraints("None");
    
    echo $diagram->width("100%")->height("550px")
    
    ->layout($layout)->defaultSettings($defaultSettings)->selectedItems($selectedItems)->nodeTemplate("nodeTemplate")->dataSourceSettings($dataSourceSettings)
    ->pageSettings($pageSettings)->tool("ZoomPan")->snapSettings($snapSettings)->render();
    
    
    ?>
</div>


<style>
    .cols-sample-area {
        height: 550px;
        width: 900px;
    }
</style>
