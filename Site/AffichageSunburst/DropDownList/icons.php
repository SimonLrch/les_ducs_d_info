<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

    <div id="mailtoolslist">
        <ul>
            <li><div class="mailtools categorize"></div>Categorize and Move</li>
            <li><div class="mailtools done"></div>Done</li>
            <li><div class="mailtools flag"></div>Flag & Move</li>
            <li><div class="mailtools forward"></div>Forward</li>
            <li><div class="mailtools movetofolder"></div>Move to Folder</li>
            <li><div class="mailtools newmail"></div>New E-mail</li>
            <li><div class="mailtools meeting"></div>New Meeting</li>
            <li><div class="mailtools reply"></div>Reply & Delete</li>
        </ul>
    </div>

    <?php
    $dropdownlist =new EJ\DropDownList("selectmailtools");
    $fields = new EJ\DropDownList\Field();
    $fields->text("text");
    echo $dropdownlist->targetID("mailtoolslist")->width("100%")->watermarkText("Select a icon")->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
    .mailtools {
        display: block;
        background-image: url('Content/images/dropdownlist/iconsapps.png');
        height: 25px;
        width: 25px;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .mailtools.done {
        background-position: 0 0;
    }

    .mailtools.movetofolder {
        background-position: 0 -22px;
    }

    .mailtools.categorize {
        background-position: 0 -46px;
    }

    .mailtools.flag {
        background-position: 0 -70px;
    }

    .mailtools.forward {
        background-position: 0 -94px;
    }

    .mailtools.newmail {
        background-position: 0 -116px;
    }

    .mailtools.reply {
        background-position: 0 -140px;
    }

    .mailtools.meeting {
        background-position: 0 -164px;
    }
</style>