<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $data = array( array( "Texts"=> "Discover Music" ),
             array( "Texts"=>"Sales and Events" ),
             array( "Texts"=> "Categories" ),
             array( "Texts"=> "MP3 Albums" ),
             array( "Texts"=> "More in Music" ));
    $fields=array("text"=> "Texts");
    $listview1=new EJ\ListView("defaultlistview");
     echo $listview1->fieldSettings($fields)->dataSource($data)->width(400)->render();
    ?>
</div>
<style>    
    .cols-sample-area {
        width:600px;        
        margin:0 auto;
        float:none;
    }
</style>
