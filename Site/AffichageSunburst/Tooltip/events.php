<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<div class="frame" id="custom">
					<div class="image">
						<img src="Content/images/tooltip/template-06.png" alt="Python Succinctly" >
						</div>
						<div class="desc">Python Succinctly</div>
					</div>  
<?php
    $tooltip1 =new EJ\Tooltip("custom");
    $pos1 = new EJ\Tooltip\Position();
    $tar1 = new EJ\Tooltip\Target();
    $stem1 = new EJ\Tooltip\Stem();
    $tar1->horizontal("right")->vertical("center");
    $stem1->horizontal("left")->vertical("center");
    $pos1->target($tar1)->stem($stem1);
    echo $tooltip1->content("Learn to use the Python language to create programs of all kinds to creating practical applications.")->position($pos1)->
    beforeOpen("tipShown")->
				create("tipCreate")->
                tracking("tipTrack")->
                associate("mousefollow")->
                open("onShow")->
                close("onHide")->
                beforeClose("tipHide")->
    render();
    ?>
</div>
<div id="Logger" class="box">
    <h4>Event Trace</h4>
    <div class="EventLog" id="EventLog"></div>
    <div>
        <?php
        $clearBtn = new \EJ\Button("clearBtn");
        echo $clearBtn->size("small")->text("Clear")->click("onClear")->type("button")->render();
        ?>
    </div>
</div>
<script>
   var dialogObj;
		var trackCount = 1;
        var target, target1, target2;
        $(function () {
            target = $("#custom").data("ejTooltip");
        });
       

      
        function tipCreate(sender) {
            jQuery.addEventLog("Tooltip control has been <span class='eventTitle'>created</span>.<br/>");
			
        }
        function tipTrack(sender) {
			if(trackCount == 1)
				jQuery.addEventLog("Tooltip has been <span class='eventTitle'>Tracking</span> <span class='circle' id='count'>"+ trackCount + "</span><br/>");
			else{
				var target = $("div#sampleContainer > div#Logger > div#EventLog > span.eventLogger > span#count");
				if(target != 0 ){
					target= $("div#sampleContainer > div#Logger > div#EventLog > span.eventLogger > span#count")[0];
					$(target).html('<span class="circle" id="count">'+ trackCount + '</span>');
				}
			}
			trackCount ++;
        }
        function tipHide(sender) {
            jQuery.addEventLog("<span class='eventTitle'>beforeClose</span> event is fired for Tooltip.<br/>");
			trackCount =1;
        }
        function tipShown(sender) {
            jQuery.addEventLog("<span class='eventTitle'>beforeOpen</span> event is fired for Tooltip.<br/>");
			trackCount =1;
        }
        function onHide(sender) {
            jQuery.addEventLog("Tooltip popup is <span class='eventTitle'>closed</span>.<br/>");
			trackCount =1;
        }
        function onShow(sender) {
            jQuery.addEventLog("Tooltip popup is <span class='eventTitle'>opened</span>.<br/>");
			trackCount =1;
        }
        function onClear() {
            jQuery.clearEventLog();
			trackCount =1;
        }

</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .frame{
			box-sizing: border-box;
			border: 1px solid #ccc !important;
			border-radius: 0px;
			padding: 0px;
			text-align: center;
			width : 160px;
		}
		.frame img{
		    width : 100%;
		}
         @media (max-width: 440px){
			.frame{
				width : 160px !important;
			}
        }
		.circle {
			  
				color: white;
				background: #1dabce;
				border-radius: 10px;
				padding: 2px;
			}
		.image{
		    background-color: #ccc;
		}
      img{
	      padding-top: 8px;
	  }
</style>
