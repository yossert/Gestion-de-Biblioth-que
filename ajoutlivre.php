<?php 

$conn =mysqli_connect('localhost','root','','gestion_biblio');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $titre=$_POST['titre'];
    $qte=$_POST['qte'];
    $valeur=$_POST['nom'];
    $requete="INSERT INTO livres (titre,quantite) VALUES ('$titre','$qte') where id_categorie='$valeur' ";
    mysqli_query($conn,$requete);
    header("location:accueil.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Ajout livre</title>
    <link rel="stylesheet" href="style_test.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="ajoutlivre">
    <form method="POST" action="ajoutlivre.php" align="center">
            <div>
                <label for="email">Titre Livre</label>
                <input type="text" name="titre" id="email">  
            </div>
        </br>
            <div>
                <label for="pass">Quantite</label>
                <input type="password" name="qte" id="pass"> 
            </div>
        </br>

<select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>--Selection--</option>
  <option value="programmation" nom="2" >Programmation</option>
  <option value="reseaux" nom="1">Réseaux</option>
  <option value="telecom" nom="3">Télécom</option>
</select>
<tr>
                    <td align="right"></td>
                    <td><input classe="btn" type="submit" name="envoyer" value="Ajouter"></td>
                </tr>
              </form>
              
    </body>
</html>