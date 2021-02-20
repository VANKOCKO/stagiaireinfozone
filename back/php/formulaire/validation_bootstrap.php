<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Validation email</title>
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
                <h1>Validaton formulaire</h1>
                <form action="recap.php" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer votre  nom">
                    </div>
                    
                    <div class="form-group">
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer votre  prenom">
                    </div>

                    <div class="form-group">
                        <label for="email">Votre adresse  mail </label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre adresse mail">
                    </div>

                    <div class="form-group">
                        <label for="pass">Mot de passe </label>
                        <input type="mdp" name="pass" class="form-control" id="mdp" placeholder="Entrer votre mot de  passe">
                    </div>

                    <div class="form-group">
                        <label for="mdpconfirm">Confirmer votre mot de passe</label>
                        <input type="password" name="pwdconfirm" class="form-control" id="pwdconfirm" placeholder="Verifier votre mot passe">
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="newsletter">
                            Subscribe to our newsletter
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


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