
<!DOCTYPE html>
<html>
    <head>
        <title>Liste du livre</title>
        <style>
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
    <?php
$conn =mysqli_connect('localhost','root','','gestion_biblio');
if (isset($_GET['id']))
  $id=$_GET['id'];
$sql = "SELECT * FROM livres where id_categorie=$id";
$stmt = $conn->query($sql);
$resultat=mysqli_query($conn,$sql);
if(!$resultat) {
  echo 'Erreur lors de l\'excution de la requete'.mysqli_error();
}else{
  
?>
<table align="center" class="tableau">
  <tr>
    <td class="les_tds">ID</td>
    <td class="les_tds">Titre</td>
    <td class="les_tds">quantite</td>
  </tr>
  <?php while($ligne=mysqli_fetch_array($resultat)){ 
    ?>
  <tr>
    <td class="les_tds"><?php echo $ligne['id'] ?></td>
    <td class="les_tds"><?php echo $ligne['titre'] ?></td>
    <td class="les_tds"><?php echo $ligne['quantite'] ?></td>
    <td align="center"> <a href="php/suppression.php?id=<?php echo $ligne['id']; ?>"></a></td>
  </tr>
  <?php } ?>
  
</table>

<?php
}
?>

    </body>
</html>
