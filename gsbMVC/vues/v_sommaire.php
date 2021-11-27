    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
      <div class = visiteur>
        <ul id="menuList">
			<h3>
				<?php echo 'Visiteur : '. $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
         </h3>
            </div>
           <div class='smenu'>
            <button onclick="window.location.href='index.php?uc=gererFrais&action=saisirFrais'"  class="boutonchiant" style="width: 200px; height: 20px;">Saisie fiche de frais</button><br>
            <button onclick="window.location.href='index.php?uc=etatFrais&action=selectionnerMois'" class="boutonchiant" style="width: 200px; height: 20px;">Mes fiches de frais</button><br>
            <button onclick="window.location.href='index.php?uc=connexion&action=deconnexion'" class="boutonchiant" style="width: 200px; height: 20px;">Déconnexion</button>
           </div>
         </ul>
        
    </div>
    