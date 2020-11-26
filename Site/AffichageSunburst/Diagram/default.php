<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <?php
    $diagram=new EJ\Diagram("diagram1");     
    $nodes= array(getNode("NewIdea", 300, 60, 150, 60, "New idea identified", "terminator"),
                  getNode("Meeting", 300, 155, 150, 60, "Meeting with board", "process"),
                  getNode("BoardDecision", 300, 280, 150, 110, "Board decides \nwhether \nto proceed", "decision"),
                  getNode("Project", 300, 430, 150, 100, "Find Project \nmanager", "decision"),
                  getNode("End", 300, 555, 150, 60, "Implement and Deliver", "process"),
                  getNode("Decision", 550, 60, 250, 60, "Decision Process for new software ideas", "card"),
                  getNode("Reject", 550, 285, 150, 60, "Reject and write report", "process"),
                  getNode("Resources", 550, 430, 150, 60, "Hire new resources", "process"),
    );
    $connectors= array(getConnector("connector1", "NewIdea","Meeting",""),
                       getConnector("connector2", "Meeting","BoardDecision",""),
                       getConnector("connector3", "BoardDecision","Project","Yes"),
                       getConnector("connector4", "Project","End","Yes"),
                       getConnector("connector5", "BoardDecision","Reject","No"),
                       getConnector("connector6", "Project","Resources","No")
      
              
    );
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNodeLabel=new EJ\Diagram\Label();
    $defaultNodeLabel->fontColor("white");
    $defaultNode->borderColor("#1BA0E2")->fillColor("#1BA0E2")->labels(array($defaultNodeLabel));
    
    $defaultConnector=new EJ\Diagram\Connector();
    $targetDecorator=new EJ\Diagram\TargetDecorator();
    $targetDecorator->shape("arrow")->borderColor("#606060")->width("10")->height("10");
    $defaultconnectorLabel=new EJ\Diagram\Label();
    $defaultconnectorLabel->fillColor("white");
    $defaultConnector->targetDecorator($targetDecorator)->lineColor("#606060")->labels(array($defaultconnectorLabel));

    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector);
    
    echo $diagram->width("100%")->height("700px")->nodes($nodes)->pageSettings($pageSettings)->connectors($connectors)
    ->defaultSettings($defaultSettings)->enableContextMenu(false)
    ->render();
    
    

    function getNode($name, $x, $y, $width,$height, $text, $shape) {
        $node=new EJ\Diagram\Node();
        $margin=new EJ\Diagram\Margin();
        $margin->left(20)->right(20)->bottom(0)->top(0); 
        $label=new EJ\Diagram\Label();
        $label->text($text)->margin($margin); 
        if($name==="Decision")
            $node->fillColor("#858585")->borderColor("#858585");
        $node->name($name)->offsetX($x)->offsetY($y)->height($height)->width($width)->labels(array($label))->type("flow")->shape($shape);

        return $node;
    }

    function getConnector($name, $snode, $tnode,  $text) {
        $connector=new EJ\Diagram\Connector(); 
        $label=new EJ\Diagram\Label(); 
        $connector->name($name)->sourceNode($snode)->targetNode($tnode)->labels(array($label));
        return $connector;
    }
    ?>
</div>
<style>
    .cols-sample-area {
        height: 700px;
        width: 900px;
    }
</style>
