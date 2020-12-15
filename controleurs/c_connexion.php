<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$_SESSION['mdp'] = $mdp;
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect","connexion");
			include("vues/v_connexion.php");
		}
		else{
		$vinfo = $pdo->getInfoVaffe($login);
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
			$role = $vinfo['tra_role'];
			$region = $vinfo['reg_nom'];
			$secteur = $vinfo['sec_nom'];
			$codeSecteur = $vinfo['sec_code'];
			$codeRegion = $vinfo['tra_reg'];
			connecter($id,$nom,$prenom, $role, $region, $secteur,$codeSecteur, $codeRegion );
			include("vues/v_sommaire.php");
		}
		break;
	}
	case 'deconnexion':{
        deconnecter();
        
    }
	default :{
		include("vues/v_connexion.php");
		break;
	}
} //commentaire
?>