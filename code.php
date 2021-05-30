<?php
include('script.php');
$rech=$_POST['recherche'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$tel=$_POST['Tel'];
$num=$_POST['numero'];
$Em=$_POST['email'];
$sex=$_POST['sexe'];
$se=$_POST['serie'];
$filie=$_POST['filiere'];

$select_db=mysqli_select_db($db,'etudiants');

if(isset($_POST['recherche']))
{
    $req="SELECT *FROM etudiants WHERE nom OR num='$rech'";
    $res=mysqli_query($db,$req);
    $enrg=mysqli_stmt_fetch($req);

   if ($enrg) {
       # code...
   }
    if ($enrg[0]==$rech) 
    {
        echo "<form id='form1' action='code.php' method'post' name='form1'>
<table width='420' border='0'>

      <tr>
                <td width='169' bgcolor='#CCFF00'> <label>
                <input name='recherche' type='submit' id='recherche' value='Rechercher'/>
                </label></td>

                <td width='369' bgcolor='#CCFF00'><label>
                    <input name='recherche' type='text' id='recherche' value='$enrg[0]' />
                   </label> Recherche par nom ou le numero <label/><td/>
      </tr>


      <tr>
                <td>Nom: </td>
                <td width='169' bgcolor='#CCFF00'> <label>
                <input name='nom' type='text' id='nom' value='Rechercher'/>
                </label></td>
                

                <td width='369' bgcolor='#CCFF00'><label>
                    <input name='recherche' type='text' id='nom' value='$enrg[1]' />
                   </label><label/><td/>
      </tr>



      <tr>
                   <td>Telephone</td>
                   <td><label>
                    <input name='Tel' type='text' id='tel' value='$enrg[2]' />
                  </label></td>
      </tr>

      <tr>
                  <td>Numero</td>
                 <td><input name='numero' type='text' id='numero' value='$enrg[3]' />
                 </td>
     </tr>


     <tr>
              <td>Email</td>
              <td><label>
              <input name='email' type='email' id='email' value='$enrg[4]' />
            </label></td>
     </tr>


     <tr>
            <td>Sexe</td>
             <td><label>
           <input placeholder='Entrez votre mail' type='radio' value='$enrg[5]' name='sexe' id='sexe'  checked>Homme <input type='radio' name='sexe' id='sexe' value='$enrg[5]'>Femme
             </label></td>
     </tr>


     
     <tr>
     <td colspan='2'><label>
    <input name='nouveau' type='reset' id='nouveau' value='Nouveau' />
    <input name='ajouter' type='submit' id='ajouter' value='Ajouter' />
    <input name='modifier' type='submit' id='modifier' value='Modidier' />
    <input name='afficher' type='submit' id='afficher' value='afficher' />
     </label></td>
   </tr>

</table> 
<p></p>
        </form> ";
    } else {

        echo '<body onLoad="alert("Client introuvable... ")">';
  echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
    }
}
else{
    if (isset($_POST['ajouter'])) {
        if($nom==''){
            echo '<body onLoad="alert("Le nom obligatoire")">';
            echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
        } elseif ($prenom=='')
        {
            echo '<body onLoad="alert("Prénom obligatoire...")">';
                               echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
        }else
        {
            $rqt="insert into etudiant values('$nom','$prenom','$tel','$num','$Em','$se','$sex','$filie')";

                    $rep0=mysqli_query($db,$rqt);
                    echo '<body onLoad="alert("Ajout effectuée... ")">';
          echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
          mysqli_close(exit);
        }

    } if (isset($_POST['modifier']))
    if($nom=='' || $prenom=='' ||$tel==''   )
    {
        echo '<body onLoad="alert("fair une recherch avant la modification ou verifiez les champs  obligatoire...")">';
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }else {
        $rqt="update etudiants set nom='$nom',prenom='$prenom',Tel='$tel',serie='$se', sex='$sex',filiere='$filie',email='$Em'  where nom ='$rech'";
       $rep1=mysqli_query($db,$rqt);
        echo '<body onLoad="alert("Modification effectuée...")">';
          echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
          mysqli_close(exit);
    }elseif (isset($_POST['afficher']))
     {
$rqt="SELECT * from etudiants where nom<>’null’ ;" ;  
$rep2=mysqli_query($db,$rqt);

echo '<body onLoad="alert("affichage en chargement veillez patientez svp")">';
        echo '<meta http-equiv="refresh" content="0;URL=ConnectionBD.php">';
        mysqli_close(exit);
}

}
?>