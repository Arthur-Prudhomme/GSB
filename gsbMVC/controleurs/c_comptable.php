<?php
$id = $_POST['visi_liste'];
$visi=$pdo->getNPVisiteur($id);
$_SESSION['idvisi'] = $id;
if($id == "choix"){
    ajouterErreur("Veuillez choisir un utlisateur valide");
            include("vues/v_erreurs.php");
            include("vues/v_sommaire_comptable.php");
}
else{
    $action = $_REQUEST['action'];
    switch($action){
        case 'selectMois':{
            $lesMois=$pdo->getLesMoisDisponibles($id);
            // Afin de sélectionner par défaut le dernier mois dans la zone de liste
            // on demande toutes les clés, et on prend la première,
            // les mois étant triés décroissants
            $lesCles = array_keys( $lesMois );
            if($lesMois != null){
                ?>

    <div class = comptable>
        <h3>
            <?php echo 'Comptable : '. $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </h3>
        <h4>
            <?php echo 'Visiteur Sélectionné : '. $visi[0]['prenom']."  ".$visi[0]['nom']  ?>
        </h4>
    </div>

    <?php
                $moisASelectionner = $lesCles[0];
                include("vues/v_listeMois_comptable.php");
                break;
            }
            else{
                ajouterErreur("Cette utilisateur n'a pas de fiche de frais");
                include("vues/v_erreurs.php");
                include("vues/v_sommaire_comptable.php");

            }
        }
    }
}
?>