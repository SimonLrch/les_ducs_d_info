<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
    
<?php
    $acr = new EJ\Accordion("eventAccordion");
    $acr->width("550px")->create("onCreate")->beforeActivate("onBeforeActivate")->activate("onActivate")->beforeInactivate("onBeforeInActivate")->inActivate("onInActivate")->ajaxBeforeLoad("onBeforeLoad")->ajaxLoad("onLoad")->ajaxSuccess("onAjaxSuccess")->ajaxError("onError");

    $acrItem = new EJ\Accordion\AccordionItem();
    $acrItem->text("ASP.NET")->templateStart();
    ?>
    <div>
            Microsoft ASP.NET is a set of technologies in the Microsoft .NET Framework for building Web applications and XML Web services. ASP.NET pages execute on the server and generate markup such as HTML, WML, or XML that is sent to a desktop or mobile browser. ASP.NET pages use a compiled, event-driven programming model that improves performance and enables the separation of application logic and user interface.
        </div>
    <?php
    $acrItem->templateEnd();
    $acr->AddItem($acrItem);
    $acrItem2 = new EJ\Accordion\AccordionItem();
    $acrItem2->text("ASP.NET MVC")->templateStart();
    ?>
    <div>
            The Model-View-Controller (MVC) architectural pattern separates an application into three main components: the model, the view, and the controller. The ASP.NET MVC framework provides an alternative to the ASP.NET Web Forms pattern for creating Web applications. The ASP.NET MVC framework is a lightweight, highly testable presentation framework that (as with Web Forms-based applications) is integrated with existing ASP.NET features, such as master pages and membership-based authentication.
        </div>
    <?php
    $acrItem2->templateEnd();
    $acr->AddItem($acrItem2);
    $acrItem3 = new EJ\Accordion\AccordionItem();
    $acrItem3->text("Javascript (Ajax Load)")->ajaxURL("Content/samplecontent/jscontent.html");
    $acr->AddItem($acrItem3);
    echo $acr->enableMultipleOpen(true)->render();
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
    function onCreate(args) {
        jQuery.addEventLog("Accordion has been <span class='eventTitle'>created</span>.");
    }
    function onBeforeActivate(args) {
        if (!ej.isNullOrUndefined(args.activeIndex))
            jQuery.addEventLog("<span class='eventTitle'>BeforeActiveClick</span> event is fired for Index " + args.activeIndex + ".");
    }
    function onActivate(args) {
        if (!ej.isNullOrUndefined(args.activeIndex))
            jQuery.addEventLog("<span class='eventTitle'>ActiveClick</span> event is fired for Index " + args.activeIndex + ".");
    }
    function onBeforeInActivate(args) {
        if (!ej.isNullOrUndefined(args.inActiveIndex))
            jQuery.addEventLog("Index " + args.inActiveIndex + " is on <span class='eventTitle'>BeforeInActive</span>.");
    }
    function onInActivate(args) {
        if (!ej.isNullOrUndefined(args.inActiveIndex))
            jQuery.addEventLog("Index " + args.inActiveIndex + " is on <span class='eventTitle'>inActive</span>.");
    }
    function onBeforeLoad(args) {
        jQuery.addEventLog("<span class='eventTitle'>BeforeLoad</span> event is fired.");
    }
    function onLoad(args) {
        jQuery.addEventLog("Ajax content is <span class='eventTitle'>loaded</span>.");
    }
    function onAjaxSuccess(args) {
        jQuery.addEventLog("Ajax content is loaded <span class='eventTitle'>successfully</span>.");
    }
    function onError(args) {
        jQuery.addEventLog("Ajax content is loaded with an <span class='eventTitle'>error</span>.");
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
