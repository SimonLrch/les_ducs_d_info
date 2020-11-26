<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $localData = array(
                    array("id"=>1, "name"=>"Fiction Book Lists", "hasChild"=>true, "expanded"=>true ),
                    array("id"=>2, "pid"=>1, "name"=>"To Kill a Mockingbird" ),
                    array("id"=>3, "pid"=>1, "name"=>"Pride and Prejudice" ),
                    array("id"=>4, "pid"=>1, "name"=>"Harry Potter" ),
                    array("id"=>6, "pid"=>1, "name"=>"The Hobbit" ),
                    array("id"=>7, "name"=>"Mystery Book Lists", "hasChild"=>true, "expanded"=>true ),
                    array("id"=>8, "pid"=>7, "name"=>"And Then There Where None" ),
                    array("id"=>9, "pid"=>7, "name"=>"Angles & Demons" ),
                    array("id"=>10, "pid"=>7, "name"=>"In Cold Blood" ),
                    array("id"=>11, "pid"=>7, "name"=>"The Name of the Rose" ),
                    );
    $treeview = new \EJ\TreeView("treeView");
    $fields = new EJ\TreeView\Field();
    $fields->id("id")->text("name")->parentId("pid")->hasChild("hasChild")->dataSource($localData)->expanded("expanded");
    echo $treeview->fields($fields)->render();
    ?>
    <?php
    $tooltip =new EJ\Tooltip("treeView");
    $pos = new EJ\Tooltip\Position();
    $tar = new EJ\Tooltip\Target();
    $stem = new EJ\Tooltip\Stem();
    $tar->horizontal("right")->vertical("center");
    $stem->horizontal("left")->vertical("center");
    $pos->target($tar)->stem($stem);
    echo $tooltip->width("230px")->height("65px")->containment(".cols-sample-area")->target(".CanSelect")->position($pos)->beforeOpen("onOpen")->render();
    ?>
				
</div>

<script>
    var target;
    target = $("#treeView").data("ejTooltip");
    

    function onOpen(args){
        target = $("#treeView").data("ejTooltip");
                var emp = [
                    { book: "To Kill a Mockingbird", category: "Fiction" },
                    { book: "Pride and Prejudice", category: "Fiction" },
                    { book: "Harry Potter", category: "Fiction" },
                    { book: "The Hobbit", category: "Fiction" },
                    { book: "And Then There Where None", category: "Mystery" },
                    { book: "Angles & Demons", category: "Mystery" },
                    { book: "In Cold Blood", category: "Mystery" },
                    { book: "The Name of the Rose", category: "Mystery" },
                ];
                for (i = 0; i < 8; i++) {
                    if ($(args.event.target).text().trim() == emp[i].book)
                        var template = '<div class="main"> <img class="logo" src="Content/images/tooltip/book.png" /> <div class="des"> <div class="artists"> Category:' + emp[i].category + '</div><div class="song">' + emp[i].book + '</div></div> </div>';
                    else if($(args.event.target).text().trim() == "Fiction Book Lists")
                        var template = '<div class="main"> <img class="logo" src="Content/images/tooltip/book.png" /> <div class="des"> <div class="artists"> Category&nbsp;:&nbsp; Fiction </div><div class="song"> Please choose your books</div></div> </div>';
                    else if($(args.event.target).text().trim() == "Mystery Book Lists")
                        var template = '<div class="main"> <img class="logo" src="Content/images/tooltip/book.png" /> <div class="des"> <div class="artists"> Category&nbsp;:&nbsp; Mystery </div><div class="song"> Please choose your books</div></div> </div>';
                }
                target.setModel({ content: template });
            }
        
</script>
<style>
    .cols-sample-area
    {
        width: 550px;
        margin: 0 auto;
        float: none;
		height: 450px;
    }
    .e-tooltip-wrap {
        background-color: #ffcccc;
    }
    .e-tooltip-wrap .e-arrowTipInner{
        border-color: #ffcccc transparent;
    }
    
    #axisValue{
        display : none;
    }
    .logo{
        float: left;
        width: 45px;
        height: 50px;
        border: 2px dotted green;
        border-radius: 12px;
        margin-right: 10px;
        margin-bottom: 5px;
    }
    .des{
        color : grey;
    }
    .artists{
        margin-bottom: 5px;
    }
</style>