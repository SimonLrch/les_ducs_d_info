<div class="cols-sample-area">

  <?php
    require_once '../EJ/AutoLoad.php';
    ?>
     <?php
     
    $gameList = array(
        array('id'=> "level1", 'game'=> "American Football"),
        array('id'=> "level2", 'game'=> "Badminton"),
        array('id'=> "level3", 'game'=> "Basketball"),
        array('id'=> "level4", 'game'=> "Cricket"),
        array('id'=> "level5", 'game'=> "Football"),
        array('id'=> "level6", 'game'=> "Golf"),
        array('id'=> "level7", 'game'=> "Hockey"),
        array('id'=> "level8", 'game'=> "Rugby"),
        array('id'=> "level9", 'game'=> "Snooker"),
        array('id'=> "level10", 'game'=> "Tennis"),
    );
   
    $combobox =new EJ\ComboBox("selectGame");
    $fields = new EJ\ComboBox\Field();
    $fields->text("game")->value("id");
    echo $combobox->fields($fields)->dataSource($gameList)->width("100%")->placeholder("Select a Game")->allowFiltering(true)->filtering("onfiltering")->render();
    ?>
    
</div>

<script>

    function onfiltering(e) {
       var query = new ej.Query().select(['game', 'id']);
			query = (e.text !== '') ? query.where('game', 'startswith', e.text, true) : query;
			e.updateData(e.model.dataSource, query);
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