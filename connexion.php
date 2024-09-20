<?php
$conn =mysqli_connect('localhost','root','','gestion_biblio');
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $requete="SELECT * FROM utilisateur WHERE username='$username' AND password='$password' ";
    $resultat=mysqli_query($conn,$requete);
    if(mysqli_num_rows($resultat)>0){
        session_start();
        $_SESSION['username']=$username;
        header("location:accueil.php");
        exit();
    }else{
        echo "adresse ou mot de passe incorrect";
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <meta charset="UTF-8">
        <head>
        <title>Connection</title>
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
        <h1 align="center">Connection</h1>
        <form method="POST" action="connexion.php" align="center">
            <div>
                <label for="email">Email</label>
                <input type="text" name="username" id="email">  
            </div>
        </br>
            <div>
                <label for="pass">Mot De Passe</label>
                <input type="password" name="password" id="pass"> 
                <p style="display:none" id="error">Adress mail ou mot de passe incorrecte !</p> 
            </div>
        </br>
            <button type="submit" class="btn" name="ok" align="center">M'inscrire</button></br>
            <a href="inscription.php">Créér un compte</a>
        </form>
    </body>
</html>
