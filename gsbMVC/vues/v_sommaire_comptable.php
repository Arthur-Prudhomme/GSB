    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
      <div class = comptable>
        <ul id="menuList">
        <h3>
            <?php echo 'Comptable : '. $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </h3>
            </div>
            <div class='smenu'>
                <label for="visiteur">Visiteur : </label>
                <select name="visi_liste" id="visi_choisi">
                <option value="choix">- Choisir Visiteur -</option>
                <?php
                        $noms=$pdo->getNom();
                        foreach($noms as $nom){
                            echo '<option value="'. $nom['id'] . '">' . $nom['prenom'] ." ". $nom['nom'] . '</option>';
                        }
                ?>
                </select><br>
                <button onclick="window.location.href='index.php?uc=etatFrais&action=selectionnerMois_pourComptable'"  class="boutonchiant" style="width: 200px; height: 20px;">Valider
                </button><br>
                <button onclick="window.location.href='index.php?uc=connexion&action=deconnexion'" class="boutonchiant" style="width: 200px; height: 20px;">Déconnexion
                </button>
   </div>
         </ul>
        
    </div>
    