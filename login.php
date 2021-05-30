<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Log.css">
    <title>Login</title>
</head> 
<body>
  <center>
  <form action="ConnectionDB.php" method="post">
       <fieldset class="account-info">
                    <label for="user">
                        Nom d'utilisateur
                        <input type="text" name="Nom" placeholder="Entrez votre nom">
                    </label>
                    <label for="passwd">
                        Mot de Passe
                        <input type="password" name="Mot" id="Mot" placeholder="Entrez votre Mot de passe">
                    </label>
       </fieldset >

       <fieldset class="account-action">
                 <input type="submit" class="tbn" name="Envoyer" value="Login">
                 <label for="">
                     <input type="checkbox" name="remember" id="">
                     Restez connecté
                 </label>
       </fieldset>
   </form>
  </center>
</body>
</html>