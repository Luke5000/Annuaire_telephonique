<?php

    $host = "localhost";
    $user = "root" ;
    $password = "" ;
    $database = "gestion_annuaire_telephonique" ;

    $link = mysqli_connect($host,$user,$password,$database);
    if(mysqli_connect_errno($link)){
    echo "echec de la connexion à MySQL " ;
    }

    $AncienNom = $_POST['AncienNom'] ;
    $AncienPrénom = $_POST['AncienPrénom'] ;
    $AncienNuméroDeTéléphone = $_POST['AncienNuméroDeTéléphone'] ;

    $NouveauNom = $_POST['NouveauNom'] ;
    $NouveauPrénom = $_POST['NouveauPrénom'] ;
    $NouveauNuméroDeTéléphone = $_POST['NouveauNuméroDeTéléphone'] ;


    $query = " UPDATE annuaire_telephonique SET Nom = '$NouveauNom' , Prenom = '$NouveauPrénom' , Numero_de_telephone = ' $NouveauNuméroDeTéléphone'  WHERE Nom = '$AncienNom'  AND Prenom = '$AncienPrénom' AND Numero_de_telephone = '$AncienNuméroDeTéléphone' " ;
    $result = mysqli_query($link,$query) ;

    if($result){
        echo " Tout s'est bien passé , le contact a bien été modifié comme vous le vouliez " ;
        }
    else {
        echo " Désolé mais il y'a eu une erreur , veuillez réessayer " ;
    }

?>