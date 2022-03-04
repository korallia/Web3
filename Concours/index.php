<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

    require_once("partial/header.php");
?>
    <h1>Gagner une nuitée au château Frontenac</h1>
    <div class="half-width">
        <form action=""  >
    
            <?php
            if($data["Inscrit"]==true){
            ?>
            <div>
                Déja Inscrit!
            </div>
            <?php
            }    
            ?>
            
            <div>
                <input type="text" name="name" placeholder="Nom complet" required>
            </div>
            <div>
                <select name="type" required>
                    <option value="">Type de chambre souhaité</option>
                    <option>Simple</option>
                    <option>Double</option>
                    <option>Suite</option>
                </select>
            </div>
            <div>
                <button>Confirmer l'inscription</button>
            </div>
        </form>
    </div>
<?php
    require_once("partial/footer.php");

    // faire une array(dictionnaire) qui va contenir les informations d'inscription de la session pour ensuite comparer si les informations d'inscritions existes déjà
    //faire une fonction qui va calculer le nombre de types de chambres et le retourner en dictionnaire.
    // imprimer les incriptions dans un fichier texte