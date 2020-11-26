<div class="cols-sample-area" style="position:relative">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <div id="target" class="waiting">
        <?php
        $waitingpopup =new EJ\WaitingPopup("target");
        echo $waitingpopup->showOnInit(true)->template("#content")->appendTo(".cols-sample-area")->render();
        ?>
    </div>
    <div id="content">
        <div class="block">
            <div class="logo"></div>
            <div class="txt">
                <p>Create cutting-edge </p>
                <p><b>HTML5</b> web applications </p>
                <p>with ease </p>
            </div>
        </div>
        <div class="loader"></div>
    </div>
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    #target {
            height: 320px;
            width: 600px;
    }

    .block {
        height: 76px;
    }

    .logo {
        background-image: url("Content/images/waitingpopup/js_logo.png");
        background-repeat: no-repeat;
        float: left;
        height: 100%;
        width: 77px;
        margin-right: 15px;
    }

    .txt {
        float: left;
        font-size: 17px;
        height: 100%;
        text-align: left;
        color: wheat;
    }

        .txt p {
            margin: 0;
        }

    .loader {
        background: url("Content/images/waitingpopup/load_light.gif") no-repeat scroll -5px 18px transparent;
        height: 40px;
        width: 100%;
    }

    .darktheme .loader {
        background-image: url("Content/images/waitingpopup/load_dark.gif");
    }

    #content {
        cursor: default;
        height: 112px;
        width: 285px;
    }
</style>