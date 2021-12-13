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
            <form method="POST" action='index.php?uc=comptable&action=selectMois'>
            <div class='smenu'>
                <label for="visiteur">Visiteur : </label>
                <select name="visi_liste" id="visi_choisi">
                <option value="choix">- Choisir Visiteur -</option>
                <?php
                        $noms=$pdo->getNomV();
                        foreach($noms as $nom){
                            echo '<option value="'. $nom['id'] . '" style="background-color:green">' . $nom['prenom'] ." ". $nom['nom'] . '</option>';
                        }
                        $noms=$pdo->getNomNV();
                        foreach($noms as $nom){
                            echo '<option value="'. $nom['id'] . '" style="background-color:red">' . $nom['prenom'] ." ". $nom['nom'] . '</option>';
                        }
                ?>
                </select>
                </form><br>
                <button onclick="window.location.href='index.php?uc=comptable&action=selectMois'"  class="styleBouton" style="width: 200px; height: 20px;">Valider
                </button><br>
                <form method="POST" action='index.php?uc=connexion&action=deconnexion'>
                <button onclick="window.location.href='index.php?uc=connexion&action=deconnexion'" class="styleBouton" style="width: 200px; height: 20px;">Déconnexion
                </button>
                    </form>
   </div>
         </ul>
        
    </div>
    