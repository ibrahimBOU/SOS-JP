<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="formulaire.Css" />
  <title>Document</title>
</head>

<body>
  <form name="mon-formulaire1" action="formulaire2.php" method="post">
    <div class="c100">
      <input type="radio" name="civi" value="Mme" /> Madame
      <input type="radio" name="civi" value="Mlle" /> Mademoiselle
      <input type="radio" name="civi" value="Mr" /> Monsieur
    </div>
    <div class="c100">
      <label for="prenom">Votre prénom :</label>
      <input type="text" name="prenom" />
    </div>
    <div class="c100">
      Votre nom :<br />
      <input type="text" name="nom" />
    </div>
    <div class="c100">
      E-mail :<br />
      <input type="email" name="mail" />
    </div>
    <div class="c100">
      Numéro de téléphone :<br />
      <input type="int" name="tel" />
    </div>
    <div class="c100">
      <input type="radio" id="service" name="startup" value="service" />
      <label for="femme">Start-up service</label>
      <input type="radio" id="produit" name="startup" value="produit" />
      <label for="homme">Start-up produit</label>
    </div>
    <div class="c100">
      Votre message :<br />
      <textarea name="le_com" rows="6" cols="40"></textarea>
    </div>
    <div class="c100">
      <input type="submit" value="Envoyer" />
      <input type="reset" value="Annuler" />
    </div>
  </form>
  <div>
    <a href="page.php">telecharger</a>
  </div>

</body>

</html>