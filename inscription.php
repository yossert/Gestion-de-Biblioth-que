<?php

$conn =mysqli_connect('localhost','root','','gestion_biblio');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom=$_POST['nom'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $requete="SELECT * FROM utilisateur WHERE username='$username' ";
    $resultat=mysqli_query($conn,$requete);
    if(mysqli_num_rows($resultat)>0){
        echo "cet email déja utilisé";
        exit();
    }
    $requete="INSERT INTO utilisateur (nom,username,password) VALUES ('$nom','$username','$password')";
    mysqli_query($conn,$requete);
    header("location:connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <head>
        <title>Inscription</title>
        <meta charset="UTF-8">
        <style>
        body{
            box-shadow: 1px 6px 17px grey;
            margin-right: 35%;
            margin-left: 35%;
            margin-top: 10%;
            padding-top: 10%;
            padding-bottom: 10%;
            margin-bottom: 90PX;
        }
        .btn{
            width: 100px;
        }
        </style>
    </head>
    <body>
        <h1 align="center">Inscription</h1>
        <form method="POST" action="" align="center">
            <table align="center">
                <tr>
                    <td align="right">Nom</td>
                    <td><input type="text" name="nom" placeholder="Votre nom est ..."></td>
                </tr>
                <tr>
                    <td align="right">Username</td>
                    <td><input type="email" name="username" placeholder="Votre E-mail est ..."></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><input type="password" name="password" placeholder="Votre Mot De Passe est ..."></td>
                </tr>
                <tr>
                    <td align="right"></td>
                    <td><input classe="btn" type="submit" name="envoyer" value="S'inscrire"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

