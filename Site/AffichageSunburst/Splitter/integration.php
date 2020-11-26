<div class="cols-sample-area">
<?php
require_once '../EJ/AutoLoad.php';
$split=new \EJ\Splitter("outtersplitter");
$pane1=new \EJ\Splitter\SplitPane();
$pane1->paneSize("150")->templateStart();
?>
    <div>
        <div class="cont">
           <h3 class="h3">FRENCH CITIES</h3>
            <?php  
            $localData = array(
                    array("id"=>1, "name"=>"PARIS", "hasChild"=>true ),
                    array("id"=>"paris", "pid"=>1, "name"=>"Speciality" ),
                    array("id"=>7, "name"=>"CAMEMBERT", "hasChild"=>true),
                    array("id"=>"camembert", "pid"=>7, "name"=>"Speciality"),
                    array("id"=>9, "name"=>"GRENOBLE", "hasChild"=>true),
                    array("id"=>"grenoble", "pid"=>9, "name"=>"Speciality"));
            $fields = new EJ\TreeView\Field();
            $fields->id("id")->text("name")->parentId("pid")->hasChild("hasChild")->dataSource($localData);
            $tree =new EJ\TreeView("tree");
            echo $tree->fields($fields)->nodeSelect("treeClicked")->render();
            ?>
        </div>
    </div>
    <?php
    $pane1->templateEnd();
    
    $pane2=new \EJ\Splitter\SplitPane();
    $pane2->templateStart();
    ?>
    <div>
         <div class="cont">
            <div class="_content">
                Select any city from the tree to show the description.
            </div>
            <div class="paris spe">
                <h3>PARIS</h3>
                Paris, the city of lights and love - this short guide is full of ideas for how to make the most of the romanticism...
            </div>
            <div class="camembert spe">
                <h3>CAMEMBERT</h3>
                The village in the Orne departement of Normandy where the famous French cheese is originated from.
            </div>
            <div class="grenoble spe">
                <h3>GRENOBLE</h3>
                The capital city of the French Alps and a major scientific center surrounded by many ski resorts, host of the Winter Olympics in 1968.
            </div>
        </div>
    </div>
    <?php
    $pane2->templateEnd(); 
    
    $pane3=new \EJ\Splitter\SplitPane();    
    $split->addItem($pane1,$pane2);
    $prop=array(array("paneSize"=>"250"));
    echo $split->height("300px")->width("500px")->properties($prop)->render(); 

    ?>
</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
    .cont {
            padding: 20px;
            min-width: 50px;
        }

            .cont #treeView_Container {
                margin-bottom: 0;
                border: none;
            }

        .h3 {
            font-size: 14px;
            margin: 0;
        }

        .spe {
            display: none;
        }
</style>
 <script type="text/javascript">

     function treeClicked(sender, args) {
         if (sender.currentElement.has("ul").length<=0) {
                 var content = $('.' + sender.currentElement[0].id).html();
                 $('._content').html(content);
             }
     }
    </script>
