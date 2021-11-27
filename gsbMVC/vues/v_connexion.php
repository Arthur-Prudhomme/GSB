<div id="contenu">
      <h2>Identification utilisateur</h2>


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
         <input type="submit" value="Valider" name="valider" style="width: 120px; height: 40px;">
         <input type="reset" value="Annuler" name="annuler" style="width: 120px; height: 40px;"><br>
      </div>
      <div class='cache'>
         <p onclick="window.location.href='./images/welldone.png'">.</p>
      </div>
      </p>
</form>

</div>