<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $skillset = array(
       array('text'=> "ASP.NET"),
       array('text'=> "ActionScript"),
       array('text'=> "Basic"),
       array('text'=> "C++"),
       array('text'=> "C#"),
       array('text'=> "dBase"),
       array('text'=> "Delphi"),
       array('text'=> "ESPOL"),
       array('text'=> "F#"),
       array('text'=> "FoxPro"),
       array('text'=> "Java"),
       array('text'=> "J#"),
       array('text'=> "Lisp"),
       array('text'=> "Logo"),
       array('text'=> "PHP"),
       );
    $dropdownlist =new EJ\DropDownList("skillsets");
    $fields = new EJ\DropDownList\Field();
    $fields->text("text");
    echo $dropdownlist->AddItem($fields)->dataSource($skillset)->width("100%")->multiSelectMode("visualmode")->watermarkText("Select your skill")->showCheckbox(true)->render();
    ?>
    
</div>

<style>
    .cols-sample-area
    {
        width: 300px;
        margin: 0 auto;
        float: none;
    }
</style>