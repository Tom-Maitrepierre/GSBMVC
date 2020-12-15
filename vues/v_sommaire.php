    <!-- Division pour le sommaire -->
    <div class="row">

        <nav class='col-md-2'>

            <h4>
                <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom']  ?>
            </h4>
            <p>
                 <?php echo 'role : '.$_SESSION['role']?><br>
            
                 <?php echo 'region : '.$_SESSION['region']?><br>
           
                 <?php echo 'secteur : '. $_SESSION['secteur']?><br>
            </p>

            <ul class="list-unstyled">

                <li>
                    <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
                </li>
                <li>
                    <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
                </li>
                <li>
                    <a href="index.php?uc=validerFicheDeFrais&action=afficheVue" title="Valider fiche de frais">Valider fiche de frais</a>
                </li>
                <li>
                    <a href="index.php?uc=modifMdp&action=afficheVue" title="Modifier mon mot de passe">Mon mot de passe</a>
                </li>
                <li>
                    <a href="index.php?uc=modifInfoPerso&action=modif" title="Modifier mes informations">Mes informations</a>
                </li>
                <li>
                    <a href="index.php?uc=ajoutVisiteur&action=creer" title="Creer un nouveau visteur">Nouveau Visiteur</a>
                </li>
                <li>
                    <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
                </li>
            </ul>
            <p class="erreur" style ="color: red !important;">
            <?php if(strlen($_SESSION['mdp'])<8){
				echo 'Il est conseillé que le mot de passe fasse minimum 8 caratères';
			} ?></p>

        </nav>
        <div id="contenu" class="col-md-10">
