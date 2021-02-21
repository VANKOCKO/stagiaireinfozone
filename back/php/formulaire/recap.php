<!doctype html>
<html lang="en">
  <head>
    <title>Formulaire envoyee</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <h1>Vos informations</h1>
                
                <div class="alert alert-info">
                        <?php if(!empty($_POST['nom'])){ ?>
                               <p>nom <strong><?= $_POST['nom'];?></strong></p> 
                        <?php } ?>
                </div>
                <div class="alert alert-info">
                        <?php if(!empty($_POST['prenom'])){ ?>
                               <p>prenom <strong><?= $_POST['prenom'];?></strong></p> 
                        <?php } ?>
                </div>
                <div class="alert alert-info">
                        <?php if(!empty($_POST['email'])){ ?>
                               <p>email <strong><?= $_POST['email'];?></strong></p> 
                        <?php } ?>
                </div>
                <?php echo " mdp : ".$_POST['mdp']."<br>"; ?>
                <?php echo " mdpconfirm : ".$_POST['mdpconfirm']."<br>"; ?>
                <div class="alert alert-info">
                        <?php if(!empty($_POST['mdp'])){ ?>
                                
                                <?php if( $_POST['mdp'] == $_POST['mdpconfirm']) {?>
                                    <? echo "ok" ;?>
                                     <p class="text-success">Le mot de passe est ok !</p>
                                <?php } else { ?>
                                      <p class="text-danger">Mot de passe confirmation incorrect </p>
                                <?php } ?>

                        <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>