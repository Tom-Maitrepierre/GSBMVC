<form method="POST" action="index.php?uc=validerFicheDeFrais&action=afficheVue">
<h2>Valider fiche de frais</h2>
<?php
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
     ?>
<br>
<?php    
	    foreach ($listeFiche as $unelisteFiche ) 
        {
           $idVisiteur = $unelisteFiche['idVisiteur'];
       ?>	
           <th> <?php echo $idVisiteur?></th>
        <?php
        $mois = $unelisteFiche['mois'];
        ?>	
            <th> <?php echo $mois?></th>
        <?php
        $montantValide = $unelisteFiche['montantValide'];
        ?>	
            <th> <?php echo $montantValide?></th>
        <?php
        $dateModif = $unelisteFiche['dateModif'];
        ?>	
            <th> <?php echo $dateModif?></th>
        <?php
        $idEtat = $unelisteFiche['idEtat'];
        ?>	
            <th> <?php echo $idEtat?></th>
        <?php  
       }
	?>
</form>




