<?php
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break;
	}
	case 'modifInfoPerso' :{
		include("controleurs/c_modifInfoPerso.php");break; 
	}
	case 'ajoutVisiteur' :{
		include("controleurs/c_ajoutVisiteur.php");break; 
	}
	case 'modifMdp' :{
		include("controleurs/c_modifMdp.php");break;
	}
	case 'validerFicheDeFrais' :{
		include("controleurs/c_validerFicheDeFrais.php");break;
	}
}
include("vues/v_pied.php") ;

?>