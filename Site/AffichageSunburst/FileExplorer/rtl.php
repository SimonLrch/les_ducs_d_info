<?php
require_once '../EJ/AutoLoad.php';
?>
<body>
    <div class="cols-sample-area">
        <?php
        $fileexplorer=new EJ\FileExplorer('rtl');
        echo $fileexplorer->width('100%')->minWidth('150px')->layout('largeicons')
				->path('Content/images/FileBrowser/')->ajaxAction('../EJ/Services/FileExplorer')
				->ajaxDataType('jsonp')->isResponsive(true)->fileTypes('*.png, *.gif, *.jpg, *.jpeg, *.docx')
				->enableRTL(true)->render();
        ?>
    </div>
<style>
    .cols-sample-area
    {
        width: 100%;
        margin: 0 auto;
        float: none;
    }
</style>
</body>
