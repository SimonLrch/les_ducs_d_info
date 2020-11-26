<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
<?php
    $tab =new EJ\Tab("eventTab"); 
     $tab->templateStart();
     ?>
        <ul>
                        <li><a href="#asp">ASP.NET</a></li>
                        <li><a href="#mvc">ASP.NET MVC</a></li>
                        <li><a href="Content/samplecontent/jscontent.html">Javascript</a></li>
                    </ul>
                    <div id="asp">
                        Microsoft ASP.NET is a set of technologies in the Microsoft .NET Framework for building Web applications and XML Web services. ASP.NET pages execute on the server and generate markup such as HTML, WML, or XML that is sent to a desktop or mobile browser. ASP.NET pages use a compiled, event-driven programming model that improves performance and enables the separation of application logic and user interface.
                    </div>
                    <div id="mvc">
                        The Model-View-Controller (MVC) architectural pattern separates an application into three main components: the model, the view, and the controller. The ASP.NET MVC framework provides an alternative to the ASP.NET Web Forms pattern for creating Web applications. The ASP.NET MVC framework is a lightweight, highly testable presentation framework that (as with Web Forms-based applications) is integrated with existing ASP.NET features, such as master pages and membership-based authentication.
                    </div>
    <?php
    $tab->templateEnd();
    echo $tab->width("500px")->
     selectedItemIndex(0)->
                    ajaxBeforeLoad("onClientBeforeLoad")->
                    create("onClientCreate")->
                    beforeActive("onClientBeforeActive")->
                    itemActive("onClientActive")->
					ajaxSuccess("onClientSuccess")->
					ajaxError("onClientFailure")->
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
        function onClientBeforeLoad(e) {
            jQuery.addEventLog("<span class='eventTitle'>BeforeLoad</span> event is fired.</br>");
        }
		function onClientSuccess(e){ 
			jQuery.addEventLog("Ajax content has been loaded <span class='eventTitle'>successfully</span>.</br>"); 
		}
		function onClientFailure(e){
			jQuery.addEventLog("Ajax content has been loaded <span class='eventTitle'>failure</span>.</br>");
		} 
        function onClientCreate(e) {
            jQuery.addEventLog("Tab is <span class='eventTitle'>created</span>. </br>");
        }
        function onClientActive(e) {
            jQuery.addEventLog("Index " + e.activeIndex + " is <span class='eventTitle'>activated</span>. </br>");
        }
        function onClientBeforeActive(e) {
            jQuery.addEventLog("<span class='eventTitle'>BeforeActive </span>event is fired. </br>");
        }
        function onClear() {
            jQuery.clearEventLog();
        }

</script>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>
