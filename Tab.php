
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Lo1.css">
    <title>Document</title>
</head>
<body>
    <center>
    <fieldset >
  <form action="code.php" method="post">
  <table width="420"  >
  <tr>
        <td width="169"><label >
          <input  name="recherche" type="submit" value="recherche" id="recherche">
        <label for=""></label></td>
         
        <td width="369" > <label>
<input name="recherche" type="text" placeholder="Recherche">
<span class="Style4"> </span></label>
        </td>
  </tr>
  <tr>
      <td>Nom</td>
      <td><label >
      <input name="nom" placeholder="Entreez votre nom" type="text" id="t_nom" />
      </label></td>
  </tr>

  <tr>
      <td>Prénom</td>
      <td><label>
        <input name="prenom" placeholder="Entrez votre Prenom" type="text" id="prenom" />
      </label></td>
    </tr>

    <tr>
      <td>numero matricule</td>
      <td><label>
        <input name="numero" placeholder="Entrez votre numero matricule" type="text" id="tel" />
      </label></td>
    </tr>

    <tr>
      <td>Tel</td>
      <td><label>
       <input name="tel"  placeholder="Entrez votre numero de telephone"type="text" id="tel" />
      </label></td>
    </tr>
    

    <tr>
      <td>Date de Naissance</td>
      <td><label>
       <input name="DateNaissance"  type="date" id="date" />
      </label></td>
    </tr>

    <tr>
      <td>Email</td>
      <td><label>
    <input name="email" placeholder="Entrez votre mail" type="email" name="" id="email"/>
      </label></td>
    </tr>

    <tr>
      <td>Sexe</td>
      <td><label>
        <input  type="radio" value="H" name="sexe" id="sexe"  checked>Homme
         <input type="radio" name="sexe" id="sexe" value="F"/>Femme
      </label></td>
    </tr>

  </table>
<p><label> Serie de BAC</label> 
<select name="serie" id="serie">
    <option value=""></option>
    <option value="A"> A</option>
    <option value="C"> C</option>
    <option value="D"> D</option>
    <option value="E"> E</option>
    <option value="F"> F</option>
</select></p>

  <label >Filieres: </label> <select name="filiere" id="filiere">
    <option></option>
    <option>RIT: Reseaux Informatique et Télécom</option>
    <option>RSI : Reseaux et System D'information</option>
    <option>MGC: Marketing et Gestion Commercial</option>
    <option>FC : Finance  Compta</option>
    </select>
    
    <p>
       <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <option value="france">France</option>
           <option value="espagne">Espagne</option>
           <option value="italie">Italie</option>
           <option value="royaume-uni">Royaume-Uni</option>
           <option value="canada">Canada</option>
           <option value="etats-unis">États-Unis</option>
           <option value="chine">Chine</option>
           <option value="japon">Japon</option>
       </select>
   </p>
   <table>
   <tr> <td colspan="2"><label >
        <input name="nouveau" type="reset" id="nouveau" value="Nouveau" />
        <input name="ajouter" type="submit" id="ajouter" value="Ajouter" />
        <input name="modidier" type="submit" id="modidier" value="Modifier" />
        <input name="afficher" type="submit" id="afficher" value="afficher" />
        </label></td>
    </tr>
   </table>
   <p></p>
  </form>
    
  </fieldset>
  </center>
</body>
</html>
