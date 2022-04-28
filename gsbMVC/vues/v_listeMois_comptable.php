 <div id="contenu">
      <button onclick="window.location.href='index.php?uc=connexion&action=retourC'"  class="styleBouton" style="width: 200px; height: 20px;">Retour</button>
      <h2>Fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form action="index.php?uc=etatFrais_comptable&action=voirFrais" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstMois" accesskey="n">Mois : </label>
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="validation" type="submit" value="Valider" size="20" />
      </p> 
      </div>
        
      </form>