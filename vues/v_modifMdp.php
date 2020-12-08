<form method="POST" action="index.php?uc=modifMdp&action=modifierMdp">
<h2>Modification du mot de passe</h2>
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
<label for="ancienMdp">mot de passe actuel :</label>
<input type="password" id="ancienMdp" name="ancienMdp"> 
<br><br>
<label for="nouveauMdp">Nouveau mot de passe :</label>
<input type="password" id="nouveauMdp" name="nouveauMdp"> 
<br><br>
<label for="mdpVerif">Confirmez le mot de passe :</label>
<input type="password" id="mdpVerif" name="mdpVerif"> 
<br><br>
<input type="submit" id="mdpChangement">


</form>