<?php session_start();?>
<!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="utf-8">
            <title>Modification de Don</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style/mainStyle.css">
            <script defer src="script/mainScript.js"></script>
        </head>
        <body>
    <?php
        include('include/mainHeader.php'); 
        include('getresult.php');
        require_once('include/dbConfig.php');
        $pdo = getPDO("PtutS3");

        $warningSpan = "";

        //Si le formulaire de cette page a été submit
        if(isset($_POST['Modify']))
        {
            //Récupération des informations au cas ou le changement ne fonctionne pas 
            $_SESSION['nomAuteur'] = $_POST['auteur'];
            $_SESSION['fonctionAuteur'] = $_POST['statutauteur'] ;
            $_SESSION['nomDestinataire'] = $_POST['beneficiaire'];
            $_SESSION['fonctionDestinataire'] = $_POST['statutbeneficiaire'];
            $_SESSION['nomIntermediaire'] = $_POST['intermediaire'];
            $_SESSION['fonctionIntermediaire'] = $_POST['statutintermediaire'];
            $_SESSION['typeDon'] = $_POST['details-typeDon'];
            $_SESSION['formeDon'] = $_POST['details-forme'];
            $_SESSION['poids'] = $_POST['details-poids'];
            $_SESSION['date'] = $_POST['details-date'];
            $_SESSION['lieu'] = $_POST['details-lieu'];
            $_SESSION['nature'] = $_POST['details-nature'];
            $_SESSION['source'] = $_POST['details-source'] ;
            $_SESSION['prix'] = $_POST['details-prix'];

            $Liste_Personne["Donateur"] = array($_SESSION['nomAuteur'],$_SESSION['fonctionAuteur']);
            $Liste_Personne["Bénéficiaire"] = array($_SESSION['nomDestinataire'],$_SESSION['fonctionDestinataire']);
            if($_SESSION['nomIntermediaire'] != "" && $_SESSION['fonctionIntermediaire'] != "")
            { $Liste_Personne["Intermédiaire"] = array($_SESSION['nomIntermediaire'],$_SESSION['fonctionIntermediaire']); }
            $Info_don["A"] = $_SESSION['formeDon'];
            $Info_don["B"] = $_SESSION['nature'];
            $Info_don["C"] = $_SESSION['prix'];
            $Liste_Autres[$_SESSION['typeDon']]=["TypeDon","TypeDon"];
            $Info_don["D"] = $_SESSION['typeDon'];
            $Liste_Autres[$_SESSION['date']]=["Calendrier","DateDon"];
            $Info_don["E"] = $_SESSION['date'];
            $Liste_Autres[$_SESSION['source']]=["sourceDon","recherche"];
            $Info_don["I"] = $_SESSION['source'];
            $Liste_Autres[$_SESSION['poids']]=["Poids","Masse"];
            $Info_don["J"] = $_SESSION['poids'];
            $Liste_Autres[$_SESSION['lieu']]=["Lieu","Emplacement"];
            $Info_don["H"] = $_SESSION['lieu']; 



            //----- Vérification de l'existence ou non des valeurs dans la BDD-----
            try {
                foreach($Liste_Personne as $Niveau => $info)
                {
                    //---Vérification des statuts des personnes---
                    //Création d'un KeyArray composé de 
                    $sql_statuts = [
                        //Un objet Pdo pour executer les requêtes
                        "pdo"=>$pdo,
                        //La requête à préparer
                        "sql" => "SELECT Count(*) as Res from statut WHERE fonction = ?",
                        //L'attribut statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
                        "attributes"=>array($info[1])
                    ];	
                    // Si le statut n'existe pas déjà dans la BDD : la fonction renvoie 0
                    if(get_one_result($sql_statuts) == 0)
                    {
                        //Création du statut dans la BDD
                        $stmt = $pdo->prepare("INSERT INTO Statut VALUES (?)");
                        $stmt->execute($sql_statuts["attributes"]);	
                        $stmt->closeCursor();
                    }
                    
                    //---Vérification des personnes---
                    //Création d'un KeyArray composé de 
                    $sql_personnes = [
                        //Un objet Pdo pour executer les requêtes
                        "pdo"=>$pdo,
                        //La requête à préparer
                        "sql" => "SELECT Count(*) as Res from personne WHERE nom = ? AND fonction = ?",
                        //Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
                        "attributes"=>$info
                    ];
                    
                    //Si la personne n'existe pas dans la BDD : la fonction renvoie 0
                    if(get_one_result($sql_personnes) == 0)
                    {
                        //Création de la personne dans la BDD
                        $stmt = $pdo->prepare("INSERT IGNORE INTO personne(nom,fonction) VALUES (?, ?)");
                        $stmt->execute($sql_personnes["attributes"]);		
                        $stmt->closeCursor();
                    }
                    else
                    {
                        //Modification de la personne dans la BDD
                        $stmt = $pdo->prepare("UPDATE personne set fonction = ? WHERE nom = ?");
                        $stmt->execute(array($info[1],$info[0]));		
                        $stmt->closeCursor();
                    }
                    
                    //Après que la personne soit créer ou non. On récupère alors son ID pour la suite des requêtes.
                    $sql_id_personnes = [
                    "pdo" =>$pdo,
                    "sql"=>"SELECT idPersonne as Res from personne WHERE nom = ? AND fonction = ?",
                    "attributes"=>$info
                    ];
                    //On ajoute l'Id la liste d'information par rapport au don

                    //L'id de l'auteur à l'emplacement F
                    if($Niveau == "Donateur")
                    {
                        $Info_don["F"] = get_one_result($sql_id_personnes);
                        
                    }
                    //L'id du bénéficiaire à l'emplacement G
                    else if ($Niveau == "Bénéficiaire")
                    {
                        $Info_don["G"] = get_one_result($sql_id_personnes);
                    }
                    //L'id de l'intermediaire
                    else if ($Niveau == "Intermédiaire")
                    {
                        $idIntermediaire = get_one_result($sql_id_personnes);
                    }
                }



                //Après l'ajout des deux id Auteur et bénéficiaires dans la liste, il faut la mettre maintenant dans l'ordre des éléments dans la BDD, arrangé en ordre alphabétique pour la clé
                ksort($Info_don);
                //---Vérification des autres données---
                                
                foreach($Liste_Autres as $value => $TableAndColumn)	
                {
                    //Création d'un Array Key composé de 
                    $sql_Autres = [
                        //Un objet Pdo pour executer les requêtes
                        "pdo"=>$pdo,
                        //La requête à préparer
                        "sql" => "SELECT Count(*) as Res from $TableAndColumn[0] WHERE $TableAndColumn[1] = ?",
                        //L'attribut $value changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
                        "attributes"=>array($value)
                    ];
                    //Si l'information n'existe pas dans la BDD : la fonction renvoie 0
                    if(get_one_result($sql_Autres) == 0)
                    {
                        //Ajout de la nouvelle information dans la Table correspondante
                        $stmt = $pdo->prepare("INSERT INTO $TableAndColumn[0]($TableAndColumn[1]) VALUES (?)");
                        $stmt->execute($sql_Autres["attributes"]);
                        $stmt->closeCursor();
                    }
                }
                    
                //Récupération de l'idPoids
                $sql_id_Poids= [
                    "pdo"=>$pdo,
                    "sql"=>"SELECT idPoids AS Res FROM Poids WHERE masse = ?",
                    "attributes"=>array($Info_don['J']),
                ];
                //On change le details_poids en idPoids
                $Info_don['J'] = get_one_result($sql_id_Poids);
                // Ajout du Don dans la base de données:
                $sql = "UPDATE Don set forme = ?, nature = ?, prix = ?, typeDon = ?, dateDon  = ?, idAuteur = ?, idBeneficiaire = ?, emplacement = ?, sourceDon = ?, idPoids = ? WHERE idDon = ".$_SESSION['idDon'];
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array_values($Info_don));
                $stmt->closeCursor();
                
                //S'il existe un intermédiaire pour ce don : 
                if($_SESSION['nomIntermediaire'] != "" && $_SESSION['fonctionIntermediaire'] != "")
                {
                    //On vérifie qu'il n'y ait pas déjà un intermédiaire
                    $sql_inter = [
                        //Un objet Pdo pour executer les requêtes
                        "pdo"=>$pdo,
                        //La requête à préparer
                        "sql" => "SELECT Count(*) as Res from intermediaire WHERE idDon = ?",
                        //L'attribut statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
                        "attributes"=>array($_SESSION['idDon'])
                    ];	
                    // Si le statut n'existe pas déjà dans la BDD : la fonction renvoie 0
                    if(get_one_result($sql_inter) == 0)
                    {
                    //Ajout de l'intermediaire dans la base de données :	
                    $sql = "INSERT INTO intermediaire(idDon,idIntermediaire) VALUES (?,?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(array($_SESSION['idDon'],$idIntermediaire));
                    $stmt->closeCursor();
                    }
                    else
                    {
                        $sql = "UPDATE intermediaire set idIntermediaire = ? WHERE idDon = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(array($idIntermediaire,$_SESSION['idDon']));
                        $stmt->closeCursor();
                    }
                }
                else
                {
                    //si l'on a supprimé un intermédiaire, le supprimé de la bdd aussi
                    $sql_inter = [
                        //Un objet Pdo pour executer les requêtes
                        "pdo"=>$pdo,
                        //La requête à préparer
                        "sql" => "SELECT Count(*) as Res from intermediaire WHERE idDon = ?",
                        //L'attribut statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
                        "attributes"=>array($_SESSION['idDon'])
                    ];	
                    // Si l'on trouve un intermédiaire, il renvoie quelque chose différent de 0
                    if(get_one_result($sql_inter) != 0)
                    {
                        $req = $pdo->prepare('DELETE FROM intermediaire WHERE idDon = :idDon');
                        $req->bindValue("idDon",$_SESSION['idDon'],PDO::PARAM_INT);
                        $req->execute();
                    }

                }
                
            }
            catch(PDOException $e)
            {
                $pdo->rollBack();
                echo $e->getMessage();
                throw $e;
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }	
            $warningSpan = '<span class="warning">Modification effectuée</span>';
        }
        if(isset($_POST['Modifier']) || isset($_POST['Modify']))
        {
                       
                    //Fonction permettant de générer le select avec en préselectionner le type de don précédent du don choisi
                    function generateSelect($name = '', $options = array(), $default = '') {
                        $html = '<select name="'.$name.'">';
                        foreach ($options as $option) {
                            if ($option == $default) {
                                $html .= '<option value="'.$option.'" selected="selected">'.$option.'</option>';
                            } else {
                                $html .= '<option value="'.$option.'">'.$option.'</option>';
                            }
                        }

                        $html .= '</select>';
                        return $html;
                    }

                    //Récupération de tout les types de don
                    $options = array();
                    $req = $pdo->query('SELECT typeDon as typeD FROM typedon ');
                    while ($row= $req->fetch())
                    {
                        array_push($options,$row['typeD']);
                    }   
                ?>
                <main class="container-main">
                <form method="POST" action=<?php echo "FormulaireModification.php"?>>
					<div class="global-form">
						<div class="form-step active-step" id="form-step1">
                            <?php echo $warningSpan ?>
							<label for="auteur"> Auteur :</label>
							<input type="text" name="auteur" value = "<?php echo $_SESSION['nomAuteur'];?>" required>
							<label for="statutauteur"> Statut :</label>
							<input type="text" name="statutauteur" value = "<?php echo $_SESSION['fonctionAuteur'];?>" required>
							</br>
							<label for="beneficiaire"> Bénéficiaire :</label>
							<input type="text" name="beneficiaire" value = "<?php echo $_SESSION['nomDestinataire']; ?>" required>
							<label for="statutbeneficiaire"> Statut :</label>
							<input type="text" name="statutbeneficiaire" value = "<?php echo $_SESSION['fonctionDestinataire'];?>" >
							<br>
							<label for="intermediaire"> Intermédiaire :</label>
							<input type="text" name="intermediaire" value = "<?php echo $_SESSION['nomIntermediaire'];?>">
							<label for="statutintermediaire"> Statut :</label>
							<input type="text" name="statutintermediaire" value = "<?php echo $_SESSION['fonctionIntermediaire'];?>"  >
							<br>
							<label for="details-typeDon">Type de don</label>
							<?php echo generateSelect('details-typeDon',$options,$_SESSION['typeDon'])?>
							<label for="details-date">Date</label>
							<input type="date" name="details-date" value = "<?php echo $_SESSION['date']; ?>" required>
							<br>
							<label for="details-lieu">Lieu</label>
							<input type="text" name="details-lieu" value = "<?php echo $_SESSION['lieu']; ?>" required>
							<label for="details-forme">Formes</label>
							<input type="text" name="details-forme" value = "<?php echo $_SESSION['formeDon'];?>" required>
							<br>
							<label>Poids</label>
							<input type="text" name="details-poids" value = "<?php echo $_SESSION['poids'];?>" required>
							<label>Prix</label>
							<input type="text" name="details-prix" value = "<?php echo $_SESSION['prix'];?>">
							<label>Sources</label>
							<input type="text" name="details-source" value = "<?php echo $_SESSION['source']; ?>" required>
							<br>
							<label>Natures</label>
							<textarea name="details-nature" ><?php echo $_SESSION['nature']; ?></textarea>
							<br>
							<div class="container-btn-form">
								<button type="submit" name="Modify" >Modifier</button>
								<button type="submit" name="Supprimer" >Supprimer</button>
							</div>
						</div>
					</div>
                </form>
                </main>

        <?php
        }

        elseif(isset($_POST['Supprimer']))
        {
            try
            {
                //On supprime la contrainte dans la table intermédiaire
                /*$sql = "DELETE FROM Intermediaire WHERE idDon = :idDon AND idIntermediaire = :idInter";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':idDon',$_SESSION['idDon']);
                $stmt->bindValue('idInter',$_SESSION['idIntermediaire']);
                $stmt->execute();*/
                $req = $pdo->prepare('DELETE FROM intermediaire WHERE idDon = :idDon');
                $req->bindValue("idDon",$_SESSION['idDon'],PDO::PARAM_INT);
                $req->execute();
                //$req = $pdo->query('DELETE FROM intermediaire WHERE idDon = "'.$_SESSION['idDon'].'" AND idIntermediaire = "'.$_SESSION['idIntermediaire'].'"');
                //Puis on supprime le don
                $req = $pdo->prepare('DELETE FROM Don WHERE idDon = :idDon');
                $req->bindValue("idDon",$_SESSION['idDon'],PDO::PARAM_INT);
                $req->execute();
                /*$sql = "DELETE FROM Don WHERE idDon =  :idDon";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':idDon', $_SESSION['idDon'], PDO::PARAM_INT);   
                $stmt->execute();*/
                /*$sql = "DELETE FROM Don where idDon = ?";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(array($_SESSION['idDon']));
                $stmt->closeCursor();*/
            }
            catch(PDOException $e)
            {
                throw $e;
            }
            catch(Exception $e)
            {
                echo $e->getMessage();
            }
            finally
            {
                echo "Suppression terminée !";
            }
        }

    ?>
<?php include('include/mainFooter.php')?>
</body>
</html>
