<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

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
    echo $rte->isResponsive(true)->width("100%")->minWidth("300px")->render();
    ?>
    
</div>

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