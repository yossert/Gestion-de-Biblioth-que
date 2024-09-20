
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>acceuil</title>
    <link rel="stylesheet" href="style_test.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .les_tds{
        border: 1px solid;
      }
      .tableau{
        margin-top: 40px;
        text-align: center;
        width: 900px;
        height: 400px;
      }
    </style>

    
  </head>
  <body>
    
<head>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted"> Livres & Decouverte La fonction essentielle d'une bibliothèque est de favoriser la découverte de livres dont le lecteur ne soupçonnait pas l'existence et qui s'avèrent d'une importance...</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white"></h4>
          <ul class="list-unstyled">
            <li><a href="deconnexion.php" class="text-white">Déconnexion</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        
        <strong>Bibliothéque</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</head>

<body>
<?php
$conn =mysqli_connect('localhost','root','','gestion_biblio');
$req="SELECT * FROM categorie ";
$resultat=mysqli_query($conn,$req);
if(!$resultat) {
  echo 'Erreur lors de l\'excution de la requete'.mysqli_error();
}else{
  
?>
<table align="center" class="tableau">
  <tr>
    <td class="les_tds">ID</td>
    <td class="les_tds">Titre</td>
    <td class="les_tds">liste de livre</td>
  </tr >
  <?php while($ligne=mysqli_fetch_array($resultat)){ 
    
  
    echo "<tr> <td  class='les_tds'>" . $ligne['id']. "</td><td  class='les_tds'>". $ligne['titre']."</td><td  class='les_tds'> <a href='listes_livres.php?id=".$ligne['id']."'>liste des livres</a></td></tr>";
    }
  ?>
  
</table>

<?php
}
?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ajoutlivre.php">Ajouter un livre</a>

    </body>
</html>