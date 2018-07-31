<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>
    <form class="form" action="user.php" method="post">
      <label for="lastName">Votre nom: </label><input type="text" name="lastName" placeholder="nom" /><br><br>
      <label for="firstName">Votre prénom: </label><input type="text" name="firstName" placeholder="nom" /><br><br>
      <select class="choice" name="choice">
        <option value="monsieur">Monsieur</option>
        <option value="madame">Madame</option>
      </select><br><br>
      <input type="submit" name="submit" />
    </form>
  </body>
</html>
