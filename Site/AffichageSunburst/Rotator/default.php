<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $data=array(  array ( "text"=> "Colorful Night", "url"=> "Content/images/rotator/night.jpg" ),
		  array ( "text"=> "Technology", "url"=> "Content/images/rotator/tablet.jpg" ),
          array ( "text"=> "Nature", "url"=> "Content/images/rotator/nature.jpg" ),
          array ( "text"=> "Snow Fall", "url"=> "Content/images/rotator/snowfall.jpg" ),
          array ( "text"=> "Credit Card", "url"=> "Content/images/rotator/card.jpg" ),
          array ( "text"=> "Beautiful Bird", "url"=> "Content/images/rotator/bird.jpg" ),
          array ( "text"=> "Amazing Sculptures", "url"=> "Content/images/rotator/sculpture.jpg" ));
    $rotator=new EJ\Rotator("defaultrotator");
    $fields=array("text"=>"text","url"=>"url");
    echo $rotator->isResponsive(true)->dataSource($data)->fields($fields)->frameSpace("0px")->slideHeight("300")->showPlayButton(true)->render();
    ?>
</div>
<style>    
    .cols-sample-area {
        width:100%;        
        margin:0 auto;
        float:none;
    }
	li>img {
    width: 100%;
    height: 100%;
}
</style>
