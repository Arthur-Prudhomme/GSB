<?php
$id = $_SESSION['idvisi'];
$visi=$pdo->getNPVisiteur($id);
$action = $_REQUEST['action'];
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
switch($action){
	case 'voirFrais':{
		$leMois = $_REQUEST['lstMois']; 
		$lesMois=$pdo->getLesMoisDisponibles($id);
		$moisASelectionner = $leMois;
		include("vues/v_listeMois_comptable.php");
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($id,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($id,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($id,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		$libEtat = $lesInfosFicheFrais['libEtat'];
		$montantValide = $lesInfosFicheFrais['montantValide'];
		$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
		$dateModif =  $lesInfosFicheFrais['dateModif'];
		$dateModif =  dateAnglaisVersFrancais($dateModif);
		include("vues/v_etatFrais.php");
	}
}
?>