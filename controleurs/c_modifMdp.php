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
		elseif(($_REQUEST['nouveauMdp'] == $_REQUEST['mdpVerif'] && $_REQUEST['mdpVerif'] == $_REQUEST['ancienMdp']))
		{
			ajouterErreur("Le mot de passe ne change pas","mdpVerif");
            include("vues/v_modifMdp.php");
		}
		elseif(strlen($_REQUEST['nouveauMdp'])<8)
		{
			ajouterErreur("Le mot de passe doit avoir minimum 8 caractères","nouveauMdp");
            include("vues/v_modifMdp.php");
		}
		/*elseif(preg_match($_REQUEST['nouveauMdp']))
		{
			
		}*/
		else{
			$nvMdp = $_REQUEST['nouveauMdp'];
			$idVisiteur = $_SESSION['idVisiteur'];
			$pdo->majMdp($nvMdp, $idVisiteur);
			Echo "mot de passe changé avec succès";
		}
		break;
	}
	default :{
		include("vues/v_modifMdp.php");
		break;
	}
}