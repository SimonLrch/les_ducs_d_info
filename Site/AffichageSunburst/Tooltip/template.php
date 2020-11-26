<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    
    <div class="frame">
        <div class="ctrl col-md-4" id="leftImg">
            <img class="ctrImg" src="Content/images/tooltip/template-05.png" />
            <div class="new">Delphi Succinctly</div>
        </div>
        <div class="ctrl col-md-4" id="centerImg">
            <img class="ctrImg" src="Content/images/tooltip/template-04.png" />
            <div class="new">Roslyn Succinctly</div>
        </div>
        <div class="ctrl col-md-4" id="RightImg">
            <img class="ctrImg" src="Content/images/tooltip/template-06.png" />
            <div class="new">Python Succinctly</div>
        </div>

    </div>

    <?php
    $tooltip1 =new EJ\Tooltip("leftImg");
    $pos1 = new EJ\Tooltip\Position();
    $tar1 = new EJ\Tooltip\Target();
    $stem1 = new EJ\Tooltip\Stem();
    $tar1->horizontal("center")->vertical("center");
    $stem1->horizontal("center")->vertical("bottom");
    $pos1->target($tar1)->stem($stem1);
    echo $tooltip1->width("440px")->height("200px")->content("<div class='main'> <div class='poster'> <img src='Content/images/tooltip/template-05.png' class='logo'> </div> <div class='def'> <h4> Delphi Succinctly </h4><div class='link'><div class='author'> <b> Author: </b></div> <div class='category'> Marco Breveglieri </div></div><div class='description'> Learn the fundamentals of Delphi to build a variety of solutions for many devices and platforms. <a href='#'>More...</a></div><div class='rate'> <div class='rateDef'> Rate this: </div><input class='rating'></input></div><div class='btnGroup'><button class='button1'> Download Now</button> <button class='button2'> Review Comments</button></div><div></div>")->position($pos1)->beforeOpen("onCreate")->render();
    ?>

    <?php
    $tooltip2 =new EJ\Tooltip("centerImg");
    $pos2 = new EJ\Tooltip\Position();
    $tar2 = new EJ\Tooltip\Target();
    $stem2 = new EJ\Tooltip\Stem();
    $tar2->horizontal("center")->vertical("center");
    $stem2->horizontal("center")->vertical("bottom");
    $pos2->target($tar2)->stem($stem2);
    echo $tooltip2->width("440px")->height("200px")->content("<div class='main'> <div class='poster'> <img src='Content/images/tooltip/template-04.png' class='logo'> </div> <div class='def'> <h4> Roslyn Succinctly </h4><div class='link'> <div class='author'><b> Author:</b> </div> <div class='category'> Alessandro Del Sole </div></div><div class='description'>Microsoft has only recently embraced the world of open source software, offering <a href='#'>More...</a> </div><div class='rate'><div class='rateDef'> Rate this: </div><input class='rating'></input></div><div class='btnGroup'><button class='button1'>Download Now</button> <button class='button2'> Review Comments </button></div><div></div>")->position($pos2)->beforeOpen("onCreate")->render();
    ?>
    
    <?php
    $tooltip3 =new EJ\Tooltip("RightImg");
    $pos3 = new EJ\Tooltip\Position();
    $tar3 = new EJ\Tooltip\Target();
    $stem3 = new EJ\Tooltip\Stem();
    $tar3->horizontal("center")->vertical("center");
    $stem3->horizontal("center")->vertical("bottom");
    $pos3->target($tar3)->stem($stem3);
    echo $tooltip3->width("440px")->height("200px")->content("<div class='main'> <div class='poster'> <img src='Content/images/tooltip/template-05.png' class='logo'> </div> <div class='def'> <h4> Delphi Succinctly </h4><div class='link'><div class='author'> <b> Author: </b></div> <div class='category'> Marco Breveglieri </div></div><div class='description'> Learn the fundamentals of Delphi to build a variety of solutions for many devices and platforms. <a href='#'>More...</a></div><div class='rate'> <div class='rateDef'> Rate this: </div><input class='rating'></input></div><div class='btnGroup'><button class='button1'> Download Now</button> <button class='button2'> Review Comments</button></div><div></div>")->position($pos3)->beforeOpen("onCreate")->render();
    ?>
				
</div>

<script>
function onCreate() {
    $(".rating").ejRating({ height: "30", allowReset: false, value : 4 });
    $(".button1").ejButton({ width: "120px", height: "32px", showRoundedCorner: true });
    $(".button2").ejButton({ width: "135px", height: "32px", showRoundedCorner: true });
}
        
</script>
<style>
    .cols-sample-area
    {
        width: 900px;
        margin: 0 auto;
        float: none;
    }
    h4{
        margin-top: 0px;
        margin-bottom: 2px;
    }
    #leftImg {
        margin-left: 80px;
    }
    #centerImg{
        margin-left: 80px;
    }
    #RightImg{
        margin-left: 80px;
    }
    .poster {
            
            float: left;
            box-sizing: border-box;
            padding: 4px 0px;
    }
    .new{
        text-align: center;
    }

    .frame {
        width: 100%;
        box-sizing: border-box;
        height: 430px;
    }

    .def {
            width: 280px;
            float: right;
            height: 230px;
    }
    .e-tooltip-wrap .e-tipContainer .e-tipcontent {
        padding: 4px 1px;
    }
    .e-tooltip-wrap {
        max-width: 485px;
    }

    .ctrl {
        border: 1px solid #ebebe0;
        width: 150px;
        padding: 5px;
        height: 225px;
        margin-bottom: 50px;
        float: left;
    }

    .ctrImg {
        width: 150px; 
    }

    .logo {
        float: left;
        height: 175px;
        padding-left: 10px;
    }

    .category {
        float: left;
        margin-left: 10px;
    }

    .link {
        padding: 2px;
    }



    .main {
        width: 430px;
        height: 190px;
        box-sizing: border-box;
    }

    .description {
        width: 285px;
        margin-top: 20px;
        height: 60px;
        background-color: inherit;
        line-height: 20px;
    }

    .author {
        float: left;
    }

    .rate {
        height: 50px;
        clear: both;
    }

    .e-button {
        margin-right: 10px;
    }
		
    img{
        padding-top: 8px;
    }
</style>