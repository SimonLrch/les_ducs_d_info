<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div class="e-tile-group">
        <div class="e-tile-column">
            <?php
            $tile1=new EJ\Tile("tile1");
            $captiontexts=array(array("text"=>"People"), array("text"=>"Play"), array("text"=>"Maps"), array("text"=>"Sports"), array("text"=>"Photo"), array("text"=>"Weather"), array("text"=>"Music"), array("text"=>"Favorites"));
            echo $tile1->imagePosition("fill")->tileSize("medium")->imageUrl("Content/images/tile/windows/people_1.png")->caption($captiontexts[0])->render();
            ?>
            <div class="e-tile-small-col-2">
                 <?php
                 $tile2=new EJ\Tile("tile2");
                 echo $tile2->imagePosition("center")->tileSize("small")->imageUrl("Content/images/tile/windows/alerts.png")->render();
                 $tile3=new EJ\Tile("tile3");
                 echo $tile3->imagePosition("center")->tileSize("small")->imageUrl("Content/images/tile/windows/bing.png")->render();
                 $tile4=new EJ\Tile("tile4");
                 echo $tile4->imagePosition("center")->tileSize("small")->imageUrl("Content/images/tile/windows/camera.png")->render();
                 $tile5=new EJ\Tile("tile5");
                 echo $tile5->imagePosition("center")->tileSize("small")->imageUrl("Content/images/tile/windows/messages.png")->render();
                 ?>
            </div>
             <?php
             $tile6=new EJ\Tile("tile6");
             echo $tile6->imagePosition("center")->tileSize("medium")->imageUrl("Content/images/tile/windows/games.png")->caption($captiontexts[1])->render();
             $tile7=new EJ\Tile("tile7");
             echo $tile7->tileSize("medium")->imageUrl("Content/images/tile/windows/map.png")->caption($captiontexts[2])->render();
             $tile8=new EJ\Tile("tile8");
             echo $tile8->imagePosition("fill")->tileSize("wide")->imageUrl("Content/images/tile/windows/sports.png")->caption($captiontexts[3])->render();
             ?>
        </div>
        <div class="e-tile-column">
             <?php
             $tile9=new EJ\Tile("tile9");
             echo $tile9->imagePosition("fill")->tileSize("medium")->imageUrl("Content/images/tile/windows/people_2.png")->caption($captiontexts[0])->render();
             $tile10=new EJ\Tile("tile10");
             echo $tile10->imagePosition("center")->tileSize("medium")->imageUrl("Content/images/tile/windows/pictures.png")->caption($captiontexts[4])->render();
             $tile11=new EJ\Tile("tile11");
             echo $tile11->imagePosition("center")->tileSize("wide")->imageUrl("Content/images/tile/windows/weather.png")->caption($captiontexts[5])->render();
             $tile12=new EJ\Tile("tile12");
             echo $tile12->imagePosition("center")->tileSize("medium")->imageUrl("Content/images/tile/windows/music.png")->caption($captiontexts[6])->render();
             $tile13=new EJ\Tile("tile13");
             echo $tile13->imagePosition("center")->tileSize("medium")->imageUrl("Content/images/tile/windows/favs.png")->caption($captiontexts[7])->render();
             ?>
        </div>
    </div>
</div>
<style>    
    .cols-sample-area {
        height: 685px!important;     
        margin:0 auto;
        float:none;
    }
	.e-tile-group{
		padding: 0;
	}
</style>
