<?php

//conexion bd
require_once ('../include/dbConfig.php');
require_once ('../include/replace.php');

$pdo = getPDO("PtutS3");

//Déclaration des variables pour requêtes
$idDon  = [];

$idAuteur = [];
$nomAuteur = '';
$fonctionAuteur = '';

$idBeneficiaire = [];
$nomBeneficiaire = '';
$fonctionBeneficiaire = '';

//$idIntermedaire = [];
//$nomIntermedaire = [];
//$fonctionIntermedaire = [];*/

$lieu = [];
$statut = [];
$nature = [];
$categorie = [];
$forme = [];
$prix = [];
$date = []; 
$sources = [];
$typeDon = [];








//requête pour avoir les id des Auteurs
$req = $pdo->query('SELECT idAuteur as idA from don group by idAuteur');
while ($row= $req->fetch())
{
    array_push($idAuteur,$row["idA"]);
}



//Remplir le json


$DonJson_Tous = '
                {
                "name": "Dons", "children": 
                [
            ';
            
for($i = 0 ; $i < count($idAuteur); $i++) //
{

    //requete détails Auteurs
    $req = $pdo->query('SELECT nom as nomA, fonction as fonctionA
    from don inner join personne on don.idAuteur =personne.idPersonne
    where idPersonne ='.$idAuteur[$i].'');
    while ($row= $req->fetch())
    {
        $nomAuteur = $row["nomA"];
        $fonctionAuteur = $row["fonctionA"];
    }

    //Json
    $DonJson_Auteur = '{
                        "name" : " De '. replaceDoubleQuote($nomAuteur).' '. replaceDoubleQuote($fonctionAuteur).'",
                        "children" : [';

        //requete idBeneficiaire
        $req = $pdo->query('SELECT distinct(idBeneficiaire) as idB from don 
                            where idAuteur = '. $idAuteur[$i].'');
        while ($row= $req->fetch())
        {
            array_push($idBeneficiaire,$row["idB"]);
        }

        //bene
        for($j=0;$j < count($idBeneficiaire);$j++)
        {

            //requete détails Beneficiaires
            $req = $pdo->query('SELECT nom as nomB, fonction as fonctionB
            from don inner join personne on don.idBeneficiaire =personne.idPersonne
            where idPersonne ='.$idBeneficiaire[$j].'');
            while ($row= $req->fetch())
            {
                $nomBeneficiaire = $row["nomB"];
                $fonctionBeneficiaire = $row["fonctionB"];
            }

            //json
            $DonJson_Beneficiaire = '{
                "name" : " A l\' intention de '. replaceDoubleQuote($nomBeneficiaire).' '. replaceDoubleQuote($fonctionBeneficiaire).' ",
                "children" : [';

                //requete lieux
                $req = $pdo->query('SELECT distinct(emplacement) as lieu from don 
                where idBeneficiaire = '. $idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                while ($row= $req->fetch())
                {
                    array_push($lieu,$row["lieu"]);
                }

                //lieux
                for ($h=0;$h< count($lieu);$h++)
                {
                    $DonJson_Lieu = '{
                        "name" : " A '.replaceDoubleQuote($lieu[$h]).' ",
                        "children" : [';

                        $lieu_quote = replaceSimpleQuote($lieu[$h]);

                        //requete date
                        $req = $pdo->query('SELECT distinct(dateDon) as dateD from don 
                        where emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                        while ($row= $req->fetch())
                        {
                            array_push($date,$row["dateD"]);
                        }

                        //Date
                        for($k=0;$k<count($date);$k++)
                        {
                            $DonJson_Date = '{
                                "name" : " Le '.replaceDoubleQuote($date[$k]).' ",
                                "children" : [';

                                    //requête prix
                                    $req = $pdo->query('SELECT distinct(prix) as prix from don 
                                    where dateDon =\''.$date[$k].'\' and emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                                    while ($row= $req->fetch())
                                    {
                                        array_push($prix,$row["prix"]);
                                    }

                                    //Prix
                                    for($l=0;$l<count($prix);$l++)
                                    {
                                        $DonJson_Prix = '{
                                            "name" : " Prix : '.replaceDoubleQuote($prix[$l]).' ",
                                            "children" : [';

                                            $prix_quote = replaceSimpleQuote($prix[$l]);

                                            //requete Nature
                                            $req = $pdo->query('SELECT distinct(nature) as nature from don 
                                            where prix = \''.$prix_quote.'\' and dateDon =\''.$date[$k].'\' and emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                                            while ($row= $req->fetch())
                                            {
                                                array_push($nature,$row["nature"]);
                                            }

                                            //Nature
                                            for($m = 0;$m< count($nature); $m++)
                                            {
                                                $DonJson_Nature = '{
                                                    "name" : "Nature : '. replaceDoubleQuote($nature[$m]).' ",
                                                    "children" : [';

                                                $nature_quote =  replaceSimpleQuote($nature[$m]);

                                                    //requete TypeDon
                                                    $req = $pdo->query('SELECT distinct(typeDon) as typeD from don 
                                                    where nature = \''.$nature_quote.'\' and prix = \''.$prix_quote.'\' and dateDon =\''.$date[$k].'\' and emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                                                    while ($row= $req->fetch())
                                                    {
                                                        array_push($typeDon,$row["typeD"]);
                                                    }

                                                    //TypeDon
                                                    for($n = 0;$n< count($typeDon); $n++)
                                                    {
                                                        $DonJson_Type = '{
                                                            "name" : "Type :  '.replaceDoubleQuote($typeDon[$n]).' ",
                                                            "children" : [';

                                                            $typeDon_quote = replaceSimpleQuote($typeDon[$n]);

                                                            //requete Forme
                                                            $req = $pdo->query('SELECT distinct(forme) as forme from don 
                                                            where typeDon = \''.$typeDon_quote.'\' and nature = \''.$nature_quote.'\' and prix = \''.$prix_quote.'\' and dateDon =\''.$date[$k].'\' and emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                                                            while ($row= $req->fetch())
                                                            {
                                                                array_push($forme,$row["forme"]);
                                                            }

                                                            //Forme
                                                            for($o= 0;$o< count($forme); $o++)
                                                            {
                                                                $DonJson_Forme = '{
                                                                    "name" : "'.replaceDoubleQuote($forme[$o]).' ",
                                                                    "children" : [';

                                                                    $forme_quote = replaceSimpleQuote($forme[$o]);

                                                                    //requete Source
                                                                    $req = $pdo->query('SELECT distinct(sourceDon) as sourceD from don 
                                                                    where forme =\''.$forme_quote.'\' and typeDon = \''.$typeDon_quote.'\'and nature = \''.$nature_quote.'\' and prix = \''.$prix_quote.'\' and dateDon =\''.$date[$k].'\' and emplacement = \''. $lieu_quote.'\' and idBeneficiaire = '.$idBeneficiaire[$j].' and idAuteur = '. $idAuteur[$i].'');
                                                                    while ($row= $req->fetch())
                                                                    {
                                                                        array_push($sources,$row["sourceD"]);
                                                                    }

                                                                    //Source
                                                                    for($p= 0;$p< count($sources); $p++)
                                                                    {
                                                                        $DonJson_Sources = '{
                                                                            "name" : "( Sources : '.replaceDoubleQuote($sources[$p]).' )",
                                                                            "size" : 0.2}';

                                                                           // $sources_quote = replaceSimpleQuote($sources[$p]);

                                                                        if($p != count($sources)-1)
                                                                        {
                                                                            $DonJson_Forme.= $DonJson_Sources. ',';
                                                                        }
                                                                        else
                                                                        {
                                                                            $DonJson_Forme.= $DonJson_Sources;
                                                                        }

                                                                    }

                                                                    $sources = [];
                                                
                                                                $DonJson_Forme.= ']}';

                                                                if($o != count($forme)-1)
                                                                {
                                                                    $DonJson_Type.= $DonJson_Forme. ',';
                                                                }
                                                                else
                                                                {
                                                                    $DonJson_Type.= $DonJson_Forme;
                                                                }

                                                            }
                                                            
                                                            $forme = [];
                                                
                                                     $DonJson_Type.= ']}';
                                                            

                                                        if($m != count($nature)-1)
                                                        {
                                                            $DonJson_Nature.= $DonJson_Type. ',';
                                                        }
                                                        else
                                                        {
                                                            $DonJson_Nature.= $DonJson_Type;
                                                        }

                                                    }

                                                    $typeDon = [];
                                                
                                                $DonJson_Nature.= ']}';

                                                if($m != count($nature)-1)
                                                {
                                                    $DonJson_Prix .= $DonJson_Nature. ',';
                                                }
                                                else
                                                {
                                                    $DonJson_Prix .= $DonJson_Nature;
                                                }

                                            }

                                            $nature = [];

                                       $DonJson_Prix.= ']}';


                                        if($l != count($prix)-1)
                                        {
                                            $DonJson_Date .= $DonJson_Prix. ',';
                                        }
                                        else
                                        {
                                            $DonJson_Date .= $DonJson_Prix;
                                        }

                                    }

                                    $prix = [];

                                $DonJson_Date.= ']}';



                            if($k != count($date)-1)
                            {
                                $DonJson_Lieu .= $DonJson_Date. ',';
                            }
                            else
                            {
                                $DonJson_Lieu .= $DonJson_Date;
                            }
                        }
                        $date = [];

                    $DonJson_Lieu .= ']}';

                    if($h != count($lieu)-1)
                    {
                        $DonJson_Beneficiaire .= $DonJson_Lieu . ',';
                    }
                    else
                    {
                        $DonJson_Beneficiaire .= $DonJson_Lieu;
                    }
                }

                $lieu = [];

            $DonJson_Beneficiaire .= ']}';

            if($j != count($idBeneficiaire)-1)
            {
                $DonJson_Auteur .= $DonJson_Beneficiaire . ',';
            }
            else
            {
                $DonJson_Auteur .= $DonJson_Beneficiaire;
            }

    }


    $idBeneficiaire = []; //reset pour le prochain auteur de don

    //Json
    $DonJson_Auteur .= ']}';

    if($i != count($idAuteur)-1)
    {
        $DonJson_Tous .= $DonJson_Auteur . ',';
    }
    else
    {
        $DonJson_Tous .= $DonJson_Auteur;
    }

}


$DonJson_Tous .= ']}';

//echo $DonJson_Tous;

?>