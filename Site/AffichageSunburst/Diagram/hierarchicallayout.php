<?php
require_once '../EJ/AutoLoad.php';

?>

<script>
    //Binds Custom JSON with node
    function nodeTemplate(diagram, node) {
        node.labels[0].text = node.Name;
    }

</script>
<div class="cols-sample-area">
    <?php

    $localData = array(
                array("Name"=>"Diagram", "fillColor"=>"#916DAF" ),
                array("Name"=>"Layout", "Category"=>"Diagram"),
                array("Name"=>"Tree Layout", "Category"=>"Layout"),
                array("Name"=>"Organizational Chart", "Category"=>"Layout"),
                array("Name"=>"Hierarchical Tree", "Category"=>"Tree Layout"),
                array("Name"=>"Radial Tree", "Category"=>"Tree Layout"),
                array("Name"=>"Mind Map", "Category"=>"Hierarchical Tree"),
                array("Name"=>"Family Tree", "Category"=>"Hierarchical Tree"),
                array("Name"=>"Management", "Category"=>"Organizational Chart"),
                array("Name"=>"Human Resource", "Category"=>"Management"),
                array("Name"=>"University", "Category"=>"Management"),
                array("Name"=>"Business", "Category"=>"Management"),
                   );


    $diagram=new EJ\Diagram("diagram1");     
    
    $layout=new EJ\Diagram\Layout();
    $margin=new EJ\Diagram\Margin();
    $margin->top(50);
    $layout->type("hierarchicaltree")->horizontalSpacing(25)->verticalSpacing(35)->margin($margin);
    
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNodeLabel=new EJ\Diagram\Label();
    $defaultNodeLabel->name("label1")->fontColor("white")->fontSize(12);
    $defaultNode->width(100)->height(40)->borderColor("black")->borderWidth(1)->constraints("Select|PointerEvents")->fillColor("#88C65C")->labels(array($defaultNodeLabel));
    
    $defaultConnector=new EJ\Diagram\Connector(); 
    $segment=new EJ\Diagram\Segment();
    $segment->type("orthogonal");
    $defaultConnector->lineColor("#000000")->constraints("None")->segments(array($segment));

    $selectedItems=new EJ\Diagram\SelectedItem();
    //$selectedItems->constraints("~Rotator");

    $dataSourceSettings= new EJ\Diagram\DataSourceSetting();
    $dataSourceSettings->dataSource($localData)->id("Name")->parent("Category");

    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector); 
    
    $snapSettings =new EJ\Diagram\SnapSetting();
    $snapSettings->snapConstraints("None");
    
    $selectedItems=new EJ\Diagram\SelectedItem();
    $selectedItems->constraints("~Rotator");
    echo $diagram->width("100%")->tool(8)->height("500px")->layout($layout)
    ->defaultSettings($defaultSettings)->selectedItems($selectedItems)->snapSettings($snapSettings)->selectedItems($selectedItems)->nodeTemplate("nodeTemplate")->dataSourceSettings($dataSourceSettings)->pageSettings($pageSettings)->render();
     
    
    ?>
</div>


<style>
    .cols-sample-area {
        height: 500px;
        width: 700px;
    }
</style>
