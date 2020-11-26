<div class="cols-sample-area">

    <?php
    require_once '../EJ/AutoLoad.php';
    $countries = array('Albania', 'Andorra', 'Armenia', 'Austria', 'Azerbaijan', 'Belarus', 'Belgium',
         'Bosnia & Herzegovina', 'Bulgaria', 'Croatia', 'Cyprus', 'Czech Republic', 'Denmark', 'Estonia',
         'Finland', 'France', 'Georgia', 'Germany', 'Greece', 'Hungary', 'Iceland', 'Ireland', 'Italy',
         'Kosovo', 'Latvia', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Macedonia', 'Malta', 'Moldova',
         'Monaco', 'Montenegro', 'Netherlands', 'Norway', 'Poland', 'Portugal', 'Romania', 'Russia',
         'San Marino', 'Serbia', 'Slovakia', 'Slovenia', 'Spain', 'Sweden', 'Switzerland', 'Turkey',
         'Ukraine', 'United Kingdom', 'Vatican City');
    ?>
    <h4>Using Delimiter</h4>
    <?php
    $autocomplete=new EJ\AutoComplete("selectCar");
    echo $autocomplete->dataSource($countries)->width("100%")->multiSelectMode("delimiter")->render();
    ?>
    <br />
    <h4>Using VisualMode</h4>
    <?php
    $visualac=new EJ\Autocomplete("visualmode");
    echo $visualac->dataSource($countries)->width("100%")->multiSelectMode("visualmode")->render();
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
