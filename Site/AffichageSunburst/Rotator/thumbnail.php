<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <ul id="thumbElement" style="display: none">
        <li>
            <img src="Content/images/rotator/green.jpg" title="green" /></li>
        <li>
            <img src="Content/images/rotator/snow.jpg" title="snow" /></li>
        <li>
            <img src="Content/images/rotator/wheat.jpg" title="wheat" /></li>
        <li>
            <img src="Content/images/rotator/tablet.jpg" title="tablet" /></li>
        <li>
            <img src="Content/images/rotator/sea.jpg" title="sea" /></li>
        <li>
            <img src="Content/images/rotator/bread.jpg" title="bread" /></li>
        <li>
            <img src="Content/images/rotator/snowfall.jpg" title="snowfall" /></li>
    </ul>
<?php
    $data=array(  array ( "title"=> "Green", "url"=> "Content/images/rotator/green.jpg" ),
		  array ( "text"=> "Snow", "url"=> "Content/images/rotator/snow.jpg" ),
          array ( "text"=> "Whear", "url"=> "Content/images/rotator/wheat.jpg" ),
          array ( "text"=> "Tablet", "url"=> "Content/images/rotator/tablet.jpg" ),
          array ( "text"=> "Sea", "url"=> "Content/images/rotator/sea.jpg" ),
          array ( "text"=> "Bread", "url"=> "Content/images/rotator/bread.jpg" ),
          array ( "text"=> "Snow fall", "url"=> "Content/images/rotator/snowfall.jpg" ));
    $rotator=new EJ\Rotator("thumbrotator");
    $fields=array("text"=>"text","url"=>"url");
    echo $rotator->dataSource($data)->fields($fields)->frameSpace("0px")->slideHeight("300")
        ->showPlayButton(true)->enableAutoPlay(false)->thumbnailSourceID("thumbElement")->animationType("slide")
        ->displayItemsCount(1)->pagerPosition("outside")->slideWidth("90%")->isResponsive(true)->showThumbnail(true)->circularMode(true)->allowKeyboardNavigation(true)->render();
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
