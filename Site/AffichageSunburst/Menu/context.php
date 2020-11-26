<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div id="target" class="textarea">
        HTML is written in the form of HTML elements consisting of tags enclosed in angle
                brackets (like
                &lt;html&gt;
                ),within the web page content. HTML tags most commonly come in pairs like and ,although
                some tags, known as empty elements, are unpaired, for example
                &lt;img&gt;. The purpose of a web browser is to read HTML documents and compose them into
                visible or audible web pages. The browser does not display the HTML tags, but uses
                the tags to interpret the content of the page.
    </div>
    <?php
    $menu = new EJ\Menu("contextMenu");
    $Item1 = new EJ\Menu\MenuItem();
    $Item1->text("Cut");
    $Item2 = new EJ\Menu\MenuItem();
    $Item2->text("Copy");
    $Item3 = new EJ\Menu\MenuItem();
    $Item3->text("Paste");
    $Item4 = new EJ\Menu\MenuItem();
    $Item4->text("Comments");
    $Item5 = new EJ\Menu\MenuItem();
    $Item5->text("Links");
    $Item6 = new EJ\Menu\MenuItem();
    $Item6->text("Clear Formatting");
    $menu->AddItem($Item1,$Item2,$Item3,$Item4,$Item5,$Item6);
    echo $menu->menuType("contextMenu")->openOnClick(false)->contextMenuTarget("#target")->render();
    ?>

</div>

<style>
    .cols-sample-area
    {
        width: 600px;
        margin: 0 auto;
        float: none;
    }
    .textarea {
            border: 1px solid;
            padding: 10px;
            position: relative;
            text-align: justify;
            width: 463px;
            color: gray;
        }
</style>