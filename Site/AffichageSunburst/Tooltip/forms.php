<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div id="form" class="frame">
        <form id="details" role="form">
            <fieldset>
                <div class="form-group">
                    <label for="name">User Name:</label>
                    <input class="form-control" type="text" id="name" name="firstname" title="Please enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input class="form-control" id="email" type="text" name="email" title="Enter a valid email address">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input class="form-control" id="pwd" type="password" name="pwd" title="Be at least 8 characters length">
                </div>
                <div class="form-group">
                    <label for="Cpwd">Confirm Password:</label>
                    <input class="form-control" type="password" id="Cpwd" name="Cpwd" title="Re-enter your password">
                </div>
                 <?php
                $button1 =  new EJ\Button("sample");
                echo $button1 ->text("Submit")->size("medium")->type("submit")->showRoundedCorner(true)->render();
                ?>
                <?php
                $button2 =  new EJ\Button("clear");
                echo $button2 ->text("Reset")->size("medium")->type("reset")->showRoundedCorner(true)->render();
                ?>
            </fieldset>
        </form>
    </div>

    <?php
    $tooltip =new EJ\Tooltip("details");
    $pos = new EJ\Tooltip\Position();
    $tar = new EJ\Tooltip\Target();
    $stem = new EJ\Tooltip\Stem();
    $tar->horizontal("right")->vertical("center");
    $stem->horizontal("left")->vertical("center");
    $pos->target($tar)->stem($stem);
    echo $tooltip->width("175px")->height("30px")->containment(".cols-sample-area")->trigger("focus")->target(".form-control")->position($pos)->beforeOpen("onOpen")->hover("onOpen")->render();
    ?>
				
</div>

<script>
    var  target;
      target = $("#details").data("ejTooltip");
   function onOpen(args){
			 target = $("#details").data("ejTooltip");
			if(args.model.content == "Enter a valid email address")
				target.setModel({cssClass : "info"});
				//$(target.tooltip).removeClass("warning").addClass("info");
			
			else
			    target.setModel({cssClass : "warning"}); 
				//$(target.tooltip).removeClass("info").addClass("warning");
			
		}
</script>
<style>
    .cols-sample-area{
        width: 400px;
        height: 500px;
        margin: 0 auto;
        float: none;
    }
    .info {
        background-color : #f9ce9b !important;
        color : #b29b7f !important;
    }
    .info .e-arrowTipInner{
        border-color: #f9ce9b transparent !important;
    }
    .warning{
        background-color: #e56161 !important;
        color: #ffffff !important;
    }
    .warning .e-arrowTipInner{
        border-color: #e56161 transparent !important;
    }

    .frame{
        width : 350px;
        box-sizing: border-box;
        border : none;
    }
    .form-control{
        box-sizing: border-box;
        
    }
    .form-group {
        margin-bottom: 10px;
    }
    
    fieldset {
        border: 1px solid #D9DEDD;
        padding: 15px;
        width : 100%;
        box-sizing: border-box;
        
    }
    #sample{
        margin-right: 50px;
    }
    .e-button{
        
        margin: 10px;
    }
</style>