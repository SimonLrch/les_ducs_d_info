<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>

     <?php
     
    $socialMedia = array(
        array('class'=> "mailtools categorize", 'name'=> "Categorize and Move"),
        array('class'=> "mailtools done", 'name'=> "Done"),
        array('class'=> "mailtools flag", 'name'=> "Flag & Move"),
        array('class'=> "mailtools forward", 'name'=> "Forward"),
        array('class'=> "mailtools movetofolder", 'name'=> "Move to Folder"),
        array('class'=> "mailtools newmail", 'name'=> "New E-mail"),
        array('class'=> "mailtools meeting", 'name'=> "New Meeting"),
        array('class'=> "mailtools reply", 'name'=> "Reply & Delete"),
    );
   
    $combobox =new EJ\ComboBox("list");
    $fields = new EJ\ComboBox\Field();
    $fields->text("name")->value("name")->iconCss("class");
    echo $combobox->fields($fields)->dataSource($socialMedia)->width("100%")->placeholder("Select an icon")->render();
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