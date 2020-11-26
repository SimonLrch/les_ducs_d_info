<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    $countries = array( array ( "text"=> "Austria", "category"=> "A" ),
                 array ( "text"=> "Australia", "category"=> "A" ), array ( "text"=> "Antarctica", "category"=> "A" ),
                 array ( "text"=> "Bangladesh", "category"=> "B" ), array ( "text"=> "Belgium", "category"=> "B" ),
                 array ( "text"=> "Brazil", "category"=> "B" ),
                 array ( "text"=> "Canada", "category"=> "C" ), array ( "text"=> "China", "category"=> "C" ),
                 array ( "text"=> "Cuba", "category"=> "C" ),
                 array ( "text"=> "Denmark", "category"=> "D" ), array ( "text"=> "Dominica", "category"=> "D" ),
                 array ( "text"=> "Europe", "category"=> "E" ), array ( "text"=> "Egypt", "category"=> "E" ),
                 array ( "text"=> "England", "category"=> "E" ),
                 array ( "text"=> "India", "category"=> "I" ), array ( "text"=> "Indonesia", "category"=> "I" ),
                 array ( "text"=> "Ireland", "category"=> "I" ), array ( "text"=> "Italy", "category"=> "I" ),
                 array ( "text"=> "France", "category"=> "F" ), array ( "text"=> "Finland", "category"=> "F" ),
                 array ( "text"=> "Germany", "category"=> "G" ), array ( "text"=> "Greece", "category"=> "G" ),
                 array ( "text"=> "Greenland", "category"=> "G" ), array ( "text"=> "Georgia", "category"=> "G" ),
                 array ( "text"=> "Haiti", "category"=> "H" ), array ( "text"=> "Hong Kong", "category"=> "H" ),
                 array ( "text"=> "Japan", "category"=> "J" ), array ( "text"=> "Jordan", "category"=> "J" ),
                 array ( "text"=> "Jamaica", "category"=> "J" ), array ( "text"=> "Kenya", "category"=> "K" ),
                 array ( "text"=> "Kuwait", "category"=> "K" ), array ( "text"=> "Korea", "category"=> "K" ),
                 array ( "text"=> "Latvia", "category"=> "L" ), array ( "text"=> "Lebanon", "category"=> "L" ),
                 array ( "text"=> "Leichenstein", "category"=> "L" ), array ( "text"=> "Malaysia", "category"=> "M" ),
                 array ( "text"=> "Mexico", "category"=> "M" ), array ( "text"=> "Mozambique", "category"=> "M" ),
                 array ( "text"=> "Madagascar", "category"=> "M" ), array ( "text"=> "Midway Islands", "category"=> "M" ),
                 array ( "text"=> "Nepal", "category"=> "N" ), array ( "text"=> "Netherlands", "category"=> "N" ),
                 array ( "text"=> "New Zealand", "category"=> "N" ), array ( "text"=> "Nigeria", "category"=> "N" ),
                 array ( "text"=> "Oman", "category"=> "O" ), array ( "text"=> "Philippines", "category"=> "P" ),
                 array ( "text"=> "Poland", "category"=> "P" ), array ( "text"=> "Portugal", "category"=> "P" ),
                 array ( "text"=> "Qatar", "category"=> "Q" ), array ( "text"=> "Romania", "category"=> "R" ),
                 array ( "text"=> "Russia", "category"=> "R" ), array ( "text"=> "Singapore", "category"=> "S" ),
                 array ( "text"=> "Switzerland", "category"=> "S" ), array ( "text"=> "Sweden", "category"=> "S" ),
                 array ( "text"=> "Scotland", "category"=> "S" ), array ( "text"=> "Tibet", "category"=> "T" ),
                 array ( "text"=> "Turkey", "category"=> "T" ), array ( "text"=> "Ukraine", "category"=> "U" ),
                 array ( "text"=> "United States", "category"=> "U" ), array ( "text"=> "Uruguay", "category"=> "U" ),
                 array ( "text"=> "Vatican City", "category"=> "V" ), array ( "text"=> "Vietnam", "category"=> "V" ),
                 array ( "text"=> "Western Sahara", "category"=> "W" ), array ( "text"=> "Wales", "category"=> "W" ),
                 array ( "text"=> "Yemen", "category"=> "Y" ), array ( "text"=> "Yugoslavia", "category"=> "Y" ),
                 array ( "text"=> "Zambia", "category"=> "Z" ), array ( "text"=> "Zimbabwe", "category"=> "Z" ));
    ?>
    <?php
    $autocomplete=new EJ\AutoComplete("selectCountry");
    $field=new EJ\Autocomplete\Field();
    $field->text("text")->groupBy("category");
    echo $autocomplete->dataSource($countries)->fields($field)->filterType("contains")->highlightSearch(true)->width("100%")->watermarkText("Select a country")->render();
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
