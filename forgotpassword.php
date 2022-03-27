<?php

?>

<!DOCTYPE html>
<html lang="FR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Gestion de bibliotheque en ligne | Recuperation de mot de passe </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <script type="text/javascript">
        // On cree une fonction nommee valid() qui verifie que les deux mots de passe saisis par l'utilisateur sont identiques.
    </script>

</head>

<body>
    <!--On inclue ici le menu de navigation includes/header.php-->
    <?php include('includes/header.php'); ?>

    <!-- On insere le titre de la page (RECUPERATION MOT DE PASSE -->

    <!--On insere le formulaire de recuperation-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 offset-md-1">
                <fieldset class="form-group border p-3">
                    <legend class="header-line">RECUPERATION MOT DE PASSE</legend>
                    <form name="User-Forgot-Password.php" method="post">
                        <div>
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" required />
                        </div>

                        <div>
                            <label>Nouveau mot de passe</label>
                            <input class="form-control" type="password" name="password" id="password" onBlur="checkAvailability(this.value)" autocomplete="off" required />
                            <span id="user-availability-status" style="font-size:12px;"></span>
                        </div>


                        <div>
                            <label>Confirmez le mot de passe :</label>
                            <input class="form-control" type="password" name="confirmpassword" id="check-password" onBlur="return valid()" required />
                        </div>

                        <span id="message"></span>

                        <div>
                            <label>Code de verification :</label>
                            <input type="text" name="vercode" maxlength="5" autocomplete="off" required style="width: 150px; height: 25px;" />&nbsp;<img src="captcha.php">
                        </div>
                        <button type="submit" name="signup" class="btn btn-info" id="submit">Envoyer</button><span> | Login</span>
                    </form>
            </div>
        </div>
    </div>
    <!--L'appel de la fonction valid() se fait dans la balise <form> au moyen de la propri�t� onSubmit="return valid();"-->


    <?php include('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>