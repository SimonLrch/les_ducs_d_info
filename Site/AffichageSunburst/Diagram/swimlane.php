<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    <div class="symbolpalette_section">
        <?php
        
        $symbolpalette = new EJ\SymbolPalette("symbolpalette");
        
        function createPaletteNode($name,$shape,$type){
            $node = new EJ\Diagram\Node();
            $height = 70; $width = 70; $offsetX = 20; $offsetY = 20;
            if($shape=='rectangle'){
                $height = 45;
                $offsetY = 45/2;
                $offsetX = 70 /2;
            }
            $node->name($name)->height($height)->width($width)->offsetX($offsetX)->offsetY($offsetY)
            ->fillColor("white")->borderWidth(1.5)->type($type)->shape($shape);
            return $node;
        }
        
        function createPaletteConnector($name,$type){
           $connector = new EJ\Diagram\Connector();
           $segment = new EJ\Diagram\Segment();
           $segment->type($type);
           $sPoint = new EJ\Diagram\SourcePoint();
           $sPoint->x(0)->y(0);
           $tPoint = new EJ\Diagram\SourcePoint();
           $tPoint->x(40)->y(40);
           $targetDecorator = new EJ\Diagram\TargetDecorator();
           $targetDecorator->shape("arrow")->borderColor("#A9A9A9")->fillColor("#A9A9A9");
           $connector->name($name)->segments(array($segment))->sourcePoint($sPoint)->targetPoint($tPoint)->targetDecorator($targetDecorator)->lineWidth(2)->lineColor("#A9A9A9");  
           return $connector;
        }
        
        function createPalette($name){
            $palette = new EJ\SymbolPalette\Palette();
            $items = array();
            if($name =='Flow Shapes'){
                $items = array(
                  createPaletteNode("Rectangle","rectangle","basic"),
                  createPaletteNode("Ellipse","ellipse","basic"),
                  createPaletteNode("Process","process","flow"),
                  createPaletteNode("decision","decision","flow")
                );
            }
            else if($name == 'Connectors'){
                $items = array(
                  createPaletteConnector("Link1","straight"),
                  createPaletteConnector("Link2","orthogonal")
                );
            }
            $palette->name($name)->expanded(true)->items($items);
            return $palette;
        }
        $palettes = array(
          createPalette("Flow Shapes"),
          createPalette("Connectors")  
        );
        
        echo $symbolpalette->diagramId("diagram1")
        ->palettes($palettes)->height("100%")->width("100%")
        ->paletteItemWidth(50)->paletteItemHeight(50)
        ->previewWidth(100)->previewHeight(100)
        ->showPaletteItemText(false)
        ->render();
        
        ?>
    </div>
    <div class="diagram_section">
    <?php
    $diagram=new EJ\Diagram("diagram1");     
    $nodes= array(
        createSwimlane()
    );
    $connectors= array(
        createConnection("connector1", "Order", "selectItemaddcart"),
        createConnection("connector2", "selectItemaddcart", "paymentondebitcreditcard"),
        createConnection("connector3", "paymentondebitcreditcard", "getmaildetailaboutorder"),
        createConnection("connector4", "getmaildetailaboutorder", "pakingitem"),
        createConnection("connector5", "pakingitem", "sendcourieraboutaddress"),
        createConnection("connector6", "sendcourieraboutaddress", "deliveryonthataddress"),
        createConnection("connector7", "deliveryonthataddress", "getitItem")          
    );
    $pageSettings=new EJ\Diagram\PageSetting();
    $pageSettings->scrollLimit("diagram"); 

    $defaultNode=new EJ\Diagram\Node();
    $defaultNodeLabel=new EJ\Diagram\Label();
    $defaultNodeLabel->fontSize(11);
    $defaultNode->width(100)->height(40)->fillColor("white")->labels(array($defaultNodeLabel));
    
    $defaultConnector=new EJ\Diagram\Connector();
    $targetDecorator=new EJ\Diagram\TargetDecorator();
    $targetDecorator->shape("arrow")->borderColor("#606060")->width("10")->height("10");
    $defaultconnectorLabel=new EJ\Diagram\Label();
    $segment = new EJ\Diagram\Segment();
    $segment->type("orthogonal");
    $defaultConnector->targetDecorator($targetDecorator)->lineColor("#606060")->labels(array($defaultconnectorLabel))->segments(array($segment));

    $defaultSettings=new EJ\Diagram\DefaultSetting();
    $defaultSettings->node($defaultNode)->connector($defaultConnector);
    $selectedItems=new EJ\Diagram\SelectedItem();
 

    echo $diagram->width("100%")
    ->height("600px")
    ->nodes($nodes)
    ->pageSettings($pageSettings)
    ->connectors($connectors)
    ->defaultSettings($defaultSettings)
    ->enableContextMenu(false)
    ->selectedItems($selectedItems)
    ->render();
    
    
    function createSwimlane() {
        $node = new EJ\Diagram\Node();
        $swimlaneheader = new EJ\Diagram\Label();
        $darkColor = "#C7D4DF";
        $lightColor = "#f5f5f5";
        $swimlaneheader->text("ONLINE PURCHASE STATUS")->fillColor($darkColor)->fontSize(11);
        $lanes = array(
            createLane("stackCanvas1","CUSTOMER"),
            createLane("stackCanvas2","ONLINE"),
            createLane("stackCanvas3","SHOP"),
            createLane("stackCanvas4","DELIVERY") 
        );
        $phases = array(
            createPhase("phase1",200),
            createPhase("phase2",500)
        );
        $node->type("swimlane")->name("swimlane")->header($swimlaneheader)
                  ->fillColor($lightColor)->orientation("horizontal")
                  ->offsetX(350)->offsetY(290)
                  ->height(100)->width(650)
                  ->lanes($lanes)
                  ->phases($phases) 
                  ->phaseSize(20);
        return $node;
    }
    
    function createPhase($name, $offset){
        $phase = new EJ\Diagram\Phase();
        $label=new EJ\Diagram\Label();
        $label->text("Phase");
        $phase->name($name)->offset(200)->lineWidth(1)
        ->lineDashArray("3,3")->lineColor("#606060")
        ->label($label);
        return $phase;  
    }
    
    function createLane($name, $headerText){
        $lane = new EJ\Diagram\Lane();
        $darkColor = "#C7D4DF";
        $lightColor = "#f5f5f5";
        $laneHeader = new EJ\Diagram\Label();
        $laneHeader->text($headerText)->width(50)->fillColor($darkColor)->fontSize(11);
        $children = array();
        switch($name){
            case "stackCanvas1":
            $children = array(
                getNode("Order",60,20,"ORDER","path")
            );
            break;
            case "stackCanvas2":
                $children =array(
                    getNode("selectItemaddcart",190,20,'Select item\nAdd cart',""),
                    getNode("paymentondebitcreditcard",350,20,'Payment on\nDebit/Credit Card',"")
                );
            break;
            case "stackCanvas3":
                $children =array(
                    getNode("getmaildetailaboutorder",190,20,'Get mail detail\nabout order',""),
                    getNode("pakingitem",350,20,"Paking item","")
                );
            break;
            case "stackCanvas4":
                $children =array(
                    getNode("sendcourieraboutaddress",190,20,'Send Courier\n about Address',""),
                    getNode("deliveryonthataddress",350,20,'Delivery on that\n Address',""),
                    getNode("getitItem",500,20,'GET IT ITEM',"path")
                );
            break;
        }
        $lane->name($name)->header($laneHeader)->fillColor("#f5f5f5")->height(120)->children($children);
        return $lane;
    }
    
    function getNode($name, $x, $y, $text, $shape) {
        $node = new EJ\Diagram\Node();
        $label=new EJ\Diagram\Label();
        $label->text($text);
        if($shape=='path'){
            $pathData = "M 120 24.9999 C 120 38.8072 109.642 50 96.8653 50 L 23.135 50 C 10.3578 50 0 38.8072 0 24.9999 L 0 24.9999 C 0 11.1928 10.3578 0 23.135 0 L 96.8653 0 C 109.642 0 120 11.1928 120 24.9999 Z";
            $node->name($name)
            ->marginLeft($x)
            ->marginTop($y)
            ->labels(array($label))
            ->type("basic")
            ->shape($shape)
            ->pathData($pathData);   
        }
        else{
            $node->name($name)
            ->marginLeft($x)
            ->marginTop($y)
            ->labels(array($label))
            ->type("basic");
        }
        return $node;
    }
    

    function createConnection($name, $snode, $tnode) {
        $connector=new EJ\Diagram\Connector();  
        $connector->name($name)->sourceNode($snode)->targetNode($tnode);
        return $connector;
    }
    ?>
    </div>
</div>
<style>
    .cols-sample-area {
        height: 600px;
        width: 1000px;
    }
    .symbolpalette_section {
        width: 250px;
        height: 600px;
        float: left;
    }
    .diagram_section {
        width: 700px;
        height: 600px;
        float: left;
    }   
</style>
