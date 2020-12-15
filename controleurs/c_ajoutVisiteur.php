<?php

include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'creer';
}
$action = $_REQUEST['action'];
switch($action){
    case 'validerCreer':{
        $id = $_REQUEST['id'];
        $nom = $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $login = $_REQUEST['pseudo'];
        $mdp = $_REQUEST['newmdp'];
        $adresse = $_REQUEST['adresse'];
        $cp = $_REQUEST['cp'];
        $ville = $_REQUEST['ville'];
        $dateEmbauche = $_REQUEST['datemb'];
        $tel = $_REQUEST['tel'];
        $mail = $_REQUEST['mail'];
        $nouveauVisiteur = $pdo->ajoutVisiteur($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche, $tel, $mail);
        include("vues/v_ajoutVisiteur.php");
        break;
    }
    case 'creer':{
        
        include("vues/v_ajoutVisiteur.php");
        break;
    }
    default :{
        include("vues/v_ajoutVisiteur.php");
        break;
    }
}

?>