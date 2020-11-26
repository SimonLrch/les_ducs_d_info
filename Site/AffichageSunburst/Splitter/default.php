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
    echo $split->height("400px")->width("500px")->properties($prop)->render(); 

?>
</div>
<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
</style>