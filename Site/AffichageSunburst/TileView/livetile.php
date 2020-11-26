<div class="cols-sample-area">


    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
        <div class="e-tile-group">
            <div class="e-tile-column">
                <?php 
                $livetiledata=array(array("enabled"=>true,"updateInterval"=>3000,"type"=>"flip","imageUrl"=>array('Content/images/tile/windows/alerts.png','Content/images/tile/windows/bing.png')),
                    array("enabled"=>true,"updateInterval"=>3500,"type"=>"flip","imageUrl"=>array('Content/images/tile/windows/alerts.png','Content/images/tile/windows/bing.png')),
                    array("enabled"=>true,"updateInterval"=>5000,"type"=>"slide","imageUrl"=>array('Content/images/tile/windows/people_1.png','Content/images/tile/windows/people_2.png','Content/images/tile/windows/people_3.png')),
                    array("enabled"=>true,"updateInterval"=>4000,"type"=>"slide","imageUrl"=>array('Content/images/tile/windows/pictures.png','Content/images/tile/windows/photo_1.png','Content/images/tile/windows/photo_2.png','Content/images/tile/windows/pictures.png','Content/images/tile/windows/photo_1.png')),
                    array("enabled"=>true,"type"=>"carousel","imageUrl"=>array('Content/images/tile/windows/weather.png','Content/images/tile/windows/weather_1.png','Content/images/tile/windows/weather_2.png')));
                $captiontexts=array(array("text"=>"People"), array("text"=>"Play"), array("text"=>"Maps"), array("text"=>"Sports"), array("text"=>"Photo"), array("text"=>"Weather"), array("text"=>"Music"), array("text"=>"Favorites"));
                $tile1=new EJ\Tile("tile1");
                echo $tile1->tileSize("medium")->imagePosition("center")->caption($captiontexts[1])->imageUrl("Content/images/tile/windows/games.png")->render();
                ?>
                <div class="e-tile-small-col-2">
                    <?php 
                    $tile2=new EJ\Tile("tile2");
                    echo $tile2->tileSize("small")->imagePosition("center")->imageUrl("Content/images/tile/windows/alerts.png")->render();
                    $tile3=new EJ\Tile("tile3");
                    echo $tile3->tileSize("small")->imagePosition("center")->liveTile($livetiledata[0])->render();
                    $tile4=new EJ\Tile("tile4");
                    echo $tile4->tileSize("small")->liveTile($livetiledata[1])->render();
                    $tile5=new EJ\Tile("tile5");
                    $badgevalue=array("enabled"=>"true","value"=>"10");
                    echo $tile5->tileSize("small")->imagePosition("center")->badge($badgevalue)->imageUrl("Content/images/tile/windows/messages.png")->render();
                    ?>
                </div>
                <?php 
                $tile6=new EJ\Tile("tile6");
                echo $tile6->tileSize("medium")->liveTile($livetiledata[2])->imagePosition("fill")->caption($captiontexts[0])->render();
                $tile7=new EJ\Tile("tile7");
                echo $tile7->tileSize("medium")->liveTile($livetiledata[3])->imagePosition("center")->caption($captiontexts[4])->render();
                $tile8=new EJ\Tile("tile8");
                echo $tile8->tileSize("wide")->liveTile($livetiledata[4])->imagePosition("center")->caption($captiontexts[5])->render();
                ?>
            </div>
        </div>
    </div>

<style>    
    .cols-sample-area { 
        width: 360px!important;
        height: 537px!important;
        margin:0 auto;
        float:none;
    }
	.e-tile-group{
		padding: 0;
	}
</style>

