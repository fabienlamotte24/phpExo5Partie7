<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>
    <form action="user.php" method="POST"><!--Création formulaire-->
      <label for="lastName">Votre nom: </label><input type="text" name="lastName" placeholder="nom" /><!--Champs nom de famille-->
      <label for="firstName">Votre prénom: </label><input type="text" name="firstName" placeholder="nom" /><!--Champs prénom-->
      <label for="choice">Votre sexe: </label><!--Champs de sélection du sexe-->
      <select name="choice">
        <option value="un homme">Masculin</option><!--Selection masculin-->
        <option value="une femme">Féminin</option><!--Selection féminin-->
        <option value="non_binaire">Non Binaire</option><!--Selection non-binaire-->
      </select>
      <input type="submit" name="submit" />
    </form>
  </body>
</html>
