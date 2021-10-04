<?php

 
    $host = 'localhost' ;
    $user = 'root' ;
    $password = '' ;
    $database = 'gestion_annuaire_telephonique' ;

    $link = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno($link)){
    echo " echec de la connexion à MySQL " ;
    }

    $nom = $_POST['nom'] ;
    $prénom = $_POST['prénom'] ;

   // $query = " DELETE FROM annuaire_telephonique WHERE Nom = " .  $_POST['nom'] . " AND   Prenom  = " . $_POST['prénom']  ;
  //  $query = " DELETE FROM annuaire_telephonique WHERE Nom = " .  $nom . " AND   Prenom  = " . $prénom  ;
   // $query = " DELETE FROM annuaire_telephonique WHERE Nom =  $nom  AND   Prenom  = $prénom  "      ;
    $query = " DELETE FROM annuaire_telephonique WHERE Nom = '$nom' AND Prenom = '$prénom'     "  ;
   // échappement de caractère : \<le caractère que l'on veut échapper>
   // $query = " DELETE FROM annuaire_telephonique WHERE Nom = '$_POST['nom']' AND Prenom = '$_POST['prénom']'     "  ;
    $result = mysqli_query($link,$query) ;


     if($result){
      echo " Tout s'est bien passé , le contact ayant pour nom " . $_POST['nom'] . " et pour prénom " . $_POST['prénom'] . " a bien été supprimé de la liste des contacts  " ;
       }
     else {
      echo "Désolé mais il y'a eu une erreur , veuillez réessayer " ;
        }

?>