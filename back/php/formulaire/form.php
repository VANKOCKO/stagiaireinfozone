<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
           

      <div>
               <form action="#" method="post">
                       <p>
                             <label> Votre nom  :</label>
                             <input name="nom" type="text">
                             <?php 
                                    // connaitre la taille du nom 
                                    // strlen() : la taille des caracteres 
                                    // trim() :  enlever les espaces 
                                    $taille_nom = strlen(trim($_POST["nom"]));
                                    if($taille_nom < 2 || $taille_nom > 5 ) {
                                           echo "<b style='color : red'>"."La taille du nom doit etre compris entre 2 et 5 "."</b>"."<br>";
                                    }
                            ?>
                       </p>
                       <p>
                             <label> Votre Prenom :  </label>
                             <input name="prenom" type="text">
                       </p>
                       <p>
                             <label> Votre Email :  </label>
                             <input name="email" type="text">
                             <?php 
                                  if(isset($_POST['email'])){
                                          // rendre le champs email propre avec filter_var 
                                          $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                                          // validation de l'email 
                                          if(filter_var($email,FILTER_VALIDATE_EMAIL) ){
                                          } else {
                                                echo "<b style='color:red;'>"."Veuillez saisir une adresse mail valide"."</b>"."<br>";
                                          }
                                  }
                             ?>
                       </p>
                       <p>
                             <button type="submit">Envoyer</button>
                       </p>
               </form>
         
      </div>
      <div>
      

      </div>
        
        <script src="" async defer></script>
    </body>
</html>


