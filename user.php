<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <p><!--Vérification de l'existence des données remplies dans les champs puis affichage concaténée dans une phrase-->
    <?php
      if(!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['civility'])){
        echo 'Je m\'appelle ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' et je suis ' . $_POST['civility'];
      } else {
        echo 'Certains champs ne sont pas remplis ! Réessayez !';
      }
    ?>
    </p>
  </body>
</html>
