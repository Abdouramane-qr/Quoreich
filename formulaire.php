<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="Design.css">
    
    <title>Formulaire</title>
</head>
<body>
    
    
     
     
    <div class="jumbotron">
<center>        
    <marquee behavior="" direction="right"><h1  class="display-3">INSTITUT SUPERIEUR DE TECHNOLOGIE</h1></marquee>
<p class="lead"><h2><span>Formulaire  d'inscription</span></h2></p>
        
        <hr class="my-2">
        
      <fieldset>  
          <form action="Form.php" method="post">
                        <p>Nom </p>
   <input  name="Nom" placeholder="Entrez votre nom svp" type="text">
    

                         <p>Prenom</p>
  <input name="Prenom" placeholder="Enrez votre prenom svp" type="text">


                        <p>Numero Matricule</p>
    <input name="Numero" type="text" placeholder="Entrez votre numero matricule" name="numero" id="">


                        <p>Date de Naissance</p>
         </label><input  type="date" name="date" id="date">


                  <p> Filières </p>
            <select name="filieres" id="filieres">
     <option value="Listefilieres">
<?php

$menu_items = file("Listefilieres.txt");

foreach ($menu_items as $item)
{
// Explode
$menu_item_exploded = preg_split('/[:;]/', $item);
$option_value = htmlspecialchars(trim($menu_item_exploded[0]));
$option_label = htmlspecialchars(trim($menu_item_exploded[1]));

echo "<option value='$option_value'>$option_label</option>";

}?>

echo "Donnees Bien enregistrees";

        </option>

               </select>
                   

<P><input type="submit" value="Envoyer">   <input type="reset" value="Reinitialiser"></P>
      </form>
      </fieldset>
      </center>
        </p>
    </div>
</body>
<center>
       <p class="text-center">10BP15OUAGA10</p>
      <u> <p> Tel:(+226)50505050</p></u>
      <p> <div>Ouagadougou Burkina Faso</div></p> 
    </center>
<hr class="my-2">

<footer>
    <head>
    
         
<center>

<p>
copyright  &copy; QUOREICHFONDATION 2021
</p>

<p>
    Site designed by Quoreich design
</p>

</center>
<center>
       <p class="text-center">10BP15OUAGA10</p>
      <u> <p> Tel:(+226)50505050</p></u>
      <p> <div>Ouagadougou Burkina Faso</div></p> 
    </center>
    </head>
</footer>
    

</html>