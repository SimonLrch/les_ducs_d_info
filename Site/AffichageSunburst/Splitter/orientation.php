<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$split=new \EJ\Splitter("outtersplitter");
$pane1=new \EJ\Splitter\SplitPane();
$pane1->paneSize("150")->templateStart();
?>
    <div>
        <div>Pane 1 </div>
    </div>
    <?php
    $pane1->templateEnd();
    
    $pane2=new \EJ\Splitter\SplitPane();
    $pane2->templateStart();
    ?>
    <div>
        <div>Pane 2 </div>
    </div>
    <?php
    $pane2->templateEnd(); 
    
    $pane3=new \EJ\Splitter\SplitPane();    
    $split->addItem($pane1,$pane2);
    $prop=array(array("paneSize"=>"150"));
    echo $split->height("400px")->width("450px")->properties($prop)->render(); 

    ?>
</div>
<div id="property-window" class="box wide">
<div class="row">
    <div class="col-md-6">Select orientation</div>
    <div class="col-md-6">
        <div id="dropdown">
            <ul>
                <li value="vertical">Vertical</li>
                <li value="horizontal">Horizontal</li>
            </ul>
        </div>
        <?php 
        $ddl=new EJ\DropDownList("dropdwn");
        echo $ddl->width("120px")->targetID("dropdown")->selectedIndex(1)->change("onValueChange")->render();
        ?>
    </div>
</div>
</div>
<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
</style>
 <script type="text/javascript">

     function onValueChange(args) {
         var target = $('#outtersplitter').data("ejSplitter");
         if (args.value == "vertical") {
             $("#outtersplitter").ejSplitter({
                 orientation:"vertical"
             });
         }
         if (args.value == "horizontal") {
             $("#outtersplitter").ejSplitter({
                 orientation: "horizontal"
             });
         }
     }
    </script>