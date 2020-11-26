<?php
require_once '../EJ/AutoLoad.php';

?>

<script>
    //Binds Custom JSON with node
    function nodeTemplate(diagram, node) {
        node.labels[0].text = node.Function;
        node.fillColor = node.Color;
        if (node.Id == "parent") { node.fillColor = "#3484bb"; }
        if (node.Phase == "parent") { node.fillColor = "#9ace7f"; }
        if (node.Phase == "1") { node.fillColor = "#9264aa"; }
        if (node.Phase == "2") { node.fillColor = "#9264aa"; }
        if (node.Phase == "3") { node.fillColor = "#9264aa"; }
    }
    
    function getLayoutInfo(diagram, node, options) {
        if (!options.hasSubTree) {
            options.orientation = node.addInfo.orientation;
            options.type = node.addInfo.type;

        }
    }

</script>
<div class="cols-sample-area">
    <?php

    $localData = array(
                array( "Id"=> "parent", "Function"=> "Project Management" ),
                  array( "Id"=> "1", "Function"=> "R&D Team", "Phase"=> "parent" ),
				  array( "Id"=> "2", "Function"=> "HR Team", "Phase"=> "parent" ),
				  array( "Id"=> "3", "Function"=> "Sales Team", "Phase"=> "parent" ),
                  array( "Id"=> "4", "Function"=> "Philosophy", "Phase"=> "1" ),
                  array( "Id"=> "5", "Function"=> " Organization", "Phase"=> "1" ),
                  array( "Id"=> "6", "Function"=> "Technology", "Phase"=> "1" ),
                  array( "Id"=> "7", "Function"=> " Funding", "Phase"=> "1" ),
                  array( "Id"=> "8", "Function"=> "Resource", "Phase"=> "1" ),
                  array( "Id"=> "9", "Function"=> "Targeting", "Phase"=> "1" ),
                  array( "Id"=> "10", "Function"=> "Evaluation", "Phase"=> "1" ),
				  array( "Id"=> "11", "Function"=> "Recruitment", "Phase"=> "2" ),
				  array( "Id"=> "12", "Function"=> "Relation", "Phase"=> "2" ),
				  array( "Id"=> "13", "Function"=> "Design", "Phase"=> "3" ),
				  array( "Id"=> "14", "Function"=> "Operation", "Phase"=> "3" ),
                  array( "Id"=> "15", "Function"=> "Support", "Phase"=> "3" ),
				  array( "Id"=> "16", "Function"=> "Quality", "Phase"=> "3" ),
                  array( "Id"=> "17", "Function"=> "Interaction", "Phase"=> "3" ),
                  array( "Id"=> "18", "Function"=> "Support", "Phase"=> "3" ),
                  array( "Id"=> "19", "Function"=> "Coordination", "Phase"=> "3" )
                   );

    $addInfo =array("orientation"=>"vertical", "type"=>"alternate");
    $diagram=new EJ\Diagram("diagram1");     
    
    $layout=new EJ\Diagram\Layout();
    $margin=new EJ\Diagram\Margin();
    $margin->top(50);
    $layout->type("organizationalchart")->margin($margin)->getLayoutInfo("getLayoutInfo");
    
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNodeLabel=new EJ\Diagram\Label();
    $defaultNodeLabel->fontColor("#ffffff");
    $defaultNode->width(100)->height(40)->borderColor("black")->borderWidth(1)->addInfo($addInfo)->constraints("Select|PointerEvents")->fillColor("#88C65C")->labels(array($defaultNodeLabel));
    
    $defaultConnector=new EJ\Diagram\Connector(); 
    $segment=new EJ\Diagram\Segment();
    $segment->type("orthogonal");
    $targetDecorator=new EJ\Diagram\TargetDecorator();
    $targetDecorator->shape("none");
    $defaultConnector->lineColor("#000000")->segments(array($segment))->constraints("None")->targetDecorator($targetDecorator);

    $selectedItems=new EJ\Diagram\SelectedItem();
    $selectedItems->constraints("~Rotator");

    $dataSourceSettings= new EJ\Diagram\DataSourceSetting();
    $dataSourceSettings->dataSource($localData)->id("Id")->parent("Phase");

    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector); 
    
    $snapSettings =new EJ\Diagram\SnapSetting();
    $snapSettings->snapConstraints("None");
    
    echo $diagram->width("100%")->tool(8)->height("500px")
    ->tool(8)
    ->layout($layout)
    ->defaultSettings($defaultSettings)
    ->selectedItems($selectedItems)
    ->nodeTemplate("nodeTemplate")
    ->dataSourceSettings($dataSourceSettings)
    ->pageSettings($pageSettings)
    ->snapSettings($snapSettings)
    ->render();
     
    
    ?>
</div>


<style>
    .cols-sample-area {
        height: 500px;
        width: 700px;
    }
</style>
