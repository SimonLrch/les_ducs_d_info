<div>

    <?php
    //chargement de la librairie
    require_once '../EJ/AutoLoad.php';
/*
    //Connexion bd
    //$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    //Création des variables

    $auteur = [];
    $label = [];
    $statut = [];
    $lieu = [];
    $informations = [];
    $nature = [];
    $formes = [];
    $sources = [];


    $auteur = 'Test_auteur';
    $label = 'Test_label';
    $statut = 'Test_statut';
    $lieu = 'Test_lieu';
    $informations = 'Test_informations';
    $nature = 'Test_nature';
    $formes = 'Test_formes';
    $sources = 'Test_sources';
    */
    ?>

    <?php

    $chart=new EJ\SunburstChart("container");

    $tooltip = new EJ\SunburstChart\Tooltip();
    $tooltip->visible(true);
    $chartTitle= new EJ\SunburstChart\Title();
    $chartTitle->text("Sunburst");

    $Json ='


     [
     { "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Raoul de Cohakem", "Statut": "Seigneur de Cohakem, chevalier et chambellan du duc", "Nature": "Pour sa pension a luy ordonne par mondit seigneur qui est de 200 écus chacun an tant comme il plaira a mon dit seigneur paiez a deux termes cest assavoir noel et saint Jehan dont ledit seigneur veult commence le premier paiement au terme de noel 1404 pour que ledit chevalier soit tousiours plus tenu e astraint de servir mon dit seigneur et pour autres causes plus a plain contenues es lettres diceluy seigneur donne a Paris le 6e jour de septembre lan dessusdit desquelle la coppie dicelles collacionnees a loriginal est cy rendu pour les termes de noel 1405 et saint Jehan 1406", "Lieu": "Paris", "Formes": "Pension de 200 écus/an, payée en deux termes (Noël et la Saint-Jehan)", "Informations": "6 September 1404", "Sources": "ADCO, B 1543, f 68 v","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Pierre de Marigny", "Statut": "Avocat au Parlement et conseiller du duc audit Parlement", "Nature": "Tant comme il plaira audit seigneur et quil sent mettra de ses causes a la pension de fr. chacun an si comme il appert par mandement de mondit seigneur donne a Paris le 17e jour de septembre lan 1404 ainsi signe par mondit seigneur duquel mandement la coppie collacionne a loriginal par lun des secretaires de mondit seigneur est cy rendu pour ce", "Lieu": "Paris", "Formes": "Pension de 20 fr./an", "Informations": "17 September 1404", "Sources": "ADCO, B 1543, f 71 r","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "André Cotin", "Statut": "Avocat au Parlement et conseiller du duc audit Parlement", "Nature": "Pour sa pension qui semble est de 20 fr. par an tant quil plaira a mondit seigneur et quil sent mettra de ses causes si comme il appert par mandement dicelluy seigneur donne a Paris le dit 17e jour de septembre lan 1404 ainsi signe par monseigneur le duc duquel la copie collacionne a loriginal par lun des secretaires de mondit seigneur est cy rendu", "Lieu": "Paris", "Formes": "Pension de 20 fr./an", "Informations": "17 September 1404", "Sources": "ADCO, B 1543, f 71 r","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Guyot de Savigny", "Statut": "Ecuyer d écurie du duc", "Nature": "Paiement pour sa pension de 160 fr./an", "Lieu": "Aucune mention", "Formes": "80 fr. (quittance)", "Informations": "30 January 1409", "Sources": "ADCO, B 1556, f° 54 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Girard de Bourbon", "Statut": "Seigneur de Montperroux, chevalier, conseiller et chambellan du duc", "Nature": "Pension de 500 fr./an, payée en deux termes (de 6 mois en 6 mois) ", "Lieu": "Aucune mention", "Formes": "Pension de 500 fr./an, payée en deux termes (6 mois en 6 mois)", "Informations": "31 January 1409", "Sources": "ADCO, B 1558, f° 56 v° et 57 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Antoine de Craon", "Statut": "Cousin, chevalier, conseiller et chambellan du duc", "Nature": "Pension de 400 fr./an", "Lieu": "Aucune mention", "Formes": "Pension de 400 fr./an", "Informations": "31 January 1409", "Sources": "ADCO, B 1558, f° 57 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Lourdin de Saligny", "Statut": "Chevalier, conseiller et chambellan du duc", "Nature": "Pension de 500 fr./an, payée en deux termes (la Saint-Jean et Noël)", "Lieu": "Aucune mention", "Formes": "Pension de 500 fr./an, payée en deux termes (la Saint-Jean et Noël)", "Informations": "31 January 1409", "Sources": "ADCO, B 1558, f° 57 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Christophe d Albourg", "Statut": "Trompette du duc", "Nature": "Paiement pour sa pension de 100 écus/an", "Lieu": "Aucune mention", "Formes": "20 fr. (quittance)", "Informations": "1 February 1409", "Sources": "ADCO, B 1556, f° 53 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Pierre de Montbertault", "Statut": "Conseiller et ancien contrôleur général des finances du duc", "Nature": "Paiement pour sa pension de 500 écus/an", "Lieu": "Aucune mention", "Formes": "400 fr. (quittance)", "Informations": "3 February 1409", "Sources": "ADCO, B 1556, f° 48 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Pierre Cauchon", "Statut": "Maître en ars et licencié en décret", "Nature": "Pension de 50 fr., payée en deux termes (Noël et la Saint-Jean-Baptiste) en tant que conseiller du duc. Le premier terme commencera à la Saint-Jean 1409", "Lieu": "Paris", "Formes": "Pension de 50 fr./an", "Informations": "6 February 1409", "Sources": "ADCO, B 1576, f° 113 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Robert de Wavrin", "Statut": "Seigneur de Wavrin, conseiller et chambellan du duc", "Nature": "Paiement pour sa pension de 80 fr./mois", "Lieu": "Aucune mention", "Formes": "35 fr. (quittance)", "Informations": "1 March 1409", "Sources": "ADCO, B 1558, f° 62 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Robert de Wavrin", "Statut": "Seigneur de Wavrin, conseiller et chambellan du duc", "Nature": "Paiement pour sa pension de 80 fr./mois", "Lieu": "Aucune mention", "Formes": "31 fr. 5 s. t. (quittance)", "Informations": "12 March 1409", "Sources": "ADCO, B 1558, f° 62 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jacques de Longroy", "Statut": "Seigneur de Longroy, chevalier, conseiller et chambellan du duc", "Nature": "Pension de 500 fr./an, payés en deux termes (la Saint-Rémi et Pâques). Le premier terme commence à la Saint-Rémi 1409", "Lieu": "Aucune mention", "Formes": "Pension de 500 fr./an, payée en deux termes (la Saint-Rémi et Pâques)", "Informations": "26 March 1409", "Sources": "ADCO, B 1558, f° 57 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Maître Jean Petit ou Jean Le Petit", "Statut": "Docteur en théologie et maître des requêtes de l hôtel du duc", "Nature": "Pension de 200 fr./an, payée en deux termes (la Saint-Jean et Noël). Le premier terme commence à la Saint-Jean 1409", "Lieu": "Aucune mention", "Formes": "Pension de 200 fr./an, payée en deux termes (la Saint-Jean et Noël)", "Informations": "31 March 1409", "Sources": "ADCO, B 1558, f° 60 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jacques de Longroy", "Statut": "Seigneur de Longroy, chevalier, conseiller et chambellan du duc", "Nature": "Paiement pour sa pension de 500 fr./an, payée en deux termes", "Lieu": "Aucune mention", "Formes": "30 écus (quittance)", "Informations": "1 April 1409", "Sources": "ADCO, B 1558, f° 57 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Enguerrand de Bournonville", "Statut": "Ecuyer et chambellan du duc", "Nature": "Pension de 300 fr./an, payée en deux termes (la Saint-Jean et Noël)", "Lieu": "Aucune mention", "Formes": "Pension de 300 fr./an, payée en deux termes (la Saint-Jean et Noël)", "Informations": "3 April 1409", "Sources": "ADCO, B 1558, f° 58 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Baudouin, dit Beaugois d Ailly", "Statut": "Chevalier, conseiller et chambellan du duc, vidame d Amiens", "Nature": "Paiement pour sa pension de 4 fr./jour", "Lieu": "Aucune mention", "Formes": "33 fr. 15 s. t. (quittance)", "Informations": "3 April 1409", "Sources": "ADCO, B 1558, f° 61 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean de Vergy", "Statut": "Seigneur de Fouvans, conseiller du duc", "Nature": "Pension de 400 fr.", "Lieu": "Aucune mention", "Formes": "180 fr. (quittance)", "Informations": "12 April 1409", "Sources": "ADCO, B 1559, f° 54 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean Manus", "Statut": "Valet de chambre et maître canonnier du duc", "Nature": "Paiement pour sa pension de 100 fr./an", "Lieu": "Aucune mention", "Formes": "50 écus (quittance)", "Informations": "14 April 1409", "Sources": "ADCO, B 1558, f° 61 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Henri du Houx", "Statut": "Ménestrel du duc", "Nature": "Pension annuelle de 67 fr./an, payée de 3 mois en 3 mois. Le premier terme commencera à la fin août 1407", "Lieu": "Conflans", "Formes": "Pension annuelle de 67 fr./an, payée en 4 termes tous les 3 mois", "Informations": "24 May 1407", "Sources": "ADCO, B 1554, f° 62 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Christophe d Albourg", "Statut": "Trompette du duc", "Nature": "Pension annuelle de 100 écus/an, payée de 3 mois en 3 mois. Le premier terme commencera à la fin août 1407", "Lieu": "Conflans", "Formes": "Pension annuelle de 100 écus/an payée en 4 termes tous les 3 mois", "Informations": "24 May 1407", "Sources": "ADCO, B 1556, f° 52 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean d Aunay, dit Le Gallois d Aunay", "Statut": "Chevalier et maître d hôtel du duc et de la duchesse", "Nature": "Pour ce paie audit messire Jehan pour le terme de may 1407 par sa quittance cy rendue avec la coppie des dictes lettres colacionne par maistre Guillaume Vignier secretaire de mondit seigneur tout cy rendue 120 fr. pour ce", "Lieu": "Paris", "Formes": "120 fr. (partie de pension)", "Informations": "31 May 1407", "Sources": "ADCO, B 1547, f° 77 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean Bateteau", "Statut": "Ecuyer et panetier du duc", "Nature": "Rappel de sa pension annuelle de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Lieu": "Paris", "Formes": "160 fr. (quittance)", "Informations": "31 May 1407", "Sources": "ADCO, B 1547, f° 79 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jacques de Villers", "Statut": "Ecuyer et échanson du duc", "Nature": "Rappel de sa pension annuelle de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Lieu": "Aucune mention", "Formes": "160 fr. (quittance)", "Informations": "31 May 1407", "Sources": "ADCO, B 1547, f° 78 v° et 79 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Etienne Moreau", "Statut": "Contrôleur de la dépense de l hôtel du duc", "Nature": "Rappel de sa pension annuelle de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Lieu": "Aucune mention", "Formes": "160 fr. (quittance)", "Informations": "31 May 1407", "Sources": "ADCO, B 1547, f° 80 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Girart de Bourbon", "Statut": "Ecuyer d écurie du duc", "Nature": "Rappel de sa pension annuelle de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Lieu": "Aucune mention", "Formes": "160 fr. (quittance)", "Informations": "3 June 1407", "Sources": "ADCO, B 1554, f° 59 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Baudouin, dit Beaugois d Ailly", "Statut": "Chevalier, conseiller et chambellan du duc, vidame d Amiens", "Nature": "Paiement pour sa pension de 500 fr./an", "Lieu": "Aucune mention", "Formes": "100 fr. (quittance)", "Informations": "3 June 1407", "Sources": "ADCO, B 1556, f° 57 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean, dit Le bâtard du Bochet", "Statut": "Ecuyer et panetier du duc", "Nature": "Rappel de sa pension annuelle de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Lieu": "Aucune mention", "Formes": "160 fr. (quittance)", "Informations": "8 June 1407", "Sources": "ADCO, B 1554, f° 59 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean de Velery", "Statut": "Maître de la chambre aux deniers", "Nature": "Pour ce paie a lui pour ung an servi au 9e jour de juillet 1407 par sa quittance cy rendue avec la coppie des dictez lettrez collacionnee par maistre Baude des Bordes", "Lieu": "Aucune mention", "Formes": "200 fr. (pension)", "Informations": "9 July 1407", "Sources": "ADCO, B 1547, f° 81 v°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Etienne Moreau", "Statut": "Contrôleur de la dépense de l hôtel du duc", "Nature": "Auquel ycellui seigneur par ses lettres donneez le dit 25e jour de may 1406 et pour les causes contenus en ycelles a ordonne prendre et avoir de lui oultre et pardessus les gages quil prent par les escroues de la despense de lostel de mondit seigneur de pencion chacun an tant comme il lui plaira la somme de 160 fr. dor a paier a deux termes en lan cest assavoir a la Saint Andrieu dyver et auderrain jour de may, le premier terme et paiement commencant a la dicte feste de Saint Andry 1406 et parmy ce ne sera tenus de demander a mondit seigneur aucuns dons fors pour sembable que contenu est cy dessus et parties precedens", "Lieu": "Paris", "Formes": "Pension de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai)", "Informations": "25 May 1406", "Sources": "ADCO, B 1547, f° 79 v° et 80 r°","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Girart de Bourbon", "Statut": "Ecuyer d écurie du duc", "Nature": "Copie. Jehan duc de Bourgoingne, Conte de Flandres, Dartois et de Bourgoingne palatin, seigneur de Salins et de Malines. A tous ceux qui ces lettres verront salut. Notre ame et feal escuier descuerie Girard de Bourbon nous a fait remonstrer, disont que les gaiges ordinaires quil prent de nous par les escroes de la despense de notre hostel chacun jour quil nous sert oudit office descuier descuerie lui sont de si petite revenue que sans aucune creue ou pension au regard des frais, missions et despens quil lui convient en maintees manieres supporter en notre service il en icellui ne pourroit honnorablement ainsi que a son dit office appartient soustenir son estat. Savoir faisons que nous considerans les bons et aggreables services que ledit Girart de Bourbon nous a fait longuement et loyalment tant oudit office descuier descuerie comme autrement en pluseurs manieres, fait chacun jour, et mesmement afin quil soit plus estraint et obligie et ait mieulx de quoy y continuer, perseverer et soustenir honnoralement sondit estat en notre service dessus dit, et pour certaines autres causes et consideracions qui adce nous meu et meuvent, a icelluy Girart de Bourbon notre escuier descuerie. Avons ordonne et ordonnons par ces presentes quil ait et preigne oultre et par dessus sesdiz gaiges quil prent de nous par les escroes de la despense de notre devant dit hostel de pension chacun an de nous tant quil nous plaira, la somme de huit vins frans dor a deux termes en lan. Cest assavoir a la saint Andry divers et au derrain jour de may, dont le premier terme et paiement voulons escheoir a la saint Andry diver prouchainement venant. Par ainsi toutefuoies que le dessus nomme Girart de Bourbon ne sera tenus de nous demander aucuns dons ou bienffais pour perte de chevaulx ne autrement en quelque maniere que ce soit, fors seulement en augmentacion de mariage et rachatement de prison de lui ou daucun de ses enffans. Lesquelx dons ou bienffais doresenavant par importunite de prieres ou autrement fais lui estoient par les manieres que dit est . Voulons estre de mil effect et valeur, et desmaintement par ces mesmes presentes mandons et expressement emoingnons a notre ame et feal chancellier present et advenir que les lettres diceulx dons ou bienffais casse, chancelle et mettre au neant. Si donnons en mandement a notre ame et feal conseillier, tresorier et gouverneur general de noz finances present et advenir que la devant dite pension de huit vins frans dor paie, baille et doresenavant delivre ou par aucun de noz Recveurs particuliers face paier, bailler et delivre au devant dit Gerart de Bourbon aux termes et en la maniere dessusdiz. Et par rapportant pour la premier fois seulement vidimus de ces presentes fait soubz le scel autentique ou coppie collacionnee par lun de noz secretaires ou en la chambre de noz comptes avec quictance dudit Girard de chacun terme et paiement. Nous voulons tout ce que ainsi paie lui aura este estre alloue es comptes du paiant et rabatu de sa Recepte sens aucun contredit ou difficulte par noz amez et feaulx gens de noz comptes quil appartiendra. Non obstans autres dons ou bienffais par nous a lui autreffois fais non exprimez en ces presentes. Et ordonnances, mandemens ou deffences a ce contraires. En tesmoing de ce nous avons fait mettre notre scel a ces presentes. Donne a Paris le XXVe jour de may lan de grace mil quatre cens et six. Ainsi signe par monseigneur le duc. J. de Saulx. Collacionne estre faite aux lettres originaulx dessus transcript le XIXe jour de may lan mil IIIIc et sept par moy. Bordes.[Dos : Jehan Chousat, conseiller, tresorier et general gouvernement des finances de monseigneur le duc de Bourgoingne, Conte de Flandres, Dartois et de Bourgoingne, Jehan de Pressy, commis a la Recepte generale desdites finances, a complissez de ces presentes par la maniere que mondit seigneur le mande. Escript le XIXe jour de may mil CCCC et six. Chousat]", "Lieu": "Paris", "Formes": "Pension de 160 fr./an, payée en deux termes (Saint-André et le dernier jour de mai). Le premier terme commencera à la Saint-André 1406", "Informations": "25 May 1406", "Sources": "ADCO, B 370, liasse 1, c. 1075","EmployeesCount" : 1 },

{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean Perier", "Statut": "Avocat au Parlement et conseiller du duc audit Parlement", "Nature": "A semble pension de 20 fr. par an tant quil plaira a mondit seigneur et quil sent mettra de ses causes si comme il appert par mandement de mondit seigneur donne a Paris le dit 17e jour de septembre lan 1404 duquel la coppie collacionne a loriginal par lun des secretaires de mondit seigneur est cy rendu audit maistre Jehan pour sa dicte pension du parlement", "Lieu": "Paris", "Formes": "Pension de 20 fr./an", "Informations": "17 September 1404", "Sources": "ADCO, B 1543, f 71 r","EmployeesCount" : 1 },
{ "Category" : "Pension", "Auteur": "Jean sans Peur", "Label" : "Jean Haguenin", "Statut": "Avocat au Parlement et conseiller du duc audit Parlement", "Nature": "A semble pension de 20 fr. par an tant quil plaira a mondit seigneur et quil sent mettra de ses causes si comme il appert par mandement de mondit seigneur donne a Paris le dit 17e jour de septembre lan 1404 duquel la coppie collacionne a loriginal par lun des secretaires de mondit seigneur est cy rendu audit maistre Jehan pour sa dicte pension du parlement", "Lieu": "Paris", "Formes": "Pension de 20 fr./an", "Informations": "17 September 1404", "Sources": "ADCO, B 1543, f 71 r","EmployeesCount" : 1 }

      ]';


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
    $level5->groupMemberPath("Date");
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

    echo $chart->dataSource($Json)->valueMemberPath("DonCount")->size($size)->levels($levelCollection)->innerRadius('0.2')->dataLabelSettings($dataLabel)->tooltip($tooltip)->title($chartTitle)->legend($legend)->zoomSettings($zoom)->render();

    ?>
</div>

 
