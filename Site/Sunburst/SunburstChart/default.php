<div>

    <?php
    //chargement de la librairie
    require_once '../EJ/AutoLoad.php';

    //Connexion bd
    //$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
    //Création des variables
    /*
    $auteur = [];
    $label = [];
    $statut = [];
    $lieu = [];
    $informations = [];
    $nature = [];
    $formes = [];
    $sources = [];
    */

    $auteur = 'Test_auteur';
    $label = 'Test_label';
    $statut = 'Test_statut';
    $lieu = 'Test_lieu';
    $informations = 'Test_informations';
    $nature = 'Test_nature';
    $formes = 'Test_formes';
    $sources = 'Test_sources';

    ?>

    <?php

   $chart=new EJ\SunburstChart("container");

    $tooltip = new EJ\SunburstChart\Tooltip();
    $tooltip->visible(true);
    $chartTitle= new EJ\SunburstChart\Title();
    $chartTitle->text("Employees Count");

      $Json ='


     [
      { "Category" : "Pension",

      "Auteur": "auteur",
      "Label": "$label",
      "Statut": "$statut",
      "Lieu": "$lieu",
      "Informations": "$informations",
      "Nature": "$nature",
      "Formes": "$formes",
      
      "EmployeesCount" : 1 }]';
 

    //décodage des accents 
    $Json = preg_replace('/,\s*([\]}])/m', '$1', utf8_encode($Json));  
    $Json = json_decode($Json,true);
    

    $size = new EJ\SunburstChart\Size();
    $size->height("600");
    //déclaration des différents niveaux 
    $level1 = new EJ\SunburstChart\Level();
    $level2 = new EJ\SunburstChart\Level();
    $level3 = new EJ\SunburstChart\Level();
    $level4 = new EJ\SunburstChart\Level();
    $level5 = new EJ\SunburstChart\Level();
    $level6 = new EJ\SunburstChart\Level();
    $level7 = new EJ\SunburstChart\Level();
    $level8 = new EJ\SunburstChart\Level();


    //ajout des noms aux différents niveaux 
    $level1->groupMemberPath("Auteur");
    $level2->groupMemberPath("Label");
    $level3->groupMemberPath("Statut");
    $level4->groupMemberPath("Lieu");
    $level5->groupMemberPath("Informations");
    $level6->groupMemberPath("Nature");
    $level7->groupMemberPath("Formes");
    $level8->groupMemberPath("Sources");

    //affichage des différents niveaux
    $levelCollection = array($level1, $level2, $level3, $level4,$level5,$level6,$level7,$level8);

    $dataLabel = new EJ\SunburstChart\DataLabelSetting();
    $dataLabel->visible(true);

    $legend = new EJ\SunburstChart\Legend();
    $legend->visible(true)->position("top");

    $zoom = new EJ\SunburstChart\ZoomSetting();
    $zoom->enable(false);

    echo $chart->dataSource($Json)->valueMemberPath("EmployeesCount")->size($size)->levels($levelCollection)->innerRadius('0.2')->dataLabelSettings($dataLabel)->tooltip($tooltip)->title($chartTitle)->legend($legend)->zoomSettings($zoom)->render();

    ?>
</div>

 
