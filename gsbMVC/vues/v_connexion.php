<div id="contenu">
      <h2>Identification utilisateur</h2>
      <h4>Les champs possédant * sont obligatoires</h4>


<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
   
    
			<p>
       <label for="nom">Login*</label>
       <input id="login" type="text" name="login"  size="30" maxlength="45">
      </p>
			<p>
				<label for="mdp">Mot de passe*</label>
			  <input id="mdp"  type="password"  name="mdp" size="30" maxlength="45">
      </p>
      <div class='button'>
         <input id="validation" type="submit" value="Valider" name="valider" style="width: 120px; height: 40px;"><br>
      </div>
      <div class='cache'>
         <a href="index.php?uc=connexion&action=clickInv"><img src="./images/carre.png">
      </div>
</form>

</div>