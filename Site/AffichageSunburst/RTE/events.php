<?php
require_once '../EJ/AutoLoad.php';
?>
<div class="cols-sample-area">
  <?php
    $rte =new EJ\RTE("rteSample");
    $rte->templateStart();
    ?>
                  &lt;p&gt;&lt;b&gt;Description:&lt;/b&gt;&lt;/p&gt;
    &lt;p&gt;The Rich Text Editor (RTE) control is an easy to render in
    client side. Customer easy to edit the contents and get the HTML content for
    the displayed content. A rich text editor control provides users with a toolbar
    that helps them to apply rich text formats to the text entered in the text
    area. &lt;/p&gt;
    &lt;p&gt;&lt;b&gt;Functional
    Specifications/Requirements:&lt;/b&gt;&lt;/p&gt;
    &lt;ol&gt;&lt;li&gt;&lt;p&gt;Provide
    the tool bar support, it’s also customizable.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Options
    to get the HTML elements with styles.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Support
    to insert image from a defined path.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Footer
    elements and styles(tag / Element information , Action button (Upload, Cancel))&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Re-size
    the editor support. &lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Provide
    efficient public methods and client side events.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Keyboard
    navigation support.&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;
      <?php
    $rte->templateEnd();
    echo $rte->isResponsive(true)->width("100%")->minWidth("300px")->
    create("onCreate")->
                preRender("onPreRender")->
                change("onChange")->
                keydown("onKeydown")->
                keyup("onKeyup")->
                execute("onExecute")->
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
  
        function onCreate(args) {
            jQuery.addEventLog("RTE has been <span class='eventTitle'>created</span>.");
        }
        function onPreRender(args) {
            jQuery.addEventLog("RTE <span class='eventTitle'>onPreRender</span> has been triggered.");
        }
        function onChange(args) {
            jQuery.addEventLog("RTE value has been <span class='eventTitle'>changed</span>.");
        }

        function onKeydown(args) {
            jQuery.addEventLog("<span class='eventTitle'>Keydown</span> event is fired.");
        }

        function onKeyup(args) {
            jQuery.addEventLog("<span class='eventTitle'>Keyup</span> event is fired.");
        }

        function onExecute(args) {
            jQuery.addEventLog(args.commandName.toUpperCase() + " command has been <span class='eventTitle'>Executed</span>");
        }

        function onClear() {
            jQuery.clearEventLog();
        }

</script>

<style>
    .cols-sample-area
    {
        width: 750px;
        margin: 0 auto;
        float: none;
    }
    
    #rteSample{
        display: none;
    }
</style>
