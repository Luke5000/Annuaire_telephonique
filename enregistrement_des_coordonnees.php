<?php
        $host = "localhost" ;
        $user = "root" ;
        $password = "" ;
        $database = "gestion_annuaire_telephonique" ;
       
       
       
   
       if( isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["numero_de_telephone"]) ){   
   
               $link = mysqli_connect($host,$user,$password,$database) ;
             
               if(mysqli_connect_errno($link)){
                   echo "echec de la connexion à MySQL " ;
                   }
          
                   $nom  = $_POST["nom"] ;
                   $prenom = $_POST["prenom"] ;
                   $numero_de_telephone = $_POST["numero_de_telephone"] ;  
                   
                   $query = "INSERT INTO annuaire_telephonique VALUES ( '$nom' , '$prenom' , '$numero_de_telephone' ) " ;
                   $result = mysqli_query($link,$query);
   
                   if($result){
                     echo " Tout s'est bien passé " . $prenom . "  a bien été ajouté à la liste des contacts " ;
                       }
                   // else {
                   //   echo "Désolé mais il y'a eu une erreur , veuillez réessayer peut-être " ;
                   //}
   
       }
   
?>

