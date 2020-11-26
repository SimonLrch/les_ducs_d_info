<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    ?>
    <?php
    $skillset = array(
       array('text'=> "Cabbage", 'category'=> "Leafy and Salad"),
        array('text'=> "Pea", 'category'=> "Leafy and Salad"),
         array('text'=> "Spinach", 'category'=> "Leafy and Salad"),
          array('text'=> "Wheatgrass", 'category'=> "Leafy and Salad"),
           array('text'=> "Yarrow", 'category'=> "Leafy and Salad"),
        array('text'=> "Chickpea", 'category'=> "Beans"),
        array('text'=> "Green bean", 'category'=> "Beans"),
        array('text'=> "Horse gram", 'category'=> "Beans"),
        array('text'=> "Peanut", 'category'=> "Beans"),
        array('text'=> "Pigeon pea", 'category'=> "Beans"),
        array('text'=> "Garlic", 'category'=> "Bulb and Stem"),
        array('text'=> "Garlic Chives", 'category'=> "Bulb and Stem"),
        array('text'=> "Lotus root", 'category'=> "Bulb and Stem"),
        array('text'=> "Nopal", 'category'=> "Bulb and Stem"),
        array('text'=> "Onion", 'category'=> "Bulb and Stem"),
        array('text'=> "Shallot", 'category'=> "Bulb and Stem"),
        array('text'=> "Beetroot", 'category'=> "Root and Tuberous"),
        array('text'=> "Carrot", 'category'=> "Root and Tuberous"),
        array('text'=> "Ginger", 'category'=> "Root and Tuberous"),
        array('text'=> "Potato", 'category'=> "Root and Tuberous"),
        array('text'=> "Radish", 'category'=> "Root and Tuberous"),
        array('text'=> "Turmeric", 'category'=> "Root and Tuberous"),
       );
    $dropdownlist =new EJ\DropDownList("skillsets");
    $fields = new EJ\DropDownList\Field();
    $fields->text("text")->groupBy("category");
    echo $dropdownlist->fields($fields)->dataSource($skillset)->width("100%")->watermarkText("Select a vegetable")->render();
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