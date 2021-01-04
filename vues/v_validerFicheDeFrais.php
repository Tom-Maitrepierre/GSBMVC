<form method="POST" action="index.php?uc=validerFicheDeFrais&action=afficheVue">
    <h2>Valider fiche de frais</h2>
    <?php
    if (isset($_REQUEST['erreurs'])) {
        foreach ($_REQUEST['erreurs'] as $erreur) {
            echo '<h3 class="text-danger">' . $erreur . '</h3>';
        }
    }
    ?>
    <br>
    <table class="table table-bordered">
        <caption>Fiche de Frais </caption>
        <tbody>
            <th>ID Visiteur</th>
            <th>Mois</th>
            <th>Montant Valide</th>
            <th>Date Modif</th>
            <th>ID Etat</th>

            <?php
            foreach ($listeFiche as $unelisteFiche) {
            ?>
                <tr>
                    <?php
                    $idVisiteur = $unelisteFiche['idVisiteur'];
                    ?>
                    <td> <?php echo $idVisiteur ?></td>
                    <?php
                    $mois = $unelisteFiche['mois'];
                    ?>
                    <td> <?php echo $mois ?></td>
                    <?php
                    $montantValide = $unelisteFiche['montantValide'];
                    ?>
                    <td> <?php echo $montantValide ?></td>
                    <?php
                    $dateModif = $unelisteFiche['dateModif'];
                    ?>
                    <td> <?php echo $dateModif ?></td>
                    <?php
                    $idEtat = $unelisteFiche['idEtat'];
                    ?>
                    <td> <?php echo $idEtat ?></td>
                    <td><button type="submit" class="btn btn-primary">Détail</button></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</form>