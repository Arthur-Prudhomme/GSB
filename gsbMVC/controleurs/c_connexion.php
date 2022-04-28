<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'clickInv':{
		include("vues/v_ono.php");
		break;
	}
	case 'deconnexion':{
		require("vues/v_connexion.php");
		break;
	}
	case 'retourC':{
		include("vues/v_sommaire_comptable.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		if(empty($login) || empty($mdp)){
			ajouterErreur("Tout les champs de saisie ne sont pas renseignés");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			if(!is_array($visiteur)){
				ajouterErreur("Login ou mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
			}
			else{
				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				$role = $visiteur['role'];
				connecter($id,$nom,$prenom);
				if($role != 'comptable'){
					include("vues/v_sommaire.php");
				}
				if($role == 'comptable'){
					include("vues/v_sommaire_comptable.php");
				}
			}
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>