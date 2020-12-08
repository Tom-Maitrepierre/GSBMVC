<?php
include("vues/v_sommaire.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'afficheVue';
}
$action = $_REQUEST['action'];
switch($action){
	case 'afficheVue':{
		include("vues/v_modifMdp.php");
		break;
	}
	case 'modifierMdp':{
		$mdp = $_REQUEST['ancienMdp'];
		$visiteur = $pdo->getMdpVisiteur($mdp);
		if($visiteur == false){
            ajouterErreur(" n'avez pas renseigné le bon mot de passe","modifierMdp");
            include("vues/v_modifMdp.php");
        }
        elseif($_REQUEST['nouveauMdp'] != $_REQUEST['mdpVerif']){
            ajouterErreur("Les mots de passe ne correspondent pas","mdpVerif");
            include("vues/v_modifMdp.php");
        }
		else{
			/* modif mdp dans BDD*/
			Echo "mot de passe changé avec succès";
		}
		break;
	}
	default :{
		include("vues/v_modifMdp.php");
		break;
	}
}