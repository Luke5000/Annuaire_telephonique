<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="some_css_2.css"   type="text/css" /> 
  </head>

  <body>

          <ul>
            <li class="UnElementDuMenu"><a href="Acceuil_gestionnaire_annuaire_telephonique.html"> Acceuil </a></li>
            <li class="UnElementDuMenu"><a href="formulaire_ajout_de_contact.html">Formulaire d'ajout d'un contact </a></li>
            <li class="UnElementDuMenu"><a href="presentation_liste_des_contacts.php"> Présentation des contacts </a> </li>
            <li class="UnElementDuMenu"> <a href="presentation_liste_des_contacts_ordre_alphabetique.php" > Présentation des contacts dans l'ordre alphabétique </a></li>
            <li class="UnElementDuMenu"><a href="formulaire_suppression_d_un_contact.html"> Supprimer un contact  </a></li>
            <li class="UnElementDuMenu"><a href="formulaire_modification_d_un_contact.html"> Modifier les coordoonées d'un contact </a></li>
          </ul>



<?php
     
      $host = "localhost" ;
      $user = "root" ;
      $password = "" ;
      $database = "gestion_annuaire_telephonique" ;
     
    $link = mysqli_connect($host,$user,$password,$database);   // ok
    if(mysqli_connect_errno($link)){                           // ok
      echo "echec de la connexion à MySQL " ;
      }

      $query = "SELECT * FROM annuaire_telephonique" ;  
      $result = mysqli_query($link,$query) ;
      

      echo "<ul>" ;

      while($ligne = mysqli_fetch_array($result)){                       // ok
        echo " <li> " . $ligne['Prenom'] . " " . $ligne['Nom'] . " " . $ligne['Numero_de_telephone'] . " </li> " ;
      }
      
     echo "</ul>" ;





      
?>















    </body>



</html>