<?php 

function supprimer($titre){
    if(require("connexion.php")){
        $req=$access->prepare("DELETE * FROM llivre_ajouter WHERE $titre=?");
        $req->execute(array($titre));
    }
}
?>