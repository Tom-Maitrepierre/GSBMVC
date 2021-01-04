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
		}
            include("vues/v_validerFicheDeFrais.php");
        }
        else if($role == 'Responsable'){
             $secteur = $_SESSION['codeSec'];
             $listeFiche = $pdo->getFicheFraisResponsableCL($secteur);
             if(!is_array( $listeFiche)){
			ajouterErreur("Fiche frais non disponible","");
          } 
          include("vues/v_validerFicheDeFrais.php");
        } 
        break;
     }
     case 'detailFicheFrais':{
          $idVisiteur = $_REQUEST['idVisiteur'];
          $leMois = $_REQUEST['mois']; 
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
          $lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
          if(!is_array( $lesFraisHorsForfait || $lesFraisForfait)){
			ajouterErreur("Détail Fiche frais non disponible","");	
          }
          else {
          include("vues/v_detailFicheFrais.php");
          }
	}
}
?>