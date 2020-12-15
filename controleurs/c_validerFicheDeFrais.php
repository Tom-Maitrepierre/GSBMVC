<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
$role = $_SESSION['role'];
$action = $_REQUEST['action'];
switch($action){
     case 'afficheVue':{
        if($role == 'Délégué'){
             $region = $_SESSION['codeReg'];
             $listeFiche = $pdo->getFicheFraisDelegueCL($region);
             if(!is_array( $listeFiche)){
			ajouterErreur("Fiche frais non disponible","");
			include("vues/v_validerFicheDeFrais.php");
		}
            
        }
        else if($role == 'Responsable'){
             $secteur = $_SESSION['codeSec'];
             $listeFiche = $pdo->getFicheFraisResponsableCL($secteur);
             if(!is_array( $listeFiche)){
			ajouterErreur("Fiche frais non disponible","");
			include("vues/v_validerFicheDeFrais.php");
		}          
        }
        	include("vues/v_validerFicheDeFrais.php");
		break;
	}
}
?>