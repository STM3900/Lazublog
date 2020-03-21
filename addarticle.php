<?php
include 'connectbdd.php';

$erreurOK = false;

if ($_FILES['photo']['error']) {  
    switch ($_FILES['photo']['error']){  
          case 1: // UPLOAD_ERR_INI_SIZE  
             echo "La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).";
             $erreurOK = true;  
             break;  
          case 2: // UPLOAD_ERR_FORM_SIZE  
             echo "La taille du fichier est plus grande que la limite autorisée par le formulaire (paramètre post_max_size du fichier php.ini)."; 
             $erreurOK = true;
             break;  
          case 3: // UPLOAD_ERR_PARTIAL  
             echo "L'envoi du fichier a été interrompu pendant le transfert."; 
             $erreurOK = true;
     
             break;  
          case 4: // UPLOAD_ERR_NO_FILE  
            echo "La taille du fichier que vous avez envoyé est nulle."; 
            $erreurOK = true;
             break;  
       }  
 }  
 else {  
    //s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] 
    //vaut 0  
       //echo "Aucune erreur dans le transfert du fichier.<br />"; 
       if ((isset($_FILES['photo']['name'])&&($_FILES['photo']['error'] == UPLOAD_ERR_OK))) { 
          $chemin_destination = 'medias/mainimg/'; 
          //déplacement du fichier du répertoire temporaire (stocké 
          //par défaut) dans le répertoire de destination 
          move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination.$_FILES['photo']['name']); 
          //echo "Le fichier ".$_FILES['photo']['name']." a été copié dans le répertoire photos"; 
       } 
       else { 
          //echo "Le fichier n'a pas pu être copié dans le répertoire photos."; 
       } 
    } 

    //BALISE DE PROTECTION

    if ($_FILES['photo2']['error']) {  
      switch ($_FILES['photo2']['error']){  
            case 1: // UPLOAD_ERR_INI_SIZE  
               echo "La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).";
               $erreurOK = true;  
               break;  
            case 2: // UPLOAD_ERR_FORM_SIZE  
               echo "La taille du fichier est plus grande que la limite autorisée par le formulaire (paramètre post_max_size du fichier php.ini)."; 
               $erreurOK = true;
               break;  
            case 3: // UPLOAD_ERR_PARTIAL  
               echo "L'envoi du fichier a été interrompu pendant le transfert."; 
               $erreurOK = true;
       
               break;  
            case 4: // UPLOAD_ERR_NO_FILE  
              echo "La taille du fichier que vous avez envoyé est nulle."; 
              $erreurOK = true;
               break;  
         }  
   }  
   else {  
      //s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] 
      //vaut 0  
         //echo "Aucune erreur dans le transfert du fichier.<br />"; 
         if ((isset($_FILES['photo2']['name'])&&($_FILES['photo2']['error'] == UPLOAD_ERR_OK))) { 
            $chemin_destination = 'medias/articleimg/'; 
            //déplacement du fichier du répertoire temporaire (stocké 
            //par défaut) dans le répertoire de destination 
            move_uploaded_file($_FILES['photo2']['tmp_name'], $chemin_destination.$_FILES['photo2']['name']); 
            //echo "Le fichier ".$_FILES['photo']['name']." a été copié dans le répertoire photos"; 
         } 
         else { 
            //echo "Le fichier n'a pas pu être copié dans le répertoire photos."; 
         } 
      } 

    //BALISE DE PROTECTION
    $titreOK = htmlspecialchars($_POST['titre']);
    $commentaireOK = htmlspecialchars($_POST['commentaire']);
    $photoOK = htmlspecialchars($_FILES['photo']['name']);

    $commentaire2OK = htmlspecialchars($_POST['commentaire2']);
    $photo2OK = htmlspecialchars($_FILES['photo2']['name']);
    $legendeOK = htmlspecialchars($_POST['legende']);

    if(!$erreurOK){
        $req = $bdd->prepare('INSERT INTO `article` (`titre`, `description`, `image`, `description2`, `imagearticle`, `legende`) VALUES (?, ?, ?, ?, ?, ?)');
        $req->execute(array($titreOK, $commentaireOK, $photoOK, $commentaire2OK, $photo2OK, $legendeOK));
        header('Location: admin.php');
    }


    

