
<?php 
if (isset($_REQUEST['erreurs'])) 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      <form class="form-vertical" method="post" action="index.php?uc=ajoutVisiteur&action=creer">  
         <fieldset>
             <legend>Veuillez entrer votre nom:</legend>
     <div class="form-group">   
         <div class="row">
         <div class="col-xs-12 col-sm-6 col-md-4">
         <label for="nom">Entrer votre nom: </label>
             <input class="form-control"  id="nom" type="text" name="nom"  size="30" maxlength="45"  required>
            </div>
            </div>
         </div>
         <legend>Veuillez entrer votre prenom:</legend>
         <div class="form-group"> 
           <label for="prenom">Prenom*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="prenom"  type="text"  name="prenom" size="30" maxlength="45"  required>
            </div>
        </div>
        </div>
        <legend>Veuillez entrer votre pseudo:</legend>
         <div class="form-group"> 
           <label for="pseudo">Pseudo*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="pseudo"  type="text"  name="pseudo" size="30" maxlength="45"  required>
            </div>
        </div>
        </div>
         <legend>Veuillez entrer votre mdp:</legend>
         <div class="form-group"> 
           <label for="newmdp">Mot de passe*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="newmdp"  type="password"  name="newmdp" size="30" maxlength="45"  required>
            </div>
        </div>
        </div>
        <div class="form-group"> 
           <label for="newmdp">Confirmer le mot de passe*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="newmdp"  type="password"  name="newmdp" size="30" maxlength="45"  required>
            </div>
        </div>
        </div>
        
        <legend>Veuillez entrer votre adresse:</legend>
         <div class="form-group"> 
           <label for="adresse">Adresse*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="adresse"  type="text"  name="adresse" size="30" maxlength="45" required>
            </div>
        </div>
        </div>
        <legend>Veuillez entrer votre Code Postal:</legend>
         <div class="form-group"> 
           <label for="cp">Code Postal*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="cp"  type="text"  name="cp" size="30" maxlength="45" pattern="[0-9]{6}" required>
            </div>
        </div>
        </div>
        <legend>Veuillez entrer votre ville:</legend>
         <div class="form-group"> 
           <label for="ville">Ville*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="ville"  type="text"  name="ville" size="30" maxlength="45" required>
            </div>
        </div>
        </div>
        <legend>Veuillez entrer votre date d'embauche:</legend>
         <div class="form-group"> 
           <label for="datemb">Date d'embauche*</label>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <input class="form-control" id="datemb"  type="text"  name="datemb" size="30" maxlength="45" required>
            </div>
        </div>
        </div>
            <button type="submit" class="btn btn-primary">Créer</button>
             <button type="reset" class="btn btn-primary">annuler</button>
        </fieldset>
        </form>
      </div>
</div>